<?php
include 'conn.php';
include 'header.php';

?>
<title>Jovefarm- Login</title>
  </head>
    <body>
        <!--<?php
    /*$unameErr = "";
if(isset($_POST['submit'])) {

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM `user` WHERE uname= :uname";
     $query = $conn->prepare($sql);
   $query->bindParam(':uname', $uname);
   $query->execute();

$row = $query->fetch(PDO::FETCH_ASSOC);

// verify the plain text password against the 
// hashed value from DB in $row['pass']
if(password_verify($pwd, $row['pwd'])){
    $_SESSION['uid'] = $row['id'];
    $_SESSION['uname'] = $row['uname'];
    $_SESSION['pwd']  = $row['pwd'];

    header("Location: index.php"); 
 
} else {
    $unameErr = "<p>Invalid Email or Password. Please Check Your Details or <a href='signup.php'> Register </a>. Thanks</p>";


}
}*/
?>
-->
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
    <script>
  /*function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
    document.getElementById("firstList").style.display = "none";
  }
  
  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
    document.getElementById("firstList").style.display = "flex";
  }*/
  </script>
     
        <!--<button class="open-button" onclick="openForm()">Chat With Us</button>
        
        <div class="chat-popup" id="myForm">
          <form action="#" class="form-container">
            <h1>Chat</h1>
        
            <label for="msg"><b>Message</b></label>
            <textarea placeholder="Type message.." name="msg" required></textarea>
        
            <button type="submit" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>-->
        
        <div class="hidden-sm hidden-xs icon-bar">
        <a href="https://www.facebook.com/jovefarm.venture.9" class="facebook"><i class="fab fa-facebook"></i></a> 
          <a href="https://www.twitter.com/FarmsJove" class="twitter"><i class="fab fa-twitter"></i></a> 
          <a href="mailto:AgroTechventure@gmail.com" class="google"><i class="fab fa-google"></i></a> 
          <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
          <a href="#" class="youtube"><i class="fab fa-youtube"></i></a> 
  
        </div>
        <style>
          @media(max-width: 730px) {
            .icon-bar {
              visibility: hidden;
            }
          }
          </style>
                    <section>
                
                
                    <div class="text-center py-2">
                        <p id="fba"> Do you have a facebook account ?</p>
                        <button data-toggle="modal" data-target="#myModal" type="button" style="text-decoration: none;" class="btn btn-md btn-primary"><a class="text-white" href="#">
          <i class="fab fa-facebook px-2 "></i> Login with Facebook
         </a></button>
		 </div>
         <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 style="color: coral;" class="modal-title">Hi User! </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         We are sorry the Facebook Auth. is down at the moment. Kindly use the second option. Thanks
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

<!-- Modal end -->
         
</div>
<div class="text-center col-lg-6 offset-lg-3" style="background: #eee; font-size: 36px;"> OR </div>
                        <style>
@import url('https://fonts.googleapis.com/css?family=Lobster');
#fba {
    font-family: 'Lobster', cursive;
    font-size: 26px;
    font-weight: 700;
}
.h3 {
    font-family: 'Lobster', cursive;
    font-size: 32px;
    color: rgb(86, 224, 32);
    background: #212230;
    padding: 15px;
}
.error {
	color: red;
	padding: 10px;
	text-align: justify;

}
</style>
       <div class=" col-lg-6 offset-lg-3 p-4">
<?php
$unameErr = "";	 
$url= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'error=invalidemail') == true) {
    echo "<p class='error'>Error: Invalid email or password</p>";
}
?>  
       <form class="needs-validation form-signin" action="log1.php" method="POST" enctype="multipart/form-data" novalidate>
      <div class="error"> <?php echo $unameErr; ?> </div>
	  <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
        </div>

      <div class="form-label-group">
        <input type="text" name="uname" id="inputEmail" class="form-control" placeholder="Email address or Username" required autofocus>
        <!--<label for="inputEmail">Email address</label>-->
      </div>

      <div class="py-3 pt-4 form-label-group">
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
        <!--<label for="inputPassword">Password</label>-->
      </div>

      <div class=" py-2 form-check form-check-inline mb-3">
          <input class="form-check form-check-inline" type="checkbox" value="remember-me"> 
		  <label class="form-check-label" >Remember me
        </label>
      </div>
	 <div class="py-2 offset-md-6 form-check form-check-inline mb-3 text-right ">
      
          <!--<input class="form-check form-check-inline" type="checkbox" value="forgot-password"> -->
		    <a href="#"><label class="form-check-label"> Forgot Password</label></a>
		</div>
		
        <button class="btn btn-lg btn-success btn-block buttonload" name="submit" onClick="signInPage()" type="submit"><i style="display: none;" name="submit" id="spinLog" class="fa fa-spinner fa-spin"></i>Log In</button>
                            </form>
                    </div>

                    </section>
                    <script>
                      function signInPage() {
                       document.querySelector("#spinLog").style.display ="block";
                      }
                      setTimeOut(signInPage, 3000);
                      </script>
<style>
.buttonload {
    background-color: #4CAF50; /* Green background */
    border: none; /* Remove borders */
    color: white; /* White text */
   /* padding: 12px 24px;  Some padding */
    font-size: 16px; /* Set a font-size */
}

/* Add a right margin to each icon */
#spinLog {
   
   font-size: 28px;
  
}
</style>
<?php
include 'footer.php';
?>