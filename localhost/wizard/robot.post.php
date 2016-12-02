<?
if($_SESSION['?pass']==$_POST['pass'])
  wizard_next('capcha');
unset($_SESSION['?pass']);
?>
