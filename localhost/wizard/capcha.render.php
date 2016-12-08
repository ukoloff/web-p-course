Are you a robot?
<br>
<br>
<? for ($i = 1; $i <= $_SESSION['count']; $i++) { 
	?>
 <img src="?capcha<?=$i?>"/>
<?; 
}?>
<br>
<br>
<input name='chislo' autofocus required>