<?php
include ("header.php");
include ("pass.php");
$address = $_POST['address'];
$amount = $_POST['amount'];
$comment = $_POST['comment'];
$account = $_POST['account'];

if(isset($_POST['address']) && isset($_POST['amount']) && isset($_POST['account'])) {
    try {
        $coin->sendfrom($account, $address, (float)$amount, 6, $commment);
	echo "<p class='bg-success'><b>You have sent {$amount} coin(s) to {$address} <br> </b></p>";
    } catch(Exception $e) {
	echo "<p class='bg-danger'><b>Error: Something went wrong... Have you got enough to send that amount of money? Is your wallet unlocked? </b></p>";
    }   
}

if(isset($_POST['address']) && isset($_POST['amount']) && !isset($_POST['account'])) {
    try {
	if($_POST['anonsend'] == "1"){
		$coin->anonsend($address, (float)$amount, $comment);
	} else {
		$coin->sendtoaddress($address, (float)$amount, $comment);
	}
	echo "<p class='bg-success'><b>You have sent {$amount} coin(s) to {$address} <br> </b></p>";
    } catch(Exception $e) {
	echo "<p class='bg-danger'><b>Error: Something went wrong... Have you got enough to send that amount of money? Is your wallet unlocked? {$e} </b></p>";
    }   
}
?>
</div>
<?php include ("footer.php"); ?>
