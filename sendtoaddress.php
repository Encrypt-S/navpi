<?php
include ("header.php");
include ("pass.php");
$address = $_POST['address'];
$amount = $_POST['amount'];
$comment = $_POST['comment'];
$validate = $coin->validateaddress($address);
$x = array_reverse($validate);
$bal1 = $coin->getbalance();
?>

<div class="panel panel-default">
  <center><h3>Available Balance: <font color='green'><?php echo $bal1; ?></font> <?php echo $currentWallet; ?></h3></center>
    <table class="table-hover table-condensed table-bordered table">
        <form action="send.php" method="POST"><input type="hidden">
            <input type="hidden" name="a">
                <tr>
                    <td><b>To Address</b></td>
                    <td><input class="form-control" type="text" name="address" value="<?php print($address); ?>"></td>
                </tr>
                <tr>
                    <td><b>Amount</b></td>
                    <td><input class="form-control" type="text" name="amount" value="<?php print($amount); ?>"></td>
                </tr>
                <tr>
                    <td><b>Comment</b></td>
                    <td><input class="form-control" type="text" name="comment" value="<?php print($comment); ?>"></td>
                </tr>
                <tr>
                    <td><b>Private payment</b></td>
                    <td><input class="form-control" type="checkbox" name="anonsend" value="1" <?php if($_POST['anonsend'] == "1"){ echo "checked";} ?>/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button class='btn btn-blue' type="submit" value="Preview"><b>Send Coins</b></button></td>
		</tr>
        </form>
    </table>
</div>
</div>
<div class="well">
    <p><b>PREVIEW:</b></p>
    <b><b>Sending <?php print( $amount ); ?> Coin(s) to</b> <?php print $address; ?></b>
    <div class="panel panel-default">
        <table class="table-condensed table-hover table-bordered table" >
    	    <tbody>
    		<?php $info = $coin->validateaddress($_POST['address']);
		foreach ($info as $key => $val){
		   echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
		}
		?>
    	    </tbody>
        </table>
    </div>
    <b>1=True 0=False</b>
</div>
<?php include ("footer.php"); ?>
