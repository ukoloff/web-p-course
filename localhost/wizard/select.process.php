<?
if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');
  $f = fopen('.data/golos.log', 'a');
  fputs($f, "${_POST['action']}:${_SERVER['REMOTE_ADDR']}:${_SERVER['HTTP_USER_AGENT']}\n");
  fclose($f);  
endif;
?>
