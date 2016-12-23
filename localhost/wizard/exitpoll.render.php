<?
$sort = @$_GET['sort'][0];
$n = ord(strtoupper($sort)) - ord('A') + 1;
if($n<1 || $n>3) $n = 2;

$by = (1==$n);
if('A' <= $sort && $sort <= 'Z')
  $by = !$by;
$by = ($by ? 'ASC' : 'DESC');

$names = Array('Кандидат', 'Голосов', 'Последний');
//$names = 'Кандидат Голосов Последний'.explode(' ');
?>
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <?
      $c='a';
      foreach($names as $name):
      ?>
        <th><a href="?sort=<?=
          $c==$sort ? strtoupper($c) : $c
          ?>"><?=$name ?></a></th>
      <?
        $c++;
      endforeach;
      ?>
    </tr>
  </thead>
<?
include('db.php');

$result = $db->query(<<<SQL
  Select
    whom,
    count(*) as n,
    max(ctime) as time
  From
    logs
  Group By
    whom
  Order By $n $by
SQL
);

while($row = $result->fetch()):
?>
<tr>
  <td>
    <?= $row['whom'] ?>
    <? if($_SESSION['president'] == $row['whom']): ?>
      <span class="label label-success">Ваш выбор</a>
    <? endif; ?>
  </td>
  <td class=text-right>
    <?= $row['n'] ?>
  </td>
  <td>
    <?= $row['time'] ?>
  </td>
</tr>
<?
endwhile;
?>
</table>
