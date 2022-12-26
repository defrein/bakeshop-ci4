<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <section style="display: flex !important;
    justify-content: center !important;
    align-items: center !important;">
        <div class="box">
            <div class="boxContainer">
                <div class="form">
                    <img src="img/logo-light.png" alt="" style="display: block; margin: 0 auto 10px auto; width: 250px">
                    <h2>LOGIN</h2>
                    <form action="" method="post">
                        <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                        <?php } ?>
                        <div class="inputBox">
                            <input type="text" placeholder="Username" id="username" name="username"
                                value="<?php echo session()->getFlashdata(('username')) ?>">
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Password" id="password" name="password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login" name="login">
                        </div>
                    </form>
                    <div class="back">
                        <a href="/">> Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>