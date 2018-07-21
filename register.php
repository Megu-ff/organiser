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
  <title>Registration</title>
</head>

<body>
  <section id='registration'>
    <div class='container'>
      <form method=POST action='register.php'>
        <div class='row'>
          <div class='col-xl-12'>
            <h1 class='text-center headingTitle'>Registration Form</h1>
            <div class='form-group'>
              <label for='username'>Username</label>
              <input class='form-control' type='text' id='username' name='username' required='required' value='<?php echo $username; ?>'>
            </div>
            <div class='form-group'>
              <label for='email'>Email</label>
              <input class='form-control' type='email' id='email' name='email' required='required' value='<?php echo $email; ?>'>
            </div>
            <div class='form-group'>
              <label for='pass1'>Password</label>
              <input class='form-control' type='password' id='pass1' name='pass1' required='required'>
            </div>
            <div class='form-group'>
              <label for='pass2'>Confirm Password</label>
              <input class='form-control' type='password' id='pass2' name='pass2' required='required'>
            </div>
            <div class='input-group'>
              <button class='btn btn-primary' type='submit' name='registrationButton'>Register</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>