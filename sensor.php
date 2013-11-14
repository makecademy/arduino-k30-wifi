<?php

	// Store data
    if ($_GET["data"]) {

      	$myFile = "data.txt";
		$fh = fopen($myFile, 'w');
		fwrite($fh, $_GET["data"]);
		fclose($fh);
		
    }

?>