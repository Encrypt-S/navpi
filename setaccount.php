<?php
include ("header.php");
include ("pass.php");
?>
<p><b>
<?php 
$coin->setaccount($_POST['address'],$_POST['account']);
print_r('You have successfully associated the address ');
print_r($_POST['address']);
print_r(' with the account "');
print_r($_POST['account']);
print_r('"');
?>
</b></p>
</div>
<?php include ("footer.php"); ?>