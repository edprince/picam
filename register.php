<?php require "includes/header.php"; ?>
<?php require "includes/background.php"; ?>
<script src="assets/js/check.js"></script>
<div class="row">
  <main class="login small-12 medium-8 large-4 small-centered medium-centered large-centered columns">
    <header>
      <h2>Register for PiCam</h2>
    </header>
    <form action="actions/register.php" id="registration" method="get" class="small-12 columns">
      <br />

        <?php if ($_SESSION['duplicateUser'] == "true") { ?>
        <p class='error message'>
          <i class="fa fa-warning"></i>
          <b>Username not available</b>
        </p>
        <?php
}
        ?>
      <div class="control">
        <label>first name</label>
      </div>
        <div class="group">
        <input type="text" required name="firstname" id="firstname" placeholder="First Name" />
        <input type="text" required name="lastname" id="lastname" placeholder="Last Name" />
        <input type="text" required name="email" id="email" placeholder="Email Address" />
      </div>
      <div class="group">
        <input type="text" required name="username" id="username" placeholder="Username" />
        <input type="password" required name="password" id="password" placeholder="Password" />
        <input type="password" required name="re-password" id="re-password" placeholder="Re-type password" />
      </div>
      <hr />
      <button class="button" id="signin">
        <i class="fa fa-edit"></i>
        <b>Register</b>
      </button>
      <br />
    </form>
    <div class="back">
      <a href="index.php">Back to sign in</a>
    </div>
  </main>
</div>
<?php require "includes/footer.php"; ?>
