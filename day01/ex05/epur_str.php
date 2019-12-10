#!/usr/bin/env php
<?php
	if ($argc !== 2) { exit(); }
	$str = trim($argv[1], ' ');
	print_r(preg_replace('/\s\s+/', ' ',$str)."\n");
?>