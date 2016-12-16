Ваш выбор:
<span class='text-info'><?= $_SESSION['president'] ?></span>

<h2>Результаты голосования</h2>

<table class='table table-bordered table-striped table-hover'>
  <thead>
    <th>Участник</th>
    <th>Голосов</th>
  </thead>
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
  echo '<tr><td>', $row['whom'], '</td><td class=text-right>', $row['N'], '</td></tr>';
?>
</table>
