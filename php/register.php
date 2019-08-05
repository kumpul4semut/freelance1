<?php
// ini_set('display_errors', 1);	
// include('connexion.php');

// 	if($_POST['cu_areaOfCsecurity'] == 'choose'){
// 		header('location:../register.php?error=You must choose a area Of Cyber security.');
// 		exit;
// 	}
// 	if($_POST['cu_password'] != $_POST['cu_passwordConfirm']){
// 		header('location:../register.php?error=Both passwords don\'t match.');
// 		exit;
// 	}

// 	$reqCheckUsername = $bdd->prepare('SELECT COUNT(*) As c FROM customer WHERE cu_email = ?');
// 	$reqCheckUsername->execute(array(htmlspecialchars($_POST['cu_email'])));
// 	$reqCheckUsernameResult = $reqCheckUsername->fetch();
// 	if($reqCheckUsernameResult['c'] > 0){
// 		header('location:../register.php?error=The email already exists. Please choose another one.');
// 		exit;
// 	}
// 	function cuRegistrationNumber(){
// 		return 'CRU'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
// 	}
// 	$rq = $bdd->prepare('INSERT INTO customer(cu_firstName, cu_surname, cu_businessName, cu_jobTitle, cu_areaOfCsecurity, cu_email, cu_registrationNumber,cu_username, cu_password, dateOfRegistration) VALUES(?,?,?,?,?,?,?,?,?,NOW())');
// 	$rq->execute(array(htmlspecialchars($_POST['cu_firstName']),  htmlspecialchars($_POST['cu_surname']), htmlspecialchars($_POST['cu_businessName']), htmlspecialchars($_POST['cu_jobTitle']), htmlspecialchars($_POST['cu_areaOfCsecurity']),  htmlspecialchars($_POST['cu_email']),  cuRegistrationNumber(), htmlspecialchars($_POST['cu_username']), md5($_POST['cu_password'])));

// 	header('location:../register.php?success=Your account is successfuly created.');
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
      <div class="row mt-5">
        <div class="col">
          <small id="emailHelp" class="form-text mb-3">Fill the form</small>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
        </div>
        <div class="col">
          <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>          
        </div>
      </div> <!-- form register -->
      <div class="row">
        <div class="col">
          <button type="submit" class="btn btn-info">Register</button>
        </div>
        </form>
      </div> <!-- button register-->
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
  </body>
</html>