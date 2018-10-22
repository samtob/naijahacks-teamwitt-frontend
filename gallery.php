<?php
include 'header.php';
?>

<title> AgroTech - Gallery </title>
</head>
  <body>

     <div id="header">
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
     
      <header  class="d-inline">


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
                      <a href="telto:+234**********"><i class="fa fa-phone mr-2"></i>+234**********"</a>
                  </div>
                  <div style="border: none; border-right: 1px solid #fff; padding-right: 20px;" class="mr-4 d-none d-md-block">
                      <a href="telto:+234**********"><i class="fa fa-phone mr-2"></i>+234**********"</a>
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
              <a class="dropdown-item" href="products.php">Products</a>
              <a class="dropdown-item" href="about-us.php">About Us</a>
             <a title="Frequently Asked Questions" class="dropdown-item" href="faq.php">FAQ</a>
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
	</div>
<style>
.row1 > .column1 {
  padding: 10px 8px;
}

.row1:after {
  content: "";
  display: table;
  clear: both;
}

.column1 {
  float: left;
  width: 25%;
}

/* The modal1 (background) */
.modal1 {
  display: none;
  position: fixed;
  z-index: 0;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* modal1 Content */
.modal1-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 95%;
  max-width: 1300px;
}

/* The close1 Button */
.close1 {
  color: white;
  position: absolute;
  top: 8px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* next & previous buttons */
.prev1,
.next1 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next1 button" to the right */
.next1 {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev1:hover,
.next1:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.img {
  margin-bottom: 0px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.5;
}

.active,
.demo:hover {
  opacity: 1;
}

.img.hover-shadow {
  transition: 0.5s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
@media screen and (max-width: 700px) {
.column1 {
	display: block;
	width: 100%;
}
}
</style>

<h1 style="text-align:center; border-bottom: 5px double green; font-family: Roboto;">Gallery</h1>
<p class="text-center pt-2"> <b> Instruction: </b> Tap on the image to view on full Mode. Thanks </p>
<section class="pt-2">
<div class="row1">
  <div class="column1">
    <img src="jovefarmpic/casava.jpg" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(1)" class="img hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="jovefarmpic/maize.jpg" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(2)" class="img hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="jovefarmpic/poultry1.png" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(3)" class="img hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="jovefarmpic/m1.jpg" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(4)" class="img hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="jovefarmpic/m2.jpg" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(5)" class="img hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="jovefarmpic/img3.jpg" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(6)" class="img hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="jovefarmpic/maize1.jpg" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(7)" class="img hover-shadow cursor">
  </div>
<div class="column1">
    <img src="jovefarmpic/cotton.jpg" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(8)" class="img hover-shadow cursor">
  </div>
<div class="column1">
    <img src="jovefarmpic/soya1.jpg" style="height: 300px; width:100%" onclick="openmodal1();currentSlide(9)" class="img hover-shadow cursor">
  </div>
</div>

<div id="mymodal1" class="modal1">
  <span class="close1 cursor" onclick="close1modal1()">&times;</span>
  <div class="modal1-content">

    <div class="mySlides">
      <div class="numbertext">1 / 9</div>
      <img src="jovefarmpic/casava.jpg" class="img" style="height: 500px; width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 9</div>
      <img src="jovefarmpic/maize.jpg" class="img" style="height: 500px; width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 9</div>
      <img src="jovefarmpic/poultry1.png" class="img" style="height: 500px; width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 9</div>
      <img src="jovefarmpic/m1.jpg" class="img" style="height: 500px; width:100%">
    </div>
	<div class="mySlides">
      <div class="numbertext">5 / 9</div>
      <img src="jovefarmpic/m2.jpg" class="img" style="height: 500px; width:100%">
    </div>
	<div class="mySlides">
      <div class="numbertext">6 / 9</div>
      <img src="jovefarmpic/img3.jpg" class="img" style="height: 500px; width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 9</div>
      <img src="jovefarmpic/maize1.jpg" class="img" style="height: 500px; width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 9</div>
      <img src="jovefarmpic/cotton.jpg" class="img" style="height: 500px; width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 9</div>
      <img src="jovefarmpic/soya1.jpg" class="img" style="height: 500px; width:100%">
    </div>
    
    <a class="prev1" onclick="plusSlides(-1)"><span class="text-white fa fa-arrow-left fa-2x"></span></a>
    <a class="next1" onclick="plusSlides(1)"><span class="text-white fa fa-arrow-right fa-2x"></span></a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column1">
      <img class="img demo cursor" src="jovefarmpic/casava.jpg" style="height: 70px; width: 100%;" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column1">
      <img class="img demo cursor" src="jovefarmpic/maize.jpg" style="height: 70px; width: 100%;" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column1">
      <img class="img demo cursor" src="jovefarmpic/poultry1.png" style="height: 70px; width: 100%;" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column1">
      <img class="img demo cursor" src="jovefarmpic/m1.jpg" style="height: 70px; width: 100%;" onclick="currentSlide(4)" alt="">
    </div>
	<div class="column1">
      <img class="img demo cursor" src="jovefarmpic/m2.jpg" style="height: 70px; width: 100%;" onclick="currentSlide(5)" alt="">
    </div>
	<div class="column1">
      <img class="img demo cursor" src="jovefarmpic/img3.jpg" style="height: 70px; width: 100%;" onclick="currentSlide(6)" alt="">
    </div>
    <div class="column1">
      <img class="img demo cursor" src="jovefarmpic/maize1.jpg" style="height: 70px; width: 100%;" onclick="currentSlide(7)" alt="">
    </div>
    <div class="column1">
      <img class="img demo cursor" src="jovefarmpic/cotton.jpg" style="height: 70px; width: 100%;" onclick="currentSlide(8)" alt="">
    </div>
    <div class="column1">
      <img class="img demo cursor" src="jovefarmpic/soya1.jpg" style="height: 70px; width: 100%;" onclick="currentSlide(9)" alt="">
    </div>
  </div>
</div>
</section>
<script>
function openmodal1() {
	//alert("hello");
  document.getElementById('mymodal1').style.display = "block";
  document.getElementById('header').style.display = "none";
  document.getElementById('footer').style.display = "none";
}

function close1modal1() {
  document.getElementById('mymodal1').style.display = "none";
    document.getElementById('header').style.display = "block";
    document.getElementById('footer').style.display = "block";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
<?php
include 'footer.php';
?>