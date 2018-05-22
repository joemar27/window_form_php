<?php
class HtmlFormat {

	public function meta_head() {
		return "
			<meta charset='UTF-8'>
			<meta name='description' content='Window sales form'>
			<meta name='keywords' content='Champion, Windows, Form'>
			<meta name='author' content='Joseph Hernandez'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		";
	}

	public function html_head_js() {
		return "
			<script src='dist/js/jquery-3.3.1.min.js'></script>
		";
	}

	public function html_footer_js(){
		return "
			<script src='dist/js/bootstrap.min.js'></script>
			<script src='dist/js/bundle.js'></script>
		";
	}

	public function html_footer_css(){
		return "
			<link rel='stylesheet' href='dist/css/bootstrap.min.css'>
		";
	}

}
?>
