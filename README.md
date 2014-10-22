A2Project
=========
modular home-based security system using the Raspberry Pi
<hr>

![Raspberry Pi](https://lh6.googleusercontent.com/-m88dpWcWBI4/AAAAAAAAAAI/AAAAAAAAAts/50q64HIGyxY/s100-c-k-no/photo.jpg)


Project Tasks
=============

 * Taking a picture using the camera
   * http://www.raspberrypi.org/learning/python-picamera-setup/
 * Create database on server
 * Use HTTP to transfer the file across to the server
 * Insert file path of image with image ID in a table
 * Create a webage that can display the image
 * Display a new image every 10 seconds
 * Remove images from older than 2 days
   *New item
 * Research into image file types and compression
 * Preventing SD card corruption


The PHP page
============
 Within this page I need to:
  * Establish connection to database
  * Grab images from location
  * Display images
  * Add a "refresh" features that automatically refreshes every time a new image is added to the database
  * Style the page well
  * Add a login feature for security

File Tree
=========
 * TakePicture.py
 * DisplayFeed.php
 * Login.php
 * SendPicture.py
 
|Potential Solutions|Positives|Negatives|
|-------------------|---------|---------|
|I could use a motion sensor, with a Pi or Aruduino (or similar)|More effective than image comparison|Less experience with other hardware|
|I could use a dedicated sercurity camera that will automatically feed the images|Dedicated hardware is more effective|More expensive for this system, less customizable|
|Use a webcam that live streams to a site|Easy streaming to website|Inconvenient, especially if not wireless|

I am going to use a Raspberry Pi and camera module.

Extensions
==========
 * Use AJAX to update images
 * Send message to phone
 * Upload image to site
 * Add camera selection feature
 * 
 
#Using FTP to transfer images#

