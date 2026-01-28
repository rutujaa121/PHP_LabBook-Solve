<?php
    $eno = $_SESSION['eno'];
    $ename = $_SESSION['ename'];
    $eaddr = $_SESSION['eaddr'];

    $basic = $_POST['basic'];
    $da = $_POST['da'];
    $hra = $_POST['hra'];

    $total = $basic + $da + $hra;

    $_SESSION['basic'] = $basic;
    $_SESSION['da'] = $da;
    $_SESSION['hra'] = $hra;
    $_SESSION['total'] = $total;

    echo "Employee Number: " . $eno . "<br>";
    echo "Employee Name: " . $ename . "<br>";
    echo "Employee Address: " . $eaddr . "<br>";
    echo "Basic Salary: " . $basic . "<br>";
    echo "DA: " . $da . "<br>";
    echo "HRA: " . $hra . "<br>";
?>