<?php
require_once("include/initialize.php");
if (isset($_SESSION['StudentID'])) {
  redirect('index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register</title>

  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      /*    background-color: #f4f4f4;*/
      background-color: #999999;
      background: linear-gradient(135deg, #26BCFF, #0037a4);
      margin: 0;
      padding: 0;
    }

    #title-header {
      background-color: #999999;
      background: linear-gradient(135deg, #26BCFF, #0037a4);
      border-bottom: 1px solid #ddd;
      height: 30px;
      padding: 20px 0;
      text-align: center;
      color: black;
      font-size: 30px;
      font-weight: bold;
    }

    .container {
      max-width: 600px;
      margin: 30px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .page-header {
      font-size: 30px;
      margin-bottom: 20px;
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: rgb(0, 67, 200);
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 18px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0040c4;
    }

    .back-link {
      margin-top: 10px;
      text-align: center;
    }

    .back-link a {
      text-decoration: none;
      color: rgb(0, 67, 200);
    }

    .back-link a:hover {
      text-decoration: underline;
    }
  </style>

</head>

<body>

  <div id="title-header">Register for an Account</div>

  <div class="container">
    <p class="page-header">Sign Up</p>

    <form action="" method="POST" enctype="multipart/form-data" id="register-form">

      <div class="form-group">
        <label for="FNAME">First Name:</label>
        <input id="FNAME" name="FNAME" type="text" placeholder="First Name" required>
      </div>

      <div class="form-group">
        <label for="LNAME">Last Name:</label>
        <input id="LNAME" name="LNAME" type="text" placeholder="Last Name" required>
      </div>

      <div class="form-group">
        <label for="ADDRESS">Address:</label>
        <input id="ADDRESS" name="ADDRESS" type="text" placeholder="Address" required>
      </div>

      <div class="form-group">
        <label for="PHONE">Contact No.:</label>
        <input id="PHONE" name="PHONE" type="text" placeholder="Contact Number" required>
      </div>

      <div class="form-group">
        <label for="USERNAME">Username:</label>
        <input id="USERNAME" name="USERNAME" type="text" placeholder="Username" required>
      </div>

      <div class="form-group">
        <label for="PASS">Password:</label>
        <input id="PASS" name="PASS" type="password" placeholder="Password" required>
      </div>

      <div class="form-group">
        <button type="submit" name="btnRegister">Register</button>
      </div>

      <div class="back-link">
        <a href="login2.php"><i class="fa fa-arrow-left"></i> Back to Login</a>
      </div>
    </form>
  </div>

</body>

</html>

<?php
if (isset($_POST['btnRegister'])) {
  $student = new Student();
  $student->Fname = $_POST['FNAME'];
  $student->Lname = $_POST['LNAME'];
  $student->Address = $_POST['ADDRESS'];
  $student->MobileNo = $_POST['PHONE'];
  $student->STUDUSERNAME = $_POST['USERNAME'];
  $student->STUDPASS = sha1($_POST['PASS']);
  $student->create();

  echo "<script>alert('Account Created');</script>";
  redirect("login2.php");
}
?>