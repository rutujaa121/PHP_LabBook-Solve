<?php
$a=$_POST["name"];
$b=$_POST["email"];

$con=new mysqli("localhost","root","","vlp_admission_system")or die("not");
// $sql="create table bhavna(name varchar(20) primary key,email varchar(20))";
$sql = "insert into bhavna (name, email)values('$a','$b')";
if($con->query($sql)===TRUE)
    {
        echo "creatd";
    }
    else
        {
            echo "error";
        }
        $con->close();
?>