<h1>Мои университеты</h1>

<?
foreach(glob('*') as $f):
  if(!file_exists($p = $f.'/index.php'))
    continue;
  if(!preg_match('/<(h1|title)>(.*?)<\/\1>/ims', file_get_contents($p), $match))
    continue;
?>
<li><a href="<?= $f ?>/"><?= trim($match[2]) ?></a>
<?
endforeach;
?>
