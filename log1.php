<?php
session_start();
include 'conn.php';
    $unameErr = "";
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
    header("Location: index.php"); 
    $_SESSION['uid'] = $row['id'];
    $_SESSION['uname'] = $row['uname'];
    $_SESSION['pwd']  = $row['pwd'];

    //header("Location: index.php"); 
 
} else {
    //$unameErr = "<p>Invalid Email or Password. Please Check Your Details or <a href='signup.php'> Register </a>. Thanks</p>";
    header ('Location: login.php?error=invalidemail');
    


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