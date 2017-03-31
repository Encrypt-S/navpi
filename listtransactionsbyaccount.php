<?php
include ("header.php");
include ("pass.php");
$account = $_POST['account'];
$count = $_POST['count'];
$trans = $coin->listtransactions($account, (int)$count);
$x = array_reverse($trans);
?>

<p><b>The Last <?php print_r($count);?> Transactions For The Account "<?php print_r($account);?>":</b></p>
<div class="panel panel-default">
    <div class="table-responsive">
        <?php
        echo "<table class='table-hover table-condensed table-bordered table'>
        <thead><tr><th>Method</th><th>Address</th><th>Account</th><th>Amount</th><th>Confirmations</th><th>Time</th><th>Txid</th></tr></thead>";
        foreach ($x as $x) {
            if($x['amount'] > 0) { 
                $coloramount = "green"; 
            } 
            else { 
                $coloramount = "red"; 
            }
            if($x['confirmations'] >= 6) { 
                $colorconfirms = "green"; 
            } 
            else { 
                $colorconfirms = "red"; 
            }
	    $date = date('D M j y g:i a', $x['time']);
            echo "<tr>";
            echo "<tr>";
            echo "<td>" . ucfirst($x['category']) . "</td>";
            echo "<td>{$x['address']}</td>
	    <td><div style='width:60px;overflow:hidden'>{$x['account']}</div></td>
            <td><div style='width:70px;overflow:hidden'><font color='{$coloramount}'>{$x['amount']}</font></div></td>
	    <td><div style='width:110px;overflow:hidden'><font color='{$colorconfirms}'>{$x['confirmations']}</font></div></td>
	    <td>{$date}</td>
	    <td><div style='width:120px;overflow:hidden'>{$x['txid']}</div></td>
	    </tr>";
        }
    echo "</table>";
        ?> 
    </div>
</div>
</div>
<?php include("footer.php"); ?>