<?
error_reporting(E_ALL);
$db = new SQLite3('.data/votes.sq3');
$db->enableExceptions(true);
?>
