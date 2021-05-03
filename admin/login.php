<?php
if ($_POST) {
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

    if (!$user || !$pass) {
        echo "hatalı bilgi";
    } else {
        $query = query($conn, "SELECT * FROM admin WHERE user = '$user' && pass = '$pass'");

        if (affected($conn)) {
            $row = row($query);

            $session = array(
                "login" => true,
                "username" => $row[1],
                "first_name" => $row[3],
                "last_name" => $row[4],
                "phone" => $row[5],
                "email" => $row[6],
            );

            create_session($session);

            go(URL . "/admin");
        } else {
            echo "kişi yok";
        }
    }
}
?>

<div class="login-box">
    <div class="login-logo">
        <b>HBYS</b> Login
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">İşlem yapabilmek için giriş yapın.</p>

        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="user">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Şifre" name="pass">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Giriş Yap</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <p></p>
        <a href="#">Şifremi Unuttum</a><br>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->