<?php
$localhost = 'localhost';
$user = 'root';
$pass = '';
$db = 'age';

$conn = mysqli_connect($localhost, $user, $pass, $db);

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    
    if ($conn) {
        $query = "INSERT INTO `agelist`(`slno`, `name`, `age`) VALUES (' ','$name','$age')";
        $result=mysqli_query($conn, $query);
    } else {
        print("Connection failed!");
    }}
if(isset($_POST["delete"])){
    $sql="DELETE FROM `agelist` WHERE slno=1";
    $result = mysqli_query($conn, $sql);

}
$sql = "select * from agelist";
$result = mysqli_query($conn, $sql);
echo "<table>";
echo "<tr><th>Name</th><th>Age</th></tr>";
foreach ($result as $row) {
    echo "<tr><td>" . $row['name']."</td><td>".$row['age']."</td></tr>";
}
echo "</table>"



?>