<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contactdata`(`firstname`, `lastname`, `email`,`phone`) VALUES ('".$firstname."','".$lastname."','".$email."',".$phone.")";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
header("Location: http://localhost/IT254.Project/");
$mysqli->close();
?>