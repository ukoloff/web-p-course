<?
session_name('pHpWiZaRd');
session_set_cookie_params(60*60*24*365);
session_start();
if(!preg_match('/^\w+$/', $_SESSION['page']))
  $_SESSION['page'] = 'welcome';
if('POST'==$_SERVER['REQUEST_METHOD']):
  if(isset($_GET['back']))
    $_SESSION['page'] = array_pop($_SESSION['pages']);
  elseif (isset($_GET['cancel']))
    session_destroy();
  else
    @include($_SESSION['page'].".post.php");

  session_regenerate_id(true);
  header('location: ./');
endif;

if(isset($_GET['capcha'])):
  include('capcha.png.php');
  exit();
endif;

function wizard_next($page)
{
  global $db;
  $_SESSION['pages'][] = $_SESSION['page'];
  $_SESSION['page'] = $page;
  $s = $db->prepare("Insert into posts(ctime, post) Values(datetime('now'), :data)");
  $s->bindValue(':data', json_encode($_POST));
  $s->execute();
}
?>
