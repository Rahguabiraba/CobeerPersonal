<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Body background-->
    <?php include "components/body/component.php" ?>

    <header>
        <?php include "components/header/component.php" ?>
    </header>

    <main>
        <?php include "components/buscador/buscadorComponent.php" ?>
        <?php include "components/articuloResultadBuscado/component.php" ?>
    </main>

    <footer>
        <?php include "components/footer/component.php" ?>
    </footer>
</body>

</html>