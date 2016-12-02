<?
include('db.php');
include('head.php');
$Disabled = count($_SESSION['pages']) ? '': ' disabled';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мастер настройки</title>
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/font-awesome.min.css" rel="stylesheet">
    <script src="/assets/jquery.min.js"></script>
    <script src="/assets/bootstrap.min.js"></script>
  </head>
  <body>
    <div class='container-fluid'>
      <? include 'body.php' ?>
    </div>
  </body>
</html>
