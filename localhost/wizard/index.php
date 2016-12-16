<?
include 'head.php';
include 'html.html';
?>
<h1>Мастер</h1>

<form method='post'>
<?
@include($_SESSION['page'].".render.php");

$Disabled = count($_SESSION['pages']) ? '' : 'disabled';
?>
<p>
<div class=text-right>
<button type='button' class='btn btn-danger pull-left' <?= $Disabled ?>
  onclick="document.forms.cancel.submit()">
  <i class='fa fa-ban'></i>
  Отмена
</button>
<button type='button' class='btn btn-warning' <?= $Disabled ?>
  onclick="document.forms.back.submit()">
  <i class='fa fa-arrow-left'></i>
  Назад
</button>
<button type='submit' class='btn btn-success'>
  <i class='fa fa-arrow-right'></i>
  Далее
</button>
</div>
</form>

<form method='post' name='cancel' action='?cancel'></form>

<form method='post' name='back'  action='?back'></form>

<hr>
<a href=/ class='btn btn-info'>
<i class='fa fa-home'></i>
Домой
</a>

</div>
</body>
</html>
