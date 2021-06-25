<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <link rel"stylesheet" href="style.css">
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
    </div>
</body>