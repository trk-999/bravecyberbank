<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">

<title>Brave Store </title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="arrow.css">
<button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
<script src="main.js"></script>

<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

.openBtn {
  background: #f1f1f1;
  border: none;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
}

.openBtn:hover {
  background: #bbb;
}

.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

.overlay button {
  float: left;
  width: 35%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
</style>


</head>


<body>




<?php
  include 'navbar-3.php';
  ?>




<div class="header"> 
<div class="container">
    <div class="navbar">
        <div class="logo">
        
        </div>
        <nav>
            
            
        </nav>
        
    </div>    
	
<div class="row">
    <div class="col-2">
        <h1>Welcome to the Pembroke <br> Cyberbank! </h1>
        <p>
            Finding the right conclusions to the given opportunities. 
        </p>
        <a href ="index.php" class="btn">Administrator click here! &#8594;</a>
    </div>
    <div class="col-2">
       
     </div>
         </div>
            </div> 
                </div> 
    
    <!--This is for start the featured categories of the bank-->
    <div class ="categories"> 
        <div class="small-container">
		<h1> About the Cyber Bank </h1>
            <p>  Started from humble beginnings to become an engaging part of the student communuty. </p>
			<p>
			Create an account with us today to become apart of our community.
			</p>
        </div>       
    </div> 
    
    <!--this is for the rest of the about us features-->
    <div class="small-container"> 
        <h2 class="title">Why choose CyberBank?</h2>
        <div class="row">
            <div class="col-4">
                <a href="createuser.php"><img src="dollars.jpg"></a>
                
                <p> 
				Creating an account with us is an easy process. Click this image to start
			
			        	</p>
            </div>
            <div class="col-4">
                <img src="bank.jpg">
                <h4>Availabe in your local area.</h4>
				
                    
                </div>
                
            </div>
            
        </div>
    </div>

    

    

    <!--The footer for the cyberbank webpage-->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <a href="home.php" class="btn">Home &#8594;</a>
                    <a href="index.php" class="btn">Bank Page &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    


</body>
</html>
