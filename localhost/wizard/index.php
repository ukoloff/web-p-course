<?
session_name('WiZaRd2016');
session_start();

if(!isset($_SESSION['page']))
  $_SESSION['page'] = 'welcome';

if('POST' == $_SERVER['REQUEST_METHOD']):
  switch($_POST['service']):
    case 'cancel':
      session_destroy();
      break;
    case 'back':
      $_SESSION['page'] = array_pop($_SESSION['pages']);
      break;
    default:
      @include($_SESSION['page'].".process.php");
  endswitch;
  header('Location: ./');
endif;

function nextPage($name)
{
  $_SESSION['pages'][]= $_SESSION['page'];
  $_SESSION['page'] = $name;
}
?>
<h1>Мастер</h1>

<form method='post'>
<?
@include($_SESSION['page'].".render.php");
?>
<hr>
<input type='button' value='Отмена'
  onclick="document.forms.cancel.submit()">
<input type='button' value='Назад &lt;&lt;'
  onclick="document.forms.back.submit()">
<input type='submit' value='Далее &gt;&gt;'>
</form>

<form method='post' name='cancel'>
  <input type='hidden' name='service' value='cancel'>
</form>

<form method='post' name='back'>
  <input type='hidden' name='service' value='back'>
</form>

<hr>
<a href=/>Home</a>
