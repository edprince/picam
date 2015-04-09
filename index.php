<?php
/**
 * Login Page 
 * 
 * PHP version 5
 *
 * @category Script
 * @package  PiCam
 * @author   Ed Prince <edward_prince@hotmail.com>
 * @license  http://mit-license.org/ MIT License
 * @version  GIT: 0.1
 * @link     http://edprince.uk
 */
?>
<?php require "includes/header.php"; ?>
<body>
    <?php require "includes/background.php"; ?>
  <div class="row">
    <main class="login small-12 medium-8 large-4 small-centered medium-centered large-centered columns">
      <header>
        <h2>Sign in</h2>
      </header>
      <form action="actions/login.php" method="get" class="small-12 columns">
        <div class="group">

          <input type="text" class="input" name="username" placeholder="Username" required></input>
          <input type="password" class="input" name="password" placeholder="Password" required></input>
        </div>

        <?php if ($_SESSION["logged"] == "tried") { ?>
          <hr />
          <p class='error message'>
            <i class="fa fa-warning"></i>
            <b>Wrong username or password</b>
          </p>
<?php
}
?>

        <hr />
        <button class="button" id="signin">
          <i class="fa fa-sign-in"></i>
          <b>Sign In</b>
        </button>
      </form>
      <div class="small-12 columns">
        <a href="register.php">
          <button class="button" id="register">
            <i class="fa fa-edit"></i>
            <b>Register</b>
          </button>
        </a>
      </div>
    </main>
  </div>
</body>
</html>
