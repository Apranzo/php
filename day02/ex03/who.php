#!/usr/bin/env php
<?php
	date_default_timezone_set('Europe/Moscow');
	$fd = fopen('/var/run/utmpx', 'rb');
	$logins = array();
	while ($line = fread($fd, 628)) {
		$line = unpack('A256login/A4/A32tty/i/itype/Itime/i16', $line);
		if ($line['type'] == 7) {
			$logins[] = $line['login'] . ' ' . $line['tty'] . '  ' . strftime("%b %e %R", $line['time']).' ';
		}
	}
	ksort($logins);
	foreach($logins as $who) {
		print_r($who);
	}
?>

