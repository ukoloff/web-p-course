Ваш выбор:
<span class='whom'><?= $_SESSION['president'] ?></span>

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
    '<span class="whom">', $row['N'], '</span>';
?>
<style>
.whom /* selector */
{
  color: red;
  font-size: 90%;
  background: yellow;
  border: solid 1px green;
}

h2
{
  color: navy;
  text-decoration: underline;
}
</style>
