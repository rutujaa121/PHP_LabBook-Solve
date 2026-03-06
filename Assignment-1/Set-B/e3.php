<?php
    session_start();
    $eno = $_SESSION['eno'];
    $ename = $_SESSION['ename'];
    $eaddr = $_SESSION['eaddr'];

    $b = $_POST['basic'];
    $d = $_POST['da'];
    $h = $_POST['hra'];

    $total = $b + $d + $h;

    
    echo "Employee Number: " . $eno . "<br>";
    echo "Employee Name: " . $ename . "<br>";
    echo "Employee Address: " . $eaddr . "<br>";
    echo "Basic Salary: " . $b . "<br>";
    echo "DA: " . $d. "<br>";
    echo "HRA: " . $h . "<br>";
?>