<?
error_reporting(E_ALL);
$db = new PDO("pgsql:host=127.0.0.1;dbname=votes", 'postgres', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
