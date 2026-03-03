<?php
    session_start();
    $cname = $_SESSION['cname'];
    $caddr = $_SESSION['address'];
    $cmob = $_SESSION['phone'];

    $pname = $_POST['p1'];
    $qty = $_POST['p2'];
    $rate = $_POST['p3'];

    $amt = $qty * $rate;

    $_SESSION['pname'] = $pname;
    $_SESSION['qty'] = $qty;
    $_SESSION['rate'] = $rate;
    $_SESSION['amt'] = $amt;

    echo "<h1> Customer Information </h1>";
    echo "Name : $cname <br>";
    echo "Address : $caddr <br>";
    echo "Mobile : $cmob <br>";
    echo "<h1> Product Information </h1>";
    echo "Product Name : $pname <br>";
    echo "Quantity : $qty <br>";
    echo "Rate : $rate <br>";
    echo "Amount : $amt <br>";
    
?>