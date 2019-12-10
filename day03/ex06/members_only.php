<?php
$credentials = 'zazjaimelespetitsponeys';
if (($_SERVER['PHP_AUTH_USER'].$_SERVER['PHP_AUTH_PW']) === $credentials) {
	$base64 = base64_encode(file_get_contents('./img/42.png'));
	print "<html><body>\nHello Zaz<br /><img src='data:image/png;base64,".$base64."'/>\n</body></html>";
} else {
	header("WWW-Authenticate: Basic realm='Only membres'");
	header("HTTP/1.0 401 Unauthorized");
}
