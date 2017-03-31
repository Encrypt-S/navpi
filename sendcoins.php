<?php
include ("header.php");
include ("pass.php");
$bal1 = $coin->getbalance();
?>

<div class="panel panel-default">
  <center><h3>Available Balance: <font color='green'><?php echo $bal1; ?></font> <?php echo $currentWallet; ?></h3></center>
    <table class="table-hover table-condensed table-bordered table">
        <form action="sendtoaddress.php" method="POST"><input type="hidden">
            <input type="hidden" name="a">
                <tr>
                    <td class="table-row-label"><b>To Address</b></td>
                    <td><input class="form-control" type="text" name="address" value="<?php print($address); ?>"></td>
                </tr>
                <tr>
                    <td class="table-row-label"><b>Amount</b></td>
                    <td><input class="form-control" type="text" name="amount" value="<?php print($amount); ?>"></td>
                </tr>
                <tr>
                    <td class="table-row-label"><b>Comment</b></td>
                    <td><input class="form-control" type="text" name="comment" value="<?php print($comment); ?>"></td>
                </tr>
                <tr>
                    <td class="table-row-label"><b>Private payment</b></td>
                    <td><input class="form-control" type="checkbox" name="anonsend" value="1" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button class='btn btn-blue' type="submit" value="Preview"><b>Preview</b></button></td>
        </form>
    </table>
</div>
</div>
<?php include ("footer.php"); ?>
