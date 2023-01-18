<?php
//host name,username,password,db name

$localhost = 'localhost';
$username = 'root';
$password = '';
$db = 'Student';
$conection = mysqli_connect($localhost, $username, $password, $db);
if(isset($_POST['submit'])){
    $name = $_POST['text1'];
    $age = $_POST['text2'];
    $course = $_POST['text3'];

    if ($conection) {
        $sql="insert into studentdetails(name,age,course) values('$name','$age','$course')";
        mysqli_query($conection,$sql);
    }
}
?>