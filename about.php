<?php require "includes/header.php"; ?>

<body>
  <div class="about-content">
    <div class="row">
      <div class="small-1 columns medium-1 columns large-1 columns">
        <h1>About PiCam</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="small-1 columns medium-3 columns large-3 columns">
        <!--IMAGES AND INFO GOES HERE-->    
      </div> 
    </div>

    <div class="row">
      <div class="small-1 columns medium-1 columns large-1 columns">
        <h2>Security</h2>
        <p>This system uses a key-based authorization, making it
           all but impossible for anybody to brute-force the PiCam
           system to steal images being transferred from the device
           to our servers.</p>
        <p>We have also made strong use of permissions on the server
           meaning that even if someone were able to break into the
           server, the account they were using would not have
           permission to modify or even see certain things.</p>
        <p>The passwords that we store on the server are <strong>never</strong>
           stored in plaintext, but instead are
           <a href="en.wikipedia.org/wiki/Hash_Function">hashed</a>.</p>
        <p>The system is locked down to secure protocols, minimizing the
           chance of any successful attacks.</p>
      </div>
  </div>
<?php require "includes/footer.php"; ?>
