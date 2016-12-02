<h1>Веб-программирование</h1>

<?
foreach(glob('*') as $f):
	echo "<li>", $f;
endforeach;
?>
<li><a href=start>Первая страница</a>
<li><a href=count>Счётчики</a>
<li><a href=wizard>Мастер</a>
