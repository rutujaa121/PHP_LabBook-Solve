<?php
    $style = $_COOKIE['f1'];
    $size = $_COOKIE['f2'];
    $color = $_COOKIE['f3'];
    $bgcolor = $_COOKIE['f4'];
    
    echo "<h1> Styles </h1>";
    echo "<body bgcolor=$bgcolor>";
    echo "<font style = $style> Hello World!";
    echo "<font size=$size> Hello World!";
    echo "<font color=$color> Hello World!";
    echo "</font></body>";

?>