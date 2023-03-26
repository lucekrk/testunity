<?php
	$title = $_GET["title"];
	$content = $_GET["content"];
	$filename = strtolower(str_replace(" ", "-", $title)) . ".html";
	$file = fopen($filename, "w");
	fwrite($file, $content);
	fclose($file);
	echo $filename;
?>