<?
if($_SESSION['?capcha'] == $_POST['capcha'])
  wizard_next('ok');
unset($_SESSION['?capcha']);
?>
