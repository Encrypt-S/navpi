<?php 
include ("header.php");
include ("pass.php");
$peerinfo = $coin->getpeerinfo();
$x = array_reverse($peerinfo);
?>

<p><b>Peer Info:</b></p>
<div class="panel panel-default">
<div class="table-responsive">
<?php
echo "<table class='table-hover table-condensed table-bordered table'>
<thead><tr><th>Address</th><th>Last Receive</th><th>Connection Time</th><th>Version</th><th>Sub-Version</th><th>Ban Score</th></tr></thead>";
foreach ($x as $x){
	$conntime = date('M j y g:i a', $x['conntime']);
	$recvtime = date('M j y g:i a', $x['lastrecv']);
	$sendtime = date('M j y g:i a', $x['lastsend']);
	echo "<tr>
		<td>{$x['addr']}</td>
		<td>{$recvtime}</td>
		<td>{$conntime}</td>
		<td>{$x['version']}</td>
		<td>{$x['subver']}</td>
		<td>{$x['banscore']}</td>
	</tr>";
}
echo "</table>";
?> 
</div>
</div>
</div>
<?php include ("footer.php");?>