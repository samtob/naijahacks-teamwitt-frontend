<?php
include 'header.php';
?>
<title> AgroTech - FAQ </title>
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
      <div class="hidden-sm hidden-xs icon-bar">
      <a href="https://www.facebook.com/jovefarm.venture.9" class="facebook"><i class="fab fa-facebook"></i></a> 
        <a href="https://www.twitter.com/FarmsJove" class="twitter"><i class="fab fa-twitter"></i></a> 
        <a href="mailto:AgroTechventure@gmail.com" class="google"><i class="fab fa-google"></i></a> 
        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a> 

      </div>
      <style>
        @media screen and (max-width: 730px) {
          .icon-bar {
            visibility: hidden;
          }
		  #collapseExample1 {
			  
		  }
        }
		@media screen and (max-width: 700px) {
			div  #textbolder, div  #textbolder1, div  #textbolder2 {
				font-size : 16px;
			}
			#learn {
				font-size : 18px;
			}
		}
		@media screen and (max-width: 400px) {
			div  #textbolder, div  #textbolder1, div  #textbolder2 {
				font-size : 12px;
			}
		}
			.text-bolder, .text-bolder1, .text-bolder2 {
							font-weight: 700;
							background: #eee;
							cursor: pointer;
							padding: 30px 0;
							font-size: 24px;
					
							
						}
						#i, #i2, #i1 {
							float: right;
						}
						.active1 {
							background:coral;
							color: #fff !important;
							padding: 10px 0;
						}
						#learn {
						 color: green;
						}
        </style>
		
		<script>
		$(function(){
			$(".text-bolder").click(function(){
				$(".plus, .plus1, .plus2, .plus3").toggleClass("fab fa-plus");
			});
			$(".text-bolder1").click(function(){
				$(".plus4, .plus5, .plus6, .plus7, .plus8").toggleClass("fab fa-plus");
			});
			$(".text-bolder2").click(function(){
				$(".plus9, .plus10, .plus11, .plus12").toggleClass("fab fa-plus");
			});
			$("#learn").click(function() {
				$("#learn").toggleClass("active1");
			});
			$("div .btn").click(function(){
				$("#i").toggleClass("fab fa-arrow-up");
				$("#i1").toggleClass("fab fa-arrow-up");
				$("#i2").toggleClass("fab fa-arrow-up");
				
			});
			
		});
			</script>
			<style>
			.secondary {
				text-align: center;
				padding: 20px;
				color: #fff !important;
			}
			.bread {
				color: green ;
			}
			</style>
			<section class="mb-4">
		<div class="container">
		<div class="row">
		<div class="sec pt-4" style="height: 300px; width: 100%; background-image: url('jovefarmpic/cs1.jpg'); background-position: center; background-size: cover;  background-repeat: no-repeat;">

		<p class="text-center" style="background: #eee; font-style: italic; color: #fff;" class="bread">
	<a href="/" target="_self">Home</a> <span>/</span><a href="faq.php" target="_self">Frequently Asked Questions</a></p>
	
					<center><div class="text-center" id="bgfaq" style="background: #eee; width: 100%; justify-content: center; align-items: center; display: block;  padding: 3px;" class="">
									<h2 class="col-12" style="color: coral; font-size: 36px;" class="">Find a Quick, and Clear <br/> Answer(s) to your Question(s)</h2>
				
									<p style="color: green; font-weight: 500; font-size: 18px">We are an agric-tech platform focused on connecting farmers with farm funders for the purpose of increasing food production, ensuring food security, and create employment oppurtunities in Nigeria.</p>
							</div></center>
							</div>
			
</div>
</div>
</section>
<section id="bgfaq2" style="margin-top: 110px;">
<div class="container">
	
		<div  class="row col-lg-12">
	
		<div style="font-size: 18px; font-weight: 600;" class="col-lg-2">
		Click on the button to view the frequently Asked Questions. Thanks.
		</div>
		<div class="col-lg-10 mb-4">
		<button class="col-sm-12 btn btn-lg btn-success" data-toggle="collapse" href="#collapseExample" role="button"  aria-controls="collapseExample">
	
								<span style="font-size: 16px;" class="text-left">Click to know more about AgroTech</span>
						
							<i id="i" class="text-right fa fa-arrow-down"></i></button>
							
							<div  class="collapse" id="collapseExample">	
					<h4 id="learn" style="margin: 10px 0; cursor: pointer;  font-weight: 800;" class="py-3  px-lg-2 mb-2" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">Click and learn what we do at AgroTech</h4>
				
			<div  id="collapseExample1" class="pl-lg-5 pl-md-2 pt-2 col1 collapse">
				<div style="margin-bottom: 3px;" id="textbolder" class="text-bolder px-4 mt-2" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">What is AgroTech?<i style="float:right;" class="plus fas fa-minus fa-2x"></i><!--<i style="float:right;" id="plus" class="text-right fas fa-plus fa-2x"></i>--></div>
				<div class="collapse multi-collapse" id="collapseExample2">
				<p><span style="text-align: left !important;" style="font-weight: 500;">AgroTech is Nigeria’s 1st agric tech company whose mission is to end poverty in Africa, one rural farmer at a time. We do this by creating an online platform for “everyday people'', to engage in the agricultural value chain by sponsoring farms in rural communities.</span></p>
				</div>
				<div style="margin-bottom: 3px;" id="textbolder" class="text-bolder px-4" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">What does AgroTech do?<i style="float:right;" class="plus1 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse" id="collapseExample5">
				<p><span style="text-align: left !important;" style="font-weight: 500;">In achieving our objective, we empower the rural farmer by providing access to improved  resources (inclusive of Farm inputs, training on best farming techniques, sales of farm produce for higher value) to boost the quality and quantity of their food production and also provide a healthy profit after harvest for both farmer and sponsor.</span></p>
				</div>
				<div style="margin-bottom: 3px;" id="textbolder" class="text-bolder px-4" data-toggle="collapse" href="#collapseExample3"  role="button" aria-expanded="false" aria-controls="collapseExample2 collapseExample3">Who is behind the idea of AgroTech?<i style="float:right;" class="plus2 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse" id="collapseExample3">
				<p><span style="text-align: left !important;" style="font-weight: 500;">We are a team of passionate men and women who have come from the Agriculture, Finance and Technology sector. Our common goal is to seek for ways to impact on rural farmers, contribute to the growth of food production, improve food security in Nigeria, and to ensure more youth participation in Agriculture.</span></p>
				</div>
				<div style="margin-bottom: 3px;" id="textbolder" class="text-bolder px-4" data-toggle="collapse" data-target=".multi-collapse"  role="button" aria-expanded="false" aria-controls="collapseExample2 collapseExample3 collapseExample4">What is the experience of the team in AgroTech?<i style="float:right;" class="plus3 fas fa-minus fa-2x"></i></div>
				<div style="background: #ccc; padding: 20px;" class="collapse multi-collapse" id="collapseExample4">
				<p><span style="font-weight: 500;">  - 4 years experience in Information Technology Management</span></p>
<p><span style="font-weight: 500;">  - 5 years e-commerce expertise</span></p>
<p><span style="font-weight: 500;">  - 4 years financial management expertise</span></p>
				</div>
				</div>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				<button style="margin-top: 20px;" class="col-sm-12 btn btn-lg btn-success" data-toggle="collapse" href="#collapseExample6" role="button"  aria-controls="collapseExample6">
	
								<span style="font-size: 16px;" class="text-left">How to start Farming</span>
						
							<i id="i1" class="text-right fa fa-arrow-down"></i></button>
						
							<div class="collapse" id="collapseExample6">	
					<h4 id="learn" style="cursor: pointer; font-weight: 800;" class="py-3 px-lg-3 mb-2" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">Click for common questions on starting your farm today</h4>
				
			<div  id="collapseExample7" class="collapse">
			<div style="margin-bottom: 3px;" id="textbolder1" class="text-bolder1 px-4" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">How does this work?<i style="float:right;" class="plus4 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse1" id="collapseExample8">
				<p><span style="text-align: left !important;" style="font-weight: 500;">First you have to sign up on our website to create your own personalised AgroTech' profile, you then select a farm of choice to fund. You sponsor the farm, and at the end of the farm cycle stipulated, you will receive a percentage of the profit after the sales of harvest and also your initial Investment capital.</span></p>
				</div>
			<div style="margin-bottom: 3px;" id="textbolder1" class="text-bolder1 px-4" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample9">How do I join AgroTech?<i style="float:right;" class="plus5 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse1" id="collapseExample9">
				<p><span style="text-align: left !important;" style="font-weight: 500;">Joining is easy! All you are required to do is to click on the ‘Sign up’ button on the top right corner of the page.</span></p>
<p><span style="font-weight: 400;">You will be directed to a page that requires you to sign up using either your facebook account or an existing email address. An authentication email will be sent to your personal email address, confirm your email address, and automatically you get a AgroTech Profile Page.</span></p>
<p><span style="font-weight: 400;">Please fill in all the details required.</span></p>
				</div>
		<div style="margin-bottom: 3px;" id="textbolder1" class="text-bolder1 px-4" data-toggle="collapse" href="#collapseExample10"  role="button" aria-expanded="false" aria-controls="collapseExample9 collapseExample10">How do I become a Farm follower?<i style="float:right;" class="plus6 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse1" id="collapseExample10">
				<p><span style="font-weight: 400;">Visit our homepage and ‘Sign Up’, to create your unique AgroTech Profile by providing all the information required. You can either sign up with your email address or your Facebook account.</span></p>
<p><span style="font-weight: 400;">- Go to our Farmshop and select any farm you want to follow</span></p>
<p><span style="font-weight: 400;">- Click on “Follow this farm”</span></p>
<p><span style="font-weight: 400;">You will receive regular feedback of all farm activities through your dashboard on our website</span></p>
				</div>
		<div style="margin-bottom: 3px;" id="textbolder1" class="text-bolder1 px-4" data-toggle="collapse" href="#collapseExample19"  role="button" aria-expanded="false" aria-controls="collapseExample19">What happens after I sponsor a farm?<i style="float:right;" class="plus7 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse1" id="collapseExample19">
				<p><span style="font-weight: 400;">First you will receive a ‘Farm Allocation Email’ which acknowledges receipt of sponsorship of the farm, the location of the farm you sponsored, the farm cycle tenure and the end date of your farm cycle.</span></p>
<p><span style="font-weight: 400;">On a periodic basis, you will receive farm updates which keeps you abreast of all activities on your farm, from the beginning to the end of the farm cycle.</span></p>
				</div>
	<div style="margin-bottom: 3px;" id="textbolder1" class="text-bolder1 px-4" data-toggle="collapse" data-target=".multi-collapse1"  role="button" aria-expanded="false" aria-controls="collapseExample9 collapseExample19 collapseExample10 collapseExample11">How do I Pay for a Farm?<i style="float:right;" class="plus8 fas fa-minus fa-2x"></i></div>
				<div style="background: #ccc; padding: 20px;" class="collapse multi-collapse1" id="collapseExample11">
				<p><span style="font-weight: 500;"> Click on the farm you want to sponsor, select the number of farm units you want sponsor and click on "Buy now" icon.</span></p>
<p><span style="font-weight: 400;">You will be directed to another page to "check out" your order and to agree to the terms and conditions stated. </span></p>
<p><span style="font-weight: 400;">After that select the payment options of either 'Paystack' or 'Simplepay', you will be required to complete the transaction with your ATM Card or you may chose the bank transfer option which would require you to use your bank token to complete the transaction.</span></p>
				</div>
				</div>
				</div>
				
				
				
				
				
				
				
				
				
				
				<button style="margin-top: 20px;" class="col-sm-12 btn btn-lg btn-success" data-toggle="collapse" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample12">
	
								<span style="font-size: 16px;" class="text-left">How my sponsorship works</span>
						
							<i id="i2" class="text-right fa fa-arrow-down"></i></button>
									
							<div class="collapse" id="collapseExample12">	
					<h4 id="learn" style="cursor: pointer; font-weight: 800;" class="py-3 px-lg-3 mb-2" data-toggle="collapse" href="#collapseExample13" role="button" aria-expanded="false" aria-controls="collapseExample13">Click for questions around your funding and return after harvest</h4>
				
			<div id="collapseExample13" class="collapse">
				<div style="margin-bottom: 3px;" id="textbolder2" class="text-bolder2 px-4" data-toggle="collapse" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample14">How do I follow up on my Sponsorship?<i style="float: right;" class="plus9 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse2" id="collapseExample14">
				<p><span style="text-align: left !important;" style="font-weight: 500;">AgroTech is built to give Farm Sponsors periodic updates; we send bi-weekly updates for farm cycles which are 6 months and less and we can send monthly updates for farm cycles which exceed 6 months. Farm updates are written reports, pictures and videos showing the progress being made at different stages of the farm cycle.</span></p>
				</div>
				<div style="margin-bottom: 3px;" id="textbolder2" class="text-bolder2 px-4" data-toggle="collapse" href="#collapseExample15" role="button" aria-expanded="false" aria-controls="collapseExample15">How long does the farm cycle run for?<i style="float:right;" class="plus10 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse2" id="collapseExample15">
				<p><span style="text-align: left !important;" style="font-weight: 500;">Depending on the farm you select, the cycle can run from 5 months to 12 months.</span></p>
				</div>
				<div style="margin-bottom: 3px;" id="textbolder2" class="text-bolder2 px-4" data-toggle="collapse" href="#collapseExample16"  role="button" aria-expanded="false" aria-controls="collapseExample15 collapseExample16">How is the Profit or Return-after-Harvest shared?<i style="float:right;" class="plus11 fas fa-minus fa-2x"></i></div>
				<div class="collapse multi-collapse2" id="collapseExample16">
				<p><span style="text-align: left !important;" style="font-weight: 500;">Farmer - 40% of the profit </span></p>
<p><span style="font-weight: 400;">Farm sponsor - 40% of the profit </span></p>
<p><span style="font-weight: 400;">AgroTech - 20% of the profit </span></p>
<p><span style="font-weight: 400;">The Farm Sponsor’s share of the profit is equivalent to the Returns-After-Harvest which is displayed on the farms. For example, currently our Poultry Unit Returns is 15%, the 15% flat rate is what amounts to 40% of the profit share on the poultry farm.</span></p>
				</div>
				<div style="margin-bottom: 3px;" id="textbolder2" class="text-bolder2 px-4" data-toggle="collapse" data-target=".multi-collapse2"  role="button" aria-expanded="false" aria-controls="collapseExample15 collapseExample16 collapseExample17">Can I invite friends to join me?<i style="float:right;" class="plus12 fas fa-minus fa-2x"></i></div>
				<div style="background: #ccc; padding: 20px;" class="collapse multi-collapse2" id="collapseExample17">
				<p><span style="font-weight: 500;"> Yes, you can invite friends from any social media platforms such as Facebook, Twitter and others to join you on AgroTech.</span></p>
				</div>
				</div>
				</div>
				
				</div>
				</div>
			</div>
			</section>
			<?php
			include 'footer.php';
			?>