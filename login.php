
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Login.css">
</head>
<body>

     <div class="title">
       <!--Title-->
      <div id="line1"></div>
      <div id="circle1"></div>
      <div id="circle2"></div>
      <div id="circle3"></div>
      <div id="circle4"></div>
      <div id="line2"></div>
      <div id="title">
       SignUp
      </div>
     </div>

     <div class="title0">
      <!--Title-->
     <div id="line10"></div>
     <div id="circle10"></div>
     <div id="circle20"></div>
     <div id="circle30"></div>
     <div id="circle40"></div>
     <div id="line20"></div>
     <div id="title0">
      Login
     </div>
    </div>


  <form action="inser.php" method="post" enctype="multipart/formdata" name="frmSignUp">
    <div class="container">
      <hr>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="" name="username" id="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="" name="password" id="psw" required>
  
      <input type="hidden" name="frmSignUp" value="frmSignUp" />
  
      <button type="submit" class="registerbtn">Sign in</button>
    </div>


    <form action="inloggen.php" method="post" enctype="multipart/formdata" name="frmLogin">
      <div class="container2">
        <hr>
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="" name="email" >
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="" name="psw" >
    
        <input type="hidden" name="frmLogin" value="frmLogin" />
        
        <button type="submit" class="registerbtn">Login</button>
      </div>
      
      <div class="container signin">
      </div>
    </form>

  </form>
</body>
</html>