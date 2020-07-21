/*
github.com/isha-git
github.com/jagriti04
github.com/shripriyamaheshwari
*/

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
	
	<style type="text/css">
	   div.container1{width:250px; margin:50px,; margin: 200px;}
	   div.container2{width:250px;}
	   div.container3{width:250px; margin: 220px;}
	   div.me{background-image: url('me1.jpg'); width: 700px;  height:400px; margin:100px;}
	   div.me2{background-image: url('me2.jpg'); width: 700px ; margin:100px;}
	   div.me3{background-image: url('me3.jpg'); width: 700px ; height:400px; margin:100px;}
	   div.col{color:red;};
	</style>
     
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>
     
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   <div class="me" > <div class="container1">

      <form class="form-signin" method = "post" action = "signincheck.php">
	    <div class = "col"><h5>Incorrect Credentials!</h5></div>
        <h2 class="form-signin-heading">Please sign in(As Customer)</h2>
        <label for="inputEmail" class="sr-only">Roll No.</label>
        <input name = "roll" type="text" id="roll" class="form-control" placeholder="Roll No." required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name = "pass" type="password" id="pass" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" name = "submit" type="submit">Sign in</button>
      </form>

    </div> <!-- /container --> </div>
	
	<div class="me2">
	<div class="container2">

      <form class="form-signup" method = "post" action = "signincheck.php">
        <h2 class="form-signup-heading">Create Account(As Customer)</h2>
        <label for="Name" class="sr-only">Name </label>
        <input type="text" id="name" class="form-control" placeholder="name" name = "name" required autofocus>
        
		<label for="Roll_no" class="sr-only">Roll Number </label>
        <input type="text" id="Roll_no" class="form-control" placeholder="Roll_no" name = "Roll_no" required autofocus>
		
		<label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name = "password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign Up</button>
      </form>

    </div> <!-- /container --> </div>
      <div class="me3">
	 <div class="container3">

      <form class="form-signin2">
        <h2 class="form-signin-heading2"> Please Sign in (as Shopkeeper)</h2>
        <label for="inputname" class="sr-only2">Username</label>
        <input type="username" id="inputname" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container --> </div>
  


	</body>
</html>
