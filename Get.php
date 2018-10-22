
<html>
<head><title>Weather Report of <?php echo $_GET['q']; ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<script type="text/javascript"src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<style>
h1, h2, h3, h4, h5, h6 {
  font-family: "Comic Sans MS", cursive, sans-serif;
}
</style>
<body>

<?php
error_reporting(0);
//$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
//date_default_timezone_set($get['timezone']);
$city = $_GET['q'];
$api = "e91853481dea11b1d12af125ef5057b8";
 $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=".$api;
 $data = json_decode(file_get_contents($string),true);
 
 $temp = $data['main']['temp'];
 
 $icon = $data['weather'][0]['icon'];
 $visibility = $data['visibility'];
 $visibilitykm = $visibility / 1000;
 $country =  "<h1><b>".$data['name'].",".$data['sys']['country']."</h1></b>";
 
 $logo = "<center><img height='100px' width='100px' src='http://openweathermap.org/img/w/".$icon.".png'></center>";
 $desc = "<h2><b><p>".$data['weather'][0]['description']."</p></b></h2>";

 $temperature =  "<b>Temp: ".$temp."°C</b><br>";
 $clouds = "<b>Clouds: ".$data['clouds']['all']."%</b><br>";
 $humidity = "<b>Humidity: ".$data['main']['humidity']."%</b><br>";
 $windspeed = "<b>Wind Speed: ".$data['wind']['speed']."m/s</b><br>";
 $pressure = "<b>Pressure: ".$data['main']['pressure']."hpa</b><br>";
 $visibility =  "<b>Visibility: ".$visibilitykm."Km</b><br>";
 $groundlevel = "<b>GroundLevel: ".$data['main']['grnd_level']."</b><br>";
 $sunrise = "<b>Sunrise: ".date('h:i A', $data['sys']['sunrise'])."</b><br>";
 $sunset = "<b>Sunset:  ".date('h:i A', $data['sys']['sunset'])."</b>";
 
 
?>
<style>
body {
	background: #4b4b4b;
color: #fff;	
}
</style>
	<div class='w3-xxxlarge w3-animate-zoom'">
		<!--<img src="http://www.designbolts.com/wp-content/uploads/2014/03/Blue-Blur-Background1.jpg" style="width:100%;height:100%;" class="w3-image">
		  -->
		  <div style="text-align: center;" class="">
			
				<?php 
				echo $country;
				echo $logo; 
				echo $desc;
				?>
				
		  </div>
	
		<div class="">
	<h3 style="text-align: center;" class="">

			<?php echo $temperature; ?>
			<?php echo $clouds; ?>
			<?php echo $humidity; ?>
			<?php echo $windspeed; ?>
			<?php echo $pressure; ?>
			<?php echo $visibility; ?>
			<?php echo $groundlevel; ?>
			<?php echo $sunrise; ?>
			<?php echo $sunset; ?>
			</h3>
		</div>
	
	
	</div>
</body>
</html>
