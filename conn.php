<?php
$serverHost = "localhost";
$username= "root";
$password = "WittTech1.";
$dbname = "jovefarm";

try {
$stmt = ("mysql:host=$serverHost;dbname=$dbname");
$conn = new PDO($stmt, $username, $password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$conn -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} 
catch (PDOException $e) {
    echo "Not connected:". $e->getMessage();
}
?>