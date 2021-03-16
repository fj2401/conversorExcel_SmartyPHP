<?php
/**
* 1_lang_core
*
* @author
* @copyright
* @license
* @version  2.0.0
* @link      http://www.hermesti.es
*/
$langJs = "1_lang.js";
$smarty->assign("lang_js", "langJ");
//Plantillas HTML

//sheets
$smarty->assign("msg_sheet_001", "Acreedores");
$smarty->assign("msg_sheet_002", "Deudores");
$smarty->assign("msg_sheet_003", "Remesas");
$smarty->assign("msg_sheet_004", "Hist�rico");
$smarty->assign("msg_sheet_005", "Importar remesas");
$smarty->assign("msg_sheet_006", "Ayuda");

//listar_ordenante
$smarty->assign("msg_listar_ordenante_001", "Adeudos a Consumidores(CORE). Datos del acreedor.");
$smarty->assign("msg_listar_ordenante_002", "Nombre");
$smarty->assign("msg_listar_ordenante_003", "Cuenta(IBAN)");
$smarty->assign("msg_listar_ordenante_004", "Residencia Fiscal");
$smarty->assign("msg_listar_ordenante_005", "Nif-Sufijo");
$smarty->assign("msg_listar_ordenante_006", "Domicilio");
$smarty->assign("msg_listar_ordenante_007", "Localidad");
$smarty->assign("msg_listar_ordenante_008", "Provincia");
$smarty->assign("msg_listar_ordenante_009", "Pa�s");
$smarty->assign("msg_listar_ordenante_010", "Imprimir");
$smarty->assign("msg_listar_ordenante_011", "Modificar");
$smarty->assign("msg_listar_ordenante_012", "Cambiar/Modificar Acreedor");

//Restaurar ordenantes
$smarty->assign("msg_restaurar_ordenantes_001", "Acreedores borrados");
$smarty->assign("msg_restaurar_ordenantes_002", "Listado de Acreedores borrados");
$smarty->assign("msg_restaurar_ordenantes_003", "ABANCA");
$smarty->assign("msg_restaurar_ordenantes_004", "Nombre del Acreedor");
$smarty->assign("msg_restaurar_ordenantes_005", "Cuenta");
$smarty->assign("msg_restaurar_ordenantes_006", "Nif-Sufijo");
$smarty->assign("msg_restaurar_ordenantes_007", "Volver");
$smarty->assign("msg_restaurar_ordenantes_008", "Restaurar");
$smarty->assign("msg_restaurar_ordenantes_009", "Imprimir");

//Listar_ordenantes
$smarty->assign("msg_listar_ordenantes_001", "Se ha detectado que uno o m�s acreedores tienen remesas con recibos pendientes de emisi�n.");
$smarty->assign("msg_listar_ordenantes_002", "Si accede con un acreedor que tenga una remesa con recibos pendientes de emisi�n, se pasar� directamente a una ventana que le permitir� emitir esos recibos pendientes o descartarlos para desactivar el aviso sobre el acreedor.");
$smarty->assign("msg_listar_ordenantes_003", "Acreedores");
$smarty->assign("msg_listar_ordenantes_004", "Listado de Acreedores");
$smarty->assign("msg_listar_ordenantes_005", "ABANCA");
$smarty->assign("msg_listar_ordenantes_006", "Nombre del Acreedor");
$smarty->assign("msg_listar_ordenantes_007", "Cuenta");
$smarty->assign("msg_listar_ordenantes_008", "Nif-Sufijo");
$smarty->assign("msg_listar_ordenantes_009", "(�ltimo acceso)");
$smarty->assign("msg_listar_ordenantes_010", "A�adir");
$smarty->assign("msg_listar_ordenantes_011", "Modificar");
$smarty->assign("msg_listar_ordenantes_012", "Borrar");
$smarty->assign("msg_listar_ordenantes_013", "Imprimir");
$smarty->assign("msg_listar_ordenantes_014", "Confeccionar remesa");
$smarty->assign("msg_listar_ordenantes_015", "Importar datos del acreedor");
$smarty->assign("msg_listar_ordenantes_016", "El ordenante tiene remesas pendientes de emisi�n");
$smarty->assign("msg_listar_ordenantes_017", "Actualizar cuentas");
$smarty->assign("msg_listar_ordenantes_018", "Ver acreedores borrados");
$smarty->assign("msg_listar_ordenantes_019", "Mostrar datos del acreedor");

//Anadir_ordenante
$smarty->assign("msg_anadir_ordenante_001", "A�adir un nuevo acreedor");
$smarty->assign("msg_anadir_ordenante_002", "Nombre");
$smarty->assign("msg_anadir_ordenante_003", "Cuenta(IBAN espa�ol)");
$smarty->assign("msg_anadir_ordenante_004", "Nif - Sufijo - Identificador");
$smarty->assign("msg_anadir_ordenante_005", "Residencia");
$smarty->assign("msg_anadir_ordenante_006", "ESPA�A");
$smarty->assign("msg_anadir_ordenante_007", "EXTRANJERO");
$smarty->assign("msg_anadir_ordenante_008", "Direcci�n");
$smarty->assign("msg_anadir_ordenante_009", "Plaza");
$smarty->assign("msg_anadir_ordenante_010", "Provincia");
$smarty->assign("msg_anadir_ordenante_011", "Pa�s");
$smarty->assign("msg_anadir_ordenante_012", "* Campos obligatorios");
$smarty->assign("msg_anadir_ordenante_013", "Descartar");
$smarty->assign("msg_anadir_ordenante_014", "Aceptar");

//emitirCOREDesdeAcreedores
$smarty->assign("msg_emitir_core_desde_acreedores_001", "misi�n de la parte");
$smarty->assign("msg_emitir_core_desde_acreedores_002", "e la remesa");
$smarty->assign("msg_emitir_core_desde_acreedores_003", "el ordenante");
$smarty->assign("msg_emitir_core_desde_acreedores_004", "atos del acreedor emisor");
$smarty->assign("msg_emitir_core_desde_acreedores_005", "ombre:");
$smarty->assign("msg_emitir_core_desde_acreedores_006", "if-Sufijo:");
$smarty->assign("msg_emitir_core_desde_acreedores_007", "ndentificador del acreedor:");
$smarty->assign("msg_emitir_core_desde_acreedores_008", "atos de la remesa a emitir");
$smarty->assign("msg_emitir_core_desde_acreedores_009", "ombre:");
$smarty->assign("msg_emitir_core_desde_acreedores_010", "echa de creaci�n:");
$smarty->assign("msg_emitir_core_desde_acreedores_011", "arte CORE");
$smarty->assign("msg_emitir_core_desde_acreedores_012", "�mero de recibos CORE:");
$smarty->assign("msg_emitir_core_desde_acreedores_013", "mporte de los recibos CORE:");
$smarty->assign("msg_emitir_core_desde_acreedores_014", "uros");
$smarty->assign("msg_emitir_core_desde_acreedores_015", "arte COR1");
$smarty->assign("msg_emitir_core_desde_acreedores_016", "�mero de recibos COR1:");
$smarty->assign("msg_emitir_core_desde_acreedores_017", "mporte de los recibos COR1:");
$smarty->assign("msg_emitir_core_desde_acreedores_018", "uros");
$smarty->assign("msg_emitir_core_desde_acreedores_019", "mitir/Enviar");
$smarty->assign("msg_emitir_core_desde_acreedores_020", "o volver a recordar");
$smarty->assign("msg_emitir_core_desde_acreedores_021", "a pasado m�s de un d�a desde la emisi�n de la primera parte de la remesa y alguna entidad deudora ha cambiado los plazos de presentaci�n admitidos.");
$smarty->assign("msg_emitir_core_desde_acreedores_022", "e requiere una revisi�n de los recibos restantes. Para facilitarle el trabajo, se han excluido de la remesa los recibos ya emitidos.");
$smarty->assign("msg_emitir_core_desde_acreedores_023", "ntre en la aplicaci�n (pulsando [Continuar]) y emita nuevamente la remesa para emitir los restantes recibos.");
$smarty->assign("msg_emitir_core_desde_acreedores_024", "ontinuar");


//modificar_ordenante
$smarty->assign("msg_modificar_ordenante_001", "Adeudos a Consumidores(CORE). Datos del acreedor.");
$smarty->assign("msg_modificar_ordenante_002", "Nombre");
$smarty->assign("msg_modificar_ordenante_003", "Cuenta(IBAN)");
$smarty->assign("msg_modificar_ordenante_004", "Residencia Fiscal)");
$smarty->assign("msg_modificar_ordenante_005", "Nif-Sufijo");
$smarty->assign("msg_modificar_ordenante_006", "Domicilio");
$smarty->assign("msg_modificar_ordenante_007", "Localidad");
$smarty->assign("msg_modificar_ordenante_008", "Provincia");
$smarty->assign("msg_modificar_ordenante_009", "Pa�s");
$smarty->assign("msg_modificar_ordenante_010", "Descartar");
$smarty->assign("msg_modificar_ordenante_011", "Aceptar");
$smarty->assign("msg_modificar_ordenante_012", "�ltima modificaci�n");


//mostrar_ordenante
$smarty->assign("msg_mostrar_ordenante_001", "Adeudos a Consumidores(CORE). Datos del acreedor borrado.");
$smarty->assign("msg_mostrar_ordenante_002", "Nombre");
$smarty->assign("msg_mostrar_ordenante_003", "Cuenta(IBAN)");
$smarty->assign("msg_mostrar_ordenante_004", "Residencia Fiscal");
$smarty->assign("msg_mostrar_ordenante_005", "Nif-Sufijo");
$smarty->assign("msg_mostrar_ordenante_006", "Domicilio");
$smarty->assign("msg_mostrar_ordenante_007", "Localidad");
$smarty->assign("msg_mostrar_ordenante_008", "Provincia");
$smarty->assign("msg_mostrar_ordenante_009", "Pa�s");
$smarty->assign("msg_mostrar_ordenante_010", "Volver");
$smarty->assign("msg_mostrar_ordenante_011", "Identificador del acreedor");

//listar_librados
$smarty->assign("msg_listar_librados_001", "Deudores");
$smarty->assign("msg_listar_librados_002", "Adeudos a Consumidores(CORE). Lista de deudores del acreedor");
$smarty->assign("msg_listar_librados_003", "Referencia del Mandato");
$smarty->assign("msg_listar_librados_004", "Ordena por referencia ascendentemente");
$smarty->assign("msg_listar_librados_005", "Ordena por referencia descendentemente");
$smarty->assign("msg_listar_librados_006", "Nombre del titular");
$smarty->assign("msg_listar_librados_007", "Ordena por titular ascendentemente");
$smarty->assign("msg_listar_librados_008", "Ordena por titular descendentemente");
$smarty->assign("msg_listar_librados_009", "IBAN");
$smarty->assign("msg_listar_librados_011", "Modificar");
$smarty->assign("msg_listar_librados_012", "A�adir");
$smarty->assign("msg_listar_librados_013", "Borrar");
$smarty->assign("msg_listar_librados_014", "Imprimir");
$smarty->assign("msg_listar_librados_015", "Imprimir Mandatos");
$smarty->assign("msg_listar_librados_016", "Ordena por fecha de creaci�n ascendentemente");
$smarty->assign("msg_listar_librados_017", "Ordena por fecha de creaci�n descendentemente");

//anadir_librado
$smarty->assign("msg_anadir_librado_001", "Adeudos a Consumidores(CORE). A�adir un deudor");
$smarty->assign("msg_anadir_librado_002", "Nombre (Titular de la cuenta)");
$smarty->assign("msg_anadir_librado_003", "Cuenta (IBAN - CCC)");
$smarty->assign("msg_anadir_librado_004", "Residencia Fiscal");
$smarty->assign("msg_anadir_librado_005", "Tipo de Pago");
$smarty->assign("msg_anadir_librado_006", "Referencia del Mandato ");
$smarty->assign("msg_anadir_librado_008", "Domicilio (Tipo y nombre de v�a, n�mero y piso)");
$smarty->assign("msg_anadir_librado_009", "Localidad (C.P. y localidad)");
$smarty->assign("msg_anadir_librado_010", "Provincia");
$smarty->assign("msg_anadir_librado_011", "Pa�s");
$smarty->assign("msg_anadir_librado_012", "Pa�ses");
$smarty->assign("msg_anadir_librado_013", "Tel�fono (Ej: +34-912345678)");
$smarty->assign("msg_anadir_librado_014", "E-mail");
$smarty->assign("msg_anadir_librado_015", "* Campos obligatorios");
$smarty->assign("msg_anadir_librado_016", "Inf.Adicional");
$smarty->assign("msg_anadir_librado_017", "Descartar");
$smarty->assign("msg_anadir_librado_018", "Aceptar y salir");
$smarty->assign("msg_anadir_librado_019", "Aceptar y a�adir otro");
$smarty->assign("msg_anadir_librado_020", " del acreedor ");
$smarty->assign("msg_anadir_librado_021", " - BIC(SWIFT)");
$smarty->assign("msg_anadir_librado_022", " - Fecha Firma (dd/mm/aaaa)");
$smarty->assign("msg_anadir_librado_023", "** S�lo para cuentas en el extranjero");
$smarty->assign("msg_anadir_librado_024", "Titular de la domiciliaci�n");
//modificar_librado
$smarty->assign("msg_modificar_librado_001", "Adeudos a Consumidores(CORE). Modificar un deudor");
$smarty->assign("msg_modificar_librado_002", "Nombre (Titular de la cuenta)");
$smarty->assign("msg_modificar_librado_003", "Cuenta (IBAN - CCC)");
$smarty->assign("msg_modificar_librado_004", "Residencia Fiscal");
$smarty->assign("msg_modificar_librado_005", "Tipo de Pago");
$smarty->assign("msg_modificar_librado_006", "Referencia del Mandato");
$smarty->assign("msg_modificar_librado_008", "Domicilio (Tipo y nombre de v�a, n�mero y piso)");
$smarty->assign("msg_modificar_librado_009", "Localidad (C.P. y localidad)");
$smarty->assign("msg_modificar_librado_010", "Provincia");
