<?
error_reporting(E_ALL);
$db = new PDO('sqlite:.data/votes.sq3');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
