<?
	$x=rand(2,9);
	$y=rand(2,9);
	$_SESSION['?']=$x*$y;
?>
Are you a robot?
<br>
<label>
  <input type='checkbox' onclick="this.form.elements.secret.value=<?= $x ?>*<?= $y ?>">
  Я не робот
</label>
<input type='hidden' name='secret'>
