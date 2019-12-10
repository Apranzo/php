#!/usr/bin/env php
<?php
	$arr = array_slice($argv, 1);
	foreach ($arr as $arg) {
		echo "$arg\n";
	}
?>