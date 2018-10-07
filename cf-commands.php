<?php
include ("header.php");
include ("pass.php");
$input = explode(' ', $_POST['order'], 2);

$command = $input[0];


switch ($command) {
  case "createproposal":
  try {
    

      list($address, $nav, $time, $description) = explode(' ',$input[1], 4);
      $nav = (int)$nav;
      $time = (int)$time;
      echo("<p><b> $command $nav $address $time $description </b></p>");
      // $rpc_command = array($command, $nav, $address, $time, $description);
      print_r( "<p>command: $command, $nav, $address, $time, $description</p>");
      printarray($coin->$command($address, $nav, $time, $description));
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
  case "createpaymentrequest":
    try {
      list($hash, $nav, $unique_id) = explode(' ',$input[1], 3);
      // $rpc_command = array($command, $hash, $nav, $unique_id);
      print_r( "<p>command: $command, $hash, $nav, $unique_id</p>");
      printarray($coin->$command($hash, $nav, $unique_id));
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
  case "proposalvote":
  case "paymentrequestvote":
    try {
      list($hash, $option) = explode(' ', $input[1]);
      // $rpc_command = array($command, $hash, $option);
      print_r( "<p>$command, $hash, $option</p>");
      printarray($coin->$command($hash, $option));
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
}

?>

<?php include ("footer.php");?>