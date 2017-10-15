<?php
include ("header.php");
include ("pass.php");
?>

<b>
<?php
  if(isset($_POST["vote"]) && ($_POST["vote"] == "YES" || $_POST["vote"] == "NO")){
    //update config file
    // votefunding=1
    // votefunding=0

    print_r("Updated Vote to " . ucfirst($_POST['vote']) . "<br><br>");
    print_r("Please restart to apply the new settings <a href='/applyupdate.php?updated=true' class='btn btn-default' style='margin:0;'>Restart</a>");
  } else {
    print_r("Something went wrong, please try again<br><br>");
  }
?>
</b>
</div>
<?php include ("footer.php");?>
