<?
$sumtext = "";
for ($i = 1; $i <= $_SESSION['count']; $i++)
{
	$sumtext = $sumtext.$_SESSION['?'.$i];
}
if($_POST['chislo']==$sumtext)
{
  nextPage('okey');

for ($i = 1; $i <= $_SESSION['count']; $i++)
{
	unset($_SESSION['?'.$i]);
}
unset($_SESSION['count']);
unset($_SESSION['text']);
}
?>