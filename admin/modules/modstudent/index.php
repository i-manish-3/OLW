<?php
require_once("../../../include/initialize.php");
//checkAdmin();
	# code...
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

	$content    = 'list.php';

require_once("../../navigation/navigations.php");
?>
  
