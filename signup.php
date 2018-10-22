<?php 
//session_start();
include 'conn.php';
include 'header.php';

?>




  <title>Jovefarm- SignUp</title>
  </head>
    <body>
    <?php
 $fnameErr = $lnameErr = $unameErr = $emailErr = $addrErr =  $countryErr = $cityErr = $stErr = $zipErr = $pwdErr = "";
 $fname = $lname = $uname = $email = $addr =  $country = $city = $st = $zip = $pwd = "";
if(isset($_POST["submit"])) {

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
 

  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
    
  } else {
    $fname = $_POST["fname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
		
      $fnameErr = "Only letters and white space allowed"; 
   
    //exit();
    } else {
      if (empty($_POST["lname"])) {
        $lnameErr = "Last Name is required";
        //header("Location: signup.php?error=lastname name");
        //exit();
      } else {
        $lname = $_POST["lname"];
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
          $lnameErr = "Only letters and white space allowed"; 
          //header("Location: signup.php?error=last name");
        //exit();
        } else {
          if (empty($_POST["uname"])) {
            $unameErr = "User Name is required";
          } else {
            $uname = $_POST["uname"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $uname)) {
              $unameErr = "Only letters and white space allowed"; 
            } else {
              if (empty($_POST["country"])) {
                $countryErr = "Your Country is required";
              } else {
                $country = $_POST["country"];
                // check if e-mail address is well-formed
                if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
                  $countryErr = "Only letters and white space allowed"; 
                } else {
                  if (empty($_POST["city"])) {
                    $cityErr = "City is required";
                  } else {
                    $city = $_POST["city"];
                    // check if e-mail address is well-formed
                    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
                      $cityErr = "Only letters and white space allowed"; 
                    } else {
                      if (empty($_POST["st"])) {
                        $stErr = "State is required";
                      } else {
                        $st = $_POST["st"];
                        // check if e-mail address is well-formed
                        if (!preg_match("/^[a-zA-Z ]*$/",$st)) {
                          $stErr = "Only letters and white space allowed"; 
                        } else {
                          if (empty($_POST["zip"])) {
                            $zipErr = "Zip is required";
                          } else {
                            $zip = $_POST["zip"];
                            
                            if (!preg_match("/^[a-zA-Z0-9 ]*$/", $zip)) {
                              $zipErr = "Only letters, numbers and white space allowed"; 
                            } else {
                              if (empty($_POST["pwd"])) {
                                $pwdErr = "Password is required";
                              } else {
                                $pwd = $_POST["pwd"];
                                
                                if (!preg_match("/^[a-zA-Z0-9 ]*$/", $pwd)) {
                                  $pwdErr = "Only letters, numbers and white space allowed"; 
                                } else {
                                  if (empty($_POST["addr"])) {
                                    $addrErr = "Address is required";
                                  } else {
                                    $addr = $_POST["addr"];
                                    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $addr)) {
                                      $addrErr = "Only letters, numbers and white space allowed";
                                    } else {
										if(empty($_POST["email"])) {
											$emailErr = "Email is Required";
										} else {
											$email = $_POST["email"];
											if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
												$emailErr= "Not a valid email";
										} else {
											 $sql = "SELECT * FROM `user` WHERE email= :email";
     $query = $conn->prepare($sql);
   $query->bindParam(':email', $email);
   $query->execute();

$rowCheck = $query->fetch(PDO::FETCH_ASSOC);
 if ($rowCheck > 0) {
					 $emailErr = "Email Taken";
 }
					 else {
										 $sql = "SELECT * FROM `user` WHERE uname= :uname";
     $query = $conn->prepare($sql);
   $query->bindParam(':uname', $uname);
   $query->execute();

$rowCheck = $query->fetch(PDO::FETCH_ASSOC);
 if ($rowCheck > 0) {
					 $unameErr = "Username Taken";
 }
					 else {
					 if(strlen($fname) <= 3) {
						 $fnameErr = "First Name must be more than three characters";
					 } else {
						 if(strlen($lname) <= 3) {
						 $fnameErr = "Last Name must be more than three characters";
					 } else {
						 if(strlen($zip) < 2) {
							 $zipErr = "Characters must be more than 1";
					 }
					 else {
                                  $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO `user` (fname, lname, uname, email, addr, country, city, st, pwd, zip)
    VALUES (:fname, :lname, :uname, :email, :addr, :country, :city, :st, :pwd, :zip)";
    $query = $conn->prepare($sql);
    
    
    $access =$query->execute(['fname' => $fname, 'lname' => $lname,
	'uname' => $uname, 'email' => $email, 'addr' => $addr, 'country' => $country, 'city' => $city, 'st' => $st,
  'pwd' => $pwd, 'zip' => $zip]);
  if($access) {
    session_start();
    echo "<p class='text-center mt-5'>Congratulations. You have successfully signed up. Log in <a href='login.php'><button class='btn btn-sm btn-outline-sucess'>LOGIN</button></a></p>";
 //header("Location: login.php");
  exit();
  } else {
    echo "not connected";
  }
                                }
								}
								}
 }
                              }
                                }
                            }
                        }

                    }

                }

            }
							}
						  }							

        }

    }
  }
  
  }
  
  }
 
    
  }
     
  }
}
    
  }
  
  }
  
  }
}
	}
  
  


  ?>
       
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
  
</div>
<!-- Modal end -->
         
</div>
<div class="text-center" style="font-size: 36px;"> OR </div>
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
</style>
<script>
  $.noConflict();
  jQuery(function() {
    
  });
   // alert("hello");
   function validate() {
   // var a = document.getElementById("tnc").value;
    const pwd = document.getElementById("passwordd").value;
   const conpwd = document.getElementById("conpwd").value;
  /* if (a:checked != true) {
     alert("plaease, agree to the terms and condition");
   }*/
if(pwd !== conpwd) {
  alert("Password do not match");
    return false;
} else {
  return true;
}
}

  </script>
              
                <div class="container py-3">
                <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
                <form class="needs-validation" onSubmit=" return validate()" action="" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">First name</label>
                            <input name="fname" type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="" required>
                            <div class="error">
                            <?php echo $fnameErr;?>
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip02">Last name</label>
                            <input name="lname" type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="" required>
                            <div class="error">
                            <?php echo $lnameErr;?>
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationTooltipUsername">Username</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                              </div>
                              <input type="text" name="uname" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                            </div>
                            <div class="error">
                            <?php echo $unameErr;?>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
						<div class="col-md-6 mb-3">
                            <label for="validationTooltipUsername">Email</label>
                           
                              <input type="text" name="email" class="form-control" id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend" required>
                              <div class="error">
                            <?php echo $emailErr;?>
                            </div>
                            </div>
                        <div class="col-md-6 mb-3">
                            
                            <label for="validationTooltipCountry">Address</label>
                            <input  name="addr" value="" placeholder="Your Address" type="text" class="form-control" id="validationTooltipCountry" required>
                            <div class="error">
                            <?php echo $addrErr;?>
                            </div>
                            </div>
                        </div>

                        <div class="form-row">
                        <div  class="autocomplete col-md-6 mb-3">
                            
                            <label for="validationTooltipCountry">Country</label>
                            <input id= "myInput" name="country"  placeholder="Country" type="text" class="form-control" id="validationTooltipCountry" required>
                             <div class="error">
                            <?php echo $countryErr;?>
                            </div>
                          
                        </div>
                        
                        
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip03">City</label>
                            <input type="text" name="city" class="form-control" id="validationTooltip03" placeholder="City" required>
                            <div class="error">
                            <?php echo $cityErr;?>
                            </div>
                          </div>
                  <div class="col-md-3 mb-3">
                            <label for="validationTooltip04">State</label>
                            <input type="text" name="st" class="form-control" id="validationTooltip04" placeholder="State" required>
                            <div class="error">
                            <?php echo $stErr;?>
                            </div>
                          </div>
</div>
<!--<div id="wrapper">
  <div class="form-group has-feedback">
    <input type="password" class="form-control" id="password" placeholder="Password">
    <i class="fa fa-eye form-control-feedback"></i>
  </div>
</div>
<style>
   #password + .fa {
   cursor: pointer;
   pointer-events: all;
 }

/* Styles for CodePen Demo Only */
#wrapper {
  max-width: 500px;
  margin: auto;
  padding-top: 25vh;
}
  </style>-->

                      <div class="row">
                              <div class="col-md-6 mb-3">
                            <label for="validationTooltipUsername">Password</label>
                            <div class="input-group">
                              
                              <input name="pwd" type="password" id="passwordd" class="form-control" id="validationTooltipUsername" placeholder="Password" aria-describedby="validationTooltipUsernamePrepend" required>
                              <div class="input-group-append">
                                <span class="text-center input-group-text px-4" id="validationTooltipUsernamePrepend"><i onClick="myClick()" id="eye-open" class="fa fa-eye"></i></span>
                                <!--<span style="display: none;" class="text-center input-group-text px-3" id="validationTooltipUsernamePrepend"></span>-->
                              </div>
                              <p style="color: red; display: none;" id="text">Caps lock is on </p><br>
                              <div class="error">
                            <?php echo $pwdErr;?>
                            </div>
                            </div>
                          </div>
                          <style>
   div #passwordd + div #eye-open {
   cursor: pointer;
   pointer-events: all;
 }
 </style>
                          <script>
    // toggle password visibility
$('div #passwordd + div #eye-open').on('click', function() {
  $(this).toggleClass('fa fa-eye-slash').toggleClass('fa fa-eye'); // toggle our classes for the eye icon
 // $('div #passwordd').togglePassword(); // activate the hideShowPassword plugin
});
function myClick() {
    var x = document.getElementById("passwordd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
var input = document.getElementById("passwordd");

// Get the warning text
var text = document.getElementById("text");

// When the user presses any key on the keyboard, run the function
input.addEventListener("keyup", function(event) {

  // If "caps lock" is pressed, display the warning text
  if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
    </script>
                      
                       <!-- <style>
                          #eye-open {
                            display: none;
                          }
                          </style>
                         <script>
                           $(function() {
                          var k= document.getElementById("eye-close");
                          var g= document.getElementByClassName("opener")[0];
                                k.addEventListener("click", function() {
                                  document.getElementById("eye-open").removeAttribute("id", "eye-open");
                                  document.getElementById("eye-close").style.display="none";
                                }, return true,
                              );
                              g.addEventListener("click", function() {
                                  document.getElementById("eye-close").style.display="block";
                                  document.getElementById("eye-open").style.display="none";
                                });
                             });
                        
                           </script>-->
                          <div class="col-md-6 mb-3">
                            <label for="validationTooltip04">Confirm Password</label>
                            <input type="password" name="pwd" id="conpwd" class="form-control" id="validationTooltip04" placeholder="Confirm Password" required>
                          
                          </div>
                            </div>
                            <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="validationTooltip05">Zip</label>
                            <input type="text" name="zip" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                            <div class="error">
                            <?php echo $zipErr;?>
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            
                            <label for="validationTooltip05">Sex</label>
                            <select style="border-bottom: 2px solid green; border-left: none;border-right: none;border-top: none; background: transparent; ouline: none;" class="form-control">
                            <option value="Male">Male</option>
                            <option value="female">Female</option>
                            <option value="Prefer Not to Say">Prefer Not to Say</option>
                            </select>
                            <div class="invalid-tooltip">
                              Please provide your Gender.
                            </div>
                          </div>
                            </div>
						
						  

                        
<style>                         
 .autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

/*
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:
  top: 100%;
  left: 0;
  right: 0;
}
*/
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
.error {
  color: #ff0000;
}
</style>



<!--Make sure the form has the autocomplete function switched off:
<form  action="/action_page.php">
 
    <input id="myInput" type="text" name="myCountry" placeholder="Country">
  </div>
  
</form>-->




                        <div class="py-2 form-check form-check-inline mb-2">
          <input class="form-check form-check-inline" id="tnc" type="checkbox" required value="remember-me"> 
		  <label class="form-check-label" >Agree with our <a href="#"> Terms and Conditions </a>
        </label>
      </div>
                     
                            <button name="submit" class="btn btn-lg btn-success btn-block buttonload" onClick="signPage()" type="submit"><i style="display: none;" id="spin" class="fa fa-spinner fa-spin"></i>Sign Up</button>
                            </form>
                    </div>
                    </section>
                    <script>
		
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);

                      function signPage() {
                       document.querySelector("#spin").style.display ="block";
                      }
                      setTimeOut(signPage, 3000);
                      </script>
                    <style>
.buttonload {
    background-color: #4CAF50; /* Green background */
    border: none; /* Remove borders */
    color: white; /* White text */
    /* padding-top: 12px;  Some padding */
    font-size: 16px; /* Set a font-size */
}

/* Add a right margin to each icon*/ 
#spin {
   
    font-size: 28px;
   
}
</style>
					
					<?php
					include 'footer.php';
					?>
