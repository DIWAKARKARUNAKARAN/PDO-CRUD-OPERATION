<?php

$servername="localhost";
$username="root";
$pwd="";
$database="diwakar";

try {
    $con=new PDO("mysql:host=$servername;dbname=$database",$username,$pwd);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "connection falied" .$e ->getMessage();
}


?>
