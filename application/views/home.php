<!DOCTYPE html>
<html>

<head>
	<title>ITERAPOR - Itera Lapor!</title>
	<link rel="stylesheet" href="<?php echo base_url('style/home1_style.css') ?>">
</head>

<body style="font-family: 'Poppins', sans-serif;">

	<div class="container">

		<div class="content">

			<div class="header">
				<h1>LAPORAN ITERA!</h1>
				<h2>Halaman Website untuk Melaporkan Kejadian Di Sekitar ITERA<h2><br>
			</div>

			<form action="" method="POST">
				<input type="text" name="cari" id="cari" placeholder="Cari laporan/komentar yang ingin diketahui" class="cari">
				<button class="btn" type="submit" name="btncari">Cari</button>
			</form>

			<br><br><br>
			<center>
				<a href="<?php echo site_url('lapor_controller/tambah') ?>">Buat Laporan/Komentar <img src="<?php echo base_url('gambar/tambah.png') ?>" width="15px" height="15px">
					<div class="tambah">
						<a href="<?php echo site_url('lapor_controller/tambah') ?>">
						</a>
					</div>
			</center>

			<br>
			<p>Laporan/Komentar Terakhir</p>
			<hr>

			<?php foreach ($laporan as $value) : ?>
				<?php echo "<p>$value->isi</p><br>"; ?>
				<div class="waktu">
					<div class="lampir">
						<?php echo "Lampiran: $value->lampiran"; ?>
					</div>
					<div class="next">
						<?php echo "Waktu: $value->waktu"; ?>&emsp;
						<a href="<?php echo site_url('lapor_controller/detail/' . $value->id) ?>">Lihat Selengkapnya
							<img src="<?php echo base_url('gambar/next.png') ?>" width="20px" height="20px"></a>
					</div>
				</div>
				<hr>
			<?php endforeach; ?>
		</div>
	</div>
</body>

</html>