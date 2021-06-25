<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    <link rel"stylesheet" href="style.css">
    <title> HASTANE OTOMASYONU </title>
</head>
<body>
    <header>
        <h2> HASTANE OTOMASYONU</h2>
    </header>

    <div class="tableOuter">
        <h1> Üye Ol</h1>
        <form action="islem.php" method="post">
        <div class="ad">
                <input type="text" name="adsoyad" placeholder="Ad Soyad">            
            </div>
            <div class="user">
                <input type="text" name="tc" placeholder="Tc Kimlik No">            
            </div>
            <div class="pass">
                <input type="password"name="password"placeholder="Şifre">            
            </div>
            <div class="pass">
                <button type="submit" class="sub" id="giris"> Üye Ol</button>          
                <br>  
            </div>
        </form>
        <a href="uye.php"><button type="submit" id="uye">Geri Çık</button></a>
    </div>
</body>    