


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="/#">PanicPast</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="shows.php">Shows <span class="sr-only">(current)</span></a></li>
        <li><a href="stats.php">Stats</a></li>
      </ul>
      <?php 
        if(isset($_SESSION['uid'])){
          print '<ul class="nav navbar-nav navbar-right"><li>Welcome Back, ' . $_SESSION['name'] . '</li><li><a href="logout.php">Logout</a></li></ul>';
        }else{
          print '<ul class="nav navbar-nav navbar-right"><li><a href="register.php">Register</a></li></ul>';
          print '<ul class="nav navbar-nav navbar-right"><li><a href="login.php">Login</a></li></ul>';
        }
      ?>
    </div>
  </div>
</nav>