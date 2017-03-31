<?php
include ("header.php");
include ("pass.php");
$currentWallet = ArchCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BitBean;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BlackCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = BottleCaps;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = CASH;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Clams;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Crave;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = DarkTron;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Diamond;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Equilibrium;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = FlutterCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = GoldPieces;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HoboNickels;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HYPER;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = HyperStake;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = LiteDoge;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = MintCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Navajo;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = NetCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = NovaCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Pandacoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycon;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = PeerCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = PhilosopherStone;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Paycon;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = RATECoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = ShadowCash;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = Sprouts;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

$currentWallet = TekCoin;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$newLockState = "Locked";
changeLockState();

include ("footer.php");
?>