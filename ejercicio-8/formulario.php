<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total</title>
</head>
<body>
    <form action="datos.php" method="post">
        <label for="">Sexo</label><select name="sexo" id=""><option value="F">Femenino</option>
        <option value="M">Masculino</option></select>
        <label for="">Edad</label><input type="text" name="edad">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>