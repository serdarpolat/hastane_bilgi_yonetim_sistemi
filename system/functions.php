<?php

require_once "settings.php";

function p($post)
{

    return trim($_POST[$post]);
}

function g($get)
{
    return strip_tags(trim($_GET[$get]));
}

function shorten($text, $len = 50)
{
    if (strlen($text) > $len) {
        $text = mb_substr($text, 0, $len, "UTF-8") . "...";
    }

    return $text;
}

function c_session($array)
{
    foreach ($array as $key => $value) {
        $_SESSION[$key] = $value;
    }
}

function sess($par)
{
    if ($_SESSION[$par]) {
        return $_SESSION[$par];
    } else {
        return false;
    }
}

function query($conn, $query)
{
    return mysqli_query($conn, $query);
}

function fetch_both($query)
{
    return mysqli_fetch_array($query, MYSQLI_BOTH);
}

function num_rows($query)
{
    return mysqli_num_rows($query);
}

function affected($conn)
{
    return mysqli_affected_rows($conn);
}

function go($page, $time = 0)
{
    if ($time == 0) {
        header("Location: {$page}");
    } else {
        header("Refresh: {$time}; url={$page}");
    }
}

function set($par)
{
    return $par;
}
