
<?php
	function ft_split($string)
	{
		$arr = array_filter(explode(' ', $string));
		asort($arr);
		return array_values($arr);
	}

	if ($argc === 1) { exit(); }
	$str = $argv[1];
	$arr = ft_split($str);
	$first = array_shift($arr);
	$arr[] = $first;
	echo implode(' ',$arr)."\n";