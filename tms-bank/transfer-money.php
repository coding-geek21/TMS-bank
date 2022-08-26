<?php require 'index.php' ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="customer-details.css" rel="stylesheet">

    <!--- Modal CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Banking Website</title>

    <style>
       .modal-confirm {		
        color: #434e65;
        width: 525px;
      }
      
      .modal-confirm .modal-content {
        padding: 20px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
      }
      .modal-confirm .modal-header {
        background: #e85e6c;
        border-bottom: none;   
        position: relative;
        text-align: center;
        margin: -20px -20px 0;
        border-radius: 5px 5px 0 0;
        padding: 35px;
      }
      .modal-confirm h4 {
        text-align: center;
        font-size: 36px;
        margin: 10px 0;
      }
      .modal-confirm .form-control, .modal-confirm .btn {
        min-height: 40px;
        border-radius: 3px; 
      }
      .modal-confirm .close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: white;
        text-shadow: none;
        opacity: 0.5;
      }
      .modal-confirm .close:hover {
        opacity: 0.8;
      }
      .modal-confirm .icon-box {
        color: #fff;		
        width: 95px;
        height: 95px;
        display: inline-block;
        border-radius: 50%;
        z-index: 9;
        border: 5px solid #fff;
        padding: 15px;
        text-align: center;
      }
      .modal-confirm .icon-box i {
        font-size: 58px;
        margin: -2px 0 0 -2px;
      }
      .modal-confirm.modal-dialog {
        margin-top: 80px;
      }
      .modal-confirm .btn, .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #eeb711 !important;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border-radius: 30px;
        margin-top: 10px;
        padding: 6px 20px;
        min-width: 150px;
        border: none;
      }
      .modal-confirm .btn:hover, .modal-confirm .btn:focus {
        background: #eda645 !important;
        outline: none;
      }
      .trigger-btn {
        display: inline-block;
        margin: 100px auto;
      }
    


      .modal1-confirm {		
        color: #434e65;
        width: 525px;
      }
      .modal1-confirm .modal-content {
        padding: 20px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
      }
      .modal1-confirm .modal-header {
        background: #47c9a2;
        border-bottom: none;   
        position: relative;
        text-align: center;
        margin: -20px -20px 0;
        border-radius: 5px 5px 0 0;
        padding: 35px;
      }
      .modal1-confirm h4 {
        text-align: center;
        font-size: 36px;
        margin: 10px 0;
      }
      .modal1-confirm .form-control, .modal1-confirm .btn {
        min-height: 40px;
        border-radius: 3px; 
      }
      .modal1-confirm .close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: #fff;
        text-shadow: none;
        opacity: 0.5;
      }
      .modal1-confirm .close:hover {
        opacity: 0.8;
      }
      .modal1-confirm .icon-box {
        color: #fff;		
        width: 95px;
        height: 95px;
        display: inline-block;
        border-radius: 50%;
        z-index: 9;
        border: 5px solid #fff;
        padding: 15px;
        text-align: center;
      }
      .modal1-confirm .icon-box i {
        font-size: 64px;
        margin: -4px 0 0 -4px;
      }
      .modal1-confirm.modal-dialog {
        margin-top: 80px;
      }
      .modal1-confirm .btn, .modal1-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #eeb711 !important;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border-radius: 30px;
        margin-top: 10px;
        padding: 6px 20px;
        border: none;
      }
      .modal1-confirm .btn:hover, .modal1-confirm .btn:focus {
        background: #eda645 !important;
        outline: none;
      }
      .modal1-confirm .btn span {
        margin: 1px 3px 0;
        float: left;
      }
      .modal1-confirm .btn i {
        margin-left: 1px;
        font-size: 20px;
        float: right;
      }
      .trigger-btn {
        display: inline-block;
        margin: 100px auto;
      }

  
    </style>


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
            <a class="nav-item nav-link active navi" href="index.html">Home <span class="sr-only"></span></a>
            <a class="nav-item nav-link navi"  href="Customers.php">Custormers</a>
            <a class="nav-item nav-link navi" href="transfer-money.php">Transfer Money</a>
            <a class="nav-item nav-link navi" href="transactions.php">Transaction history</a>
          </div>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid customer-details">
        <h2>Transfer your money now</h2>
        <br><br>
        
        <form method="POST" action="">
        <img src="images/Currency_Isometric.svg">
            <div class="col-md-6" style="background-color:#6BACC0;padding:20px; color:white;float:right;border-radius:10px;box-shadow:10px 10px 5px black;">
              <h4>Sender Information</h4>
              <div class="form-row" >
                <div class="form-group col-md-8">
                  <label for="inputName">Name</label>
                  <input type="text" class="form-control" id="inputName" placeholder="Name" name="sender" required>
                </div>
                <br>
                <div class="form-group col-md-8">
                  <label for="inputAccountNumber">Account Number</label>
                  <input type="number"  name="acc_no_sender" class="form-control" id="inputAccountNumber" placeholder="Account Number" required>
                </div>
                <br>
                <div class="form-group col-md-8">
                  <label for="inputMoney">Amount to transfer</label>
                  <input type="number" class="form-control" id="inputMoney" name="bal" placeholder="Amount" required>
                </div>
              </div>
            </div>

        <div style="clear:both;"></div>
          
        <br><br><br>

        <img src="images/money_transfer.svg" style="float:right;">
        <div class="col-md-6" style="background-color:#6BACC0;padding:20px; color:white;border-radius:10px;box-shadow:10px 10px 5px black;"style="background-color:#6BACC0;padding:20px; color:white;border-radius:10px;float:right;box-shadow:10px 10px 5px black;">
          <h4>Receiver Information</h4>
          <div class="form-row" >
            <div class="form-group col-md-8">
              <label for="inputName">Name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Name" name="reciever" required>
            </div>
            <br>
            <div class="form-group col-md-8">
              <label for="inputAccountNumber">Account Number</label>
              <input type="number" name="acc_no_reciever" class="form-control" id="inputAccountNumber" placeholder="Account Number" required>
            </div>   
          </div>
          <br>           
        </div>
        <div style="text-align:center;">
          <button type="submit" href="#myModal" id="myBtn" class="btn btn-success btn-lg trigger-btn" name="e_submit">Transfer Money</button>  
        </div>
      </form>

      

	  </div>

    



  <!-- Modal HTML Success-->
  <div id="myModal1" class="modal fade">
    <div class="modal-dialog modal1-confirm">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <div class="icon-box">
            <i class="material-icons">&#xE876;</i>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body text-center">
          <h4>Success!</h4>	
          <p>Your Money has been Transfered successfully.</p>
          <button class="btn btn-success" data-dismiss="modal"><span>OK</span> <i class="material-icons">&#xE5C8;</i></button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal HTML username details Error -->
  <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <div class="icon-box">
            <i class="material-icons">&#xE5CD;</i>
          </div>
          <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body text-center">
          <h4>Ooops!</h4>	
          <p>Username or Account number is Incorrect.</p>
          <button class="btn btn-success"  data-dismiss="modal">Try Again</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal HTML Low balance Error -->
  <div id="myModal2" class="modal fade">
    <div class="modal-dialog modal-confirm">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <div class="icon-box">
            <i class="material-icons">&#xE5CD;</i>
          </div>
          <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body text-center">
          <h4>Sorry!</h4>	
          <p>You don't have enough balance :( </p>
          <button class="btn btn-success"  data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>


</div>
     
     <?php 

      error_reporting(0);
      if(isset($_POST['e_submit'])){

        $reciever=$_POST['reciever'];
        $sender=$_POST['sender'];

               
        $bal=$_POST['bal'];
        $acc_reciever=$_POST['acc_no_reciever'];
        $acc_sender=$_POST['acc_no_sender'];
    
        $query1 = "SELECT * FROM customers where account_no='$acc_reciever'";
        $result1=mysqli_query($conn,$query1);
        $bal_reciever = mysqli_fetch_assoc($result1);

        $query2 = "SELECT * FROM customers where account_no='$acc_sender'";
        $result2=mysqli_query($conn,$query2);
        $bal_sender = mysqli_fetch_assoc($result2);




        $bal1=$bal_reciever['balance']+$bal;
        $bal2=$bal_sender['balance']-$bal;

             
               

        if(!($bal_sender['name']==$sender && $bal_reciever['name']==$reciever)){
                  
          echo '<script>
           
            $("#myModal").modal("toggle");
            
          </script>';      

        }

        elseif($bal_sender['balance']<=0 || $bal_sender['balance']<$bal){
          echo '<script>$("#myModal2").modal("toggle");</script>';
        }

        else{


          $sql = "UPDATE customers SET balance='$bal1' WHERE  account_no='$acc_reciever'";

          $sql2 = "UPDATE customers SET balance='$bal2' WHERE account_no='$acc_sender'";

          date_default_timezone_set("Asia/Bangkok");
          echo date_default_timezone_get();

          $date = date('y-m-d h:m:s');

          $sql3 = "INSERT INTO transactions(sender,receiver,amount,date_time) values ('$sender','$reciever','$bal','$date')";       

          if(mysqli_query($conn,$sql) and mysqli_query($conn,$sql2) and  mysqli_query($conn,$sql3) ){
            echo '<script> $("#myModal1").modal("toggle"); </script>';
          }
          else{
            echo "<script> alert('Error updating record:',mysqli_error($conn)');</script>";
          }
  
           

         



        }
        
      
            
      }


    ?>

    


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
