<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta Developer="Abhi goyal">
   <title>Student Attendance Portal</title>

   <!-- link Css -->

   <link rel="stylesheet" href="index.css">
   <link rel="stylesheet" href="contact.css">
   <link rel="icon" href="images/logo 1 (1).png" type="image/icon type">



   <!-- Link Pages -->

   <!-- Font Family -->

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/86234a9440.js" crossorigin="anonymous"></script>



</head>

<body>
   <!--==============================   Home page   ============================ -->

   <!-- nav bar -->
   <nav class="first">
      <a href="register.php"><button id="register">Register</button></a>
      <a href="login.php"><button id="signin">Log in </button></a>
      <img id="logo" src="images/logo.png" alt="">
      <a href="contact.php" class="renew">Contact</a>
      <!-- <a href="Blogs.php" class="renew">Blogs</a> -->
      <a href="about-us.php" class="renew">About Us</a>
      <a href="admin.php" class="renew">Admin</a>
      <a href="index.php" class="renew">Home</a>
   </nav>

   <!-- main body -->

   <div class="contact">
      <img id="image-1" src="images/13184987_5127314.jpg" alt="">
      <div id="contact-text">
         <h2>CONTACT US</h2>
         <h6 id="contact-text-span">Have any question? We'd love to hear from you!<br>
            <span>Send us a question or comment with the form <br> below and we'll be in touch with you as soon as
               <br>
               possible.</span>
         </h6>
         <div class="icons">
            <a href="https://www.facebook.com/vgi.greaternoida/" target="_blank"><i
                  class="fa-brands fa-square-facebook"></i></a>
            <a href="https://www.linkedin.com/school/vishveshwarya/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com/vgi.greaternoida/?hl=en" target="_blank"><i
                  class="fa-brands fa-square-instagram"></i></a>
            <a href="https://www.youtube.com/@VGIGreaterNoida/videos" target="_blank"><i
                  class="fa-brands fa-square-youtube"></i></a>
         </div>
      </div>
      <br><br>

      <div class="location">
         <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112212.59340661732!2d77.83735805820311!3d28.490279700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdc08fd7397c3%3A0x1d33d56b9782709a!2sVGI%20(Vishveshwarya%20Group%20of%20Institutions)!5e0!3m2!1sen!2sin!4v1668692410452!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <br><br>
      <div class="div1">
         <div class="contact-us-1">
            <div class="row">
               <div class="contact-col-1">

                  <div>
                     <i class="fa-solid fa-house-user"></i>
                     <span id="address">
                        <h5>Ghaziabad-Bulandshahar G.T. Road,</h5>
                        <p>NH-91 Greater Noida Phase-2,<br> Gautam Buddha Nagar, <br> UP-203207 </p>
                     </span>
                  </div>

                  <div>
                     <i class="fa-solid fa-phone"></i>
                     <span id="address">
                        <h5>+91 8130293785, 18008430400</h5>
                        <p>Monday to Saturday<br>10AM to 6PM</p>
                     </span>
                  </div>

                  <div>
                     <i class="fa-solid fa-envelope"></i>
                     <span id="address">
                        <h5><a href="mailto: Admission@vgi.ac.in " style=" color:rgb(56, 90, 100);">Admission@vgi.ac.in
                           </a>| <a href="mailto: info@vgi.ac.in" style="color:rgb(56, 90, 100);">
                              info@vgi.ac.in</a>
                        </h5>
                        <p>Email Us Your Query</p>
                     </span>
                  </div>



               </div>
               <br><br>

            </div>
         </div>


      </div>

   </div>

   </div>
   </div>
   <div class="div2">
      <div class="contact-col-2">
         <form action="form-handler.php" method="post">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email address" required>
            <input type="text" name="subject" placeholder="Enter your subject" required>
            <textarea rows="4" name="message" placeholder="Message"></textarea>
            <a href=""><button type="submit" class="hero-bt">Send Message </button></a>
         </form>

      </div>
   </div>
   <br>
   <br><br><br><br><br><br><br><br>
   <br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br>



















   <!-- ===========================================footer=================================== -->

   <div>

      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="footer-col">
                  <h4>Information</h4>
                  <ul>
                     <li><a href="about-us.html">about us</a></li>
                     <li><a href="#">Terms and services</a></li>
                     <li><a href="#">privacy policy</a></li>
                     <li><a href="#">Blogs</a></li>
                     <li><a href="#">Why VGI</a></li>
                  </ul>
               </div>
               <div class="footer-col">
                  <h4>get help</h4>
                  <ul>
                     <li><a href="#">FAQ</a></li>
                     <li><a href="#">FeedBack</a></li>
                     <li><a href="#">Complain</a></li>
                     <li><a href="#">Contact</a></li>
                     <li><a href="#">payment options</a></li>
                  </ul>
               </div>
               <div class="footer-col">
                  <h4>More</h4>
                  <ul>
                     <li><a href="#">Event</a></li>
                     <li><a href="#">Faculty Staff</a></li>
                     <li><a href="#">Top Recruiters</a></li>
                     <li><a href="#"></a></li>
                  </ul>
               </div>
               <div class="footer-col">
                  <h4>follow us</h4>
                  <div class="social-links">
                     <a href="https://www.facebook.com/vgi.greaternoida/" target="_blank"><i
                           class="fa-brands fa-square-facebook"></i></a>
                     <a href="https://www.linkedin.com/school/vishveshwarya/" target="_blank"><i
                           class="fa-brands fa-linkedin"></i></a>
                     <a href="https://www.instagram.com/vgi.greaternoida/?hl=en" target="_blank"><i
                           class="fa-brands fa-square-instagram"></i></a>
                     <a href="https://www.youtube.com/@VGIGreaterNoida/videos" target="_blank"><i
                           class="fa-brands fa-square-youtube"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright1">
            <h6>Copyright &#169 2022 VGI, All rights reserved <br> Developed By <span>"HELLO WORLD"</span></h6>
         </div>
      </footer>
   </div>
   <!-- ========================================End============================================== -->
</body>