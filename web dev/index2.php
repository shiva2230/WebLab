<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$db = 'Student';

$conection = mysqli_connect($localhost, $username, $password, $db);

if (isset($_POST['sub'])) {
    if($conection){
        $sql = "select * from studentDetails";
        $data = mysqli_query($conection, $sql);
        if(mysqli_num_rows($data)>0){

            while ($row = mysqli_fetch_assoc($data)) {
                echo "name : " . $row['name'] . " age : " . $row['age'] . " course :" . $row['course'] . "<br>";
            }

        }
    }
}
?>