<?php


	#ini_set("display_errors", false);

	require("libs/config.php");
	require("jsonRPCClient.php");
	require("printarray.php");
	require("/home/stakebox/UI/currency.php");
#	include("/home/stakebox/UI/email.php");
	include("diskusage.php");

	//hard set currency to usd

	$currency='usd';
	$longCurrency='US Dollar';
	$symbol='$';


	session_start();
	if (isset($_GET['currentWallet']) && !empty($_GET['currentWallet']))
		$_SESSION['currentWallet'] = $_GET['currentWallet'];

	if (isset($_SESSION['currentWallet']) && !empty($_SESSION['currentWallet']))
		$currentWallet = $_SESSION['currentWallet'];
	else {
		$keys = array_keys($wallets);
		$currentWallet = $keys[0];
		$_SESSION['currentWallet'] = $currentWallet;
	}

	$coinu = $wallets[$currentWallet];

	$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);

	$ticker = $coinu['ticker'];

	$pair = "$ticker"."-btc";

	// fetch price in BTC price of current coin
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "https://api.coinmarketcap.com/v1/ticker/nav-coin/");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$rawData = curl_exec($curl);
	$data = json_decode($rawData);
	$priceBtc = $data[0]->price_btc;
	$priceUsd = $data[0]->price_usd;

	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";
	//
	// echo "<pre>";
	// print_r($data[0]);
	// echo "</pre>";
	//
	// echo "<pre>";
	// print_r([$priceBtc, $priceUsd]);
	// echo "</pre>";
	/*
	// fetch fiat value of BTC
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://api.cryptocoincharts.info/tradingPair/btc_".$currency);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$rawData1 = curl_exec($curl);
	curl_close($curl);
	$data1 = json_decode($rawData1);
	$fiatBTC = $data1->price;

	$lastRunLog = '/home/stakebox/UI/lastrun';
	$versionLocation = '/home/stakebox/UI/version.php';

	if(!file_exists("$lastRunLog")){
		$file = fopen("$lastRunLog","w");
		fwrite($file,"");
		fclose($file);
	}

	if(!file_exists("$versionLocation")){
		$file = fopen("$versionLocation","w");
		fwrite($file,"");
		fclose($file);
	}

	if (file_exists($lastRunLog)) {
	    $lastRun = file_get_contents($lastRunLog);
	    if (time() - $lastRun >= 86400) {
        	// fetch github info
        	$curl = curl_init();
		curl_setopt($curl, CURLOPT_HTTPHEADER,array('User-Agent: StakeBox'));
        	curl_setopt($curl, CURLOPT_URL, "https://api.github.com/repos/stakebox/webui/tags");
        	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        	$rawData2 = curl_exec($curl);
        	curl_close($curl);
	        $data2 = json_decode($rawData2);
		$current = $data2[0]->name;
	        //update lastrun.log with current time
	        file_put_contents($lastRunLog, time());
		//update version.php with current version
		$fp = fopen($versionLocation, "w");
	  	fwrite($fp, "<?php\n\$newestVersion='$current';\n?>");
	  	fclose($fp);

	    }
	}
	*/
$lockStateLocation = "/home/stakebox/UI/".$currentWallet."lockstate.php";

function changeLockState(){

	global $lockStateLocation;
	global $newLockState;
	if(!file_exists("$lockStateLocation")){
		$file = fopen("$lockStateLocation","w");
		fwrite($file,"");
		fclose($file);
	}
	if (is_readable($lockStateLocation) == FALSE)
		die ("The lock state file must be writable.") ;

	// Open the file and erase the contents if any
	$fp = fopen($lockStateLocation, "w");
	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$lockState='$newLockState';\n?>");
  	// Close the file
  	fclose($fp);
}

include("/home/stakebox/UI/version.php");
include("/home/stakebox/UI/primary".$currentWallet."address.php");

try {
	$coinGetInfo = $coin->getinfo();
} catch(Exception $e) {
	$newLockState = "Locked";
	changeLockState();
	$coinGetInfo = false;
}

if($coinGetInfo) {
	if (!isset($coinGetInfo['unlocked_until'])) {
		$lockState = "Not Encrypted";
		$newLockState = "Not Encrypted";
		changeLockState();
	}

	if (isset($coinGetInfo['unlocked_until']) && (int) $coinGetInfo['unlocked_until'] > 0) {
		$address = $coin->getaddressesbyaccount("")[0];
		try {
			$signed = $coin->signmessage($address, "test message");
			$newLockState = "Unlocked For Sending";
			changeLockState();
		} catch (Exception $e) {
			$newLockState = "Unlocked For Staking";
			changeLockState();
		}
	}

	if (isset($coinGetInfo['unlocked_until']) && (int) $coinGetInfo['unlocked_until'] === 0) {
		$newLockState = "Locked";
		changeLockState();
	}

}

include("/home/stakebox/UI/".$currentWallet."lockstate.php");

?>

<html><head><title><?php echo $price; echo " BTC/"; echo $ticker;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='css/slate.css' rel='stylesheet' >
<link href="css/main.css" rel="stylesheet" >
<link rel="icon" type="image/png" href="favicon.png">
<script src='libs/jquery.js'></script>
<script src='libs/bootstrap.js'></script>
	<script>
		$(function(){
			$('#selectwallet a').click(function(){
				window.location.href="./?currentWallet="+$(this).text();
				return false;
			});
		});
		var pair = <?php echo json_encode($pair); ?>;
		var ticker = <?php echo json_encode($ticker); ?>;
		var data_from_ajax;
		var refreshRate=setInterval(function(){fetchPrice()},180000);
		function fetchPrice() {
			$.get('price.php?pair='+pair, function(data) {
				data_from_ajax = data;
				document.title = data_from_ajax+" BTC/"+ticker;
				document.getElementById("price").innerHTML = data_from_ajax;
			});
		}
	</script>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top navbar-custom" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./"><img src="navcoin-logo.png" height="100%"></a>

			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="last20transactions">Transactions</a></li>
					<li><a href="sendcoins">Send Coins</a></li>
					<li><a href="control">Control</a></li>
					<li><a href="help">Help</a></li>
					<li><a href="community-fund">Community Fund</a></li>
				</ul>
				<div class="navbar-right">
					<p class="navbar-text"><?php 	echo "Current price is <b id='price'>{$priceBtc}</b> BTC"; ?></p>
					<!--
					<p class="navbar-text">Select Wallet:</p>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $currentWallet;?> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" id="selectwallet">
								<?php
									foreach ($wallets as $walletName => $walletData)
										echo '<li><a href="#">'.$walletName.'</a></li>';
								?>
							</ul>
						</li>
					</ul>
					-->
				</div>
			</div>
		</div>
	</nav>
<div class="container-fluid">
<div class='content'>
<div class="well">
<?php
	try {
		$coininfo = $coin->getinfo();
	} catch(exception $e) {
		echo "<!-- $e -->";
		echo "<br><p class='bg-danger'><b>Error: Your wallet server is not running. Please restart your StakeBox via the power option in the server section on the control page. If you have just restarted it, or powered it on, please allow it up to several minutes before attempting to restart it again.</b></p>";
	}
	if($dp>97){
		echo "<br><p class='bg-danger'><b>NOTICE: Your disk is nearing capacity, it is currently ".$dp."% full, with ".$df." free space remaining!</b></p>";
	}
?>
