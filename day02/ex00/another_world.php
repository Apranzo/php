#!/usr/bin/env php
<?php
	if ($argc < 2) {
		exit();
	}
	print_r(trim(preg_replace('/\s\s+/', ' ', $argv[1]))."\n");
?>
