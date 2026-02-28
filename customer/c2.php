<?php
    session_start();
    $cname = $_POST['name'];
    $caddr = $_POST['address'];
    $cmob = $_POST['phone'];

    $_SESSION['cname']=$came;
    $_SESSION['address'];
    $_SESSION['phone'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="c3.php" method="POST">
        <input type="text" placeholder="Enter Product Name" name="p1">
        <input type="text" placeholder="Enter Quantity" name="p2">
        <input type="text" placeholder="Enter Rate" name="p3">
        <input type="submit" value="Submit">
    </form>
</body>
</html>