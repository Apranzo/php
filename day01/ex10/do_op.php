#!/usr/bin/env php
<?php
	if ($argc != 4) {
		echo 'Incorrect Parameters';
		exit(0);
	}
	$little_friends = array('+' => static function($l, $r) {
							return ($l + $r);
						}, '-' => static function($l, $r) {
							return ($l - $r);
						}, '*' => static function($l, $r) {
							return ($l * $r);
						}, '/' => static function($l, $r) {
							return ($l / $r);
						}, '%' => static function($l, $r) {
							return ($l % $r);
						});
	$cuted = array_map(static function($item) {return trim($item, " \t");}, array_slice($argv, 1));
	echo $little_friends[$cuted[1]]($cuted[0], $cuted[2])."\n";
?>