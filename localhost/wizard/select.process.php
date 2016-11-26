<?
if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');
endif;
?>
