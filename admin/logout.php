<?php 
require_once '../include/initialize.php';

@session_start();

// 2. Unset all the session variables
unset( $_SESSION['USERID'] );
unset( $_SESSION['NAME'] );
unset( $_SESSION['UEMAIL'] );
unset( $_SESSION['PASS'] );
unset( $_SESSION['TYPE'] );


// session_destroy();
redirect(web_root."admin/login.php?logout=1");
?>