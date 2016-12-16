<?
include 'head.php';
include 'html.html';
?>
<h1>Мастер</h1>

<form method='post'>
<?
@include($_SESSION['page'].".render.php");

$Disabled = count($_SESSION['pages']) ? '' : 'disabled';
?>
<p>
<table width='100%'>
  <tr>
    <td align='left'>
      <input type='button' value='Отмена' <?= $Disabled ?>
        onclick="document.forms.cancel.submit()">
    </td>
    <td align='right'>
      <input type='button' value='Назад &lt;&lt;' <?= $Disabled ?>
        onclick="document.forms.back.submit()">
      <input type='submit' value='Далее &gt;&gt;'>
    </td>
  </tr>
</table>
</form>

<form method='post' name='cancel' action='?cancel'></form>

<form method='post' name='back'  action='?back'></form>

<hr>
<a href=/ class='btn btn-success'>
<i class='fa fa-home'></i>
Домой
</a>

</div>
</body>
</html>
