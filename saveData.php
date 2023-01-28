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
$name=$_POST['name'];
$password=$_POST['password'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$sql = "INSERT INTO users(name,password,age,gender,contact,email) VALUES ('$name','$password',$age,'$gender',$contact,'$email')";
        if ($conn->query($sql) === TRUE) {
        echo "Register successfully!";
    } else {
        echo "Error: " . $sql . "
" . $conn->error;
    }
    $conn->close();
?>