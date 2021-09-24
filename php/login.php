<html>
    <head>
        <title>User login and registration</title>
        <link rel="icon" href="favicon-32x32.png" type="favicon/ico" width="50px">
        <link rel="stylesheet" type="text/css" href="phpstyle.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       
</head>
<body>
   

  <div class="container">
    <div class="login1-box">
        <div class="row"></div>
            <div class="col-md-6 login-left" >
              <h2>Login Here</h2>
              <div class="form-group">
                  <form action="validation.php" method="post">
                          <label>Username</label>
                          <input type="text" name="user" class="form-control"required>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control"required>
                      </div>
                      <button type="submit" class="btn btn-primary" >Login</button> <br> <br>
                      <hr>
                      <a href="#" style="color: red;" >Forgot Password?</a>
               </form>
                  
          </div>
         </div>
      </div>
      
</body>
</html>