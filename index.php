<?php
include 'header.php';
?>

   <title>Jovefarm</title>
  </head>
    <body onload="myFunction()" onunload="stFunction()">
        
		<div id="loadingContent">
      <div id="loading">
            <div id="loader">
                    <span id="loader__inner"></span>
                    <span id="loader__inner"></span>
            </div><br>
            <!--<p id="demo10"></p>-->
            <h1 class="text-white" id="demo"></h1>
            <img id="img" src="jovefarmpic/front.png" width="300px" height="150px" alt="jovefarm logo" />
</div>
        </div>
           <script>
            //var a= document.createElement("h1");
//var b = document.createTextNode("We are loading the page for you. Please wait...");
// a.appendChild(b);
// document.appendChild(a);
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 4000);
}

function showPage() {
  document.getElementById("loadingContent").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
var i = 0;
var txt = 'We are loading the page for you. Please wait...';
var speed = 50;
var myApp =  setInterval( myMove, speed);
function myMove() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
 
  }
}
function stFunction(){
clearInterval(myApp);
}
 </script>         
          
        <style>
          @media screen and (max-width : 768px) {
            #img {
                width: 250px;
                height: 100px;
            }
            li .animated {
              animation: none;
            }
          }
        </style>           
        <main id="myDiv" style="display: none;" class="animate-bottom">
        <header class="d-inline">

 
    <div id="top-head" class=" animated slideInUp bg-blue py-2">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between text-white">
                <div class="small d-flex">
                    <div class="mr-3 d-none d-md-block">Follow us</div>
                    <div>
                        <a class="text-light" href="https://www.facebook.com/AgroTechltd"><i class="fab fa-lg fa-facebook mr-0 mr-md-3"></i></a>
                        <a class="text-light" href="https://www.twitter.com/AgroTech"><i class="fab fa-lg fa-twitter mr-0 mr-md-3"></i></a>
                        <a class="text-light" href="https://www.instagram.com/AgroTech"><i class="fab fa-lg fa-instagram mr-0 mr-md-3"></i></a>
                        <a class="text-light" href="https://www.linkedin.com/in/#"><i class="fab fa-lg fa-linkedin mr-0 mr-md-3"></i></a>
                        <!--<a class="text-light" href=""><i class="fab fa-lg fa-youtube mr-0 mr-md-3"></i></a>
                        <a class="text-light" href=""><i class="fab fa-lg fa-pinterest mr-0 mr-md-3"></i></a>-->
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
                <a class="nav-link px-lg-3 dropdown-toggle text-left" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products & Services
                </a>
                <div class="animated slideInUp dropdown-menu bg-yellow my-0 py-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="products.php">Products</a>
                <a title="Frequently Asked Questions" class="dropdown-item" href="faq.php">FAQ</a>
                <a class="dropdown-item" href="#calc">Calculator</a>
				        <a class="dropdown-item" href="gallery.php">Gallery</a>
                
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link px-lg-3 dropdown-toggle text-left" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Who We Are
                </a>
                <div class="animated slideInUp dropdown-menu bg-yellow my-0 py-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="about-us.php">About Us</a>
                <a class="dropdown-item" href="#contact">Contact Us</a>
                
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link px-lg-4 text-left" href="signup.php" role="button" aria-haspopup="true" aria-expanded="false">
                SignUp
                </a>
                
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link px-lg-4 dropdown-toggle text-left" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
                </a>
                <div class="animated slideInUp dropdown-menu bg-yellow my-0 py-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="in.php">Events</a>
              
                
                </div>
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
           
           
        
            <style>


.openBtn {
   background: none;
    border: none;
    padding: 10px 20px;
    font-size: 20px;
    cursor: pointer;
}

.openBtn:hover {
    background: #256520;
    color: #fff;
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
</style>


<div id="myOverlay" class="overlay1">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay1-content">
    <form action="">
      <input type="text"  placeholder="Search.." name="search">
      <button class="btn btn-md btn-outline-success" id="search" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<button class="openBtn text-right" onclick="openSearch()"><i class="fa fa-search"></i></button>


        </div>
        </div>

    </nav>
    </header>
	<script>
	$(document).ready(function(){
  $("form > #search").on("click", function(event) {
	 event.preventDefault();
    var value = $(this).val().toLowerCase();
	document.getElementById("sch").style.display="none";
    $("div > .card1").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <script>
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
	
    document.getElementById("firstList").style.display = "none";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
	document.getElementById("sch").style.display="block";
    document.getElementById("firstList").style.display = "flex";
}
</script>
    <!-- <style>
      #searchInput {
    width: 130px;
    box-sizing: border-box;
    
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    /*background-image: url('searchicon.png');*/
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

#searchInput:focus {
    width: 100%;
}
      </style>
     <script>
        function close() {
          alert("hello");
         // document.getElementsByTagName("ul")[0].removeAttribute("id");
        }
        function search() {
          alert("hello");
          //event.preventDefault();
          document.getElementById("firstList").style.display = "none";
          document.getElementById("searchInput").style.display = "block";
          document.getElementById("searchClose").style.display = "block";
        }
        </script>
      <button class="open-button" onclick="openForm()">Chat With Us</button>
      
      <div class="chat-popup" id="myForm">
        <form action="#" class="form-container">
          <h1>Chat</h1>
      
          <label for="msg"><b>Message</b></label>
          <textarea placeholder="Type message.." name="msg" required></textarea>
      
          <button type="submit" class="btn">Send</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>-->
	  <style>
        @media(max-width: 730px) {
          .icon-bar {
            visibility: hidden;
          }
        }
       
                                @media screen and (max-width: 600px) {
                                 span .fa,  span .fa {
                                    padding: none;
                                    background: none;
                                  }
                                }
                                </style>
      <div id="sch">
      <div class="hidden-sm hidden-xs icon-bar">
        <a href="https://www.facebook.com/jovefarmltd" class="facebook"><i class="fab fa-facebook"></i></a> 
        <a href="https://www.twitter.com/AgroTech" class="twitter"><i class="fab fa-twitter"></i></a> 
        <a href="https://www.instagram.com/AgroTech" class="youtube"><i class="fab fa-instagram"></i></a> 
        <a href="mailto:AgroTechventure@gmail.com" class="google"><i class="fab fa-google"></i></a> 
        <a href="https://www.linkedin.com/in/#" class="linkedin"><i class="fab fa-linkedin"></i></a>
        <!--<a href="#" class="youtube"><i class="fab fa-youtube"></i></a> -->
      </div>
      
    <section class="sec-home-slider bg-white">
    
            <div class="row no-gutters align-items-center text-left justify-content-between">
                <div class="col-xl-4 col-lg-5 offset-md-1 pl-xl-5 pl-lg-0 pr-xl-0 pr-lg-3 py-lg-0 p-4">
                <div class="hero-content py-3">
                    <div class="hero-text">
                    <h1 class="animated BounceInRight delay-anim-xs cl-yellow"><b>AgroTech Limited</b></h1>
                    
                          <h5 class="animated fadeInRight delay-anim-xs cl-yellow">  We Are Transforming Agriculture </h5>
                            <p class="animated fadeInLeft delay-anim-sm lead my-4 font-weight-normal">
                            AgroTech Ltd is a well-established Farming Business based in Nigeria. We operate a sustainable approach to farming and the environment. </p>
                    </div>
                    <div class="animated fadeInLeft delay-anim-md hero-cta">
                    <a href="signup.php" class="btn btn-yellow btn-sm">Apply Now to Empower a Farmer</a>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="slider-div animated slideInRight">
                        <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/img1.jpg" alt="First slide">
                                    <div style="position: absolute; bottom: 40%; text-align: center;" class="carousel-caption">
    <h1>CEREALS</h1>
    <p class="py-2 text-white">Invest on a Cereals farm today</p>
    <a href="signup.php"><button class="btn btn-md btn-outline-success text-white"> Sign Up </button></a>
  </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/casava.jpg" alt="Second slide">
                                    <div style="position: absolute; bottom: 40%; text-align: center;"  class="carousel-caption">
    <h1>CASSAVA</h1>
    <p class="py-2 text-white">Invest on a Cassava farm today</p>
    <a href="signup.php"><button class="btn btn-md btn-outline-success text-white"> Sign Up </button></a>
  </div>
                                  </div>
                                  <div  class="carousel-item">
                                    <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/maize1.jpg" alt="Third slide">
                                    <div style="position: absolute; bottom: 40%; text-align: center;" class="carousel-caption">
    <h1>MAIZE</h1>
    <p class="py-2 text-white">Invest on a Maize farm today</p>
    <a href="signup.php"><button class="btn btn-md btn-outline-success text-white"> Sign Up </button></a>
  </div>
                                  </div>
                            
                                <div class="carousel-item">
                                        <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/cotton.jpg" alt="Fourth slide">
                                        <div style="position: absolute; bottom: 40%; text-align: center;"  class="carousel-caption">
    <h1>COTTON</h1>
    <p class="py-2 text-white">Invest on a Cotton farm today</p>
    <a href="signup.php"><button class="btn btn-md btn-outline-success text-white"> Sign Up </button></a>
  </div>
                                      </div>
                                    
                                    <div class="carousel-item">
                                            <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/poultry1.png" alt="Fifth slide">
                                            <div style="position: absolute; bottom: 40%; text-align: center;"  class="carousel-caption">
    <h1>POULTRY</h1>
    <p class="py-2 text-white">Invest on a Poultry farm today</p>
    <a  href="signup.php"><button class="btn btn-md btn-outline-success text-white"> Sign Up </button></a>
  </div>
                                        </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="sr-only carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span id="arrow-left" style=" padding: 15px; border-radius: 50%; background: chartreuse;" class="fa fa-arrow-left fa-2x"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="sr-only carousel-control-next-icon" aria-hidden="true"></span>
                                  <span id="arrow-right" style=" padding: 15px; border-radius: 50%; background: chartreuse;" class="fa fa-arrow-right fa-2x"></span>
                                </a>
                              </div>
                              
                   <!-- <div class="owl-carousel owl-theme" id="product-slider">
                    <div class="slide">
                        <img src="jovefarmpic/img1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="jovefarmpic/img2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="jovefarmpic/img3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="jovefarmpic/img4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="jovefarmpic/img5.jpg" alt="">
                    </div>
                    </div>-->
                </div>
                </div>
            </div>
        </div>
        </section>
        <section class="sec-about-event py-4 bg-dark animated slideInRight delay-anim-md">
	<div class="container-fluid my-lg-2">
		<div class="row no-gutters drop-shadow drop-shadow-xl">
			<div class="col-lg-8 bg-white">
				<div  class="hero-text p-5">
					 
                        <h5 style="padding-top: 12%;" >  We Are Transforming Agriculture </h5>
                        <p>
                        AgroTech Ltd is a well-established Farming Business based in Nigeria. We operate a sustainable approach to farming and the environment. Complemented by our highly skilled and experienced workforce we gain optimum crop production results, within a cost effective system. A Self-motivated, dedicated workforce has been key to the Business’s success. AgroTech Limited is on a mission to transform agriculture by building and operating environmentally responsible farms.</p>
					<div class="jumbo cta  text-center">
						<a href="about-us.php" class="btn btn-sm btn-jov">Read more 
						<!-- <i class="fa fa-arrow-right ml-2"></i> -->
						</a>
					</div>
				</div>
			</div>
			<div style="background: #3d3d3d;" class="col-lg  d-flex flex-column">
				<div class="d-flex tile-box flex-fill">
					<div class="tile d-flex align-items-center col">
						<h2 class="text-center text-white w-100 text-capitalize">Our Logo</h2>
					</div>
				
				</div>
				<div class=" text-center">
                    <center><img class="text-center" id="jovelogo" src="jovefarmpic/front.png" width="300px" height="150px" alt="logo"></center>
                </div>
				

			</div>
		</div>
    </div>
	</section>
<style>
@media screen and (max-width: 738px) {
#jovelogo {
  width: 250px;
  height: 150px;
  padding-bottom: 50px;
}

}
</style>
                       <section id="calc" class="sec-calculator bg-blue-fade py-5">
                    <div class="container my-4">
                     <div class="col-lg-12 col-md-12 text-left">
                          <h2 class="mb-4 cl-blue">Farm Calculator</h2>
                          <p class="">Your Returns are calculated as follows:
                          <ul type="square">
                          <li> Original Investment</li>
                          <li>Profit Value calculated as Original Investment x Fixed Percentage Interest rate</li>
                          <li>Total Return calculated as the Original Investment + Profit Value </li>
                          </ul>
                          </p>
                        </div>
                      <div class="row justify-content-left">
                        <!-- <div class="col-lg-8 col-md-10 text-left">
                          <h2 class="mb-4 cl-blue">Mortgage Calculator</h2>
                          <p class="">Your monthly mortgage payment is calculated by adding the costs of the loan’s principal and interest, as well as any money held in escrow for taxes and insurance. How much will it be? Get an idea now and compare different loan terms.</p>
                        </div> -->
                        <div class="col-lg-6 col-md-6">
                          <div class="card border-0 mt-3 drop-shadow drop-shadow-xs">
                            <div class="card-body px-lg-5 py-lg-4">
                              <form action="" class="my-3">
                                <div class="row">
                                  <div class="col-lg">
                                  <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">&#8358;</span>
                              </div>
                              <select id="selection" style="border-bottom: 2px solid green; border-left: none;border-right: none;border-top: none; background: transparent; ouline: none;" class="form-control">
                            <optgroup label="Invest Now">
                            <option>--Choose An Amount-- </option>
                            <option id="amount1" value="5000000">5,000,000</option>
                            <option id="amount2" value="7000000">7,000,000</option>
                            <option id="amount3" value="10000000">10,000,000</option>
                            <option id="amount4" value="other">Other</option>
                            </optgroup>
                            </select>
                                      <!--<input type="text" class="px-2 form-control b-line" placeholder="Price Of unit(s)">-->
                                    </div>
                                    <script>
                                   // $(function() {
                                     // e.addEventListener("click", function(event) {
                                        function calc() {
                                          //event.preventDefault();
                                      var select = document.getElementById("selection");
                                      var s = select.selectedIndex;
                                      var a = parseFloat(document.getElementById("amount1").value);
                                      var b = parseFloat(document.getElementById("amount2").value);
                                      var c = parseFloat(document.getElementById("amount3").value);
                                      var d = document.getElementById("amount4");
                                      var i =  parseFloat(document.getElementById("other").value);
                                      var e = parseFloat(document.getElementById("am").value);
                                     
                                        
                                        if(s==0) {
                                          alert("please choose an amount");
                                        }
                                        if(s == 1) {
                                        var k = a * (20/100);
                                        var j = k + a;
                                        document.getElementById("am1").innerHTML= a;
                                        document.getElementById("am2").innerHTML= k;
                                        document.getElementById("am3").innerHTML= j;
                                        } if(s == 2) {
                                          var r = b * (20/100);
                                        var g = r + b;
                                        document.getElementById("am1").innerHTML= b;
                                        document.getElementById("am2").innerHTML= r;
                                        document.getElementById("am3").innerHTML= g;
                                        } if(s == 3) {
                                          var p = c * (20/100);
                                        var x = p + c;
                                        document.getElementById("am1").innerHTML= c;
                                        document.getElementById("am2").innerHTML= p;
                                        document.getElementById("am3").innerHTML= x;
                                        } if (s == 4) {
                                          document.getElementById("specify").style.display="block";
                                          if(i<5000000) {
                                            alert("please choose value greater than 5,000,000");
                                          } else {
                                          var q = i * (20/100);
                                        const z = q + i;
                                        document.getElementById("am1").innerHTML= i;
                                        document.getElementById("am2").innerHTML= q;
                                        document.getElementById("am3").innerHTML= z;
                                          }
                                        }
                                      
                                    }
                                    </script>
                                    <div class="py-3 input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">%</span>
                              </div>
                                      <input type="text" value="20" disabled class="disabled px-2 form-control b-line" placeholder="interest Rate">
                                    </div>
                                  </div>
                                  <div id="specify" style="display: none;" class="col-lg">
                                   <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">&#8358;</span>
                              </div>
                                      <input type="text" id="other" class="px-2 form-control b-line" placeholder=" Other Amount">
                                    </div>
                                   
                                  </div>
                                  <!--<div class="col-lg">
                                    <div class="form-group">
                                      <button class="btn btn-yellow btn-sm dropdown-toggle w-100" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Loan Term
                                  </button>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control b-line" placeholder="&#8358; Homeowners Insurance">
                                    </div>
                                  </div>-->
                                  <div class="col-12">
                                    
                                    <div class="form-group">
                                      <button onClick="calc()" id="am" class="btn btn-yellow btn-sm mt-3" type="button">Calculate</button>
              
                                      <button class="btn btn-jov btn-sm mt-3" type="submit" >Reset</button>
                                    </div>
              
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
              
                        <div class="col-lg-6 col-md-6">
                          <div class="card border-0 mt-3  drop-shadow drop-shadow-xs">
                            <div class="card-body px-lg-5 py-lg-4">
              
                            <div class="row">
                            <div class="col-8">
                            <p>Orginal Investment
                            <br>
                            <small class="font-weight-light">Involves the amount invested</small>
                            </p>
                            
                            </div>
                            <div class="text-right mr-0">
                            <p id="am1">&#8358;0</p>
                            </div>
                            </div>
              
              
                             <div class="row mt-2">
                            <div class="col-8">
                            <p>Profit Value<b>(PV)</b>
                            <br>
                            <small class="font-weight-light">Your Profit Value Includes (Original Investment x fixed Percentage interest rate) </small>
                            </p>
                            
                            </div>
                            <div class="text-right mr-0">
                            <p style="color: blue" id="am2">&#8358;0</p>
                            </div>
                            </div>
                            <div class="row mt-2">
                            <div class="col-8">
                            <p>Total Return On Investment
                            <br>
                            <small class="font-weight-light">Total Return Includes (Investment x Fixed Percentage Interest Rate + Original Investment)</small>
                            </p>
                            
                            </div>
                            <div class="text-right mr-0">
                            
                            <p class="text-blue" id="am3">&#8358;0</p>
                            
                            </div>
                            </div>
                            <style>
                            .text-blue {
                              border-bottom: 3px double green;
                              border-top: 3px solid green;
                            }
                            </style>
              
                            <!--<div class="row">
                            <a href="about-us.php" class=" ml-3 btn btn-sm btn-jov">
                            Read more   
                              </a>
                            </div>-->
              
                          
                            </div>
                            </div>
                            </div>
              
              
                      </div>
                    </div>
                  </section>   
</div>
				  
				  <style>
          @media screen and (max-width: 600px) {
           #sec .row  {
              display: block;
              width: 100%;
              
            }
          }
          
         @media screen and (max-width: 500px) {
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
  opacity: 0.7;
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

<section  class="bg-white py-4">
<div class="container">
<div class="row">
<div class="py-2 card1">
<img src="jovefarmpic/casava.jpg" alt="Jane" style="height: 300px;width:100%">
  <h1>Cassava</h1>
  <p class="title">Invest on a Cassava farm today</p>
  <div class="soc">
  <a href="cassava.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">Fund Now</button></a> 
</div>
</div>
<div class="py-2 card1">
<img src="jovefarmpic/maize.jpg" alt="Mike" style="height: 300px;width:100%">
  <h1>Maize</h1>
  <p class="title">Invest on a Maize farm today</p>
  <div class="soc">
  <a href="maize.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">Fund Now</button></a> 
</div>
</div>

<div class="py-2 card1">
<img src="jovefarmpic/poultry.jpg" alt="John" style="height: 300px;width:100%">
  <h1>Poultry</h1>
  <p class="title">Invest on a Poultry farm today</p>
  <div class="soc">
  <a href="poultry.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">Fund Now</button></a> 
</div>
</div>

<div class="py-2 card1">
<img src="jovefarmpic/palm.jpg" alt="John" style="height: 300px;width:100%">
  <h1>Palm</h1>
  <p class="title">Invest on a Palm farm today</p>
  <div class="soc">
  <a href="palm.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">Fund Now</button></a> 
</div>
</div>

<div class="py-2 card1">
<img src="jovefarmpic/cotton.jpg" alt="John" style="height: 300px;width:100%">
  <h1>Cotton</h1>
  <p class="title">Invest on a Cotton farm today</p>
  <div class="soc">
  <a href="cotton.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">Fund Now</button></a> 
</div>
</div>
<div class="py-2 pt-5 card1">
  <p class="title">Invest on a Farm</p>
  <div class="soc">
  <a href="products.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">More Products</button></a> 
</div>
</div>

</div>
<div class="text-center py-4 mb-4"><p style=" font-size: 40px; font-weight: 600;"> More on our Gallery Page</p> <p><a href="gallery.php"><button class="btn btn-lg btn-outline-success">Gallery</button></a></p></div>
</div>

  <!--<div class="column">
    <div class="card">
      <img src="jovefarmpic/casava.jpg" alt="Jane" style="height: 300px;width:100%">
      <div class="container">
        <h2>Cassava</h2>
        <h4>N99,000</h4>
        <a href="checkoutform.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">Fund Now</button></a>
      </div>
    </div>
  </div>
   
  <div class="column">
    <div class="card">
      <img src="jovefarmpic/maize.jpg" alt="Mike" style="height: 300px;width:100%">
      <div class="container">
        <h2>Maize</h2>
        <h4>N99,000</h4>
        <a href="checkoutform.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md button">Fund Now</button></a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="jovefarmpic/poultry.jpg" alt="John" style="height: 300px;width:100%">
      <div class="container">
        <h2>Poultry</h2>
        <h4>N99,000</h4>
        <a href="checkoutform.php"><button style="margin-bottom: 15px;" class="btn btn-outline-success btn-md">Fund Now</button></a>
      </div>
    </div>
  </div>
</div>
</div>-->
</section>
<style>
/*.column .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: auto;
  margin: auto;
  text-align: center;
  font-family: arial;
}*/
</style>
 <section>
  <div class="container">
    <div class="row">
<div class="col-lg-4">
<img src="jovefarmpic/bgfarm.png" height="200px" width="90%">
    <div class="pt-3 mb-5 text-center"  style="font-weight: 400;">
    <h4> Empowering Farmers</h4>
    <p style="color: green; font-weight: 600;"> We create employment oppurtunities also serve as passive income for potential investor(s) </p>    
</div>
</div>
<div class="col-lg-4">
<img src="jovefarmpic/bgmoney.png" height="200px" width="90%">
    <div class="pt-3 mb-5 text-center" style="font-weight: 400;">
    <h4> Earn Money </h4>
    <p style="color: green; font-weight: 600;"> Our Funders can earn from 10-40% of their original Investment </p>
</div>
</div>
<div class="col-lg-4">
<img src="jovefarmpic/bgsecure.png" height="200px" width="90%">
    <div class="pt-3 mb-5 text-center" style="font-weight: 400;">
    <h4> Ensuring Foood Security </h4>
    <p style="color: green; font-weight: 600;"> We also ensure food security and enough circulation of food in the Nation </p>
</div>
</div>
</div>
</div>
</section>
                  <section id="about" class="py-2 bg-white p-3">
                  <div class="container">
                        <h2 class="text-center">What will do</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified " role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Products</a>
                          </li>
                        </ul>
                      <script>
				/*	  var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 2000000000);
}

function showPage() {
  document.getElementById("loadingContent").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}*/

function openForm() {
          document.getElementById("myForm").style.display = "block";
      }
      
      function closeForm() {
          document.getElementById("myForm").style.display = "none";
      }

					  </script>
                        <div class="tab-content">
                          <div id="home" class="container tab-pane active text-justify animated slideInLeft"><br>
                            <h3 class="py-3 px-2 text-left bg-yellow ">We are Agriculture Farm</h3>
                           <p class="pt-3 text-left"> We combine the benefits of the best local farms with advances made possible by technology to grow produce you can feel good about eating.

                            We have a state-inspected facility on the farm where we wash, grade and package the eggs. We are a fully vertically integrated organization with assets including more than a hundred (100) hectares of poultry rearing area, significant agricultural land, grain storage facilities, feed manufacturing, poultry processing, warehousing and logistics.

                            At AgroTech Limited Our passion is great tasting food and sharing our harvest with the world. There has never been a greater need for safe, dependable, nutritious food, and we are scaling quickly to transform agriculture around the world.</p>


                          </div>
                          <div id="menu1" class="container tab-pane text-left fade animated slideInUp"><br>
                            <h3 class="py-3 px-2 bg-yellow">We are Agriculture Farm</h3>
                            <p class="pt-3 text-justify"> We combine the benefits of the best local farms with advances made possible by technology to grow produce you can feel good about eating.

 
                             We have a state-inspected facility on the farm where we wash, grade and package the eggs. We are a fully vertically integrated organization with assets including more than a hundred (100) hectares of poultry rearing area, significant agricultural land, grain storage facilities, feed manufacturing, poultry processing, warehousing and logistics.
 
                             At AgroTech Limited Our passion is great tasting food and sharing our harvest with the world. There has never been a greater need for safe, dependable, nutritious food, and we are scaling quickly to transform agriculture around the world.</p>
 
 
                          </div>
                          <div id="menu2" class="container tab-pane fade animated slideInRight"><br>
                            <h3 class="py-3 px-2 bg-yellow text-center">Our Products</h3>
                            <p class="pt-3 text-center"> AgroTech Limited is able to grow over 250 different varieties of leafy greens and herbs and harvest for peak flavor. We offer standard mixes and custom blends for endless culinary possibilities. Our greens have longer shelf life and the highest possible food safety controls from seed to package.</p>
 
 
                          </div>
                        </div>
                      </div>
                    </section>
                    <hr>
                  <section id="contact" class="sec-contact bg-white py-4">
                    <div class="">
                      <div class="row no-gutters justify-content-center justify-content-lg-between align-items-center">
                        <div class="col-md-9 col-xl-5 col-lg-6 offset-lg-1 pl-xl-4  p-4">
                          <div>
                            <div class="text-left mb-3 ">
                              <h2 class="text-capitalize cl-blue mt-4">Contact us at:</h2>
                              <hr>
                             <address>
                                    <h3>Addresses:</h3>
                                    <h5> Head Office </h5>
                                    <ul class="text-capitalize">
                                 <li> totoola agbonyin village at oko oba, jobele road. oyo state.</li>
                                
                                </ul>
                                <h5> Branch Office </h5>
                                <ul>
                                    <li>Plot No.21 Community, Oko Olowo / Bode - Saadu Express Road, Ilorin Kwara State</li>
                             </ul>
                             </address>
                              
                             
                            </div>
                            <h2 class="text-center">OR</h2> 
                         
                             
                            <form action="jovemail.php" class="mt-4" method="POST">
                              <h4 class="text-center"><strong>BEEP US A MAIL</strong></h4>
                                <div class="row">
                                  <div class="col-lg">
                                    <div class="form-group">
                                      <input name="name" type="text" class="p-2 form-control b-line" placeholder="Name">
                                    </div>
                                  </div>
                                  <div class="col-lg">
                                    <div class="form-group">
                                      <input name='email'  type="text" class="p-2 form-control b-line" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    
                                    <div class="form-group">
                                      <input name="subject"  type="text" class="p-2 form-control b-line" placeholder="subject">
                                    </div>
              
                                    <div class="form-group">
                                      <textarea name='message' style="resize: none; outline: none; " rows="4" class="p-2 form-control b-line" placeholder="Message"></textarea>
                                    </div>
              
                                    <div class="form-group">
                                      <button class="form-control btn btn-yellow btn-md mt-3" name="submit" type="submit">Submit</button>
                                    </div>
              
                                  </div>
                                </div>
                              </form>
                          </div>
                        </div>
                        <div class="col-lg-6 map-view bg-dark">
                        <iframe id="map" class="x-map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15812.937362713148!2d3.915896415083649!3d7.764955160458616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sTotoola+Agbonyin+Village+At++Jobele+Road.+Oyo+State.!5e0!3m2!1sen!2sng!4v1537781960841" width="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
                       <!--<iframe id="map" class="x-map " src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15858.510985034074!2d3.4153855!3d6.4418242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6398eb486f05c88!2sFBN+Mortgages+Limited!5e0!3m2!1sen!2sng!4v1532418294334" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                        </div>
                      </div>
                    </div>
                  </section>
                  <!--team section -->
                  <style>
                   section .row .card:hover, section .row .card:focus {
                      box-shadow: 3px 5px 9px 6px rgba(0,0,0,0.4);
                      cursor: pointer;
                      padding: 0 5px;
                      opacity: 0.85;
                    }
                    section .row {
                      width: 100%;
                    }
					section .column {
						width: 33.3%;
						padding: 10px 10px;
					}
          @media screen and (max-width: 600px) {
            section .column .card {
						width: 100%;
						padding: 10px 10px;
					}
          }
                    </style>
                                  <section class="sec-subscribe bg-green">
                        <div class="container py-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 col-md-11">
                                    <div class="subscribe-box d-flex align-items-center">
                                        <div class="text-center col-md-8">
                                            <h6 class="text-white text-uppercase mb-0">subscribe to stay in the Loop!</h6>
                                        </div>
                                        <form action="">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <input placeholder="Your Email Address" aria-label="Recipient's username" aria-describedby="button-addon2" class="form-control border-0" style="border-radius: 0;" type="text">
                                                    <div class="input-group-append">
                                                        <button class="btn text-white bg-yellow" type="button" id="button-addon2" style="border-radius: 0;">Subscribe</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
			
        <?php
		include 'footer.php';
		?>