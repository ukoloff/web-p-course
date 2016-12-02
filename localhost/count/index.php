<?
setcookie('count', $count = $_COOKIE['count'] + 1);

$monthly = $_COOKIE['monthly'] + 1;
setcookie('monthly', $monthly, time() + 60*60*24*366);

$total = @file_get_contents('.data/total.ini') + 1;
file_put_contents('.data/total.ini', $total);

?>
<html>
<head>
  <Title>Заголовок</Title>
</head>
<body>
<H1>Счётчики</H1>

Привет!
<br>
Вы здесь:
<ul>
  <li>Сегодня: <?=$count ?> раз.
  <li>Вообще: <?= $monthly ?> раз.
  <li>Всем миром: <?= $total ?> раз.
</ul>

<hr>
<a href=/>Home</a>
</body>
</html>
