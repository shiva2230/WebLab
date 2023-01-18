<?php
   $localhost='localhost' ;
   $user='root';
   $pass='';
   $db='age';

   $conn=mysqli_connect($localhost,$user,$pass,$db);
   if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $age = $_POST["age"];
   }
    if(conn){
    $query = "INSERT INTO `agelist`(`sl  no`, `name`, `age`) VALUES ('','$name','$age')";
        mysqli_query($conn,$query);
    }
    else{
    print("Connection failed!");
    }


?>