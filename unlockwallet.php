<?php
include ("header.php");
include ("pass.php");

try {
    $coin->walletpassphrase($_POST['password'],9999999);
    echo "<p class='bg-success'><b>Your Wallet is unlocked for sending, for security reasons you should not leave it that way indefinitely.</b></p>";
    $newLockState = "Unlocked For Sending";
    changeLockState();
} catch(Exception $e) {
    echo "<p class='bg-danger'><b>Error: Something went wrong...  Perhaps you entered the wrong password, or your wallet is already unlocked.</b></p>";
}		
?>
</div>
<?php include ("footer.php"); ?>