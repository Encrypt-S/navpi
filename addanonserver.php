<?php
include ("header.php");
include ("pass.php");
?>

<b>
<?php 
        if(isset($_POST["server"]) && $_POST["server"] != ""){
                $coin->addanonserver($_POST["server"],"add","true");
                print_r("Added {$_POST['server']}<br><br>");
        }
	$servers = $coin->listanonservers();
	print_r('<b>NavTech servers:</b><br><br>');
	foreach ($servers as $server){
		print_r("$server <u><a href=\"removeanonserver.php?server={$server}\">Remove</a></u><br>");
	}
?>
</b> 
</div>
<?php include ("footer.php");?>
