<?php
include ("header.php");
include ("pass.php");
	$stakinginfo = $coin->getstakereport();
?>

<p><b>Staking Info:</b></p>
<div class="panel panel-default">

    <table class="table-hover table-condensed table-bordered table" >
    	<thead>
    		<tr>
    			<th>Category</th>
    			<th>Value</th>
    		</tr>
    	</thead>
    	<tbody>
		<?php
			foreach ($stakinginfo as $key => $val){
				echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
			}
		?>
    	</tbody>
    </table>
</div>
</div>
<?php include ("footer.php");?>