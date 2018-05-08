<!DOCTYPE html>
<head>
<html lang="en">
<?php
	require "php_files/html_structure.php";
	$html_format = new HtmlFormat();
	$head_meta = $html_format->meta_head();
	$head_jquery = $html_format->html_head_js();
	echo $head_meta;
	echo $head_jquery;
?>
</head>
<body>
	<h1>Welcome</h1>
</body>
<?php
	$footer_js = $html_format->html_footer_js();
	$footer_css = $html_format->html_footer_css();
	echo $footer_js;
	echo $footer_css;
?>
</html>
