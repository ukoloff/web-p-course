Ваш выбор:
<span class='text-info'><?= $_SESSION['president'] ?></span>

<h2>Результаты голосования</h2>

<?
include('db.php');

$result = $db->query(<<<SQL
  Select
    whom,
    count(*) as N
  From
    logs
  Group By
    whom
  Order By 2 Desc
SQL
);

while($row = $result->fetchArray())
  echo '<li><b>', $row['whom'], '</b>: ',
    '<span class="text-info">', $row['N'], '</span>';
?>
