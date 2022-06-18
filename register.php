<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cheapfootballshirts";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){

    die("No hay conexion: ".mysqli_connect_error());
}

$username = $_POST["user"];
$pass = $_POST["password"];

$sqlinsert= "INSERT INTO login(user,password) values ('".$username."','".$pass."')";

if (mysqli_query($conn,$sqlinsert)){
    echo "<script> alert('User registered: $username'); window.location='login.html'</script>";

} else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}
?>