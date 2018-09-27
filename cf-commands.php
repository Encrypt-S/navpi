<?php
include ("header.php");
include ("pass.php");
$input = explode(' ', $_POST['order'], 2);

$command = $input[0];

switch ($command) {
  case "createproposal":
    list($nav, $address, $time, $description) = explode(' ',$input[1], 4);
    $rpc_command = array($command, $nav, $address, $time, $description);
    print_r( "<p>command: $rpc_command </p>");
    printarray($coin->$rpc_command());
    break;
  case "createpaymentrequest":
    list($hash, $nav, $unique_id) = explode(' ',$input[1], 3);
    $rpc_command = array($command, $hash, $nav, $unique_id);
    print_r( "<p>command: $rpc_command</p>");
    printarray($coin->$rpc_command());
    break;
  case "proposalvote":
  case "paymentrequestvote":
    list($hash, $option) = explode(' ', $input[1]);
    $rpc_command = array($command, $hash, $option);
    print_r( "<p>command: $rpc_command[0],$rpc_command[1], $rpc_command[2]</p>");
    printarray($coin->$rpc_command());
    break;
}

?>

<?php include ("footer.php");?>