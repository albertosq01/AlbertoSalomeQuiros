<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cheapfootballshirts";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){

    die("No hay conexion: ".mysqli_connect_error());
}

$sqldelete= "DELETE from userloged";

if (mysqli_query($conn,$sqldelete)){
    echo "<script> alert('You have logged out'); window.location='index.html'</script>";

} else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

?>