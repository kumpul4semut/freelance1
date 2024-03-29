<?php
	ini_set('display_errors', 1);
	include('connexion.php');
	$login = @$_POST['login'];

	if (isset($login)) {
		# code...
		$email = "";
		if(isset($_POST['email'])) $email = $_POST['email'];
	    else  $email = $_POST['username'];
	    $password = $_POST['password'];

		$req = $bdd->prepare("SELECT cu_email, cu_password FROM customer WHERE (cu_email = $email OR cu_username = $email) AND cu_password = $password");
		$req->execute(array(htmlspecialchars($email), htmlspecialchars($email), md5($_POST['password'])));
		$reqResult = $req->fetch();
		if($req->rowCount() == 0){
			if(((int)$_COOKIE['error'] +1) < 3){
				setcookie('error', (int)$_COOKIE['error'] +1, time() + 3*60,'/');
				header('location:../login.php?error=Wrong credentials');
				exit;
			}else{
				setcookie('error', (int)$_COOKIE['error'] +1, time() -1,'/');
				setcookie('lock', time()+3*60, time() + 3*60,'/');
				header('location:../login.php?error=Wrong credentials');
				exit;
			}
		}else{
			session_start();
			setcookie('error', (int)$_COOKIE['error'] +1, time() -1,'/');

			$_SESSION['email'] = $reqResult['cu_email'];
			$_SESSION['password'] = $reqResult['cu_password'];
			header('location:../dashboard.php');
			exit;
		}

	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">

    <title>CSecurity!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">CSecurity</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span>   
            <i class="fa fa-navicon"></i>
        </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Approach</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Location</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-info btn-sm mt-1 ml-3" href="#">Login</a>
            </li>
            <li class="nav-item">
              <i class="fa fa-search mt-2 ml-3"></i>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-lg-4 justify-content-center card-login">
          <small id="emailHelp" class="form-text text-white mb-3 mt-5">Enter your credentials. You have only 03 attems</small>
         <form method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" name="email">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group form-check float-right">
            <input type="checkbox" class="form-check-input" id="showPassword">
            <label class="form-check-label" id="showPassword">Show</label>
          </div>
          <div class="form-group d-flex justify-content-center">
          <button type="submit" class="btn-login mt-4" name="login">Log in</button>
          </div>
        </form>
        <div class="footer-form mt-5 d-flex justify-content-center">
          <span class="text-white mx-auto">Doesn't have account yet? <a href="#" class="text-white">Create one</a></span>
        </div>
      </div>
    </div>
    <div class="row mt-5 mb-3">
      <div class="col">
       <h3>Company</h3>
       <ul class="list-group">
          <li class="list-group-item">About Us</li>
          <li class="list-group-item">Our Objectives</li>
          <li class="list-group-item">Our Plans</li>
        </ul>
      </div>
      <div class="col">
        <h3>Product</h3>
         <ul class="list-group ml-0">
          <li class="list-group-item">Online Training</li>
          <li class="list-group-item">On-site Training</li>
          <li class="list-group-item">Pdfs and Ebooks Trainings</li>
        </ul>
      </div>
      <div class="col">
        <h3>Pathners</h3>
         <ul class="list-group ml-0">
          <li class="list-group-item">List Of Patners</li>
          <li class="list-group-item">Become Of Patners</li>
        </ul>
      </div>
      <div class="col">
        <h3>Helpful links</h3>
         <ul class="list-group ml-0">
          <li class="list-group-item">Support Page</li>
          <li class="list-group-item">FAQS</li>
          <li class="list-group-item">Sitemap</li>
        </ul>
      </div>
      <div class="col">
        <h3>Policies</h3>
         <ul class="list-group ml-0">
          <li class="list-group-item">Privacy Terms</li>
          <li class="list-group-item">Policy Terms</li>
          <li class="list-group-item">Terms and Conditions</li>
        </ul>
      </div>
    </div>
    <div class="row border-top mt-3">
      <div class="col">Curious CyberSecurity &copy; All Rights Reserved 2019</div>
      <div class="col d-flex justify-content-end">
        <i class="fa fa-facebook pr-3"></i>
        <i class="fa fa-twitter pr-3"></i>
        <i class="fa fa-youtube pr-3"></i>
        <i class="fa fa-linkedin pr-3"></i>
        <i class="fa fa-github pr-3"></i>
        <i class="fa fa-whatsapp pr-3"></i>
      </div>
    </div>
    </div> <!-- end container-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript">
		var showPassword = $('#showPassword');
		var password = $('#password');
		var timeDisplay = 3;
		var timesample = 1;

		showPassword.click(function(){
			if($(this).prop("checked") == true) {
				password.attr('type','text')
				$('label[for=showPassword]').text('Hide')
			}else {
				password.attr('type','password')
				$('label[for=showPassword]').text('Show')
			}
		})

		setInterval(function(){
			var nbSec = parseInt(timesample.text())-1
			if(nbSec < 0) location.href='login.php';
			else {
				timesample.text(nbSec);
				timeDisplay.text(Math.floor(nbSec/60)+'m:'+(nbSec%60))
				
			}
		},1000)
	</script>

  </body>
</html>