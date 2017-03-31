<?php
include ("header.php");
include ("pass.php");
?>

<b>
<?php 
	$servers = $coin->listanonservers();
        print_r('<b>NavTech servers:</b><br><br>');
	foreach ($servers as $server){
                print_r("$server <u><a href=\"removeanonserver.php?server={$server}\">Remove</a></u><br>");
	}
?>
</b> 
</div>
<?php include ("footer.php");?>
