<?php
include ("header.php");
include ("pass.php");
?>

<b>
<?php 
	if(isset($_GET["server"]) && $_GET["server"] != ""){
		$coin->addanonserver($_GET["server"],"remove","true");
		print_r("Removed {$_GET['server']}<br><br>");
	}
	$servers = $coin->listanonservers();
        print_r('<b>NavTech servers:</b><br><br>');
	foreach ($servers as $server){
		print_r("$server <u><a href=\"removeanonserver.php?server=$server\">Remove</a></u><br>");
	}
?>
</b> 
</div>
<?php include ("footer.php");?>
