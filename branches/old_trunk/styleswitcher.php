<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
$cookie_prefix = "ts-";
$cookie_time = time()+31536000;
if (isset($_GET['scheme'])) {
	$scheme = $_GET['scheme'];
	$_SESSION[$cookie_prefix. 'scheme'] = $scheme;
	setcookie ($cookie_prefix. 'scheme', $scheme, $cookie_time, '/', false);
}
if (isset($_GET['font'])) {
	$font = $_GET['font'];
	$_SESSION[$cookie_prefix. 'font'] = $font;
	setcookie ($cookie_prefix. 'font', $font, $cookie_time, '/', false);
}
if (isset($_GET['width'])) {
	$width = $_GET['width'];
	$_SESSION[$cookie_prefix. 'width'] = $width;
	setcookie ($cookie_prefix. 'width', $width, $cookie_time, '/', false);
}
?>
