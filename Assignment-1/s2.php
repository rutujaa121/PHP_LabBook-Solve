<?php
    $style = $_POST['f1'];
    $size = $_POST['f2'];
    $color = $_POST['f3'];
    $bgcolor = $_POST['f4'];

    echo "<p style='font-family:$style; font-size:$size; color:$color; background-color:$bgcolor;'>This is a sample text with the specified styles.</p>";
?>