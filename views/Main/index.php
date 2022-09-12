<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>

<body>

    <h1>Vista del Main</h1>

    <form action="<?php echo constant('URL'); ?>main/registrar" method="POST">
        <label for="input_pruebas">Formulario de pruebas</label>
        <input type="text" name="input_pruebas" placeholder="Pruebas">
        <button type="submit">Sumbit</button>
    </form>

</body>

</html>