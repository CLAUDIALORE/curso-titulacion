<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="servidor.php" method="post">

    <label for="nombre">Nombre</label>
     <input type="text" name="nombre" id="nombre">

     <label for="correo">Correo electronico</label>
     <input type="email" name="correo" id="email">

<input type="submit" value="Enviar">

</form>
<form action="servidor.php" method="get">

<label for="producto">Nombre del producto</label>
<input type="text" name="producto">

<label for="cantidad">Cantidad</label>
<input type="number" name="cantidad">

<input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>