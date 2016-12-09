<?
include('select.db.php');

if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');
  $whom = $db->escapeString($_POST['action']);
  $ip = $db->escapeString($_SERVER["REMOTE_ADDR"]);
  $ua = $db->escapeString($_SERVER["HTTP_USER_AGENT"]);
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
