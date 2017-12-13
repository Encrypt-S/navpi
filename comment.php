<?php
include ("header.php");
include ("pass.php");
$txid = $_POST['txid'];

?>
<center><p>Add a comment to the transaction <?php echo $_POST['txid']; ?>
<div class="panel panel-default">

    <table class="table-hover table-condensed table-bordered table">
        <form action="addcomment" method="POST"><input type="hidden">
                <tr>
                    <td><center><b>Comment to add:</b></center></td>
                    <td><input class="form-control" type="text" name="comment"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button class='btn btn-default' type="submit" name='txid' value=<?php echo $txid; ?>><b>Add Comment</b></button></td>
		</tr>
        </form>
    </table>
</div>

</div>
<?php include ("footer.php"); ?>
