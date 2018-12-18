<?php
include ("header.php");
include ("pass.php");
?>

   <b><a name="server">Server</a></b>
      <div style="padding: 5px 30px 5px;">
         <div class="row">
            <a href="getinfo" class='btn btn-default' role='button'>Get Server Info</a>
            <a href="getstakereport" class='btn btn-default' role='button'>Get Stake Report</a>
            <a href="getstakinginfo" class='btn btn-default' role='button'>Get Staking Info</a>
            <a href="getpeerinfo" class='btn btn-default' role='button'>Get Peer Info</a>
            <a href="getconnectioncount" class='btn btn-default' role='button'>Get Connection Count</a>
            <a href="power" class='btn btn-default' role='button'>Power</a>
            <a href="update" class='btn btn-default' role='button'>Update</a>
            <a href="getblockcount" class='btn btn-default' role='button'>Get Block #</a>
            <a href="allcommands" class='btn btn-default' role='button'>All Commands</a>
            <a href="setpass" class='btn btn-default' role='button'>Change UI Password</a>
            <a href="fixorphans" class='btn btn-default' role='button'>Fix Orphans</a>
            <a href="getcommunityfundinfo" class='btn btn-default' role='button'>Community Fund Infos</a>
         </div><!-- /.row -->
      </div><!-- /.padding -->
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-8">
               <form action="setemail" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="setemail">Set Notification Email</button>
                     </span>
                        <input class="form-control" type="text" name="address" placeholder="Enter Email Address" >
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-8 -->
         </div><!-- /.row -->
      </div><!-- /.padding -->
</div><!-- /.well -->

<div class="well">
   <b><a name="navtech">NAVTech</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-2">
               <form action="listanonservers" method="POST"><input type="hidden">
                  <div class="input-group">
                     <button class='btn btn-default' type="submit" value="listanonservers">Manage NAVTech Servers</button>
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-2 -->
	    <div class="col-lg-8">
               <form action="addanonserver" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="addanonserver">Add NAVTech Server</button>
                     </span>
                        <input class="form-control" type="text" name="server" placeholder="Enter Server (address:port)" >
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-8 -->
          </div>
        </div>
      </div>

<div class="well">
   <b><a name="accounts&addresses">Accounts & Addresses</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-2">
               <form action="getbalance" method="POST"><input type="hidden">
                  <div class="input-group">
     	             <button class='btn btn-default' type="submit" value="getbalance">Get Total Balance</button>
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-5">
               <form action="setprimary" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="setprimary">Set Main Address</button>
                     </span>
                        <input class="form-control" type="text" name="address" placeholder="Address" >
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-5">
               <form action="getaddressesbyaccount" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="getaddressesbyaccount">Get Addresses By Account</button>
	             </span>
	                <input class="form-control" type="text" name="account" placeholder="Leave blank to use the default account" >
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-5 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="getnewaddress" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="getnewaddress">Get New Address</button>
                     </span>
                        <input class="form-control" type="text" name="account" placeholder="Enter the account you want to get a new address for">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <form action="getaccount" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="getaccount">Get Account</button>
	             </span>
	                <input class="form-control" type="text" name="address" placeholder="Enter an address you would like to know the account for">
	          </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="setaccount" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="setaccount">Set Account</button>
                     </span>
	                <input class="form-control" type="text" name="address" placeholder="Address">
	          </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                        <input class="form-control" type="text" name="account" placeholder="Account">
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="getreceivedbyaddress" method="POST"><input type="hidden" name="a" value="getreceivedbyaddress">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="getreceivedbyaddress">Get Received By Address</button>
	             </span>
	                <input class="form-control" type="text" name="address" placeholder="Address">
	          </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <form action="validateaddress" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="validateaddress">Validate Address</button>
	             </span>
	                <input class="form-control" type="text" name="address" placeholder="Address">
	          </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
      </div><!-- /.padding -->
</div><!-- /.well -->

<div class="well">
   <b><a name="transactions">Transactions</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-2">
               <a href="last20transactions" class='btn btn-default' role='button'>Last 20 Transactions</a><br>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-2">
               <a href="listtransactions" class='btn btn-default' role='button'>All Transactions</a><br>
            </div><!-- /.col-lg-2 -->
         </div><!-- /.row -->
      </div><!-- /.padding -->
      <div style="padding: 10px 15px 5px;">
         <div class="row">
            <div class="col-lg-6">
               <form action="listreceivedbyaddress" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="listreceivedbyaddress">List Received According To Address</button>
                     </span>
                        <input class="form-control" type="text" name="minconf" placeholder="Minimum Confirmations">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <form action="gettransaction" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="gettransaction">Get Transaction Info</button>
               	    </span>
                        <input class="form-control" type="text" name="txid" placeholder="Transaction id">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="listtransactionsbyaccount" method="POST"><input type="hidden">
                     <div class="input-group">
                        <span class="input-group-btn">
	                   <button class='btn btn-default' type="submit" value="listtransactions">List Transactions</button>
                        </span>
	                   <input class="form-control" type="text" name="account" placeholder='Account: Use * for all accounts, leave blank for the default account.'>
	             </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                  <input class="form-control" type="number" name="count" placeholder="Number of transactions to show" size="3">
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
      </div><!-- /.padding -->
</div><!-- /.well -->

<div class="well">
   <b><a name="sending">Sending</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-6">
               <form action="sendtoaddress" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="sendtoaddress">Send To Address</button>
	             </span>
	                <input class="form-control" type="text" name="address" placeholder="Address">
	          </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <input class="form-control" type="text" name="amount" placeholder="Amount">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-12">
               <input class="form-control" type="text" name="comment" placeholder="Comment">
               </form>
            </div><!-- /.col-lg-12 -->
         </div><!-- /.row -->
      </div><!-- /.style -->
      <div style="padding: 10px 15px 5px;">
         <div class="row">
            <div class="col-lg-6">
               <form action="sendfrom" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default'type="submit" value="sendfrom">Send From Account</button>
                     </span>
                        <input class="form-control" type="text" name="account" placeholder="From Account">
                  </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <input class="form-control" type="text" name="address" placeholder="To Address">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <input class="form-control" type="text" name="amount" placeholder="Amount">
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <input class="form-control" type="text" name="comment" placeholder="Comment">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         </form>
      </div><!-- /.padding -->
</div><!-- /.well -->

<div class="well">
   <b><a name="security">Security</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-2">
               <form action="walletlock" method="POST"><input type="hidden">
                  <button class='btn btn-default btn-block' type="submit" value="walletlock">Lock Your Wallet</button>
               </form>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-2">
               <form action="downloadwallet" method="POST"><input type="hidden">
	          <button class='btn btn-default btn-block' type="submit" value="backupwallet">Backup Wallet</button>
               </form>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-8">
               <form action="encryptwallet" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="encryptwallet">Encrypt Wallet</button>
	             </span>
                        <input class="form-control" type="password" name="password" placeholder="Enter the password you would like to use">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-8 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="walletpassphrasechange" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="walletpassphrasechange">Change Encryption Password</button>
	             </span>
	                <input class="form-control" type="password" name="old" placeholder="Old Password">
                  </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                        <input class="form-control" type="password" name="new" placeholder="New Password">
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="unlockstaking" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="unlockstaking">Unlock Wallet For Staking Only</button>
                     </span>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <form action="unlockwallet" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="unlockwallet">Unlock Wallet To Send</button>
                     </span>
	                <input class="form-control" type="password" name="password" placeholder="Password">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-5">
               <form action="dumpprivkey" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="dumpprivkey">Dump Private Key</button>
                     </span>
                        <input class="form-control" type="text" name="address" placeholder="Address">
		     </span>
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-5">
               <form action="importprivkey" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="importwallet">Import Private Key</button>
	             </span>
                        <input class="form-control" type="text" name="key" placeholder="Private Key">
                  </div><!-- /input-group -->
            </div><!-- /.col-lg-5 -->
            <div class="col-xs-2">
                        <input class="form-control" type="text" name="label" placeholder="Label">
               </form>
            </div><!-- /.col-lg-2 -->
      </div><!-- /.padding -->
</div><!-- /.well -->
</div>
<?php include ("footer.php");?>
