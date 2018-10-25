<?php
include ("header.php");
include ("pass.php");
?>

<b>
<?php
  if(isset($_POST["vote"]) && ($_POST["vote"] == "YES" || $_POST["vote"] == "NO")){
    $configPath = "/home/stakebox/.navcoin4/navcoin.conf";

    if (!file_exists($configPath)) {
      print_r("Something went wrong, navcoin.conf does not exist<br><br>");
    } else {

      $voteNumber = ($_POST["vote"] == "YES" ? 1 : 0);
      $configFile = file_get_contents($configPath);

      if (!strpos($configFile, "stakervote=")) {
        $newConfig = $configFile . PHP_EOL. "stakervote=" . $voteNumber;
      } else if (strpos($configFile, "stakervote=1") && $voteNumber == 0) {
        $newConfig = str_replace("stakervote=1", "stakervote=0", $configFile);
      } else if (strpos($configFile, "stakervote=0") && $voteNumber == 1) {
        $newConfig = str_replace("stakervote=0", "stakervote=1", $configFile);
      }

      if ($newConfig) {
        $fileHandle = fopen($configPath, 'w');
        fwrite($fileHandle, $newConfig);
        fclose($fileHandle);
      }

      print_r("Updated Vote to " . ucfirst(strtolower($_POST['vote'])) . "<br><br>");
      print_r("Please restart to apply the new settings <a href='/applyupdate.php?updated=true' class='btn btn-default' style='margin:0;'>Restart</a>");

    }
  } else {
    print_r("Something went wrong, please try again<br><br>");
  }
?>
</b>
</div>
<?php include ("footer.php");?>
