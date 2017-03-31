<?php
include ("header.php");
include ("pass.php");
$old = $_POST['old'];
$new = $_POST['new']; 
try {
    $coin->walletpassphrasechange($old, $new);
    echo "<p class='bg-success'><b>You have successfully changed your password, your new password is $new, do not forget it, there is no way of recovering it.</b></p> ";
} catch(Exception $e) {
    echo "<p class='bg-danger'><b>Error: Something went wrong...  Did you enter the old password incorrectly?</b></p>";
}
?>
</div>
<?php include ("footer.php"); ?>