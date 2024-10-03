<?php 
require_once ("include/initialize.php");   
if (isset($_SESSION['StudentID'])) {
  redirect('index.php');
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

  <!-- Custom CSS -->
  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #26BCFF 0%, #0052A1 100%);
      margin: 0;
      padding: 0;
    }

    .container-login100 {
      width: 100%;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px;
      background-color: #f4f4f4;
   /*   background-color: #999999;
      background: linear-gradient(135deg, #26BCFF, #0037a4);*/
    }

    .wrap-login100 {
      width: 40%;
      background: #fff;
      border: 2px solid #26BCFF;
      border-radius: 10px;
      overflow: hidden;
      display: flex;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    .login100-form {
      width: 80%;
      padding: 50px 50px;
    }

    .login100-form-title {
      font-size: 24px;
      color: #333;
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
    }

    .wrap-input100 {
      position: relative;
      margin-bottom: 30px;
    }

    .input100 {
      width: 100%;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .focus-input100 {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      border-radius: 5px;
      box-shadow: 0 0 0px rgba(0, 0, 0, 0);
      transition: all 0.4s;
    }

    .wrap-input100:focus-within .focus-input100 {
      box-shadow: 0 0 5px rgba(38, 188, 255, 0.8);
    }

    .symbol-input100 {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      font-size: 20px;
      color: #26BCFF;
    }

    .login100-form-btn {
      display: block;
      width: 100%;
      padding: 15px;
      background: linear-gradient(135deg, #26BCFF 0%, #0052A1 100%);
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 18px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login100-form-btn:hover {
      background: linear-gradient(135deg, #0052A1 0%, #26BCFF 100%);
    }

    .text-center {
      text-align: center;
      margin-top: 20px;
    }

    .txt2 {
      color: #26BCFF;
      font-size: 16px;
      text-decoration: none;
    }

    .txt2:hover {
      text-decoration: underline;
    }

    .fa-long-arrow-right {
      margin-left: 5px;
    }
  </style>
</head>

<body>

<div class="container-login100">

  <div class="wrap-login100">
    
    <form class="login100-form" action="" method="POST"> 
      <span class="login100-form-title">
        Member Login
      </span>

      <div class="wrap-input100">
        <input class="input100" type="text" name="user_email" placeholder="Username">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-user" aria-hidden="true"></i>
        </span>
      </div>

      <div class="wrap-input100">
        <input class="input100" type="password" name="user_pass" placeholder="Password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
      </div>
      
      <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit" name="btnLogin">
          Login
        </button>
      </div>

      <div class="text-center">
        <a class="txt2" href="register.php">
          Create your Account
          <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
      <div class="text-center">
        <a class="txt2" href="admin/login.php">
          Login as Admin
          <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </form>
  </div>
</div>

<?php 
if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
  if ($email == '' OR $upass == '') {
    echo '<script>alert("Invalid Username and Password!")</script>';
  } else {  
    $student = new Student();
    $res = $student::studentAuthentication($email, $h_upass);
    
    if ($res==true) {  
      header("Location: index.php");
      echo $_SESSION['StudentID'];
    } else {
      echo "<script>alert('Account does not exist! Please contact Administrator');</script>";
      header("Location: login2.php");
    }
  }
}
?> 

</body>
</html>
