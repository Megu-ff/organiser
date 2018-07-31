<!DOCTYPE html>
<html>

<body>
  <nav class='navbar navbar-expand-lg navbar-dark' id='mainNav'>
    <div class='container'>
      <a class='navbar-brand js-scroll-trigger' href='index.php'>Organiser</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class='fa fa-bars'></i></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <?php if(isset($_SESSION['username'])): ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php?logout='1'" style="color: red;">Logout</a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="register.php#register">Register</a>
          </li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>