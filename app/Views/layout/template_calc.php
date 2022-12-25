<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <title><?= $title; ?></title>
    <!-- bootstrap css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/data_produk.css">
    <link rel="stylesheet" href="/css/calc.css">
</head>

<body>
    <?= $this->renderSection('fullscreen-class'); ?>
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>


    <!-- FOOTER -->
    <!-- <footer>
        <div class="mycontainer">
            <div class="footer-logo">
                <img src="img/logo-light.png" alt="">
            </div>
            <div class="copyright">
                <p>COPYRIGHT</p>
                <div class="copyright-icon"></div>
                <p>2022 HESTY BAKESHOP</p>
            </div>
            <div class="developer">
                <p>Made by <a href="#">DEF </a></p>
                <a href="#">
                    <div class="github-icon"></div>
                </a>
            </div>
        </div>

    </footer> -->
    <script>
    const menuToggle = document.querySelector('.menu-toggle input');
    const nav = document.querySelector('nav ul')

    menuToggle.addEventListener('click', function() {
        nav.classList.toggle('slide')
    })
    </script>
    <script src="js/calc.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>