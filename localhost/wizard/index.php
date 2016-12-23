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
  <div class='btn-group pull-left'>
    <button type='button' class="btn btn-danger dropdown-toggle" data-toggle="dropdown" <?= $Disabled ?>>
      Отмена
    </button>
    <ul class="dropdown-menu">
      <li><a>Да, сбросить ввод</a></li>
    </ul>
  </div>
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
