<?php
	function ft_is_sort($tab)
	{
		$ref = $tab;
		sort($ref);
		return $ref === $tab;
	}