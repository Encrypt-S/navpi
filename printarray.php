<?php
function printarray($array, $comments=false) {
	if ($comments) {
		// prints the array inside an html comment, requiring user to view source to read it
		$prefix = "<!--" . "\r\n";
		$suffix = "\r\n" . "-->" . "\r\n";
	} else {
		$prefix = '<div style="width: 100%; text-align:left;" align="left"><pre style="align: left; font-size: 1em;  font-family: \'Exo 2\', Courier, monospace; background-color: #D0D0EA;">';
		$suffix = '</pre></div>';
	}

	echo $prefix;
	if (is_object($array)) {
		var_dump($array);
	}
	else {
		print_r($array);
	}
	echo $suffix;
}
?>
