#!/usr/bin/env php
<?php

	if ($argc !== 2) {
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
	function ft_split($string)
	{
		$arr = array_filter(explode(' ', $string));
		return array_values($arr);
	}
	$str = $argv[1];
	if (strrpos($str, '+'))
		$str = substr_replace($str, ' + ', strrpos($str, '+'), 1);
	if (strrpos($str, '*'))
		$str = substr_replace($str, ' * ', strrpos($str, '*'), 1);
	if (strrpos($str, '-'))
		$str = substr_replace($str, ' - ', strrpos($str, '-'), 1);
	if (strrpos($str, '/'))
		$str = substr_replace($str, ' / ', strrpos($str, '/'), 1);
	if (strrpos($str, '%'))
		$str = substr_replace($str, ' % ', strrpos($str, '%'), 1);
	$cuted = array_map(static function($item) {return trim($item, " \t");}, ft_split($str));
	if ($cuted[1] !== "*" && $cuted[1] !== "-" && $cuted[1] !== "+" && $cuted[1] !== "/" && $cuted[1] !== "%" ) {
		echo "Syntax Error\n";
		exit(0);
	}
	if (!is_numeric($cuted[0])  || !is_numeric($cuted[2])) {
		echo "Syntax Error\n";
		exit(0);
	}
	echo $little_friends[$cuted[1]]($cuted[0], $cuted[2])."\n";

?>
