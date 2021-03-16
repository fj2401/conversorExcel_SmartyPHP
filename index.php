<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

//comprobamos que existan datos enviados desde el formulario
if($_POST){ 

    //creamos una variable con la informacion del formulario y extraemos su nombre
    $archivo=$_FILES['fichero'];
    $nombre = $archivo['name'];
    $opcion=$_POST['convertir'];
    var_dump($opcion);
    var_dump($nombre);

    $contador=1;

    //este contador sirve para comprobar si existen etiquetas smarty en el fichero subido
    $contadorSmarty=0;

    //creamos una carpeta donde vamos a mover el fichero subido para poder poder cargarlo y leerlo mas adelante
    if(!is_dir('Ficheros')){
        mkdir('Ficheros',0777);
    }

    //validamos que exista un fichero subido y la opcion de conversion seleccionada
    if($nombre != '' && $opcion == "convertirAExcel"){

        //movemos el fichero subido a la carpeta creada anteriormente(Ficheros)
        move_uploaded_file($archivo['tmp_name'], 'Ficheros/'.$nombre);
        
        //abrimos el fichero subido con permisos de lectura
        $fp = fopen('Ficheros/'.$nombre, "r");

        //recorremos el documento mientras tenga contenido
        while (!feof($fp)){
            //guardamos la linea y le quitamos los espacios en blanco que tenga al principio o al final de la linea
            $linea = fgets($fp);
            $lineaSinEspacios=trim($linea);

            //extraemos las etiquetas para comprobar si hay smarty
            $identificador=substr($lineaSinEspacios , 1, 6);

            if($identificador=="smarty"){
                $identificador="smarty";
                
                //contamos si hay etiquetas smarty para hacer la validacion mas adelante
                $contadorSmarty+=1;
            }else{
                //si la etiqueta no es smarty se cogen los dos primeros caracteres para controlar cuales son comentarios y cuales no
                $identificador2=substr($lineaSinEspacios ,0, 2);
            }

            
            $identificador=trim($identificador);
            $identificador2=trim($identificador2);

            //extraemos la clave y el valor
            $indiceprimeroclave=strpos($lineaSinEspacios, "\"");
            $indicesegundoclave=strpos ($lineaSinEspacios, "\",");
            $indiceprimerovalor=strpos($lineaSinEspacios, ",")+1;
            $indiceFinalClave=substr($lineaSinEspacios , $indicesegundoclave);
            $clave=substr($lineaSinEspacios , $indiceprimeroclave);
            $valor=substr($lineaSinEspacios, $indiceprimerovalor);

            //seleccionamos las celdas de las filas del excel donde vamos a escribir
            $letraA="A".$contador;
            $letraB="B".$contador;
            $letraC="C".$contador;


            if(!empty($identificador) && $identificador=="smarty" && !empty($clave) && !empty($valor)){
                //obtenemos los valores de clave-valor de smarty
                $indiceprimeroclave=strpos($lineaSinEspacios, "\"")+1;
                $clave=substr($lineaSinEspacios , $indiceprimeroclave, -(strlen($indiceFinalClave)));

                $indiceprimerovalor=strpos($lineaSinEspacios, ",")+3;
                $valor=substr($lineaSinEspacios, $indiceprimerovalor,-3);

                //escribimos en la hoja excel
                $spreadsheet->getActiveSheet()->setCellValue($letraA, "smarty");
                $spreadsheet->getActiveSheet()->setCellValue($letraB, $clave);
                $spreadsheet->getActiveSheet()->setCellValue($letraC, $valor);
            }elseif($identificador!="smarty" && $identificador2=="//"){
                $spreadsheet->getActiveSheet()->setCellValue($letraA, "comentario");
                $spreadsheet->getActiveSheet()->setCellValue($letraB, $lineaSinEspacios);
            }else{
                if(!empty($lineaSinEspacios) || $identificador2=="/*" || $identificador2=="*" || $identificador2=="*/"){
                    $spreadsheet->getActiveSheet()->setCellValue($letraA, "cabecera");
                    $spreadsheet->getActiveSheet()->setCellValue($letraB, $lineaSinEspacios);
                }
            }
            
            $contador+=1;
            
        }

        //si no detectamos ninguna etiqueta smarty saltara un mensaje informando al cliente y se elimina el fichero subido para que no ocupe espacio
        if($contadorSmarty==0){
            echo "El documento introducido no es un fichero smarty";
            unlink('Ficheros/'.$nombre);
            die();
        }
        
        //creamos una hoja excel donde guardamos la informacion dentro de una carpeta en concreto para facilitar su localizacion
        $writer = new Xlsx($spreadsheet);
        if(!is_dir('FicherosConvertidosExcel')){
            mkdir('FicherosConvertidosExcel',0777);
        }
        $writer->save('FicherosConvertidosExcel/ficheroExcel.XLSX');

        //eliminamos el fichero subido de la carpeta Ficheros para que no ocupe espacio
        unlink('Ficheros/'.$nombre);

    }elseif($nombre != '' && $opcion == "convertirASmarty"){

        //movemos el fichero subido a la carpeta creada anteriormente(Ficheros)
        move_uploaded_file($archivo['tmp_name'], 'Ficheros/'.$nombre);
        
        //creamos la carpeta donde vamos a guardar el fichero convertido
        if(!is_dir('FicherosConvertidosPHP')){
            mkdir('FicherosConvertidosPHP',0777);
        }
        //creamos el fichero PHP donde guardaremos la informacion
        $ficheronuevo = fopen("FicherosConvertidosPHP/ficheroPHP.php", 'w') or die("Se produjo un error al crear el archivo");
        
        //Cargamos el fichero excel subido (gardado anteriormente a la carpeta Ficheros)
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('Ficheros/'.$nombre);

        //abrimos el fichero subido con permisos de lectura
        $fp = fopen('Ficheros/'.$nombre, "r");

        //abrimos el documento y lo recorremos linea a linea
        while (!feof($fp)){
            //cargamos la linea, en este caso controla que el documento sea recorrido desde la primera linea hasta la ultima para evitar insertar filas vacias al final
            $linea = fgets($fp);

            //recorremos cada fila del documento excel extrayendo el valor de cada celda
            $letraA="A".$contador;
            $letraB="B".$contador;
            $letraC="C".$contador;
            $tipoFila = $spreadsheet->getActiveSheet()->getCell($letraA)->getValue();
            $claveFila= $spreadsheet->getActiveSheet()->getCell($letraB)->getValue();
            $valorFila= $spreadsheet->getActiveSheet()->getCell($letraC)->getValue();

            //presentamos la informacion como debe de aparecer y la insertamos en documento php linea a linea
            if($tipoFila=='smarty'){
                $fila= '$smarty->assign("'.$claveFila.'", "'.$valorFila.'");';
                fputs($ficheronuevo, $fila);
                fputs($ficheronuevo, "\n");
                $contadorSmarty+=1;
            }else{
                fputs($ficheronuevo, $claveFila);
                fputs($ficheronuevo, "\n");
            }
            


            $contador+=1;

            

        }

        //controlamos que existan etiquetas smarty para que la conversion sea posible
        if($contadorSmarty==0){
            echo "La conversion no es posible, el documento introducido no es un fichero smarty";
            unlink('FicherosConvertidosPHP/ficheroPHP.php');
            unlink('Ficheros/'.$nombre);
            die();
        }

        //eliminamos el fichero subido de la carpeta Ficheros para que no ocupe espacio
        unlink('Ficheros/'.$nombre);

    }else{
        //en caso de haber algun problema se informa al cliente y se le redirige al formulario
        header("Refresh: 5; URL=generFichero.php");
        echo "suba un fichero con un formato correcto, por favor...</h1>";
    }
}else{
    //en caso de haber algun problema se informa al cliente y se le redirige al formulario
    header("Refresh: 5; URL=generFichero.php");
    echo "Rellene correctamente los campos, por favor...</h1>";
}