<nav>
    <div class="mycontainer">
        <div class="logo-img">
            <a href="">
                <img src="/img/logo-dark.png" alt="">
            </a>
        </div>
        <ul>
            <?php

            $role_login = session()->get('id_role');
            ?>
            <li><a href="/">BERANDA</a></li>
            <?php
            if ($role_login == null) {
            ?>
            <li><a href="/#kue">KATALOG</a></li>
            <li><a href="/#tentang">TENTANG</a></li>
            <li><a href="/#kontak">KONTAK</a></li>
            <?php
            }

            ?>



            <?php

            if ($role_login == 1 or $role_login == 2) { ?>
            <li><a href="/produk">PRODUK</a></li>
            <li><a href="/kalkulator">KALKULATOR</a></li>
            <li><a href="/admin">ADMIN</a></li>
            <a class="mybutton btnlogin" href="/logout">LOGOUT</a>
            <?php } else if ($role_login == null) { ?>
            <a class="mybutton btnlogin" href="/login">LOGIN</a>
            <?php   } ?>

        </ul>
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>