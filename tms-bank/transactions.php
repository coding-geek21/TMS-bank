<?php require 'index.php'; ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="customer-details.css" rel="stylesheet">
    <title>Banking Website</title>
    
  </head>
  <body>


    <nav class="navbar navbar-expand-lg header fixed-top">
      <div class="container-fluid">
        <img src = "images/money.svg" width="50" height="50" alt="logo"/>
        <h3 class="title">TSF Bank</h3>
        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active navi" href="home.html">Home <span class="sr-only"></span></a>
            <a class="nav-item nav-link navi"  href="Customers.php">Custormers</a>
            <a class="nav-item nav-link navi" href="transfer-money.php">Transfer Money</a>
            <a class="nav-item nav-link navi" href="transactions.php">Transaction history</a>
          </div>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid customer-details">
        <h2 style="float:left;">Check your transaction History</h2>
        <img style="float:left;" src="images/check_transactions.svg">

        <?php

          $sql = "SELECT * FROM transactions";
          $result = mysqli_query($conn,$sql);
        ?>

        <table style="font-size:18px;" class="table table-primary customer table-striped table-hover border-secondary">
          <tr>
            <!-- <th scope="col">S.No</th> -->
            <th scope="col">Sender</th>
            <th scope="col">Receiver</th>
            <th scope="col">Amount</th>
            <th scope="col">Date & Time</th>
            <!-- <th scope="col">Date & Time</th> -->
          </tr>
          
          <?php

            if(mysqli_num_rows($result)>0){


              while($transaction = mysqli_fetch_assoc($result)){
              
              ?>

              <tr scope="row">
                
                <td><?php  echo $transaction['sender'];  ?></td>
                <td><?php  echo $transaction['receiver'];  ?></td>
                <td><?php  echo $transaction['amount'];  ?></td>
                <td><?php  echo $transaction['date_time'];  ?></td>
                
              </tr>

              <?php 
             
              }


            }
            else{
              echo '0 results';
            }



          ?>    
        </table>

    </div>


    <footer class="container-fluid footer">
      <h5>TSF Bank Copyright ©2021 All rights reserved | Made by Jayapritha</h5>
      
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            
    <!--option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
   
  </body>
</html>
