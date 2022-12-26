<?= $this->extend('layout/template'); ?>


<!-- =============== SECTION BERANDA =========== -->
<?= $this->section('fullscreen-class'); ?>
<div class="fullscreen">
    <?= $this->endSection('fullscreen-class'); ?>
    <?= $this->section('content'); ?>
    <section id="beranda" class="mycontainer">
        <header>

            <h3>THE BEST</h3>
            <h1>HOMEMADE</h1>
            <h1>CAKE AND SNACK</h1>
            <p>Kue dan snack rumahan yang bikin nagih, cocok untuk acara formal maupun non-formal Anda. Cukup pesan
                dari rumah, kami akan mengantarnya ke tempat Anda. </p>
            <a href="https://wa.me/6281348955744" class="mybutton btnpesan">Pesan Sekarang</a>
        </header>
        <div class="catch-eye">
            <div class="main-image"></div>
            <div class="main-circle"></div>
        </div>
    </section>
</div>
<!-- =============== SECTION KUE =============== -->
<section id="kue">
    <div class="mycontainer">
        <div class="title-section swiper-mycontainer">
            <div class="line-left"></div>
            <h1>KUE</h1>
            <div class="line-right"></div>
        </div>
        <div class="swiper card_slider">
            <div class="swiper-wrapper">
                <?php foreach ($kue as $k) : ?>
                <div class="swiper-slide">
                    <div class="img_box">
                        <img src="/img/<?= $k['gambar']; ?>" alt="">
                    </div>
                    <div class="text_box">
                        <h1><?= $k['nama_produk']; ?></h1>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="text-closing">
            <p>Kami juga menyediakan berbagai pilihan lain sesuai selera, hubungi kami melalui WhatsApp untuk info
                selengkapnya. </p>
            <a class="mywalink"
                href="https://wa.me/6281348955744?text=Hai,%20saya%20tertarik%20untuk%20memesan%20kue%20Hesty%20Bakeshop">
                <div class="mywabutton">
                    <div class="mywaicon"></div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- <div class="right-circle"></div> -->
<!-- ================ SECTION SNACK ================= -->
<section id="snack">
    <div class="mycontainer">
        <div class="title-section swiper-mycontainer">
            <div class="line-left"></div>
            <h1>SNACK</h1>
            <div class="line-right"></div>
        </div>
        <div class="swiper card_slider">
            <div class="swiper-wrapper">
                <?php foreach ($snack as $s) : ?>
                <div class="swiper-slide">
                    <div class="img_box">
                        <img src="/img/<?= $s['gambar']; ?>" alt="">
                    </div>
                    <div class="text_box">
                        <h1><?= $s['nama_produk']; ?></h1>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="text-closing">
            <p>Kami juga menyediakan berbagai pilihan lain sesuai selera, hubungi kami melalui WhatsApp untuk info
                selengkapnya. </p>
            <a class="mywalink"
                href="https://wa.me/6281348955744?text=Hai,%20saya%20tertarik%20untuk%20memesan%20snack%20Hesty%20Bakeshop">
                <div class="mywabutton">
                    <div class="mywaicon"></div>
                </div>
            </a>
            <!-- <a aria-label="Chat on WhatsApp" href="https://wa.me/6281348955744"> <img alt="Chat on WhatsApp"
                    src="/img/WhatsAppButtonGreenMedium.svg" /> -->
        </div>
    </div>
</section>
<!-- <div class="left-circle"></div> -->
<!-- =============== SECTION TENTANG ============= -->
<section id="tentang">
    <div class="title-section">
        <h1>TENTANG KAMI</h1>
    </div>
    <div class="mycontainer">
        <div class="tentang-mycontainer">
            <div class="tentang-maps">
                <div class="gmaps">
                    <iframe class="gmaps-desktop"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.7693356970351!2d114.58213924704161!3d-3.3310693645622886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de421658c758a07%3A0xbcf3fde052001715!2sHesty&#39;s%20bakedshop!5e0!3m2!1sid!2sid!4v1671249749614!5m2!1sid!2sid"
                        width="310" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <iframe class="gmaps-mobile"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.7693356970351!2d114.58213924704161!3d-3.3310693645622886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de421658c758a07%3A0xbcf3fde052001715!2sHesty&#39;s%20bakedshop!5e0!3m2!1sid!2sid!4v1671249749614!5m2!1sid!2sid"
                        width="280" height="280" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="caption-maps">
                    <div class="maps-icon"></div>
                    <p>Jl. Teluk Tiram Darat No 27, Kota Banjarmasin, Kalimantan Selatan</p>
                </div>

            </div>
            <div class="tentang-profil">
                <div class="img-profil">
                    <img src="img/kaela.png" alt="">
                </div>
                <h3>Kaela Kovalskia</h3>
                <h2>OWNER</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa velit incidunt blanditiis.
                    Corrupti, corporis! Libero, accusantium quam, blanditiis et aliquam, est dolorum ex amet vel hic
                    optio quibusdam repudiandae sed.</p>
            </div>
            <div class="tentang-sosmed">
                <div class="sosmed-image">
                    <img src="img/sosmed.png" alt="">
                </div>
                <div class="sosmed-link">
                    <a href="https://wa.me/6281348955744" target="_blank">
                        <div class="wa-icon"></div>
                    </a>
                    <a href="https://www.instagram.com/hesty_bakedshop/" target="_blank">
                        <div class="ig-icon"></div>
                    </a>
                </div>
                <div class="sosmed-caption">
                    <div class="caption">

                        <p>WhatsApp menjadi platform utama kami untuk menerima orderan</p>
                    </div>
                    <div class="caption">
                        <p>Ikuti kami di Instagram untuk mendapatkan update dan promosi menarik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============== SECTION KONTAK ============== -->
<section id="kontak">
    <div class="title-section">
        <h1>KONTAK KAMI</h1>
    </div>
    <div class="mycontainer">
        <div class="kontak-mycontainer">
            <div class="message-us">
                <form action="">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="message">Pesan</label>
                    <textarea rows="5" cols="40" type="text" name="message" id="message"></textarea>
                    <div class="nothing"></div>
                    <button type="submit">KIRIM</button>
                </form>
            </div>
            <div class="social-link">
                <div class="social">
                    <div class="arrow-right"></div>
                    <a class="social-text" href="https://wa.me/6281348955744" target="_blank">+62 813-4895-5744</a>
                    <a class="social-icon" href="https://wa.me/6281348955744" target="_blank">
                        <div class="wa-icon"></div>
                    </a>
                </div>
                <div class="social">
                    <div class="arrow-right"></div>
                    <a class="social-text" href="https://www.instagram.com/hesty_bakedshop/"
                        target="_blank">@hesty_bakedshop</a>
                    <a class="social-icon" href="https://www.instagram.com/hesty_bakedshop/" target="_blank">
                        <div class="ig-icon"></div>
                    </a>
                </div>
                <div class="social">
                    <div class="arrow-right"></div>
                    <a class="social-text" href="https://goo.gl/maps/yscTbBzY8jy4M7eu7" target="_blank">Banjarmasin</a>
                    <a class="social-icon" href="https://goo.gl/maps/yscTbBzY8jy4M7eu7" target="_blank">
                        <div class="maps-icon"></div>
                    </a>
                </div>
                <div class="produk-indonesia">
                    <img src="img/produk-indonesia.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>