<?php
	function ft_split($string)
	{
		$arr = array_filter(explode(' ', $string));
		sort($arr);
		return array_values($arr);
	}