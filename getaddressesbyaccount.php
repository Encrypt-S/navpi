<?php
include ("header.php");
include ("pass.php");
?>

<p><b>
<?php 
	print_r('These are all of the current addresses for the account named "');
	print_r($_POST['account']);
	print_r('":');
?>
</b></p>
<div class="panel panel-default">
    <table class="table-hover table-condensed table-bordered table" >
    	<thead>
    		<tr>
    			<th>Wallet #</th>
    			<th>Address</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php $info = $coin->getaddressesbyaccount($_POST['account']);
					foreach ($info as $key => $val){
						if ($val != "")
							echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
					}
		?>
    	</tbody>
    </table>
</div>
</div>
<?php include ("footer.php");?>