<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tambah Laporan</title>
    <link rel="stylesheet" href="<?php echo base_url('style/create_style.css') ?>">
    <script type="text/javascript" src="<?php echo base_url('asset/script.js') ?>"></script>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>BUAT LAPORAN</h1>
            <br>
            <form name="tambah_form" method="POST" onsubmit="return validasi()">
                <p>Buat Laporan/Komentar</p>
                <hr><br>
                <div>
                    <textarea name="isi" placeholder="Laporan/Komentar" class="textarea"></textarea>
                </div><br>
                <div>
                    <select name="aspek" class="select">
                        <option>Pilih Aspek Pelaporan/Komentar</option>
                        <option value="Kehilangan">Kehilangan</option>
                        <option value="Ditemukan">Ditemukan</option>
                        <option value="Pengumuman">Pengumuman</option>
                        <option value="Acara">Acara</option>
                    </select>
                </div>
                <div>
                    <br>
                    <input type="file" name="lampiran" class="file">
                </div>
                <br>
                <button type="submit" class="btn_tambah">BUAT LAPOR!</button>
                <br><br><br>
                <hr>
            </form>
        </div>
    </div>
</body>

</html>