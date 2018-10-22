<?php
include 'header.php';
?>
<title> AgroTech- Privacy-Policy </title>
</head>
  <body>
     
  <style>
        @media screen and (max-width : 768px) {
          #img {
              width: 200px;
              height: 50px;
          }
          li .animated {
            animation: none;
          }
        }
      </style>           
      <main>
      <header class="d-inline">


  <div id="top-head" class=" animated slideInUp bg-blue py-2">
      <div class="container">
          <div class="d-flex align-items-center justify-content-between text-white">
              <div class="small d-flex">
                  <div class="mr-3 d-none d-md-block">Follow us</div>
                  <div>
                      <a class="text-light" href=""><i class="fab fa-lg fa-facebook mr-0 mr-md-3"></i></a>
                      <a class="text-light" href=""><i class="fab fa-lg fa-twitter mr-0 mr-md-3"></i></a>
                      <a class="text-light" href=""><i class="fab fa-lg fa-linkedin mr-0 mr-md-3"></i></a>
                      <a class="text-light" href=""><i class="fab fa-lg fa-youtube mr-0 mr-md-3"></i></a>
                      <a class="text-light" href=""><i class="fab fa-lg fa-pinterest mr-0 mr-md-3"></i></a>
                  </div>

              </div>
              <div class="small d-flex contact-info">
              <div style="border: none; border-right: 1px solid #fff; padding-right: 20px;"class="mr-4 d-none d-md-block">
                      <a href="telto:+234**********"><i class="fa fa-phone mr-2"></i>+234**********</a>
                  </div>
                  <div style="border: none; border-right: 1px solid #fff; padding-right: 20px;" class="mr-4 d-none d-md-block">
                      <a href="telto:+234**********"><i class="fa fa-phone mr-2"></i>+234**********</a>
                  </div>
                  <div class="mr-0">
                      <a href="mailto:info@fbnmortgages.com"><i class="fa fa-user mr-2"></i>info@AgroTech.com</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <nav class="navbar animated slideInDown navbar-expand-lg navbar-dark sticky-top">

      <div class="container">
      <a class="navbar-brand" href="index.php">
        <img width="150px" height="70px" src="jovefarmpic/front.png" alt="">
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul id="firstList" class="navbar-nav ml-auto">
          <!--<li class="nav-item active">
             <a class="nav-link px-lg-3" style=" color: green;" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>-->

          <li class="nav-item dropdown">
              <a class="nav-link px-lg-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products & Services
              </a>
              <div class="animated slideInUp dropdown-menu bg-yellow my-0 py-3" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="about-us.php">About Us</a>
             <a class="dropdown-item" href="products.php">Products</a>
             <a class="dropdown-item" href="gallery.php">Gallery</a>
              </div>
          </li>
          <!--<li class="nav-item dropdown">
              <a class="nav-link px-lg-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Who We Are
              </a>
              <div class="animated slideInUp dropdown-menu bg-yellow my-0 py-3" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="about-us.php">About Us</a>
              <a class="dropdown-item" href="the-team.php">The Team</a>
              <a class="dropdown-item" href="contact-us.php">Contact Us</a>
              
              </div>
          </li>-->

          <li class="nav-item">
              <a class="nav-link px-lg-4" href="signup.php" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
              SignUp
              </a>
              <!--<div class="animated slideInUp dropdown-menu bg-yellow my-0 py-3" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="signup.php">SignUp</a>
              <a class="dropdown-item" href="login.php">LogIn</a>
             
              </div>-->
          </li>

         
          <li class="nav-item dropdown">
              <a class="nav-link px-lg-4 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
              </a>
              <div class="animated slideInUp dropdown-menu bg-yellow my-0 py-3" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="in.php">Events</a>
              
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link pl-lg-4" title="Coming soon" href="#">Mobile App</a>
          </li>
          <?php
          if(isset($_SESSION["uid"])) {
  
          echo '

          <li class="nav-item">
          <a class="nav-link pl-lg-4"><form action="logout.php" method="post">
              <button class="btn btn-sm btn-outline-primary">Log Out </button>
              </form></a>
          </li>';
          } else {

              echo '
             <li class="nav-item">
                 <a class="nav-link pl-lg-4" href="login.php" title="Log in">Log In</a>
             </li>';
             
             }
             ?>
     
          </ul>
         
         
      
       <!--   <style>


.openBtn {
 /* background: #f1f1f1;*/
  border: none;
  padding: 10px 20px;
  font-size: 20px;
  cursor: pointer;
}

.openBtn:hover {
  background: #256520;
}

.overlay1 {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  overflow: none;
  z-index: 1000;
  top: 0;
  left: 0;
  background-color: #5cf051;
  background-color: rgba(92,240,81,0.98);
}

.overlay1-content {
  position: relative;
  top: 16%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay1 .closebtn {
  position: absolute;
  top: 2px;
  right: 90px;
  font-size: 40px;
  cursor: pointer;
  color: white;
}
@media screen and (max-width: 700px) {
.overlay1 .closebtn {
  position: absolute;
  top: 1px;
  right: 10px;
  font-size: 40px;
  cursor: pointer;
  color: white;
}
}

.overlay1 .closebtn:hover {
  color: #256520;
}

.overlay1 input[type=text] {
  padding: 15px;
  font-size: 17px;
  border-bottom: 2px solid #fff;
  border-right: none;
  border-left: none;
  border-top: none;
  outline: none;
  float: left;
  width: 80%;

  background: transparent;
}

.overlay1 input[type=text]:hover {
  background: transparent;
}

.overlay1 button {
  float: left;
  width: 8%;
  padding: 15px;
  /*background: #ddd;*/
  font-size: 17px;
  outline: none;
  border: none;
  cursor: pointer;
}

.overlay1 button:hover {
  background: #256520;
  color: #fff;
}
</style>-->



<!--<div id="myOverlay" class="overlay1">
<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
<div class="overlay1-content">
<form>
    <input type="text" placeholder="Search.." name="search">
    <button class="btn btn-md btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>
</div>

<button class="openBtn" onclick="openSearch()"><i class="fa fa-search"></i></button>-->


      </div>
      </div>

  </nav>
  </header>

         
<style>
    #private1 {
        margin-bottom: 7px; 
    }
    #private {
        margin-bottom: 15px;
    }
    </style>
<section class=" text-justify pt-5 pb-3 px-2">
<div class="container">
<h1 class="mb-4 text-center"><b>Our Privacy Policy</b></h1>
 

<p id="private"> This Privacy Policy governs the manner in which AgroTech collects, uses, maintains and discloses information collected from users (each, a “User”) on the <a href="https://www.AgroTech.com">AgroTech</a> ('Site'). This privacy policy applies to the Site and all products and services offered by AgroTech.<p id="private"> 

<h3 id="private1"><b>Personal identification information</b></h3>

<p id="private"> We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the site, place an order, fill out a form, and in connection with other activities, services, features or resources we make available on our Site. As deemed appropriate, Users may be asked for; name, email address, mailing address, phone number, account number. Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p>

<h3 id="private1"><b>Non-personal identification information</b></h3>

<p id="private"> We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about the Users means of connection to our Site, such as the operating system and other similar information.</p>

<h3 id="private1"><b>Web browser cookies</b></h3>

Our Site may use “cookies” to enhance User experience. User’s web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.

<h3 id="private1"><b>How we use collect information? </b></h3>

<p id="private"> AgroTech may collect and use Users personal information for the following purposes:

To run and operate our Site
We may need your information to display content on the Site correctly.
To improve customer service
Information you provide helps us respond to your customer service requests and support needs more efficiently.
To personalize user experience
We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.
To improve our Site
We may use feedback you provide to improve our products and services.
To process payments
We may use the information Users provide about themselves when placing an order only to provide service to that order. We do not share this information with outside parties except to the extent necessary to provide the service.
To send periodic emails
We may use the email address to send User information and updates pertaining to their order. It may also be used to respond to their inquiries, questions, and/or other requests.
 

<h3 id="private1"><b>How we protect your information</b></h3>

<p id="private"> We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.

<h3 id="private1"><b>Sharing your personal information</b></h3>

<p id="private"> We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above. We may use third party service providers to help us operate our business and the Site or administer activities on our behalf, such as sending out newsletters or surveys. We may share your information with these third parties for those limited purposes provided that you have given us your permission.

<h3 id="private1"><b>Electronic newsletters</b></h3>

<p id="private"> If Users decide to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. By using any of our services or products, you are also automatically signed up on our mailing list. We may use third party service providers to help us operate our business and the Site or administer activities on our behalf, such as sending out newsletters or surveys. We may share your information with these third parties for those limited purposes provided that you have given us your permission.

<h3 id="private1"><b>Disclosures Required by Law</b></h3>

<p id="private"> We may disclose Personally Identifiable Information if required to do so by law or in the good faith belief that such action is necessary to (a) conform with the requirements of the law or comply with legal process served on us, or (b) act in urgent circumstances to protect the personal safety of users of our Service or members of the public. To the extent practicable and legally permitted, we will attempt to advise you prior to any such disclosure, so that you may seek a protective order or other relief limiting such disclosure.

<h3 id="private1"><b>Third party websites</b></h3>

<p id="private"> Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website’s own terms and policies.

<h3 id="private1"><b>The Data that we Retain</b></h3>

<p id="private"> We will retain your information for as long as your account is active or as needed to provide you with our services, or comply with our legal and statutory obligations.

<h3 id="private1"><b>Problem Signing In</b></h3>

<p id="private"> Our sign-in process is designed to help protect your privacy. If you have trouble signing in to our Website, please ensure that you are using your registered e-mail address and/or correct password. If you are using your registered e-mail address and correct password, and you continue to have trouble signing in to our site, please e-mail us immediately at info@AgroTech.com

<h3 id="private1"><b>Changes to this privacy policy</b></h3>

<p id="private"> AgroTech has the discretion to update this privacy policy at any time. When we do, we will post a notification on the main page of our Site. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.

<h3 id="private1"><b>Your acceptance of these terms</b></h3>

<p id="private"> By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.

<h3 id="private1"><b>Contacting us</b></h3>

<p id="private"> If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us.

<p id="private"> <h4><b>This document was last updated on September 25, 2018</h4></b></p>
</div>
 </section>
 <?php
 include 'footer.php';

 ?>