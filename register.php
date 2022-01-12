<?php

$fName1 =  $_POST['fname'];
$lName1 =  $_POST['lname'];
$eMail1 =  $_POST['email'];
$uName1 =  $_POST['uName'];
$pw1 =     $_POST['pw'];

    if(!empty($fName1)){
        if(!empty($lName1)){
            if(!empty($eMail1)){
                if(!empty($uName1)){
                    if(!empty($pw1)){
                        
    
                            /*
                            $host = "localhost";
                            $dbusername = "root";
                            $dbpassword = "";
                            $dbname = "acm";
                            
                            
                            $conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
                            */
                            $host = "localhost"; $db = "cyberbank"; $usr = "root"; $pw ="";
                            $conn = new mysqli($host, $usr, $pw, $db);
                            
                            if ($conn->connect_error) {
                                die("Connection failed: " .$conn->connect_error);
                            } else {
                                $sql = "INSERT INTO members(firstName, lastName, email, userName, password)
                                values('$fName1', '$lName1', '$eMail1', '$uName1', '$pw1')";
                                
                                if($conn -> query($sql)){
                                    echo "<h1> Your information is stored sucessfully. Your balance is $500. </h1>";
                                } else {
                                    echo "Error: ".$sql.$conn->error;
                                }
                                $conn->close(); 
                                
                            } 
                    
                    } else {
                        echo "The password is empty";
                        die();
                    }
                } else {
                        echo "The Username is empty";
                        die();
                    
                }
                     
            } else {
                echo "The email is empty";
                die();
                    
            } 
        }else {
            echo "The last name should not be empty";
            die();
        }
                     
    }else {
        echo "The first name should not be empty";
        die();
    }
    
    
?>
    