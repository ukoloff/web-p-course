Ваш выбор: <?= $_SESSION['president'] ?>

<h2>Результаты голосования</h2>

<?
include('select.db.php');

$res = $db->query(<<<SQL
  Select
    whom, count(*) as N
  From
    logs
  Group By whom
  Order By 2 Desc
SQL
);

while($row = $res->fetch()):
  echo '<li><b>', $row[0], '</b>: ', $row[1];
endwhile;

?>
