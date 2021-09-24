<?php
session_start();
?>
<html>
    <head>
        <title>User login and registration</title>
        <link rel="icon" href="favicon-32x32.png" type="favicon/ico" width="50px">
        <meta name="utf-8">
        <title>
          GRABB STORE.
         
        </title>
        <link rel="icon" href="favicon-32x32.png" type="favicon/ico" width="50px">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">   
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .container{
            margin:auto;
            padding-left: 25px;
            padding-right: 25px;
            }
            h1{
                position: fixed;
                margin-top: 0px;
                margin-bottom: 80px;
            }
            img{
            margin-left: 10px;
            padding: 50px 10px 0px 20px
            }
            .head{
            margin-left: 380px;
            color: #fff;
            font-size: 40px;
            margin-top: 230px;
            }
            .row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
            }
            .col-2{
                margin:30px auto;
                flex-basis: 50%;
              }
            .col-2 .log:hover{
            background: pink;
            }  
            .col-2 .log{
                font-size: 25px;
            align-items: center;
            border: 2px solid;
            border-color: #fff;
            color: #fff;
            background-color:steelblue;
            padding: 25px 10px 25px 40px;
            margin:0 200px 0 50px;
            transition: transform 0.5s;
            cursor: pointer;
            
            }  
            .col-3 {
                margin:30px auto;
                flex-basis: 25%;
            }
            .col-3 .log{ 
            font-size: 25px;
            align-items: center;
            border: 2px solid;
            border-color: #fff;
            color: #fff;
            background-color:steelblue;
            padding: 25px 10px 25px 40px;
            margin-right: 0px;
            transition: transform 0.5s;
            cursor: pointer;
            
            }
            .col-3 .log:hover{
            background: pink;
            }


        </style>
       
</head>
<body>

<a href="HOME.html"><h1><img src="LOGO1.png" width="200px">GRABB Pay</h1></a>
        <div class="container">
           
            <div class="head"><img src="pay.png"></div>
           <div class="row">
                <div class="col-3">
                    <a href="card.php"><div class="log">ADD Card</div></a> 
                </div>
                <div class="col-3">
                    <a href="p45.html"><div class="log">Your status</div></a>
                </div>
           </div>
           <div class="row">
                <div class="col-3">
                    <div class="log">GRABB Wallet</div>
                </div>
                <div class="col-3">
                    <select class="log">
                    <option>Payment Method</option>    
                    <option>Credit Card</option>
                    <option>Debit Card</option>
                    <option>Phone pay</option>
                    <option>Grabb pay</option>
                </select>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <img src="card1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="log">Card name:<?php echo $_SESSION['username'];?></div>
                    <br>
                    <div class="log">Card no:<?php echo $_SESSION['card_number'];?></div> 
                </div>
               
            </div>
            <div class="row">
                <div class="col-2">
                <a href="logout1.php"><div class="log">Remove Card</div></a>
                </div>
            </div>
           
        </div>
      
</body>
</html>