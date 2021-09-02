<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php if(isset($_COOKIE["infouser"])){
        $data = unserialize($_COOKIE["infouser"]);
    } ?>
    <div class="form">
        <h2 class="form__title">ĐĂNG NHẬP</h2>
        <form action="xuly.php" method="post">
            <div class="form-group">
                <label for="username">Tên tài khoản</label>
                <input type="text" class="form-control" value="<?php if(isset($data)){ echo $data["username"]; } ?>" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" value="<?php if(isset($data)){ echo $data["password"]; } ?>" name="password" id="password">
            </div>
            <div class="form-check">
                <input type="checkbox" name="checkmember" <?php if(isset($_COOKIE["infouser"])){ echo "checked"; } ?> >
                <label for="">Check Member</label>
            </div>
            <button class="btn--primary" name="submit" type="sumbit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>