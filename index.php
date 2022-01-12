<!DOCTYPE HTML>
<html>
  
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- There are links to the Bootstrap and cascading style sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    

    <title>Cyberbank Homepage</title>
  
  </head>

  <body>
  <?php
  
  include 'navbar-4.php';
  
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section with visual effect for "Cyber Bank" -->
            <div class="row intro py-1" style="background-color : goldenrod;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-4">
                  <h3>Welcome to the</h3>
                  <h1>Cyber Bank</h1>
                </div>
              </div>
              
            </div>

      <!-- Activity section that links to account creation, money transfer, and transaction -->
            
        <div class="row activity text-center">
                  <div class="col-md act">
                    
                    <br>
                    <a href="createuser.php"><button style="background-color: rgb(160,82,45);">Create a User</button></a>
                  
                  </div>
                  <div class="col-md act">
                    
                    <br>
                    <a href="transfermoney.php"><button style="background-color : rgb(160,82,45);">Make a Transaction</button></a>
                  
                  </div>
                  <div class="col-md act">
                   
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : rgb(160,82,45);">Transaction History</button></a>
                  
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-4">
      <p><a href="home.php">Log Out</a></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>