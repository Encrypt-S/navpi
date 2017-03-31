<?php
include ("header.php");
include ("pass.php");
?>
<p><b>Repair Wallet:</b></p>
<div class="panel panel-default">
    <table class="table-hover table-condensed table-bordered table" >
        <thead>
            <tr>
                <th>Function</th>
                <th>State 1=True 0=false</th>
    	    </tr>
    	</thead>
    	<tbody>
            <?php $info = $coin->repairwallet();
            foreach ($info as $key => $val){
	        echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
	    }
            ?>
    	</tbody>
    </table>
</div>
</div>
<?php include ("footer.php"); ?>