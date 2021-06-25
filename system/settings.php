<?php
session_start();

// Hataları Gizle
error_reporting(0);

// Bağlantı Değişkenleri
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "hastane_otomasyonu";

// Bağlantı
$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Genel Ayarlar
$query = mysqli_query($conn, "SELECT * FROM settings");
$ayar = mysqli_fetch_array($query, MYSQLI_BOTH);

define("PATH", realpath("."));
define("URL", $ayar['link']);
define("THEME_URL", $ayar['link'] . "/site");
