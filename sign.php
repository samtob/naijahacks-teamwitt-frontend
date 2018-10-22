
<?php 
 //$fnameErr = $lnameErr = $unameErr = $emailErr = $addrErr =  $countryErr = $cityErr = $stErr = $zipErr = $pwdErr = "";
 //$fname = $lname = $uname = $email = $addr =  $country = $city = $st = $zip = $pwd = "";
session_start();
include 'conn.php';

 $fnameErr = $lnameErr = $unameErr = $emailErr = $addrErr =  $countryErr = $cityErr = $stErr = $zipErr = $pwdErr = "";
 $fname = $lname = $uname = $email = $addr =  $country = $city = $st = $zip = $pwd = "";
 function text_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if(isset($_POST["submit"])) {

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  if (empty(text_input($_POST["fname"]))) {
    $fnameErr = "First Name is required";
    
  } else {
    $fname = text_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
		
      $fnameErr = "Only letters and white space allowed"; 
   
    //exit();
    } else {
      if (empty(text_input($_POST["lname"]))) {
        $lnameErr = "Last Name is required";
        //header("Location: signup.php?error=lastname name");
        //exit();
      } else {
        $lname = text_input($_POST["lname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
          $lnameErr = "Only letters and white space allowed"; 
          //header("Location: signup.php?error=last name");
        //exit();
        } else {
          if (empty(text_input($_POST["uname"]))) {
            $unameErr = "User Name is required";
          } else {
            $uname = text_input($_POST["uname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $uname)) {
              $unameErr = "Only letters and white space allowed"; 
            } else {
              if (empty(text_input($_POST["country"]))) {
                $countryErr = "Your Country is required";
              } else {
                $country = text_input($_POST["country"]);
                // check if e-mail address is well-formed
                if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
                  $countryErr = "Only letters and white space allowed"; 
                } else {
                  if (empty(text_input($_POST["city"]))) {
                    $cityErr = "City is required";
                  } else {
                    $city = text_input($_POST["city"]);
                    // check if e-mail address is well-formed
                    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
                      $cityErr = "Only letters and white space allowed"; 
                    } else {
                      if (empty(text_input($_POST["st"]))) {
                        $stErr = "State is required";
                      } else {
                        $st = text_input($_POST["st"]);
                        // check if e-mail address is well-formed
                        if (!preg_match("/^[a-zA-Z ]*$/",$st)) {
                          $stErr = "Only letters and white space allowed"; 
                        } else {
                          if (empty(text_input($_POST["zip"]))) {
                            $zipErr = "Zip is required";
                          } else {
                            $zip = text_input($_POST["zip"]);
                            
                            if (!preg_match("/^[a-zA-Z0-9 ]*$/", $zip)) {
                              $zipErr = "Only letters, numbers and white space allowed"; 
                            } else {
                              if (empty(text_input($_POST["pwd"]))) {
                                $pwdErr = "Password is required";
                              } else {
                                $pwd = text_input($_POST["pwd"]);
                                
                                if (!preg_match("/^[a-zA-Z0-9 ]*$/", $pwd)) {
                                  $pwdErr = "Only letters, numbers and white space allowed"; 
                                } else {
                                  if (empty(text_input($_POST["addr"]))) {
                                    $addrErr = "Address is required";
                                  } else {
                                    $addr = text_input($_POST["addr"]);
                                    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $addr)) {
                                      $addrErr = "Only letters, numbers and white space allowed";
                                    } else {
										if(empty(text_input($_POST["email"]))) {
											$emailErr = "Email is Required";
										} else {
											$email = text_input($_POST["email"]);
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
                                  $pwd = password_hash(text_input($_POST['pwd']), PASSWORD_DEFAULT);
    $sql = "INSERT INTO `user` (fname, lname, uname, email, addr, country, city, st, pwd, zip)
    VALUES (:fname, :lname, :uname, :email, :addr, :country, :city, :st, :pwd, :zip)";
    $query = $conn->prepare($sql);
    
    
    $access =$query->execute(['fname' => $fname, 'lname' => $lname,
	'uname' => $uname, 'email' => $email, 'addr' => $addr, 'country' => $country, 'city' => $city, 'st' => $st,
  'pwd' => $pwd, 'zip' => $zip]);
  if($access) {
  header("Location: login.php");
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
  }
  


  





  
  ?>
