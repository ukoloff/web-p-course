Ваш выбор: <?= $_SESSION['president'] ?>

<h2>Результаты голосования</h2>
<?
$f = fopen('.data/golos.log', 'r');

while(!feof($f)):
	$s = fgets($f);
    $vote = trim(explode(':', $s)[0]);
    if($vote)
      $votes[$vote]++;
endwhile;

foreach($votes as $k=>$v):
?>
<li><b><?= $k ?></b>: <?= $v ?>
<?
endforeach;	
?>
