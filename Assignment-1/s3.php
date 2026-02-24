<?php
    $style = $_COOKIE['f1'];
    $size = $_COOKIE['f2'];
    $color = $_COOKIE['f3'];
    $bgcolor = $_COOKIE['f4'];

    echo "<body bgcolor='$bgcolor'>";
    echo "<p style = '$style'>Hello World!</p>";
    echo "<font style='$size'> Hello World!</font><br>";
    echo "color:$color This is a sample text with the specified styles.</font></p>";
?>