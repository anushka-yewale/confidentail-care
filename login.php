<?php
$servername="localhost";
$username="root";
$password="";
$database_name="conficare";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    echo 'Connection error: ' . mysqli_connect_error();
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM users where email='$email' and password='$password'" ;
    $result = mysqli_query($conn, $sql);
    $connect = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($connect);
?>