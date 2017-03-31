<?php
include("header.php");
include("pass.php");
$trans = $coin->listtransactions('*', 20);
$x = array_reverse($trans);
?>

<p><b>Last 20 Transactions:</b></p>
<div class="panel panel-default">
    <div class="table-responsive">
        <?php
        echo "<table class='table-hover table-condensed table-bordered table'>
        <thead><tr><th>Method</th><th>Address</th><th>Account</th><th>Amount</th><th>Confirmations</th><th>Time</th><th>Txid</th><th>Comment</th></tr></thead>";
        foreach ($x as $x) {
	  $txid = "{$x['txid']}";
	  $commentFile = "/home/stakebox/UI/".$currentWallet.$txid."comment.php";
            if ($x['amount'] > 0) {
                $coloramount = "green";
            } 
            else {
                $coloramount = "red";
            }
            if ($x['confirmations'] >= 6) {
                $colorconfirms = "green";
            } 
            else {
                $colorconfirms = "red";
            }
	    if($x['category'] == generate && $currentWallet == HYPER){
		$getTransaction = $coin->gettransaction($x['txid']);
		$fee = array_reverse($getTransaction);
		$amount = $fee['fee'];
		$x['amount'] = $amount;
		$y = array_reverse($fee['vout']);
		$z = array_reverse($y[0]);
		$q = array_reverse($z['scriptPubKey']);
		$f = array_reverse($q['addresses']);
		$address = array_reverse($z['0']);
		$x['address'] = $f[0];
	    }
            $date = date('D M j y g:i a', $x['time']);
            echo "<tr>";
            echo "<td>" . ucfirst($x['category']) . "</td>";
	  if ($x['comment'] != "") {
            echo "<td>{$x['address']}</td>
                <td><div style='width:60px;overflow:hidden'>{$x['account']}</div></td>
                <td><div style='width:70px;overflow:hidden'><font color='{$coloramount}'>{$x['amount']}</font></div></td>
		<td><div style='width:110px;overflow:hidden'><font color='{$colorconfirms}'>{$x['confirmations']}</font></div></td>
                <td>{$date}</td>
                <td><div style='width:120px;overflow:hidden'>{$x['txid']}</div></td>
		<td>{$x['comment']}</td>
                </tr>";
	  }
	  elseif(file_exists($commentFile)){
	   include("$commentFile");
            echo "<td>{$x['address']}</td>
                <td><div style='width:60px;overflow:hidden'>{$x['account']}</div></td>
                <td><div style='width:70px;overflow:hidden'><font color='{$coloramount}'>{$x['amount']}</font></div></td>
		<td><div style='width:110px;overflow:hidden'><font color='{$colorconfirms}'>{$x['confirmations']}</font></div></td>
                <td>{$date}</td>
                <td><div style='width:120px;overflow:hidden'>{$x['txid']}</div></td>
		<td><div style='width:140px;overflow:hidden'>$comment</div></td>
                </tr>";
	  }
	  else {
            echo "<td>{$x['address']}</td>
                <td><div style='width:60px;overflow:hidden'>{$x['account']}</div></td>
                <td><div style='width:70px;overflow:hidden'><font color='{$coloramount}'>{$x['amount']}</font></div></td>
		<td><div style='width:110px;overflow:hidden'><font color='{$colorconfirms}'>{$x['confirmations']}</font></div></td>
                <td>{$date}</td>
                <td><div style='width:120px;overflow:hidden'>{$x['txid']}</div></td>
		<td>
			<form action='comment' method='POST'><input type='hidden'>
				<button class='btn btn-default btn-block ' type='submit' name='txid' value={$x['txid']}>Add Comment</button>
			</form>
		</td>
                </tr>";
	  }
        }
        echo "</table>";
        ?>
    </div>
</div>
<b><a href="listtransactions.php">View All Transactions</a></b>
</div>
<?php include("footer.php"); ?>