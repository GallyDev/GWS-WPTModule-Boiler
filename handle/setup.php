<?php
	$header = file_get_contents(__DIR__ . '/../../header.php');
	$handle = '<handle></handle>';
	// add the handle after <body …> tag
	$body_pos = strpos($header, '<body');
	if($body_pos !== false){
		// find where the line breaks
		$body_end_pos = strpos($header, "\n", $body_pos);
		if($body_end_pos !== false){
			$header = substr_replace($header, "\n" . $handle, $body_end_pos, 0);
		}else{
			$header .= "\n" . $handle;
		}
	}
	file_put_contents(__DIR__ . '/../../header.php', $header);

	echo "handle-tag wurde der header.php hinzugefügt\n";