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
        $no = $_SESSION["bno"];
        $name = $_SESSION["bname"];
        $num = $_SESSION["bnum"];
        
        $emino = $_POST["t4"];
        $emiamount = $_POST["t5"];

        $_SESSION["emino"] = $emino;
        $_SESSION["emiamount"] = $emiamount;

        echo "<br><br>";
        echo "<h2>Borrow and EMI Details</h2>";
        echo "<br>Borrow No: ".$no;
        echo "<br>Borrow Name: ".$name;
        echo "<br>Contact Number: ".$num;
        echo "<br>EMI NO.: ".$emino;
        echo "<br>EMI AMOUNT: ".$emiamount;
    ?>
</body>
</html>