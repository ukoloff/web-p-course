Ваш выбор: <?= $_SESSION['president'] ?>

<h2>Результаты голосования</h2>
<?
$f = fopen('.data/golos.json', 'r');

while(!feof($f)):
	$vote = json_decode(fgets($f))->whom;
    if($vote)
      $votes[$vote]++;
endwhile;

foreach($votes as $k=>$v):
?>
<li><b><?= $k ?></b>: <?= $v ?>
<?
endforeach;	
?>
