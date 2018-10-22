   <?php
                            if(isset($_POST['submit'])) {
                              $to = "info@jovefarms.com";
                              $subject = $_POST['subject'];
                              $txt = $_POST['name'];
                              $message = $_POST['message'];
                              //$headers ="From : <samueljohn498@gmail.com>";
                              //$headers = "MIME-Version: 1.0" . "\r\n";
                             // $headers .= "Content-type:text/html;charset=UTF-8";
                              


                              mail($to,$subject,$message,$txt);
                            }
                            ?>

                    
                            <html lang="en">
                            <head>
                               
                                <title>Document</title>
                            </head>
                            <body>
                                <h3 style="margin-top: 180px; text-align: center;" class="text-center">
                                 Message sent successfully. We will get back to you shortly </h3>
                            </body>
                            </html>