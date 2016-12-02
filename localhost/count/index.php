<?
$count = 1 + $_COOKIE['count'];
setcookie('count', $count);

$persist = 1 + $_COOKIE['persist'];
setcookie('persist', $persist, time()+24*60*60);

$global = 1 + @file_get_contents('.count');
file_put_contents('.count', $global);
?>
<H1>Счётчик посещений</H1>

Вы были здесь <?= $count ?> раз.
<hr>
А всего здесь побывало <?= $global ?> человек.

<hr>
<a href=/>Домой</a>
