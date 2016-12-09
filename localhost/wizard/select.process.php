<?
if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');

  include('db.php');

  $stmt = $db->prepare(<<<SQL
    Insert Into
      logs(ctime, whom, ip, ua)
    Values(datetime('now'), :whom, :ip, :ua)
SQL
);
  $stmt->bindValue(':whom', $_POST['action']);
  $stmt->bindValue(':ip', $_SERVER["REMOTE_ADDR"]);
  $stmt->bindValue(':ua', $_SERVER["HTTP_USER_AGENT"]);

  $stmt->execute();
endif;
?>
