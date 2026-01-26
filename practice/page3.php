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
        $bno = $_SESSION["bno"];
        $bname = $_SESSION["bname"];
        $bnum = $_SESSION["bnum"];
        $emino = $_POST["t4"];
        $emiamount = $_POST["t5"];

        echo "<br><br>";
        echo "<h2>Borrow and EMI Details</h2>";
        echo "Borrow No.: " . $bno . "<br><br>";
        echo "Borrow Name: " . $bname . "<br><br>";
        echo "Borrow Number: " . $bnum . "<br><br>";
        echo "EMI NO.: " . $emino . "<br><br>";
        echo "EMI AMOUNT: " . $emiamount . "<br><br>";
    ?>
</body>
</html>