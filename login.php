<?php
include('server.php');
   if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="css/styles.css" rel="stylesheet">
  <title>Login</title>
</head>

<body>
  <?php include 'header.php';?>
  <section id='login' class='login'>
    <div class='container'>
      <form method=POST action='login.php'>
        <?php include('errors.php'); ?>
        <div class='row'>
          <div class='col-xl-12'>
            <h1 class='text-center headingTitle'>Login</h1>
            <div class='form-group'>
              <label for='username'>Username</label>
              <input class='form-control' type='text' id='username' name='username' required='required' value='<?php echo $username; ?>'>
            </div>
            <div class='form-group'>
              <label for='pass1'>Password</label>
              <input class='form-control' type='password' id='password' name='password' required='required'>
            </div>
            <div class='input-group'>
              <button class='btn btn-primary' type='submit' name='loginButton'>Login</button>
            </div>
          </div>
        </div>
      </form>
      <p>
        <a href='register.php#register'>Not signed up? Sign up here.</a>
      </p>
    </div>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>