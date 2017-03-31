<?php 
include ("header.php");
include ("pass.php");
$notesLocation = "/home/stakebox/UI/".$currentWallet."notes.php";

function changenotes(){

	global $notesLocation;
	global $newnotes;
	if(!file_exists("$notesLocation")){
		$file = fopen("$notesLocation","w");
		fwrite($file,"");
		fclose($file);
	}   
	if (is_readable($notesLocation) == FALSE) 
		die ("The notes file must be writable.") ; 

	// Open the file and erase the contents if any
	$fp = fopen($notesLocation, "w");

	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$notes='$newnotes';\n?>");	  	
  	// Close the file
  	fclose($fp);

  	echo '<h4><a><p><b>Your notes have been changed.</p></b></a></h4>' ;
}


   $newnotes = $_POST['notes'];
   changenotes();
   print_r('The following has been written to the notes file: ');
   print_r($_POST['notes']);

?>


</div>
<?php include ("footer.php");?>