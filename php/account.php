<?php 
session_start();
?>
<html>
    <head>
    <meta name="utf-8">
       <title>
         GRABB STORE.
        
       </title>
       <link rel="icon" href="favicon-32x32.png" type="favicon/ico" width="50px">
      
       <link rel="stylesheet" type="text/css" href="homestyle.css">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
             <div class="container-fluid">
                 <div class="navbar-header">
                         <a href="HOME.html" class="navbar-brand"><img src="LOGO1.png" width="125px"></a>
                         <a class="navbar-brand1">GRABB STORE</a>
                 </div>
                 <ul class="nav navbar-nav">
                             <li><a href="HOME.html">Home</a></li>
                             <li><a href="product-1.html">Products</a></li>
                             <li><a href="about.html">About</a></li>
                             <li><a href="register.html">Account</a></li>
                             <li><a href="logout.php">logout</a></li>
                             <li id="cart"><a href="cart.html">Cart<span>0</span></a></li>           
                 </ul>
             </div>
         </nav>
    </body>
</html>
