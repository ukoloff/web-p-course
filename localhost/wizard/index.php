<?
include 'wizard.php';
include 'bootstrap.php';
?>
<h1>Мастер</h1>

<form method='post'>
<?
@include($_SESSION['page'].".render.php");
?>
<p>
<div class=text-right>
  <input type='button' class="btn btn-danger pull-left"
    value='Отмена' <?= $Disabled ?>
    onclick="document.forms.cancel.submit()">
  <input type='button' class="btn btn-warning" value='Назад &lt;&lt;' <?= $Disabled ?>
    onclick="document.forms.back.submit()">
  <input type='submit' class="btn btn-success" value='Далее &gt;&gt;'>
</div>
</form>

<form method='post' name='cancel' action='?cancel'></form>

<form method='post' name='back'  action='?back'></form>

<hr>
<a class="btn btn-info" href=/>Home</a>

</div>
</body>
</html>
