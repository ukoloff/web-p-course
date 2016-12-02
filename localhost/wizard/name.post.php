<?
$n = trim($_POST['name']);
if($n):
  $_SESSION['name'] = $n;
  wizard_next('license');
endif;
?>
