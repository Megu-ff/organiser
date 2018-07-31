<?php
  session_start(); 
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
  <title>Organiser</title>
</head>

<body>
  <?php include 'header.php';?>
  <div class='container-fluid'>
    <div class='container text-center'>
      <h1 class='mt-3'>Organiser</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet turpis pretium, faucibus magna nec, imperdiet elit.</p>
      <section class='login register'>
        <div class='row'>
        <?php if(isset($_SESSION['username'])): ?>
          <div class='col-xl-12'>
            <a class='btn btn-primary btn-xl' href='dashboard.php'>Dashboard</a>
          </div>
          <?php else: ?>
          <div class='col-xl-6'>
            <p class='important'>
              <a class='btn btn-primary btn-xl' href='login.php'>Login</a>
            </p>
          </div>
          <div class='col-xl-6'>
            <p>
              <a class='btn btn-primary btn-xl' href='register.php'>Register</a>
            </p>
          </div>
          <?php endif ?>
        </div>
      </section>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>