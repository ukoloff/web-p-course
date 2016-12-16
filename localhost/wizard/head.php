<?
header('Content-Type: text/html; charset=UTF-8');
session_name('WiZaRd2016');
session_start();

if(!isset($_SESSION['page']))
  $_SESSION['page'] = 'welcome';

if('POST' == $_SERVER['REQUEST_METHOD']):
  if(isset($_GET['cancel'])):
    session_destroy();
  elseif(isset($_GET['back'])):
    $_SESSION['page'] = array_pop($_SESSION['pages']);
  else:
    @include($_SESSION['page'].".process.php");
  endif;
  session_regenerate_id(true);
  header('Location: ./');
endif;

if(isset($_GET['capcha'])):
  include('capcha.image.php');
  exit();
endif;

function nextPage($name)
{
  $_SESSION['pages'][]= $_SESSION['page'];
  $_SESSION['page'] = $name;
}
?>
