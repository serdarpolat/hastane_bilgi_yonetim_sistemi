<?php
require_once "system/settings.php";

// echo THEME . "/index.php";

if ($settings["software_status"]) {
    require(THEME . "/index.php");
} else {
    require(THEME . "/close.php");
}