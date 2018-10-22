<?php
include 'header.php';
?>
<link rel="stylesheet" href="about-us.css">
<title>AgroTech - About Us</title>
  </head>
    <body>
    
       
    <style>
     /* .bgimg {
        background-image: url('jovefarmpic/bg.jpg');
      }*/
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

 
    <div id="top-head" class="animated slideInUp bg-blue py-2">
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

	<section>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
		  
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="jovefarmpic/img1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Cereals</h1>
                <p> Fund Cereals today </p>
                <p><a class="btn btn-lg btn-outline-success" href="products.php" role="button">Fund a Farm Today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="jovefarmpic/casava.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-center">
              <h1>Cassava</h1>
                <p> Fund a Cassava Farm Today </p>
                <p><a class="btn btn-lg btn-outline-success" href="signup.php" role="button">Sign Up</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="jovefarmpic/casava.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
              <h1>Farm Planning</h1>
                <p> Fund a farm today </p>
                <p><a class="btn btn-lg btn-outline-info" href="gallery.php" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section>
<section>
  <div class="container">
    <div class="row">
    <div class="col">
      <img src="jovefarmpic/imgchk.png" height="50px" width="50px">
    <div class="pt-2 mb-5" style="font-weight: 400;">
    <h4>Animal Production </h4>
    <p> (Pastoral Farming) </p>
</div>
</div>
<div class="col">
<img src="jovefarmpic/imgfact.png" height="50px" width="50px">
    <div class="pt-2 mb-5"  style="font-weight: 400;">
    <h4> Our factory are well-equipped</h4>
    
</div>
</div>
<div class="col">
<img src="jovefarmpic/imganim.png" height="50px" width="50px">
    <div class="pt-2 mb-5" style="font-weight: 400;">
    <h4> Animal Production </h4>
    <p> (Pastoral Farming) </p>
</div>
</div>
<div class="col">
<img src="jovefarmpic/imgweed.png" height="50px" width="50px">
    <div class="pt-2 mb-5" style="font-weight: 400;">
    <h4> Crop Production </h4>
    <p> (Arable Farming) </p>
</div>
</div>
<div class="col">
<img src="jovefarmpic/imgtech.png" height="50px" width="50px">
    <div class="pt-2 mb-5" style="font-weight: 400;">
    <h4> Mordern Technique </h4>
</div>
</div>
</div>
</div>
</section>
<section>
  <div class="container">
    <div class="row">
  <div class="animated slideInLeft col-lg-4">
            <img class="rounded-circle" src="jovefarmpic/mrtoyo.jpg" alt="" width="100%" height="300px">
    <div class="text-center pt-3">
            <h2>Name</h2>
            <p>Founder of AgroTech</p>
</div>

</div>
            <div class="animated slideInRight col-lg-8">
  <h2 style:="letter-spacing: 4px; font-weight: 700;" class="mb-3">We are Agriculture Farm</h2>
<p style="line-height: 30px; text-align: justify; letter-spacing: 3px; text-indent: 100px;">We combine the benefits of the best local farms with advances made possible by technology to grow produce you can feel good about eating.


We have a state-inspected facility on the farm where we wash, grade and package the eggs. We are a fully vertically integrated organization with assets including more than a six (6) arces of poultry rearing area, significant agricultural land, grain storage facilities, feed manufacturing, poultry processing, warehousing and logistics.

At Jolase Ventures Farms Limited Our passion is great tasting food and sharing our harvest with the world. There has never been a greater need for safe, dependable, nutritious food, and we are scaling quickly to transform agriculture around the world.<p>
</div>
    </div>
</div>

  </section>

      <div class="container marketing">

        <!-- Three columns of text below the carousel 
        <div class="row">
        
          <div class="col-lg-4">
            
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 
        </div><!-- /.row -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Vision Statement</h2>
            <p class="lead">To be the foremost digital agriculture platform in Africa admired for its impact on collaborative food production and boosting food security across the continent </p>
  
          </div>
          <div class="col-md-5">
            <p class=" featurette-image img-fluid mx-auto"><i id="brief" class="fas fa-briefcase fa-4x"></i></p>
            <!--<img class="" height="400px" src="jovefarmpic/casava.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          </div>
        </div>
        <style>
          #brief {
            font-size: 250px;
            color: lightcoral;
          }
      
        </style>
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Mission Statement <span class="text-muted">Our Mission Include:</span></h2>
            <p class="lead">To enable everyone participate in the achievement of global food security. To also create employment for the masses</p>
          </div>
          <div class="col-md-5 order-md-1">
          <p class=" featurette-image img-fluid mx-auto"><i id="brief" class="fas fa-briefcase fa-4x"></i></p>
            <!--<img class="featurette-image img-fluid mx-auto" height="400px" src="jovefarmpic/maize.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          </div>
        </div>

        <hr class="featurette-divider">

      <!--  <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"> Our Matra<span class="text-muted">Coming Soon</span></h2>
            <p class="lead">To ensure th</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" height="400px" src="jovefarmpic/p.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>-->

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
<section class="bgimg">
  <div class="container">
    <div class="row">
    <div class="col">
    <div class="text-center chart" data-percent="100"></div>
    <div class="text-center" style="font-weight: 400;">
    <h3   style="font-size: 40px; font-weight: 800;" class="text-center"> 100% </h3>
    <h4> In Crop Production </h4>
    <p> (Arable Farming) </p>
</div>
</div>
<div class="col">
    <div class="text-center chart1" data-percent="100"></div>
    <div class="text-center" style="font-weight: 400;">
    <h3   style="font-size: 40px; font-weight: 800;" class="text-center"> 100% </h3>
    <h4> In Animal Rearing &amp; Production </h4>
    <p> (Pastoral Farming) </p>
</div>
</div>
<div class="col">
    <div class="text-center chart2" data-percent="100"></div>
    <div class="text-center" style="font-weight: 400;">
    <h3   style="font-size: 40px; font-weight: 800;" class="text-center"> 100% </h3>
    <h4> Modern Techniques </h4>
  
</div>
</div>
</div>
</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/easypiechart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>
  $(function() {


    var element = document.querySelector('.chart');
    var element1 = document.querySelector('.chart1');
    var element2 = document.querySelector('.chart2');
    new EasyPieChart(element, {
      animate:{
                duration: 3000,
                enabled:true
            },
      lineWidth: 50,
      lineCap:'circle',
      size: 250,
      scaleLength: false,
      barColor: function(percent) {
    var ctx = this.renderer.getCtx();
    var canvas = this.renderer.getCanvas();
    var gradient = ctx.createLinearGradient(0,0,canvas.width,0);
        gradient.addColorStop(0, "#ffe57e");
        gradient.addColorStop(1, "#09fe1a");
    return gradient;
  }
    });
    new EasyPieChart(element1, {
      animate:{
                duration: 3000,
                enabled:true
            },
      lineWidth: 50,
      lineCap:'circle',
      size: 250,
      scaleLength: false,
      barColor: function(percent) {
    var ctx = this.renderer.getCtx();
    var canvas = this.renderer.getCanvas();
    var gradient = ctx.createLinearGradient(0,0,canvas.width,0);
        gradient.addColorStop(0, "#ffe57e");
        gradient.addColorStop(1, "#09fe1a");
    return gradient;
  }
    });
    new EasyPieChart(element2, {
      animate:{
                duration: 3000,
                enabled:true
            },
      lineWidth: 50,
      lineCap:'circle',
      size: 250,
      scaleLength: false,
      barColor: function(percent) {
    var ctx = this.renderer.getCtx();
    var canvas = this.renderer.getCanvas();
    var gradient = ctx.createLinearGradient(0,0,canvas.width,0);
        gradient.addColorStop(0, "#ffe57e");
        gradient.addColorStop(1, "#09fe1a");
    return gradient;
  }
    });
  });
  </script>

      <!-- FOOTER -->
      <?php
      include 'footer.php';
      ?>