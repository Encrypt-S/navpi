<?php
include ("header.php");
include ("pass.php");
$input = explode(' ', $_POST['order'], 2);

$command = $input[0];

switch ($command) {
  case "createproposal":
    try {
      list($nav, $address, $time, $description) = explode(' ',$input[1], 4);
     $rpc_command = array($command, $nav, $address, $time, $description);
     print_r( "<p>command: $rpc_command[0],$rpc_command[1], $rpc_command[2],$rpc_command[3], $rpc_command[4]</p>");
     printarray($coin->$rpc_command());
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
  case "createpaymentrequest":
    try {
      list($hash, $nav, $unique_id) = explode(' ',$input[1], 3);
     $rpc_command = array($command, $hash, $nav, $unique_id);
     print_r( "<p>command: $rpc_command[0],$rpc_command[1], $rpc_command[2],$rpc_command[3]</p>");
     printarray($coin->$rpc_command());
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
  case "proposalvote":
  case "paymentrequestvote":
    try {
      list($hash, $option) = explode(' ', $input[1]);
     $rpc_command = array($command, $hash, $option);
     print_r( "<p>command: $rpc_command[0],$rpc_command[1], $rpc_command[2]</p>");
     printarray($coin->$rpc_command());
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
}

?>

<?php include ("footer.php");?>