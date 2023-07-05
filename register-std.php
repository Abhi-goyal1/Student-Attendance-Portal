<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta Developer="Abhi goyal">
    <title>Student Attendance Portal</title>

    <!-- link Css -->

    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="icon" href="images/logo 1 (1).png" type="image/icon type">
    <link rel="stylesheet" href="css/style.css">


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
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <script src="https://kit.fontawesome.com/86234a9440.js" crossorigin="anonymous"></script>
    <style>
        #logo {
            max-width: 13%;
        }

        .renew {
            padding: 19px;
        }

        nav a {
            display: flex;
            text-decoration: none;
            /* padding: 19px; */
            float: right;
        }


        button {
            display: flex;
            float: right;
            border: 0ch;
        }

        .first {
            position: sticky;
            top: 0;
            z-index: 10;
            box-shadow: 0px 26px 17px -10px rgba(0, 0, 0, 0.27);
            background-color: white;

        }

        .first a {
            font-family: 'Nunito', sans-serif;
            color: rgb(56, 90, 100);
            font-weight: bold;
            font-size: 16px;
        }

        /* icons css  */

        i {
            color: rgb(56, 90, 100);
        }

        .first a:hover,
        :active,
        :visited {
            color: rgb(255, 115, 92);

        }

        .first a: {
            color: rgb(255, 115, 92);

        }

        /* buttons  */

        #register {
            background-color: rgb(255, 115, 92);
            /* opacity: 0.7; */
            margin-top: 13px;
            border-radius: 4px;
            color: white;
            font-family: 'Nunito', sans-serif;
            font-size: 17px;
            padding: 9px;
            font-weight: bold;
            margin-top: 11px;
        }

        #register:active {
            transform: scale(0.95);
        }

        #signin {
            border: 2px solid rgb(56, 90, 100);
            margin-top: 13px;
            border-radius: 4px;
            margin-right: 4px;
            font-family: 'Nunito', sans-serif;
            font-size: 17px;
            padding: 7px;
            color: rgb(56, 90, 100);
            font-weight: bold;
            margin-top: 11px;
            background-color: white;

        }

        #signin:hover {
            background-color: rgb(56, 90, 100);
            color: white;
        }

        #signin:active {
            transform: scale(0.95);
        }




        .container {
            max-width: 1170px;
            margin: auto;
            background-color: rgb(56, 90, 100);

        }

        .row {
            display: flex;
            flex-wrap: wrap;
            background-color: rgb(56, 90, 100);
        }

        ul {
            list-style: none;
            background-color: rgb(56, 90, 100);
        }

        .footer {

            background-color: rgb(56, 90, 100);
            border-radius: 0px 40px 0px;
            padding: 10px 0px;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
            background-color: rgb(56, 90, 100);
            font-family: 'Nunito', sans-serif;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 700;
            position: relative;
            background-color: rgb(56, 90, 100);
            font-family: 'Nunito', sans-serif;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: rgb(255, 115, 92);
            border-radius: 4px;
            height: 4px;
            box-sizing: border-box;
            width: 60px;


        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
            background-color: rgb(56, 90, 100);
            font-family: 'Nunito', sans-serif;

        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
            background-color: rgb(56, 90, 100);
            font-family: 'Nunito', sans-serif;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links {
            background-color: rgb(56, 90, 100);

        }

        .footer-col .social-links a {
            color: rgb(56, 90, 100);
            margin: 10px;

        }

        .footer-col .social-links i {
            font-size: 40px;
            color: white;
            background-color: rgb(56, 90, 100);
        }

        .footer-col .social-links i:hover {


            transition: 300ms;
            transform: translateY(-7px);
            text-decoration: none;
            color: aliceblue;


        }

        /*responsive*/
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }

        .copyright {
            font-size: 15px;
            font-family: 'Nunito', sans-serif;
            width: 100%;
            text-align: center;
            color: white;
            color: rgb(56, 90, 100);
            font-weight: 40px;
            word-spacing: 6px;
            letter-spacing: 1px;
            margin-top: 30px;

        }

        /* .copyright h6{
    background-color:rgb(56, 90, 100);
} */
        .copyright span {
            color: rgb(255, 115, 92);

        }

        .imgs2 {
            max-width: 120%;
            margin-top: 20%;
            height: 80%;
            margin-left: -20px;
        }
    </style>

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
        <a href="home-page.php" class="renew">Home</a>
    </nav>

    <!-- ============================body=========================================== -->



    <div class="wrapper" style="background-color: aliceblue;">
        <div class="inner">
            <div class="image-holder">
                <img class="imgs2" src="images/students_09.jpg" alt="">
            </div>
            <form action="">
                <h3>Student Registration Form</h3>
                <div class="form-group">
                    <input type="text" placeholder="first Name : " required class="form-control">
                    <input type="text" placeholder="Last Name :" required class="form-control">
                </div>
                <div class="form-wrapper">
                    <input type="number" placeholder="Phone :" required class="form-control">
                    <i class="zmdi zmdi-phone"></i>
                </div>
                <div class="form-wrapper">
                    <input type="email" placeholder="Email :" required class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="date" placeholder="D.O.B" required class="form-control">
                    <!-- <i class="zmdi zmdi-calendar-note"></i> -->
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="College Id :" required class="form-control">
                    <i class="zmdi zmdi-"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="University Roll Number :" required class="form-control">
                    <i class="zmdi zmdi-"></i>
                </div>
                <div class="form-wrapper">
                    <select required name="" id="" class="form-control" style="color:  rgb(56, 90, 100)
                ;">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="femal">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Confirm Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>

                <button class="btn2">Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>


    <!--          
<!-- ===========================================footer=================================== -->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="about-us.php">about us</a></li>
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
                        <img src="images/sap-high-resolution-logo-color-on-transparent-background.png" width="70%"
                            style=" background: transparent; margin-top: 40px; " alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="copyright">
     <h6>Copyright &#169 2022 VGI, All rights reserved  <br> Developed By <span>"HELLO WORLD"</span></h6>
   </div> -->
    </footer>

    <!-- ========================================End============================================== --