<form action="https://www.paypal.com/cgi-bin/webscr" id="paypalForm" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="E3CHWV8SXAKPC">
</form>

<?php
session_start();

//save song name to session variable

$_SESSION['songName'] = $_POST['song-name'];
    if (isset($_POST['song-name']))
{

echo $_SESSION['songName'];
?>
<script type="text/javascript">
    document.getElementById('paypalForm').submit(); // SUBMIT FORM
</script>
<?php
}
else
{
  // leave the page alone
}
?>
