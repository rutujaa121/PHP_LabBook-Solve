<?php

    $emino = $_POST['t4'];
    $emiamount = $_POST['t5'];

  $bno = $_SESSION['bno'];
$bname = $_SESSION['bname'];
$bnum = $_SESSION['bnum'];
    
    
    echo "Borrow No: " .$bno;
    echo "Borrow Name: " .$bname;
    echo "Contact Number: " .$bnum;
    echo "EMI NO: " . $emino;
    echo "EMI AMOUNT: " . $emiamount;
    ?>
