<?php
	require "php_files/html_structure.php";
	$html_format = new HtmlFormat();
	$head_meta = $html_format->meta_head();
	$head_jquery = $html_format->html_head_js();
?>