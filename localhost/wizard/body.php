<h1>Мастер настройки</h1>

<form method='POST'>
  <div style='min-height: 10em;'>
  <? @include($_SESSION['page'].".body.php"); ?>
  </div>
  <hr>
  <button type='button' class='btn btn-danger' <?= $Disabled ?>
    onclick="document.forms.cancel.submit()">
    Отмена
  </button>
  <div class='pull-right'>
    <button type='button' class='btn btn-warning' <?= $Disabled ?>
      onclick="document.forms.back.submit()">
      <i class='fa fa-arrow-left'></i>
      Назад
    </button>
    <button type='submit' class= 'btn btn-success'>
      <i class='fa fa-arrow-right'></i>
      Дальше
    </button>
  </div>
</form>

<form name='cancel' method='POST' action='?cancel'></form>
<form name='back' method='POST' action='?back'></form>

<a href=/>Домой</a>
