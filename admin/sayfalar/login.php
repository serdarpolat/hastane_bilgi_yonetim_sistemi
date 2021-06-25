<?php
require_once "../../system/settings.php";
require_once "../../system/functions.php";


?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <link rel="stylesheet" href="login.css">
    <title> HASTANE OTOMASYONU </title>
</head>

<body>
    <header>
        <h2> HASTANE OTOMASYONU</h2>
    </header>

    <div class="tableOuter">
        <h1> Giriş Yap</h1>
        <form action="islem.php" method="post">
            <div class="user">
                <input type="text" name="tck" placeholder="Tc Kimlik No">
            </div>
            <div class="pass">
                <input type="password" name="pass" placeholder="Şifre">
            </div>
            <div class="pass">
                <button type="submit" name="submit" class="sub" id="giris"> Giriş Yap</button>
                <br>
            </div>
        </form>
        <a href="register.php"><button id="uye">Üye Ol</button></a>
        <?php
        if ($_POST['submit']) {
            $tck = $_POST['tck'];
            $pass = md5($_POST['pass']);

            $query = query($conn, "SELECT * FROM users WHERE tck='$tck' AND pass='$pass'");

            $res = num_rows($conn);

            if ($res) {
                go("../../site/index.php");
            } else {
                echo "Bilgilerinizi Kontrol Edin";
            }
        }
        ?>
    </div>
</body>