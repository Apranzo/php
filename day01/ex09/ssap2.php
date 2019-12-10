#!/usr/bin/env php
<?php
	function cmpstr($ca, $cb) {
		if(ctype_alpha($ca) && !ctype_alpha($cb)) {
			return (1);
		}
		if(!ctype_alpha($ca) && ctype_alpha($cb)) {
			return (-1);
		}
		if(ctype_alpha($ca) && ctype_alpha($cb)) {
			if($ca > $cb) {
				return -1;
			} elseif($ca < $cb) {
				return 1;
			}
		}
		return 0;
	}
	function numcmp($alpha, $bravo) {
		if(!is_numeric($alpha[0]) && is_numeric($bravo[0])) {
			return (-1);
		}
		if(is_numeric($alpha[0]) && !is_numeric($bravo[0])) {
			return (1);
		}
		if(is_numeric($alpha[0]) && is_numeric($bravo[0])) {
			if ($alpha[0] > $bravo[0]) {
				return -1;
			}
			if($alpha[0] < $bravo[0]) {
				return 1;
			}
		}
		return 0;
	}
	function ft_strcmp($alpha, $bravo) {
		if (empty($alpha) && empty($bravo)) {
			return (0);
		}
		if (empty($alpha) && !empty($bravo)) {
			return (1);
		}
		if (!empty($alpha) && empty($bravo)) {
			return (-1);
		}
		$diff = cmpstr(strtolower($alpha[0]), strtolower($bravo[0]));
		if ($diff)
			return $diff;
		$diff = numcmp($alpha[0], $bravo[0]);
		if ($diff)
			return $diff;
		$diff = strncmp ( $alpha, $bravo, 1);
		if ($diff) {
			return $diff;
		}
		return (ft_strcmp(substr($alpha, 1), substr($bravo, 1)));
	}

	function ft_split($string)
	{
		$arr = array_filter(explode(' ', $string));
		usort($arr, static function ($alpha, $bravo) {
			return ft_strcmp($bravo, $alpha);
		});
		return array_values($arr);
	}
	$super_string = '';
	$arr = array_slice($argv, 1);
	foreach ($arr as $arg) { $super_string .=$arg.' '; }
	$super_string = ft_split($super_string);
	foreach ($super_string as $str) { echo $str."\n"; }
?>
