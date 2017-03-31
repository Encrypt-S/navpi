<?php
include ("header.php");
include ("pass.php");
?>

<p><b>Server Information:</b></p>
<div class="panel panel-default">
    <table class="table-hover table-condensed table-bordered table" >
    	<thead>
    		<tr>
    			<th>Category</th>
    			<th>Value</th>
    		</tr>
    	</thead>
    	<tbody>
    		 <?php $info = $coin->getinfo();
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