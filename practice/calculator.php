<?php
    session_start();
    $_SESSION['n1'] = $_POST['n1'];
    $_SESSION['n2'] = $_POST['n2'];
    $_SESSION['opr'] = $_POST['opr'];

    $n1 = $_SESSION['n1'];
    $n2 = $_SESSION['n2'];
    $opr = $_SESSION['opr'];

    switch($opr)
    {
        
    }
?>