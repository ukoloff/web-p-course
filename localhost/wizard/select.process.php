<?
include('select.db.php');

if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');

  $z = $db->prepare(<<<SQL
  Insert Into
    logs(ctime, whom, ip, ua)
  Values(now(), :whom, :ip, :ua)
SQL
  );
  $z->bindValue(':whom', $_POST['action']);
  $z->bindValue(':ip', $_SERVER["REMOTE_ADDR"]);
  $z->bindValue(':ua', $_SERVER["HTTP_USER_AGENT"]);
  $z->execute();
endif;
?>
