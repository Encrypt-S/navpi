<?php
include ("header.php");
include ("pass.php");
	isset( $this->{$this->a} ) ? print_r($this->{$this->a}) : print "Error: DEBUG template can not find property '" . $this->a . "'";
?> 
</div>
<?php include ("footer.php");?>