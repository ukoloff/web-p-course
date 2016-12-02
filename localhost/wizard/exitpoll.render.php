Ваш выбор: <?= $_SESSION['president'] ?>

<h2>Результаты голосования</h2>
<?
$f = fopen('.data/golos.log', 'r');

while(!feof($f)):
	$s = fgets($f);
	$line = explode(':', $s);
    $votes[$line[0]]++;
endwhile;

foreach($votes as $k=>$v):
?>
<li><b><?= $k ?></b>: <?= $v ?>
<?
endforeach;	
?>
