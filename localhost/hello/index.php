<?
session_start();
$_SESSION['time'] = localtime(time(), TRUE);
?>
<h1>
  Превед
</h1>

Как Вас зовут?
<form>
<input name='who'>
<p>
<input type='submit' value='Готово'>
</form>

<hr>
<a href=/>Домой</a>
