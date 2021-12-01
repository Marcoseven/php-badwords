<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis expedita, necessitatibus perferendis excepturi quod culpa veritatis dolor voluptatum enim iure ipsum fugiat doloremque praesentium illo perspiciatis rerum? Ipsum, suscipit cupiditate!";

// var_dump($text);
// var_dump(strlen($text));

$change = $_GET["ipsum"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- testo senza censura  -->
    <h1>PHP Badwords</h1>
    <h2>Testo: </h2>
    <p> <?= $text ?></p>

    <h2>Lunghezza testo: </h2>
    <p><?= strlen($text) ?></p>
    <!-- /testo senza censura  -->

    <!-- testo con censura  -->
    <h2>Testo censurato: </h2>
    <p>
        <?= str_replace("ipsum", "***", $text) ?>
    </p>

    <h2>Lunghezza testo censurato: </h2>
    <p>
        <?= strlen(str_replace("ipsum", "***", $text)) ?>
    </p>
    <!-- /testo con censura  -->
</body>
</html>
