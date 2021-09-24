<?php 
session_start();
?>
<html>
    <head>
        <title>User login and registration</title>
        <link rel="icon" href="favicon-32x32.png" type="favicon/ico" width="50px">
        <link rel="stylesheet" type="text/css" href="phpstyle.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       
</head>
<body>
    
                   
    <div class="logo"> <img src="LOGO1.png" > </div>
               

   
  <div class="container">
    <div class="login2-box">
       <div class="row">
          <div class="col-md-6 login-right">
              <h2>Register Here</h2>
                <div class="form-group">
                  <form  name="myform" action="registration.php"   method="post">
                          <label>Username</label>
                          <input type="text" name="user" placeholder="username"    class="form-control"required>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" placeholder="Password" minlength="4"  class="form-control"required>
                      </div>
                                   
                      <div class="form-group">
                          <label>Email</label>
                          <input type="Email" name="Email"  placeholder="username@gmail.com"   class="form-control"required>
                      </div>

                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="mobile number" name="mobile_no" pattern="[0-9]{10}" placeholder="0123456789"  class="form-control"required>
                    </div>
                      <div class="form-group">
                          <label>Address</label>
                          <input type="address" name="address"  placeholder="Address"  class="form-control"required>
                      </div>
                      <button type="submit"value="submit" class="btn btn-primary" onclick="myfunction()" >Register</button> 
                      <hr>
                     <p>If already registered?<a href="login.php" style="color: red;">log in</a></p>
                 </form>
             </div>
          </div>
      </div>
</div>
<!----<script>
    function myfunction(){
        alert("<?php echo "registration successfull";?>")
    }
</script>-->
        
 </body>
</html>