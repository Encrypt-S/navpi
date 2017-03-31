<?php 
include ("header.php");
include ("pass.php");
?>

         <div class="row">
            <div class="col-lg-5">
               <form action="encryptwallet" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="encryptwallet">Encrypt Wallet</button>
	             </span>
                        <input class="form-control" type="password" name="password" placeholder="Enter password you would like to use">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-5 -->
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
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="unlockwallet" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="unlockwallet">Unlock Wallet To Send</button>	
                     </span>
	                <input class="form-control" type="password" name="password" placeholder="password">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-2">
               <form action="walletlock" method="POST"><input type="hidden">
                  <button class='btn btn-default btn-block ' type="submit" value="walletlock">Lock Your Wallet</button>
               </form>
            </div><!-- /.col-xs-2 -->
            <div class="col-lg-5">
         </div><!-- /.row -->
      </div>
   </div>

<?php include ("footer.php");?>