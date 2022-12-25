<?= $this->extend('layout/template_calc'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h1>Kalkulator Harga Jual</h1>
    <div class="hitung-harga">
        <form id="calc_form" role="form" name="calc_form">
            <div class="hasil">
                <input type="text" name="hasil" id="hasil" disabled value="0">
            </div>
            <div class="metode-field">
                <div class="mylabel">
                    <p>Metode yang Digunakan<span>*</span></p>
                </div>
                <div class="answer">
                    <div class="radio1"><input type="radio" id="markup" name="metode" value="markup" checked="checked">
                        <label for="markup">Markup Pricing</label>
                    </div>
                    <div class="radio2">
                        <input type="radio" id="margin" name="metode" value="margin">
                        <label for="margin">Margin Pricing</label>
                    </div>
                </div>
            </div>
            <div class="data-usaha">
                <div class="mylabel">
                    <label for="harga-pokok">Harga Pokok Produk<span>*</span></label>
                </div>
                <div class="answer">
                    <input type="number" id="harga-pokok" name="harga-pokok" required value="0"><br>
                </div>
            </div>
            <div class="profit">
                <div class="mylabel">
                    <label for="keuntungan">Markup/Margin yang Diinginkan (%)<span>*</span></label>
                </div>
                <div class="answer">
                    <input type="number" id="keuntungan" name="keuntungan" required value="0"><br>
                </div>
            </div>
            <div class="calc-button">
                <button type="button" id="reset_btn" onclick="reset_field()">Reset</button>
                <button type="button" id="hitung" onclick="calc_harga()">Hitung</button>
            </div>
        </form>
    </div>
    <div class="info-hitung">
        <div class="markup-info">
            <h2>Metode Markup Pricing</h2>
            <p>Di dalam metode markup pricing, harga jual produk ditentukan dengan menambahkan nilai markup tertentu
                dari harga pokok produk. Secara sederhana perhitungan metode markup pricing dirumuskan sebagai berikut.
            </p>
            <div class="rumus-metode">
                <p>Harga Jual Produk = Harga Pokok Produk + (Harga Pokok Produk x % Markup)</p>
            </div>
        </div>
        <div class="margin-info">
            <h2>Metode Margin Pricing</h2>
            <p>Berbeda dengan metode markup pricing, di dalam metode margin pricing harga jual produk bergantung pada
                tingkat margin yang diinginkan. Margin (%) ini dihitung dengan membagi laba bruto dengan harga jual
                produk.
            </p>
            <div class="rumus-metode">
                <p>Margin = (Harga Jual Produk - Harga Pokok Produk) / Harga Jual Produk</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>