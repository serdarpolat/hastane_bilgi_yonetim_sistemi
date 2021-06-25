<?php
require_once "../../system/settings.php";
require_once "../../system/functions.php";
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <link rel="stylesheet" href="style.css">
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
                <input type="text" placeholder="Tc Kimlik No">
            </div>
            <div class="pass">
                <input type="password" placeholder="Şifre">
            </div>
            <div class="pass">
                <button type="submit" class="sub" id="giris"> Giriş Yap</button>
                <br>
            </div>
        </form>
        <a href="uye.php"><button type="submit" id="uye">Üye Ol</button></a>
        <?php
        if (isset($_POST['submit'])) {
            $tck = $_POST['tck'];
            $pass = md5($_POST['pass']);

            if ($tack && $pass) {
                $query = query($conn, "select * from user where tck='$tck' and $pass='$pass'");

                $row = num_rows($query);

                if ($row) {
                    go("../../site/index.php");
                }

                echo "bilgilerinizi kontrol ediniz";
            }
        }
        ?>
    </div>
</body>