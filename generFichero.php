<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Smarty</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">

        <h4>Tipo de conversion</h4>
        <input type="radio" name="convertir" value="convertirAExcel"/>
        <label for="convertirAExcel">Convertir un fichero smarty a formato excel</label>
        
        <input type="radio" name="convertir" value="convertirASmarty"/>
        <label for="convertirASmarty">Convertir un fichero excel a formato smarty</label>
        <br>
        <h4>Seleccione el fichero a convertir</h4>
        <input type="file" name="fichero"/><br>
        <br>
        <input type="submit" value="Convertir"/>
    </form>
</body>
</html>