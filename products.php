<?php
include 'header.php';
?>
<title> AgroTech- Products </title>
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
          @media screen and (max-width: 730px) {
           #sec .row  {
              display: block;
              width: 100%;
              
            }
          }
          
         @media screen and (max-width: 730px) {
           section .card1 {
             display: block;
           width: 100%;
           padding: 10px 0;
           }
         }
         .card1:hover, .card1:focus { 
          box-shadow: 8px 10px 10px 0 rgba(0, 0, 0, 0.2);
          opacity: 1;
         }
.card1 {
  width: 31%;
  opacity: 0.9;
  margin: 0 2px;
  padding: 10px 3px;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

#btnn {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.soc > a {
  text-decoration: none;
  font-size: 22px;
}


#btnn:hover, .soc >a:hover {
  opacity: 0.7;
}
</style>
<h1 style="border-bottom: 5px double green;" class="pt-4 text-center mb-4"> Our Products </h2>
<h2 class="py-2 text-center" style="font-size: 30px;"> SHOWING 1-7 OF 7</h2>
<section  class="bg-white py-2">
<div class="container">
<div class="row">
<div class="py-2 card1">
<img src="jovefarmpic/casava.jpg" alt="Jane" style="height: 300px;width:100%">
  <h1>Cassava</h1>
  <p class="title">Invest on a Cassava farm today</p>
  <div class="soc">
  <a href="cassava.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">View</button></a> 
</div>
</div>
<div class="py-2 card1">
<img src="jovefarmpic/maize.jpg" alt="Mike" style="height: 300px;width:100%">
  <h1>Maize</h1>
  <p class="title">Invest on a Maize farm today</p>
  <div class="soc">
  <a href="maize.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">View</button></a> 
</div>
</div>

<div class="py-2 card1">
<img src="jovefarmpic/poultry1.png" alt="John" style="height: 300px;width:100%">
  <h1>Poultry</h1>
  <p class="title">Invest on a Poultry farm today</p>
  <div class="soc">
  <a href="poultry.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">View</button></a> 
</div>
</div>

<div class="py-2 card1">
<img src="jovefarmpic/palm.jpg" alt="John" style="height: 300px;width:100%">
  <h1>Palm</h1>
  <p class="title">Invest on a Palm farm today</p>
  <div class="soc">
  <a href="palm.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">View</button></a> 
</div>
</div>

<div class="py-2 card1">
<img src="jovefarmpic/cotton.jpg" alt="John" style="height: 300px;width:100%">
  <h1>Cotton</h1>
  <p class="title">Invest on a Cotton farm today</p>
  <div class="soc">
  <a href="cotton.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">View</button></a> 
</div>
</div>
<div class="py-2 card1">
<img src="jovefarmpic/soya.jpg" alt="John" style="height: 300px;width:100%">
  <h1>Soya Beans</h1>
  <p class="title">Invest on a Soya Beans farm today</p>
  <div class="soc">
  <a href="soya.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">View</button></a> 
</div>
</div>
<div class="py-2 card1">
<img src="jovefarmpic/fish.jpg" alt="John" style="height: 300px;width:100%">
  <h1>Fish</h1>
  <p class="title">Invest on a Fish farm today</p>
  <div class="soc">
  <a href="fish.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">View</button></a> 
</div>
</div>
<!--<div class="py-2 card1">
<img src="jovefarmpic/cotton.jpg" alt="John" style="height: 300px;width:100%">
  <h1>Cotton</h1>
  <p class="title">Invest on a Cotton farm today</p>
  <div class="soc">
  <a href="checkoutform.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">View</button></a> 
</div>
</div>-->


</section>
<?php
include 'footer.php';
?>