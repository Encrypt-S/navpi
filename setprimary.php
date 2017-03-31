<?php 
include ("header.php");
include ("pass.php");
$primaryLocation = "/home/stakebox/UI/primary".$currentWallet."address.php";

function changePrimary(){

	global $primaryLocation;
	global $newPrimary;
	if(!file_exists("$primaryLocation")){
		$file = fopen("$primaryLocation","w");
		fwrite($file,"");
		fclose($file);
	}   
	if (is_readable($primaryLocation) == FALSE) 
		die ("The primary address file must be writable.") ; 

	// Open the file and erase the contents if any
	$fp = fopen($primaryLocation, "w");

	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$primary='$newPrimary';\n?>");	  	
  	// Close the file
  	fclose($fp);

  	echo '<h4><a><p><b>Your main wallet address has been changed.</p></b></a></h4>' ;
}

if($_POST['address'] != ""){
   $newPrimary = $_POST['address'];
   changePrimary();
   print_r('You have set the main wallet address to ');
   print_r($_POST['address']);
}
?>


</div>
<?php include ("footer.php");?>