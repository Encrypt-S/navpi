<?php
include ("header.php");
include ("pass.php");
$all_commands = ($coin->help());
?>    
    <iframe src="https://nav-proposal-creator.netlify.com/pi" frameborder="0" class="cf-iframe"></iframe>
    <div style="padding: 5px 15px 5px;">
        <div class="row">
            <div class="col-lg-12">
                <form action="cf-commands"  method="POST"><input type="hidden">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class='btn btn-default' type="submit" value="command">Issue Command</button>
                        </span>
                        <input class="form-control" type="text" name="order" placeholder="Command">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6-->
            </div><!-- /.row -->
        </div><!-- /.style -->
    </div>
<?php include ("footer.php");?>