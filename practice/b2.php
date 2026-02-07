<?php
session_start();
$bno = $_POST["b1"];
$bname  = $_POST["b2"];
$bnum = $_POST["b3"];
$_SESSION['bno'] = $bno;
$_SESSION['bname'] = $bname;
$_SESSION['bnum'] = $bnum;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="b3.php" method="POST">
        EMI NO. : <input type="text" name="t4"><br><br>
        EMI AMOUNT : <input type="text" name="t5"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>


