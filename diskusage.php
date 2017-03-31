<?php


	function formatSize( $bytes ){
		$types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
		for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
		return( round( $bytes, 2 ).$types[$i] );
	}

	$df=disk_free_space("/");
	$dt=disk_total_space("/");
	$du=$dt - $df;
	$dp=sprintf('%.2f',($du / $dt) * 100);

	$df=formatSize($df);
	$du=formatSize($du);
	$dt=formatSize($dt);

	$diskWarning="NOTICE: Your disk is nearing capacity, it is currently ".$dp."% full, with ".$df." free space remaining";

?>
