<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <link rel="stylesheet" href="header.css">
    <title> HASTANE OTOMASYON </title>
</head>

<body>
    <?php
    if (!$_SESSION['user_login']) {
        go("../sayfalar/login.php");
    }
    ?>
</body>

</html>