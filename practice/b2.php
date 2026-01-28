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
        $no = $_POST["b"];
        $name = $_POST["m"];
        $num = $_POST["r"];

        $_SESSION["bno"] = $no;
        $_SESSION["bname"] = $name;
        $_SESSION["bnum"] = $num;
    ?>

    <br><br>
    <form action="b3.php" method="POST">
        EMI NO. : <input type="text" name="t4"><br><br>
        EMI AMOUNT : <input type="text" name="t5"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>