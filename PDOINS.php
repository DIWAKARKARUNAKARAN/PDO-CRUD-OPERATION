<?php
session_start();
include('PDODB.php');
 
 if(isset($_POST['submit']))
 {
 $names=$_POST['names'];
 $email=$_POST['email'];
 $contactno=$_POST['contactno'];
 $gender=$_POST['gender'];
 $qualification=$_POST['qualification'];
 $adress=$_POST['adress'];
  $query=" insert into diwa1 (names ,email,contactno,gender,qualification,adress) values (:names ,:email,:contactno,:gender,:qualification,:adress) ";
  $query_run=$con->prepare($query);

  $data=[
    ':names' => $names,
    ':email' => $email,
    ':contactno' => $contactno,
    ':gender' => $gender,
    ':qualification'=>$qualification,
    ':adress'=>$adress
  ];
  $query_execute=$query_run->execute($data);
  if ($query_execute)
  {
    $_SESSION['message']="insert success";
    header('location:PDFET.php');
    exit(0);
  }
  else{
    $_SESSION['message']=" not insert success";
    header('location:PDOREG.php');
    exit(0);
  }
  }
?>