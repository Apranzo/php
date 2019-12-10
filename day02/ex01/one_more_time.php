#!/usr/bin/env php
<?php
	if ($argc < 2) {
		exit();
	}
	$lemois = array(
		"janvier" => 1,
		"fevrier" => 2,
		"mars" => 3,
		"avril" => 4,
		"mai" => 5,
		"juin" => 6,
		"juillet" => 7,
		"aout" => 8,
		"septembre" => 9,
		"octobre" => 10,
		"novembre" => 11,
		"decembre" => 12
	);
	$wpreg = '([Ll]undi|[Mm]ardi|[Mm]ercredi|[jJ]eudi|[vV]endredi|[sS]amedi|[dD]imanche)';
	$dpreg = '((1[1-31])|(2[0-9])|(3[0-1])|([1-9]{1}))';
	$mpreg = '([jJ]anvier|[fF]evrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]out|[sS]eptembre|[oO]ctobre|[nN]ovembre|[dD]ecembre)';
	$ypreg = '([0-9]{4})';
	$tpreg = '(([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9]))';
	$regex = '/^'. $wpreg . ' ' . $dpreg . ' ' . $mpreg . ' ' . $ypreg . ' ' . $tpreg . '$/';
	if (preg_match($regex, $argv[1])) {
		date_default_timezone_set('Europe/Moscow');
		$argv[1] = preg_replace('/:/', ' ', $argv[1]);
		$date = array_filter(explode(' ', $argv[1]));
		print_r(mktime($date[4], $date[5], $date[6], $lemois[strtolower($date[2])], $date[1], $date[3])."\n");
	} else {
		echo "Wrong Format\n";
	}
?>
