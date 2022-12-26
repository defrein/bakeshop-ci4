<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="/css/style.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>
    <?= $this->renderSection('fullscreen-class'); ?>
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>


    <!-- FOOTER -->
    <footer>
        <div class="mycontainer">
            <div class="footer-logo">
                <a href="#"><img src="img/logo-light.png" alt=""></a>
            </div>
            <div class="copyright">
                <p>COPYRIGHT</p>
                <div class="copyright-icon"></div>
                <p>2022 HESTY BAKESHOP</p>
            </div>
            <div class="developer">
                <p>Made by <a href="https://github.com/defrein" target="_blank">DEF </a></p>
                <a href="#">
                    <div class="github-icon"></div>
                </a>
            </div>
        </div>

    </footer>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>