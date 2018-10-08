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

      $firstCharacter = substr($description, 0,1);
      $lastCharacter = substr($description, -1);
      if ($firstCharacter == '"') {
        $description = substr($description, 1);
      }

      if ($lastCharacter == '"') {
        $description = substr($description, 0, -1);
      }

      echo("<p><b>$command $address $nav $time $description</b></p>");
      printarray($coin->$command($address, $nav, $time, $description));
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
  case "createpaymentrequest":
    try {
      list($hash, $nav, $unique_id) = explode(' ',$input[1], 3);
      $nav = (int)$nav;

      $firstCharacter = substr($unique_id, 0,1);
      $lastCharacter = substr($unique_id, -1);
      if ($firstCharacter == '"') {
        $unique_id = substr($unique_id, 1);
      }

      if ($lastCharacter == '"') {
        $unique_id = substr($unique_id, 0, -1);
      }

      echo("<p><b>$command $hash $nav $unique_id</b></p>");
      printarray($coin->$command($hash, $nav, $unique_id));
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
  case "proposalvote":
  case "paymentrequestvote":
    try {
      list($hash, $option) = explode(' ', $input[1]);
      echo("<p><b>$command $hash $option</b></p>");
      printarray($coin->$command($hash, $option));
    } catch(Exception $e) {
      echo "<p class='bg-danger'><b>{$e}Error: Something went wrong... Double check for spelling error and correct syntax. </b></p>";
    }
    break;
}

?>

<?php include ("footer.php");?>