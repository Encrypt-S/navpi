<?php
include ("header.php");
include ("pass.php");
$command = $_POST['order'];
$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
$var3 = $_POST['var3'];
$var4 = $_POST['var4'];
$var5 = $_POST['var5'];
$var6 = $_POST['var6'];
$var7 = $_POST['var7'];
if(is_numeric($var1)) {
	$var1 = (float)$var1;
}
if(is_numeric($var2)) {
	$var2 = (float)$var2;
}
if(is_numeric($var3)) {
	$var3 = (float)$var3;
}
if(is_numeric($var4)) {
	$var4 = (float)$var4;
}
if(is_numeric($var5)) {
	$var5 = (float)$var5;
}
if(is_numeric($var6)) {
	$var6 = (int)$var6;
}
if(is_numeric($var7)) {
	$var7 = (float)$var7;
}
if($var1 == "false") {
	$var1 = (bool)0;
}
if($var2 == "false") {
	$var2 = (bool)0;
}
if($var3 == "false") {
	$var3 = (bool)0;
}
if($var4 == "false") {
	$var4 = (bool)0;
}
if($var5 == "false") {
	$var5 = (bool)0;
}
if($var6 == "false") {
	$var6 = (bool)0;
}
if($var7 == "false") {
	$var7 = (bool)0;
}
if($var1 == "true") {
	$var1 = (bool)1;
}
if($var2 == "true") {
	$var2 = (bool)1;
}
if($var3 == "true") {
	$var3 = (bool)1;
}
if($var4 == "true") {
	$var4 = (bool)1;
}
if($var5 == "true") {
	$var5 = (bool)1;
}
if($var6 == "true") {
	$var6 = (bool)1;
}
if($var7 == "true") {
	$var7 = (bool)1;
}
if($command == "stop") {
	if($lockState != "Not Encrypted") {
		$newLockState = "Locked";
		changeLockState();
	}
}
?>

	<?php echo "<p><b> {$command} {$var1} {$var2} {$var3} {$var4} {$var5} {$var6} {$var7}</b></p>";?>
		<div class="panel panel-default">
			<?php
			if($var1 == "") {
				try {
					printarray($coin->$command());
					echo "<p class='bg-success'><b><font color=#3e464b>The command {$command} was successful.<br> </font></b></p>";
				} catch(Exception $e) {
					echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
				}   
			}
			else if($var1 != "" && $var2 == "") {
				try {
					printarray($coin->$command($var1));
					echo "<p class='bg-success'><b><font color=#3e464b>The command {$command} {$var1} was successful.<br> </font></b></p>";
				} catch(Exception $e) {
					echo "<p class='bg-danger'><b>Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
				}   
			}
			else if($var1 != "" && $var2 != "" && $var3 == "") {
				try {
					printarray($coin->$command($var1, $var2));
					echo "<p class='bg-success'><b><font color=#3e464b>The command {$command} {$var1} {$var2} was successful.<br> </font></b></p>";
				} catch(Exception $e){
					echo "<p class='bg-danger'><b>Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
				}   
			}
			else if($var1 != "" && $var2 != "" && $var3 != "" && $var4 == "") {
				try {
					printarray($coin->$command($var1, $var2, $var3));
					echo "<p class='bg-success'><b><font color=#3e464b>The command {$command} {$var1} {$var2} {$var3} was successful.<br> </font></b></p>";
				} catch(Exception $e) {
					echo "<p class='bg-danger'><b>Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
				}   
			}
			else if($var1 != "" && $var2 != "" && $var3 != "" && $var4 != "" && $var5 == "") {
				try {
					printarray($coin->$command($var1, $var2, $var3, $var4));
					echo "<p class='bg-success'><b><font color=#3e464b>The command {$command} {$var1} {$var2} {$var3} {$var4} was successful.<br> </font></b></p>";
				} catch(Exception $e) {
					echo "<p class='bg-danger'><b>Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
				}   
			}
			else if($var1 != "" && $var2 != "" && $var3 != "" && $var4 != "" && $var5 != "" && $var6 == "") {
				try {
					printarray($coin->$command($var1, $var2, $var3, $var4, $var5));
					echo "<p class='bg-success'><b><font color=#3e464b>The command {$command} {$var1} {$var2} {$var3} {$var4} {$var5} was successful.<br> </font></b></p>";
				} catch(Exception $e) {
					echo "<p class='bg-danger'><b>Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
				}   
			}
			else if($var1 != "" && $var2 != "" && $var3 != "" && $var4 != "" && $var5 != "" && $var6 != "" && $var7 == "") {
				try {
					printarray($coin->$command($var1, $var2, $var3, $var4, $var5, $var6));
					echo "<p class='bg-success'><b><font color=#3e464b>The command {$command} {$var1} {$var2} {$var3} {$var4} {$var5} {$var6} was successful.<br> </font></b></p>";
				} catch(Exception $e) {
					echo "<p class='bg-danger'><b>Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
				}   
			}
			else if($var1 != "" && $var2 != "" && $var3 != "" && $var4 != "" && $var5 != "" && $var6 != "" && $var7 != "") {
				try {
					printarray($coin->$command($var1, $var2, $var3, $var4, $var5, $var6, $var7));
					echo "<p class='bg-success'><b><font color=#3e464b>The command {$command} {$var1} {$var2} {$var3} {$var4} {$var5} {$var6} {$var7} was successful.<br> </font></b></p>";
				} catch(Exception $e) {
					echo "<p class='bg-danger'><b>Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
				}   
			}
			?>
</div>
</div>
<?php include ("footer.php");?>