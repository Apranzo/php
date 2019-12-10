#!/usr/bin/env php
<?php
	while (!feof(STDIN)) {
		echo 'Enter a number: ';
		foo();
	}
	echo "\n";
	exit(0);

	function foo()
	{
		$in = trim(fgets(STDIN));
		if (!is_numeric($in)) { echo "'$in'"." is not a number\n"; }
		elseif ($in % 2) { echo 'The number'." $in is odd\n"; }
		else { echo 'The number' ." $in is even\n"; }
	}
?>