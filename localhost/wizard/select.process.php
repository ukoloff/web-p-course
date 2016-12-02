<?
if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');
  $f = fopen('.data/votes.json', 'a');
  fwrite($f,
    json_encode([
      whom=>$_POST['action'],
      ip=>$_SERVER["REMOTE_ADDR"],
      ua=>$_SERVER["HTTP_USER_AGENT"],
    ])."\n");
  fclose($f);
endif;
?>
