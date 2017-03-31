<?php
include 'header.php';
include 'pass.php';
$emailLocation = "/home/stakebox/UI/email.php" ;

function setEmail(){

	global $emailLocation ;
	global $newEmail ;

	// Open the file and erase the contents if any
	$fp = fopen($emailLocation, "w");

	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$email='$newEmail';\n?>");	  	
  	// Close the file
  	fclose($fp);

  	echo '<h4><a><p><b>Your notification email address has been changed.</p></b></a></h4>' ;
}

if($_POST['address'] != ""){
   $newEmail = $_POST['address'];
   setEmail();
}
?>


</div>
<?php include ("footer.php");?>