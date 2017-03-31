<?php

	require("/home/stakebox/UI/config.php");
	require("jsonRPCClient.php");	
	include("/home/stakebox/UI/email.php");
	include("diskusage.php");

	session_start();
		$_SESSION['currentWallet'] = $_GET['currentWallet'];

	if (isset($_SESSION['currentWallet']) && !empty($_SESSION['currentWallet']))
		$currentWallet = $_SESSION['currentWallet'];

	$coinu = $wallets[$currentWallet];

	$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);

	$ticker = $coinu['ticker'];

	$transactionHash = $_GET["transactionHash"];

	$transactionFile = "/home/stakebox/UI/latest".$currentWallet."Transaction.php";

	include("$transactionFile");

	$walletinfo = $coin->getinfo();

	$trxinfo = $coin->gettransaction($transactionHash);

	$date = date('D M j Y g:i a', $trxinfo['time']);
	
	if($trxinfo["details"][0]["category"]=="send"){
		$new = "You have sent ".abs($trxinfo["details"][0]["amount"])." ".$ticker." to ".$trxinfo["details"][0]["address"]."."
		."\nAs of ".$date." your current balance is ".$walletinfo["balance"];
	}
	
	if($trxinfo["details"][0]["category"]=="receive"){
		$new = "You have received ".$trxinfo["details"][0]["amount"]." ".$ticker." with ".$trxinfo["details"][0]["address"]."."
		."\nAs of ".$date." your current balance is ".$walletinfo["balance"];
	}

	if($trxinfo["details"][0]["category"]=="stake"){
		$new = "You have received a staking reward of ".$trxinfo["details"][0]["amount"]." ".$ticker."."
		."\nAs of ".$date." your current balance is ".$walletinfo["balance"];
	}

	if($trxinfo["details"][0]["category"]=="generate"){
		$new = "You have received a staking reward of ".$trxinfo["details"][0]["amount"]." ".$ticker."."
		."\nAs of ".$date." your current balance is ".$walletinfo["balance"];
	}

	if((!file_exists("$transactionFile"))||($transactionHash != $oldHash)){
		$newHash = "<?php "."$"."oldHash = ".'"'."$transactionHash".'";'." ?>"; 
		$fp = fopen("$transactionFile","w");
		fwrite($fp,$newHash);
	}elseif($dp>70){
		exec("echo '$diskWarning' | mailx -s 'StakeBox disk space low!' $email");
	}

	if(($transactionHash==$oldHash)&&($new!="")){
		exec("echo '$new' | mailx -s 'New $currentWallet transaction' $email");
	}


?>
