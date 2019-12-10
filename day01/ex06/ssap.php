#!/usr/bin/env php
<?php
	function ft_split($string)
	{
		$arr = array_filter(explode(' ', $string));
		sort($arr);
		return array_values($arr);
	}
	$super_string = '';
	$arr = array_slice($argv, 1);
	foreach ($arr as $arg) { $super_string .=$arg.' '; }
	$super_string = ft_split($super_string);
	foreach ($super_string as $str) { echo $str."\n"; }
?>