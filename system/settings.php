<?php
//session_destroy();
//session_start();
//ob_start("ob_gzhandler");

error_reporting(0);

$host = "localhost";
$user = "root";
$pass = "";
$data = "hastane_otomasyonu";

$conn = @mysqli_connect($host, $user, $pass, $data);

// Check connection
if (!$conn) {
	echo "Connection Error - MySQL: " . mysqli_connect_error();
	exit();
}

/* change character set to utf8mb4 */
if (!mysqli_set_charset($conn, "utf8mb4")) {
	printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
	exit();
}

$query = mysqli_query($conn, "SELECT * FROM settings");
$settings = mysqli_fetch_array($query);

define("PATH", realpath("."));
define('URL', $settings['software_url']);
define('THEME_URL', $settings['software_url'] . "/theme/" . $settings['software_theme']);
define('THEME', PATH . '/theme/' . $settings['software_theme']);