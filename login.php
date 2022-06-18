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


//login
    $query = mysqli_query($conn,"SELECT * FROM login WHERE user = '".$username."' AND password = '".$pass."'");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        $sqlinsert= "INSERT INTO userloged(user,password) values ('".$username."','".$pass."')";
        mysqli_query($conn,$sqlinsert);
        echo "<script> alert('Welcome: $username'); window.location='indexloged.php'</script>";

    } else{
        echo "<script> alert('The user or the password is wrong'); window.location='login.html'</script>";
    }

?>