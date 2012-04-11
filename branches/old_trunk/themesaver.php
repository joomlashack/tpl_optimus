<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
$scheme = $themecolor;
$font = $typeFace;
$width = $defaultWidth;

$cookie_prefix = "ts-";
if (isset($_SESSION[$cookie_prefix. 'scheme'])) {
	$scheme = $_SESSION[$cookie_prefix. 'scheme'];
} elseif (isset($_COOKIE[$cookie_prefix. 'scheme'])) {
	$scheme = $_COOKIE[$cookie_prefix. 'scheme'];
}

if (isset($_SESSION[$cookie_prefix. 'font'])) {
	$font = $_SESSION[$cookie_prefix. 'font'];
} elseif (isset($_COOKIE[$cookie_prefix. 'font'])) {
	$font = $_COOKIE[$cookie_prefix. 'font'];
}

if (isset($_SESSION[$cookie_prefix. 'width'])) {
	$width = $_SESSION[$cookie_prefix. 'width'];
} elseif (isset($_COOKIE[$cookie_prefix. 'width'])) {
	$width = $_COOKIE[$cookie_prefix. 'width'];
}

?>