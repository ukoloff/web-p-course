<?
include('select.db.php');

if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');
  $whom = q3($_POST['action']);
  $ip = q3($_SERVER["REMOTE_ADDR"]);
  $ua = q3($_SERVER["HTTP_USER_AGENT"]);
  $db->exec(<<<SQL
  Insert Into
    logs(ctime, whom, ip, ua)
  Values(
    datetime('now'),
    '$whom',
    '$ip',
    '$ua')
SQL
  );
endif;
?>
