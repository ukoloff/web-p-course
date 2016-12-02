<?
$x = rand(2, 9);
$y = rand(2, 9);
$_SESSION['?pass'] = $x*$y;
?>
<div class='alert alert-info'>
Внимание! Сервис доступен только для белковых существ.
</div>

<label>
<input type='checkbox' onclick="this.form.elements.pass.value=<?= $x ?>*<?= $y ?>">
Подтверждаю, что я не робот
</label>

<input type='hidden' name='pass'>
