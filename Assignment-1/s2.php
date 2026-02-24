<?php
    $style = $_POST['f1'];
    $size = $_POST['f2'];
    $color = $_POST['f3'];
    $bgcolor = $_POST['f4'];

    echo "<p style='font-family:$style; font-size:$size; color:$color; background-color:$bgcolor;'>This is a sample text with the specified styles.</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="s3.php">Click here to go to the next page</a>
</body>
</html>