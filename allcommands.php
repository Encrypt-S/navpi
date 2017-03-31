<?php
include ("header.php");
include ("pass.php");
$all_commands = ($coin->help());
?>

      <div style="padding: 5px 15px 5px;">
	<p><b>Use this page to issue any command not available on the control page. All available commands 
	for the current wallet are shown below. The command is followed by the parameters, parameters 
	denoted inside of < and > are required, optional parameters are inside of [ and ].</b></p> 
         <div class="row">
            <div class="col-lg-6">
               <form action="command" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="command">Issue Command</button>
	             </span>
	                <input class="form-control" type="text" name="order" placeholder="Command">
	          </div><!-- /input-group -->
            </div><!-- /.col-lg-6-->
            <div class="col-lg-6">
	          <input class="form-control" type="text" name="var1" placeholder="First Variable">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
	          <input class="form-control" type="text" name="var2" placeholder="Second Parameter">
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
	          <input class="form-control" type="text" name="var3" placeholder="Third Parameter">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row --></br>
         <div class="row">
            <div class="col-lg-6">
	          <input class="form-control" type="text" name="var4" placeholder="Fourth Parameter">
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
	          <input class="form-control" type="text" name="var5" placeholder="Fifth Parameter">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row --></br>
         <div class="row">
            <div class="col-lg-6">
	          <input class="form-control" type="text" name="var6" placeholder="Sixth Parameter">
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
	          <input class="form-control" type="text" name="var7" placeholder="Seventh Parameter">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
      </div><!-- /.style -->
   </div>
   <div class="well">
      <p><b>Available Commands</b></p>
      <?php printarray(htmlentities($all_commands));?>
   </div>
<?php include ("footer.php");?>