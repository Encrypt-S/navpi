<?php
include("header.php");
include("pass.php");
$minconf = $_POST['minconf'];
$trans   = $coin->listreceivedbyaddress((int) $minconf, true);
$x       = array_reverse($trans);
?>

<p><b>Total Received Sorted By Address:</b></p>
<div class="panel panel-default">
    <div class="table-responsive">
        <?php
        echo "<table class='table-hover table-condensed table-bordered table'>
        <thead><tr><th>Address</th><th>Account</th><th>Amount</th><th>Confirmations</th></tr></thead>";
        foreach ($x as $x) {
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
            echo "<tr>
                <td>{$x['address']}</td>
                <td>{$x['account']}</td>
                <td><font color='{$coloramount}'>{$x['amount']}</font></td>
                <td><font color='{$colorconfirms}'>{$x['confirmations']}</font></td>
            </tr>";
        }
    echo "</table>";
        ?> 
    </div>
</div>
</div>
<?php include("footer.php"); ?>