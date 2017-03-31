<?php
include 'header.php' ; 
include 'pass.php' ; 
?>
<center>
	
<form name="change password" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

<table class='table-hover table-condensed table-bordered table'>
<tr>
<td>Enter the new password :</td>
<td><input class="form-control" type="password" name="newpass" maxlength="60" size="30"></td>
</tr>
<tr>
<td>Enter the new password again :</td>
<td><input class="form-control" type="password" name="newpass2" maxlength="60" size="30"></td>
</tr>
</table>

<br />
<input class='btn btn-default' type="submit" value="Change password"> 
<br />
<br />

</form>

<?php

if (isset($_POST['newpass']))
{
if ($_POST['newpass'] == '') die ('please enter a new password');
if ($_POST['newpass'] !=  $_POST['newpass2']) die ('your passwords don\'t match');
updatepass($_POST['newpass']) ;  
}


function updatepass($new){

	global $passwordlocation ;

 	// chose any type of encryption you like here 
	$encryptedPassword = crypt($new,'$5$rounds=5000$saltgoeshere$');
	if (is_writable($passwordlocation) == FALSE) die ("The password file must be writable.") ; 

	// Open the file and erase the contents if any
	$fp = fopen($passwordlocation, "w");

	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$passwd='$encryptedPassword';\n// Remember not to change this file\n?>");	  	
  	// Close the file
  	fclose($fp);

  	echo 'Your new password has been saved' ;
}

?>
</div>
<?php include ("footer.php");?>
</center>