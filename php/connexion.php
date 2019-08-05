<?php 
$servername='localhost';
$username='root';
$password = 'semut405';
$dbname = 'CCSecurity';


//create database
$bdd = new mysqli($servername, $username, $password);
$sql = 'create database if not exists '.$dbname;

if($bdd ->query($sql) === true){
	echo "";
}else{
	echo "<p class='error'>Error creating database :".$conn->error."</p>";
}

 ?>