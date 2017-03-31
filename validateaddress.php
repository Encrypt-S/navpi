<?php
include ("header.php");
include ("pass.php");
?>

<p><b>Validate Address:</b></p>
<div class="panel panel-default">
    <div class="table-responsive">
        <table class="table-condensed table-hover table-bordered table" >
    	    <thead>
    	        <tr>
    		    <th>Category</th>
    		    <th>Value</th>
    		</tr>
    	    </thead>
    	    <tbody>
    		<?php $info = $coin->validateaddress($_POST['address']);
		foreach ($info as $key => $val){
		    if ($val != "")
		    echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
		}
		?>
    	    </tbody>
        </table>
    </div>
</div>
<b>The number 1 means true, the number 0 means false.</b>
</div>
<?php include ("footer.php"); ?>