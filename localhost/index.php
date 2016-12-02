<html>
<head>
  <title>Веб-программирование</title>
</head>
<body>
  <h1>Веб-программирование</h1>

  <?
  foreach(glob('*') as $f):
    if(!file_exists($filename = $f . '/index.php'))
      continue;
    $text = file_get_contents($filename);
    if(!preg_match('/<(h1|title)>(.*)?<\/\1>/is', $text, $match))
      continue;
  ?>
    <li><a href="<?= htmlspecialchars($f) ?>"><?= $match[2] ?></a></li>
  <?
  endforeach;
  ?>
</body>
</html>
