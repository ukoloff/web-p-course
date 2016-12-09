<?
include('select.db.php');

if($_POST['action']):
  $_SESSION['president'] = $_POST['action'];
  nextPage('exitpoll');
  $db->exec(<<<SQL
  Insert Into
    logs(ctime, whom, ip, ua)
  Values(
    datetime('now'),
    '${_POST['action']}',
    '${_SERVER["REMOTE_ADDR"]}',
    '${_SERVER["HTTP_USER_AGENT"]}')
SQL
  );
endif;
?>
