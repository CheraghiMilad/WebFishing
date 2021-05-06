<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="db_human";
$conn=new mysqli($hostname, $username, $password,$db_name);
$User = $_GET['user'];
$User1= json_encode($User);
$Pass = $_GET['pass'];
$Pass1= json_encode($Pass);
$sql = "INSERT INTO tbl_user(username,password) VALUES ($User1,$Pass1)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully :)";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


