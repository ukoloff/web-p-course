Ваш выбор: <?= $_SESSION['president'] ?>

<h2>Результаты голосования</h2>

<?
$f = fopen('.data/votes.json', 'r');
while(!feof($f)):
  $s = fgets($f);
  $vote = json_decode($s)->whom;
  if(!$vote) continue;
  $votes[$vote]++;
endwhile;
foreach($votes as $k=>$v):
  echo '<li><b>', $k, '</b>: ', $v;
endforeach;

?>
