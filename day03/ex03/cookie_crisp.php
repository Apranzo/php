<?php
    function set_cookie($resp){
		setcookie($resp['name'], $resp['value']);
	}
	function get_cookie($resp){
		print $_COOKIE[$resp['name']];
	}
	function del_cookie($resp){
		setcookie($resp['name'], null, -1);
	}
	$actions = ['set' => function($resp){ set_cookie($resp); },
				'get' => function($resp){ get_cookie($resp); },
				'del' => function($resp){ del_cookie($resp); }
	];
    $actions[$_GET['action']]($_GET);