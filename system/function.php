<?php

function p($par)
{
    return trim($_POST[$par]);
}

function g($par)
{
    return strip_tags(trim($_GET[$par]));
}

function toShort($par, $len = 50)
{
    if (strlen($par) >= $len) {
        $par = mb_substr($par, 0, $len, "UTF-8") . "...";
    }

    return $par;
}

function create_session($par)
{
    foreach ($par as $key => $value) {
        $_SESSION[$key] = $value;
    }
}

function query($conn, $query)
{
    return mysqli_query($conn, $query);
}

function row($param)
{
    return mysqli_fetch_array($param, MYSQLI_BOTH);
}

function rows($param)
{
    return mysqli_num_rows($param);
}

function affected($conn)
{
    if (mysqli_affected_rows($conn)) {
        return true;
    } else {
        return false;
    }
}

function go($page, $time = 0)
{
    if ($time == 0) {
        header("Location: {$page}");
    } else {
        header("Refresh: {$time}; url={$page}");
    }
}

function seflink($text)
{
    $find = array("/Ğ/", "/Ü/", "/Ş/", "/İ/", "/Ö/", "/Ç/", "/ğ/", "/ü/", "/ş/", "/ı/", "/ö/", "/ç/");
    $degis = array("G", "U", "S", "I", "O", "C", "g", "u", "s", "i", "o", "c");
    $text = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇğüşıöç]/", " ", $text);
    $text = preg_replace($find, $degis, $text);
    $text = preg_replace("/ +/", " ", $text);
    $text = preg_replace("/ /", "_", $text);
    $text = preg_replace("/\s/", "", $text);
    $text = strtolower($text);
    $text = preg_replace("/^-/", "", $text);
    $text = preg_replace("/-$/", "", $text);
    return $text;
}