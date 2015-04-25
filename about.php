<?php require "includes/header.php"; ?>
<head>
  <link href="assets/styles/displaystyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="display.php">
        <i class="fa fa-camera"></i>
        Your Cam
      </a> | 
      <a href="about.php">
        <i class="fa fa-gear"></i>
        About
      </a> |
      <a href="assets/user-manual.pdf">
        <i class="fa fa-book"></i>
        User Manual
      </a> |
      <a href="https://github.com/edprince/picam">
        <i class="fa fa-github"></i>
        Source Code
      </a> | 
      <a href="index.php">
        <i class="fa fa-sign-out"></i>
        Sign Out
      </a>
    </div>
  </nav>
  <div class="about-content">
    <div class="row">
      <div class="small-12 medium-12 large-12 columns">
        <h1>About PiCam</h1>
      </div>
    </div>
    
    <div class="row banner">
      <div class="small-1.columns medium-4 large-4 columns">
        <img src="http://4vector.com/i/free-vector-padlock-icon_101044_Padlock_Icon.png" />
        <h3>Security</h3>
        <p id="justify">Learn about the security of the system behind PiCam, with
           information on what we do with the information you provide
           us with.</p><a href="#security">Read more <i class="fa fa-angle-double-right"></i></a>
      </div> 
      <div class="small-1.columns medium-4 large-4 columns">
        <img src="http://previews.123rf.com/images/bryljaev/bryljaev1301/bryljaev130100067/17312611-Computer-monitor-laptop-tablet-pc-and-smart-phone-each-device-has-a-white-blank-screen-Stock-Vector.jpg" />
        <h3>Web Design</h3> 
        <p id="justify">Learn about the web design of PiCam, including frameworks and more.
           Information about the backend of the system, including the code
           and the database design. </p><a href="#web-design">Read more <i class="fa fa-angle-double-right"></i></a>
      </div>
      <div class="small-1.columns medium-4 large-4 columns">
        <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Raspberry_Pi_Vector_Illustration.svg/512px-Raspberry_Pi_Vector_Illustration.svg.png" />
        <h3>Device</h3>
        <p id="justify">Read about the code and setup of the Raspberry Pi device being
           used to make this project work, and how to set it up on your
           own Raspberry Pi.</p><a href="#device">Read more <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>

    <div class="row security" id="security">
      <div class="small-12 large-12 columns">
        <h2>Security</h2>
        <hr />
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
           <a href="http://en.wikipedia.org/wiki/Hash_Function">hashed</a>.</p>
        <p>The system is locked down to secure protocols, minimizing the
           chance of any successful attacks.</p>
      </div>
  </div>
  <div class="row web" id="web-design">
    <div class="small-12 large-12 columns">
      <h2>Web Design</h2>
      <hr />
      <p>The web end of this system is built upon the Foundation CSS framework.
         This allows the page to be split up into a simple grid, allowing
         for cleaner and easier web-design. Read more about Foundation <a href="http://foundation.zurb.com/">here</a>.
         The back end for the web site is written in PHP, using MySQL databases to store the data collected from users.
         The use of the PHP within the front end pages allows thw page to feel slightly more customized to each
         individual user.</p>
      </div>
  </div>
  

  <div class="row device" id="device">
    <div class="small-12 large-12 columns">
      <h2>Device</h2>
      <hr />
      <p>The <a href="https://www.raspberrypi.org/">Raspberry Pi</a> itself does not contain very much of the code for the project
         at all. It's only tasks are:
         <ol>
           <li><strong>Take the picture</strong></li>
           <br />
           <p class="code">raspistill -v -o newimage.jpg</p>
           <br />
           <br />
           <p>This is the command used for taking picture through the <a href="http://en.wikipedia.org/wiki/Command-line_interface">command line</a> 
              for the Raspberry Pi camera module.</p>
         <li><strong>Compress the picture</strong></li>
           <p>To compress the picture, PiCam makes use of the <a href="http://www.imagemagick.org/">ImageMagick</a>, which is designed for the manipulation
              of images. Therefore using this command, the images could be compressed to a chosen percentage of their original quality</p>
           <p class="code">
             mogrify -quality 15 image.jpg
           </p> 
           <br />
           <br /> 
           <p>Using "mogrify" rather than "convert" meant that the original image was overwritten rather than copied, as their is no need for the full, uncompressed
              version of the image to remain on the Raspberry Pi.
           </p>
           <li><strong>Send the picture to the server</strong></li>
           <p>As stated in the <a href="#security">security</a> section of the page, the system uses a key-based authorization to establish a connection 
              between the device and the server. This means that no password is required to send the images to the storage server. The method used for the
              transfer is <strong><a href="http://en.wikipedia.org/wiki/SSH_File_Transfer_Protocol">SFTP</a></strong>. This protocol can be used to make a transfer
              in the following manner: </p> 
           <p class="code">
             sftp -b instructions.sh ed@edprince.uk
           </p>
           <br /><br />
           The use of the <strong>-b</strong> allows a seperate file containing the instructions for the request to be executed. This file would look like this:
           </p>
           <p class="code">
             put /pathway/to/image.jpg /pathway/on/server/image.jpg
           </p>
           <br /><br />
           <p>And there we go, the images are being taken, compressed and transferred in just a few lines of code.</p>
         </ol>
         </p>
      </div>
  </div>
<?php require "includes/footer.php"; ?>
