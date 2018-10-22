<?php
session_start();
include 'conn.php';
//$unameErr = "";
//if(isset($_POST['submit'])) {

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    

    $sql = "SELECT * FROM `user` WHERE uname= :uname || email= :email" ;
     $query = $conn->prepare($sql);
   $query->bindParam(':uname', $uname);
   $query->bindParam(':email', $email);
   $query->execute();

$row = $query->fetch(PDO::FETCH_ASSOC);

// verify the plain text password against the 
// hashed value from DB in $row['pass']
if(password_verify($pwd, $row['pwd'])){
  
        $_SESSION['uid'] = $row['id'];
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['pwd']  = $row['pwd'];
          header("Location: index.php");
 
} else {
    $unameErr = "<p>Invalid Email or Password. Please Check Your Details or <a href='signup.php'> Register </a>. Thanks</p>";


}
//}
?>