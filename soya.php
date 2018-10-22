<?php
include 'header.php';
?>
<title>Jovefarm- Maize</title>
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
               <a class="dropdown-item" href="products.php">Products</a>
               <a title="Frequently Asked Questions" class="dropdown-item" href="faq.php">FAQ</a>
               <a class="dropdown-item" href="about-us.php">About Us</a>
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

   
<style>
#amountsoya > p {
    font-weight: 500;
    font-size: 20px;
}
.desc2 {
    font-weight: 700;
}
</style>
<div style="margin: none; padding: none;background-image: url('jovefarmpic/soya.jpg'); height: 200px; background-repeat: no-repeat; background-size: cover; background-position: center;" class="text-center text-white"> <h1 style="padding-top: 80px">Soya Beans </h1></div>
<section class="pt-5 px-lg-4">

<div class="container">

<div class="pt-2 row">
<div class="col-lg-4">
<img src="jovefarmpic/soya1.jpg" height="350px" width="100%" alt="poultryfarm">
</div>
<div id="amountsoya" class="col-lg-3">
<p>Minimum Investment : <b style="font-size: 26px;"><span  class="mr-2" style="color: lightcoral;">&#8358;</span>5,000,000</b> </p>
<p style="font-size: 18px;"> Soya Farm Unit(s) left: <b> 2</b> </p>
<p style="font-size: 18px;"> Contract Period : <b> 1 Year </b ></p>
<p style="font-size: 18px;"> Expected Return : <b> 20% </b></p>
<?php
          if(isset($_SESSION["uid"])) {
              echo '
<p><a href="https://paystack.com/pay/5m"><button class="btn btn-lg btn-outline-success"> Fund Now </button></a></p>';
          } else {
              echo '<p><a href="login.php"><button class="btn btn-sm btn-outline-success"> Login to Fund </button></a></p>';
          }
          ?>
          <p id="ck" style="font-size: 14px;"><button class="btn btn-sm btn-outline-info">Clck to  toggle the calculator on investment</button></p>
</div>
<script>
    $("#ck").click(function() {
            $("#calculatorfarm").toggle("slow");
    });
    </script>
        <div id="calculatorfarm" class="col-lg-5">
                     <div class="col-lg-12 text-left">
                          <h2 class="mb-2 cl-blue">Farm Calculator</h2>
                          <p class="">Your Returns are calculated as follows:
                          <ul type="square">
                          <li> Original Investment</li>
                          <li>Profit Value calculated as Original Investment x Fixed Percentage Interest rate</li>
                          <li>Total Return calculated as the Original Investment + Profit Value </li>
                          </ul>
                          </p>
                        </div>
                      <div class="row justify-content-left">
                        <div class="col-lg-12 col-md-12">
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
                                      
                                    </div>
                                    <script>
                                   
                                        function calc() {
                                  
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
              
                        <div class="col-lg-12 col-md-12">
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
                  
</div>

<hr>
<div class="desc2 pt-4 col-lg-10">
<h3 class="mb-3">Farm Description</h3>
<hr>
<p>Glycine max, popularly called Soya beans or Soybeans is a globally important crop for both human and animal consumption. Soybean is used in many processed foods and some common products include Soy milk, Soybean oil, Soy sauce and Soy flour.

There are different varieties of Soybean cultivated in Nigeria but we will be focusing on the TGX 1951 variety based on its consumption and high yield potential.

We will commence production on 50 Hectares of farmland located in Plateau state for this soybean project and this will have a direct impact on about 200 farmers in Nigeria.

Soybean is a nutritional powerhouse rich in protein, fat, calcium, folate, and Vitamin C. Adding soy protein to food such as bread, pasta and cornmeal is an efficient way to ensure adequate nutrition and also get the added benefits of soybean phytochemicals such as soyasaponins, phytosterols, lignans, phytic acid, and oligosaccharides.

Soybean is also an alternative to many dairy products. For example, soybean is the primary ingredient for dairy product substitutes such as soy cheese and soy ice cream.

Based on its high nutrient content, there is a soy-based infant formula that adequately supports normal infant growth and development, and is accepted by the FDA as safe for use.

As Africa continues to experience explosive growth with its population, the demand of soybeans will continue to increase. According to IITA, the demand for soybeans in Nigeria alone is currently estimated at 2.2 million tons while the annual production is only at 600,000 tons.

Although Nigeria remains the largest producer of soybeans in Sub-Saharan Africa, the huge gap between demand and supply makes the crop insufficient for consumption, hence, a need to cultivate soybean.</p>



<p>What does my sponsorship cover? </p>
<hr>

<p>1) Renting the Soya farm on your behalf</p>

<p>2) Farm inputs including high-quality seeds, fertilizers and farm tools</p>

<p>3) Farmers labour to work on the farm</p>

</p>4) Logistics to get the Soya Beans to the market to sell them</p>
<hr>
Farm Location: Ibadan, Oyo State.
</div>
</div>
</section>
<?php
include 'footer.php';
?>