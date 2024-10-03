<?php
require_once("../include/initialize.php");

?>
<?php
// login confirmation
if (isset($_SESSION['USERID'])) {
    redirect(web_root . "admin/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
/*            background: linear-gradient(135deg, #26BCFF, #0037a4);*/
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            border: 2px solid #26BCFF;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #0037a4;
            font-size: 24px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            font-size: 14px;
            color: #0037a4;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input:focus {
/*            outline: none;*/
            border-color: #26BCFF;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #26BCFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #0037a4;
        }

        .back-link {
            margin-top: 20px;
        }

        .back-link a {
            color: #26BCFF;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="login-box">
            <h2>Login to Continue</h2>

            <form action="" method="POST">
                <div class="form-group">
                    <input placeholder="Username" type="text" id="user_email" name="user_email" required>
                </div>

                <div class="form-group">
                    <input placeholder="Password" type="password" id="user_pass" name="user_pass" required>
                </div>

                <button type="submit" name="btnLogin" class="login-btn">Login</button>
            </form>

            <div class="back-link">
                <a href="../index.php"><i class="fa fa-arrow-left"></i> Back to Home</a>
            </div>
        </div>
    </div>

</body>

</html>

<?php
if (isset($_POST['btnLogin'])) {
    $email = trim($_POST['user_email']);
    $upass = trim($_POST['user_pass']);
    $h_upass = sha1($upass);

    if ($email == '' || $upass == '') {
        message("Invalid Username and Password!", "error");
        redirect("login.php");
    } else {
        $user = new User();
        $res = $user::userAuthentication($email, $h_upass);
        if ($res == true) {
            message("You login as " . $_SESSION['TYPE'] . ".", "success");
            if ($_SESSION['TYPE'] == 'Administrator') {
                redirect(web_root . "admin/index.php");
            } else {
                redirect(web_root . "admin/login.php");
            }
        } else {
            message("Account does not exist! Please contact Administrator.", "error");
            redirect(web_root . "admin/login.php");
        }
    }
}
?>
