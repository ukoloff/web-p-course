<h1>Веб-программирование</h1>

<?
foreach(glob('*') as $f):
	if(!file_exists($idx = "$f/index.php")) 
		continue;
    if(!preg_match('/<(h1|title)>(.*?)<\/\1>/', @file_get_contents($idx), $match))
    	continue;
	echo "<li>", $f;
endforeach;
?>
<li><a href=start>Первая страница</a>
<li><a href=count>Счётчики</a>
<li><a href=wizard>Мастер</a>
