<?php
include ("header.php");
include ("pass.php");
$input = explode(' ', $_POST['order'], 2);

$command = $input[0];

switch ($command) {
  case "createproposal":
    list($nav, $address, $time, $description) = explode($input[1], 4);
    echo("<p>{$nav}, {$address}, {$time}, {$description}</p>");
    break;
  case "createpaymentrequest":
    list($hash, $nav, $unique_id) = explode($input[1], 3);
    echo("<p>{$hash}, {$nav}, {$unique_id}</p>");
    break;
  case "proposalvote":
  case "paymentrequestvote":
    echo "<p>command: $command , args: $input[1] </p>";

    list($hash, $option) = explode($input[1]);
    echo "<p>hash: $hash , option: $option </p>";
    break;
}


?>

<?php include ("footer.php");?>