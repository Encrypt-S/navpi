
<?php
include ("header.php");
include ("pass.php");
        $communityfundinfos = $coin->cfundstats();
        $proposalvotelist = $coin->proposalvotelist();
        $proposalYesVotes = $proposalvotelist['yes'];
        $proposalNoVotes = $proposalvotelist['no'];
        $proposalNotVoted = $proposalvotelist['null'];
        $paymentrequestvotelist = $coin->paymentrequestvotelist();
        $paymentRequestYesVotes = $paymentrequestvotelist['yes'];
        $paymentRequestNoVotes = $paymentrequestvotelist['no'];
        $paymentRequestNotVoted = $paymentrequestvotelist['null'];

?>

<p><b>Community Fund Infos</b></p>
<p>Currently voted on proposals</p>
<div class="panel panel-default">
  <div class="table-responsive">
    <?php
      echo "<table class='table-hover table-condensed table-bordered table'>
              <thead>
                <tr>
                  <th>Description</th>
                  <th>Amount</th>
                  <th>Your vote</th>
                  <th>Vote</th>
                </tr>";

                // at the moment, proposalvotelist() returns a string which would have to be parsed
                // it's easier to loop over the result of cfundstats until proposalvotelist returns a json object
                // with the json, we could loop over the yes-votes, no-votes, non-votes separately and don't have to check them
                foreach ($communityfundinfos['votingPeriod']['votedProposals'] as $row) {
                  $desc = $row['str'];
                  $amount = $row['amount'];
                  $hash = $row['hash'];

                  $isYesVote = array_filter($proposalYesVotes, function($var) use ($hash) { return preg_match("/\b$hash\b/i", $var); });
                  $isNoVote = array_filter($proposalNoVotes, function($var) use ($hash) { return preg_match("/\b$hash\b/i", $var); });
                  $isNotVoted = array_filter($proposalNotVoted, function($var) use ($hash) { return preg_match("/\b$hash\b/i", $var); });
                  $yourVote = (!empty($isYesVote) ? "Yes" : (!empty($isNoVote) ? "No" : "Not Voted"));

                  echo "<tr>
                          <td class='valignmiddle' style='width:70%'>{$desc}</td>
                          <td class='valignmiddle'>{$amount}</td>
                          <td class='valignmiddle'>{$yourVote}</td>
                          <td class='valignmiddle'>
                            <div class='input-group'>
                              <span class='input-group-btn'>
                                <form action='command' method='POST'>
                                  <button style='float:left' class='btn btn-default' type='submit' value='command'>Yes</button>
                                  <input type='hidden' name='order' value='proposalvote' />
                                  <input type='hidden' name='var1' value='{$hash}' />
                                  <input type='hidden' name='var2' value='yes' />
                                </form>

                                <form action='command' method='POST'><input type='hidden'>
                                  <button class='btn btn-default' type='submit' value='command'>No</button>
                                  <input type='hidden' name='order' value='proposalvote' />
                                  <input type='hidden' name='var1' value='{$hash}' />
                                  <input type='hidden' name='var2' value='no' />
                                </form>
                              </span>
                            </div>
                          </td>
                        </tr>";
                } //endforeach
                echo "</table>";
    ?>
  </div>
</div>


<p>Currently voted on payment requests</p>
<div class="panel panel-default">
  <div class="table-responsive">
    <?php
      echo "<table class='table-hover table-condensed table-bordered table'>
              <thead>
                <tr>
                  <th>Proposal Description</th>
                  <th>Payment Request Description</th>
                  <th>Amount</th>
                  <th>Your vote</th>
                  <th>Vote</th>
                </tr>";

                // at the moment, paymentrequestvotelist() returns a string which would have to be parsed
                // it's easier to loop over the result of cfundstats until paymentrequestvotelist returns a json object
                // with the json, we could loop over the yes-votes, no-votes, non-votes separately and don't have to check them
                foreach ($communityfundinfos['votingPeriod']['votedPaymentrequests'] as $row) {
                  $proposalDesc = $row['proposalDesc'];
                  $paymentRequestDesc = $row['desc'];
                  $amount = $row['amount'];
                  $hash = $row['hash'];
                  $isYesVote = array_filter($paymentRequestYesVotes, function($var) use ($hash) { return preg_match("/\b$hash\b/i", $var); });
                  $isNoVote = array_filter($paymentRequestNoVotes, function($var) use ($hash) { return preg_match("/\b$hash\b/i", $var); });
                  $isNotVoted = array_filter($paymentRequestNotVoted, function($var) use ($hash) { return preg_match("/\b$hash\b/i", $var); });
                  $yourVote = (!empty($isYesVote) ? "Yes" : (!empty($isNoVote) ? "No" : "Not Voted"));

                  echo "<tr>
                          <td class='valignmiddle' style='width:35%'>{$proposalDesc}</td>
                          <td class='valignmiddle' style='width:35%'>{$paymentRequestDesc}</td>
                          <td class='valignmiddle'>{$amount}</td>
                          <td class='valignmiddle'>{$yourVote}</td>
                          <td class='valignmiddle'>
                            <div class='input-group'>
                              <span class='input-group-btn'>
                                <form action='command' method='POST'><input type='hidden'>
                                  <button style='float:left' class='btn btn-default' type='submit' value='command'>Yes</button>
                                  <input type='hidden' name='order' value='paymentrequestvote' />
                                  <input type='hidden' name='var1' value='{$hash}' />
                                  <input type='hidden' name='var2' value='yes' />
                                </form>

                                <form action='command' method='POST'>
                                  <button class='btn btn-default' type='submit' value='command'>No</button>
                                  <input type='hidden' name='order' value='paymentrequestvote' />
                                  <input type='hidden' name='var1' value='{$hash}' />
                                  <input type='hidden' name='var2' value='no' />
                                </form>
                              </span>
                            </div>
                          </td>
                        </tr>";
                  } //endforeach
                  echo "</table>";
      ?>
    </div>
  </div>
</div>
<?php include ("footer.php"); ?>
