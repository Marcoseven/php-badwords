<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis expedita, necessitatibus perferendis excepturi quod culpa veritatis dolor voluptatum enim iure ipsum fugiat doloremque praesentium illo perspiciatis rerum? Ipsum, suscipit cupiditate!";

echo "<pre>";
var_dump($text);
var_dump(strlen($text));
echo "<pre>";

//echo $text;
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
    <h1>Testo: </h1>
    <p> <?= $text ?></p>

    <h2>Lunghezza testo: </h2>
    <p><?= strlen($text) ?></p>
</body>
</html>
