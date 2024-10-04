<?php
require_once("include/initialize.php");
if (!isset($_SESSION['StudentID'])) {
  redirect('login.php');
}
$content = 'home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) {
  case 'lesson':
    $title = "Lesson";
    $content = 'lesson.php';
    # code...
    break;
  case 'learning':
    $title = "learning";
    $content = 'learning.php';
    # code...
    break;
  case 'playvideo':
    $title = "Play Video";
    $content = 'playvideo.php';
    # code...
    break;
  case 'viewpdf':
    $title = "Play Video";
    $content = 'viewpdf.php';
    # code...
    break;
  default:
    $title = "Home";
    $content    = 'home.php';
}
require_once("navigation/navigations.php");
