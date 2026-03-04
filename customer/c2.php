<?php
    session_start();
    $cname = $_POST['name'];
    $caddr = $_POST['addr'];
    $cmob = $_POST['phone'];

    $_SESSION['name'] = $cname;
    $_SESSION['addr'] = $caddr;
    $_SESSION['phone'] = $cmob;
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
        <input type="text" placeholder="Enter Product Name" name="p1"><br><br>
        <input type="text" placeholder="Enter Quantity" name="p2"><br><br>
        <input type="text" placeholder="Enter Rate" name="p3"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>