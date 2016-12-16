Ваш выбор:
<span class='text-info'><?= $_SESSION['president'] ?></span>

<h2>Результаты голосования</h2>

<table class='table table-bordered table-striped table-hover'>
  <thead>
    <th>Участник</th>
    <th>Голосов</th>
    <th>Последний голос</th>
  </thead>
<?
include('db.php');

$result = $db->query(<<<SQL
  Select
    whom,
    count(*) as N,
    max(ctime) as ctime
  From
    logs
  Group By
    whom
  Order By 2 Desc
SQL
);

while($row = $result->fetchArray()):
?>
<tr>
  <td>
    <?= $row['whom'] ?>
  </td>
  <td class=text-right>
    <?= $row['N'] ?>
  </td>
  <td class=text-right>
    <?= $row['ctime'] ?>
  </td>
</tr>
<?
endwhile;
?>
</table>
