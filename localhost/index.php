<h1>Веб-программирование</h1>

<?
foreach(glob('*') as $f):
	if(!file_exists($idx = "$f/index.php")) 
		continue;
    if(!preg_match('/<(h1|title)>(.*?)<\/\1>/is', @file_get_contents($idx), $match))
    	continue;
?>
<li><a href="<?= $f ?>"><?= trim($match[2]) ?></a></li>
<?
endforeach;
?>
