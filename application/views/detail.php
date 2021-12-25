<!DOCTYPE html>
<html>

<head>
	<title>Detail Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/detail1_style.css') ?>">
</head>

<body>
	<div class="container">
		<div class="content">
			<h1>DETAIL LAPORAN</h1>
			<p>Detail Laporan/Komentar</p>
			<hr><br>
			<p>
				<?php echo $laporan->isi; ?>
			</p>
			<p>Lampiran: <?php echo $laporan->lampiran; ?></p>
			<br><br>
			<div class="pemisah">
				<div class="waktu">
					<p>Waktu: <?php echo $laporan->waktu; ?> &emsp; Aspek: <?php echo $laporan->aspek; ?> </p>
				</div>

				<div class="kedua">
					<div class="edt">
						<button>
							<a href="<?php echo site_url('lapor_controller/edit/' . $laporan->id) ?>">Edit &ensp; <img src="<?php echo base_url('gambar/edit.png') ?>" width="20px" height="20px" class="imgedit"></a>
						</button>
					</div>
					<div class="hps">
						<button type="submit">
							<a href="<?php echo site_url('lapor_controller/delete/' . $laporan->id) ?>" onclick="return confirm('Klik OK untuk menghapus Laporan/Komentar');">Hapus Laporan/Komentar &ensp; <img src=" <?php echo base_url('gambar/delete.png') ?>" width="20px" height="20px"></a>
						</button>
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>
</body>

</html>