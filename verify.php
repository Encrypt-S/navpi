<?php

include ('passconfig.php') ;

function verifyPassword($password)

{
	
	

	global $encryptedpasswd ;

	// read encrypted password

	$encryptedpasswd = getpass() ;

 	if ((crypt($password,'$5$rounds=5000$saltgoeshere$') ==  $encryptedpasswd) )


	{ 
	return ('right') ;

	}
 	else
	{     	
	return ('false') ;
 	}

      
}

function getpass()
{
	global  $passwordlocation;

	include ("$passwordlocation");
	return($passwd);
}
?>
