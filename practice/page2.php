<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        $bno = $_POST['t1'];
        $bname = $_POST['t2'];
        $bnum = $_POST['t3'];

        $_SESSION["bno"] = $bno;
        $_SESSION["bname"] = $bname;
        $_SESSION["bnum"] = $bnum;
    ?>
    <br><br>
    <form action="page3.php" method="POST">
        EMI NO. : <input type="text" name="t4"><br><br>
        EMI AMOUNT : <input type="text" name="t5"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>