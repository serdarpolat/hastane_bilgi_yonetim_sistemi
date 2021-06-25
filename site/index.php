<?php
if ($_SESSION['user_login']) {
    go("../admin/sayfalar/anasayfa.php");
} else {
    go("../admin/sayfalar/login.php");
}
