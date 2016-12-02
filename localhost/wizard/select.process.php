<?
if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');
  $f = fopen('.data/golos.ser', 'a');
  fputs($f, serialize([
  	whom=> $_POST['action'],
  	ip=> $_SERVER['REMOTE_ADDR'],
  	ua=> $_SERVER['HTTP_USER_AGENT'],
  	])."\n");
  fclose($f);  
endif;
?>
