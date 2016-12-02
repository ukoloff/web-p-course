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
  include('capcha.png.php');
  exit();
endif;

function nextPage($name)
{
  $_SESSION['pages'][]= $_SESSION['page'];
  $_SESSION['page'] = $name;
}

$Disabled = count($_SESSION['pages']) ? '' : 'disabled';
?>
<h1>Мастер</h1>

<form method='post'>
<?
@include($_SESSION['page'].".render.php");
?>
<p>
<table width='100%'>
  <tr>
    <td align='left'>
      <input type='button' value='Отмена' <?= $Disabled ?>
        onclick="document.forms.cancel.submit()">
    </td>
    <td align='right'>
      <input type='button' value='Назад &lt;&lt;' <?= $Disabled ?>
        onclick="document.forms.back.submit()">
      <input type='submit' value='Далее &gt;&gt;'>
    </td>
  </tr>
</table>
</form>

<form method='post' name='cancel' action='?cancel'></form>

<form method='post' name='back'  action='?back'></form>

<hr>
<a href=/>Home</a>
