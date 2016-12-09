<?
$db = new SQLite3('.data/votes.sq3');

function q3($s)
{
  return str_replace("'", "''", $s);
}
?>
