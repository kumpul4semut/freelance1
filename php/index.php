<!DOCTYPE html>
<html>
<head>
	<title>Set Up</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
<?php

	$servername='localhost';
	$username='root';
	$password = 'semut405';
	$dbname = 'CCSecurity';


	//create database
	$conn = new mysqli($servername, $username, $password);
	$sql = 'create database if not exists '.$dbname;

	if($conn ->query($sql) === true){
		echo "<p class='success'>Database created</p>";
	}else{
		echo "<p class='error'>Error creating database :".$conn->error."</p>";
	}

	//Create areaOfCsecurity table
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = 'create table if not exists areaOfCsecurity(
		aoc_id int(6) primary key not null auto_increment,
		aoc_name varchar(20) not null,
		aoc_description text,
		picture varchar (255),
		video varchar(50),
		audio varchar (50)
	)';
	if($conn->query($sql) === true){
		echo "<p class='success'>Table user areaOfCsecurity</p>";
	}else{
		echo '<p class="error">Error creating table areaOfCsecurity: '.$conn->error.'</p>';
	}


	//Create courses table
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = 'create table if not exists courses(
		name varchar (255),
		description text,
		details varchar (255),
		picture varchar (255),
		aoFCybersecurity varchar (50),
		price varchar(40),
		primary key(name)
	)';
	if($conn->query($sql) === true){
		echo "<p class='success'>Table courses created</p>";
	}else{
		echo '<p class="error">Error creating table courses: '.$conn->error.'</p>';
	}

	

	//Create customer table
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = 'create table if not exists customer(
		cu_id int(6)  primary key not null auto_increment,
		cu_firstName varchar(40) not null,
		cu_surname varchar(40) not null,
		cu_businessName varchar(50) ,
		cu_jobTitle varchar(40) not null,
		cu_areaOfCsecurity int(2) not null,
		cu_email varchar(40) not null,
		cu_registrationNumber varchar(10) not null,
		cu_username varchar(40) not null,
		cu_password varchar(50) not null,
		dateOfRegistration date not null,
		foreign key(cu_areaOfCsecurity) references areaOfCsecurity(aoc_id)
	)';

	if($conn->query($sql) === true){
		echo "<p class='success'>Table customer created</p>";
	}else{
		echo '<p class="error">Error creating table customer: '.$conn->error.'</p>';
	}

	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql =	"create table if not exists contact (
	 `cont_id` int(11) not null auto_increment ,
	  `cont_firstname` varchar(100) not null ,
	   `cont_surname` varchar(100) not null ,
	    `cont_email` varchar(100) not null ,
	     `cont_message` text not null ,
	      primary key (`cont_id`))";
	
	if($conn->query($sql) === true){
		echo "<p class='success'>Table contact created</p>";
	}else{
		echo '<p class="error">Error creating table contact: '.$conn->error.'</p>';
	}

	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql =	"create table if not exists booking ( `bo_id` int(11) not null auto_increment ,
	 `bo_name` varchar(100) not null ,
	  `bo_jobtitle` varchar(50) not null ,
	   `bo_areaofcsecurity` varchar(20) not null ,
	    `bo_email` varchar(50) not null ,
	     primary key (`bo_id`))";
	
	if($conn->query($sql) === true){
		echo "<p class='success'>Table booking created</p>";
	}else{
		echo '<p class="error">Error creating table booking: '.$conn->error.'</p>';
	}

	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql =	"create table if not exists trainingType (
		name varchar (50),
		description text,
		hourly varchar (50),
		Number_of_courses int (11),
		price varchar (50),
		numberOfStudentRegistered int(11),
	    primary key (name))";
	
	if($conn->query($sql) === true){
		echo "<p class='success'>Table trainingtype created</p>";
	}else{
		echo '<p class="error">Error creating table trainingtype: '.$conn->error.'</p>';
	}

	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql =	"create table if not exists paper (
		name varchar(50),
		paper varchar(50),
	    primary key (name))";
	
	if($conn->query($sql) === true){
		echo "<p class='success'>Table paper created</p>";
	}else{
		echo '<p class="error">Error creating table paper: '.$conn->error.'</p>';
	}

	$sql =	"INSERT INTO `paper`(`name`, `paper`) 
	VALUES('Security fundamentals','research_paper.jpeg'),
	('Cryptography tutorials','research_paper.jpeg'),
	('Hacking tutorials','research_paper.jpeg'),
	('Phishing tutorials','research_paper.jpeg'),
	('Spoofing tutorials','research_paper.jpeg')";
	if($conn->query($sql)=== TRUE){
		echo'<p>paper table inserted successfully</p>';
	}
	else{
		echo'<p>error inserting paper table:'
		.$conn->error .'</p>';
	}

	
	$sql =	"INSERT INTO `areaOfCsecurity` (`aoc_name`, `aoc_description`,`picture`,`video`,`audio`) 
	VALUES('Cryptography','This area concerns all about cryptography','cybersecurity-assessments-for-deltav-systems.jpg','',''),
	('Hacking', 'This area is all about hacking. It teaches how to defend yourself again hacking','','videoplayback.mp4',''),
	('Pishing','This area is all about pishing. It teaches how to defend yourself again pishing','','','000.mp3')";
	if($conn->query($sql)=== TRUE){
		echo'<p>areaOfCsecurity table inserted successfully</p>';
	}
	else{
		echo'<p>error inserting areaOfCsecurity table:'
		.$conn->error .'</P>';
	}

	$sql =	"INSERT INTO `trainingType`(`name`, `description`, `hourly`,`Number_of_courses`, `price`, `numberOfStudentRegistered` ) VALUES('Online training','The online training is tailored according to your time and it helps to do additional research to enhance to lectures.','24h / 7d',305,'depends on the course',3054),('On-site training','The on-site training is tailored according to your time and it helps to do additional research to enhance to lectures','10 am to 5pm',4500,'form $100 to $1200',10000),('Pdfs and Ebooks training','The pdf and ebook training is tailored according to your time and it helps to do additional research to enhance to lectures.', 'No time',100500,'depends on the book',4005678)";
	if($conn->query($sql)=== TRUE){
		echo'<p>trainig table inserted successfully</p>';
	}
	else{
		echo'<p>error inserting training table:'
		.$conn->error .'</P>';
	}


	$sql =	"INSERT INTO `courses`(`name`, `description`, `details`,`picture`, `aoFCybersecurity`, `price` ) VALUES('Learn cryptography online from a to z','Cyber Security fondamentals about cryptography form a to z with two teachers | David Green and Alice Dean','12 lectures ● 38 hours ● All levels','cybersecurity-lock.jpeg','Online training','$ 450'),('Learn basic security trics','nwdfguvchdnsajsdsagrdsa','20 lessons ● 8 sessions / 2 hours ● Experts','cybersecurityyy.jpg','On-site training','$ 800'),('Learn basic security tricss','nwdfguvchdnsajsdsagrdsa','20 lessons ● 8 sessions / 2 hours ● Experts','Cryptography-512.png','Pdfs and Ebooks training','$ 1050')";
	if($conn->query($sql)=== TRUE){
		echo'<p>courses table inserted successfully</p>';
	}
	else{
		echo'<p>error inserting courses table:'
		.$conn->error .'</P>';
	}
	

	$conn->close();
?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>