<?php
include ("header.php");
include ("pass.php");
$password = $_POST['password'];
try {
	$coin->encryptwallet($password);
		echo "<p class='bg-success'><b>Your wallet is now encrypted, your password is $password, do not forget it, there is no way of recovering it. This process will stop the wallet, you must restart your StakeBox before you can access it again.</b></p> ";
		$newLockState = "Locked";
                changeLockState();
	} catch(Exception $e) {
		echo "<p class='bg-danger'><b>Error: Something went wrong...  Is your wallet already encrypted?</b></p>";
	}
?>
</div>
<?php include ("footer.php");?>