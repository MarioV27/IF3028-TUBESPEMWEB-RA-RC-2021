function validasi() {
	var form = document.forms["tambah_form"];

	if (form["isi"].value == "") {
		alert("Laporan Harus Wajib Untuk Diisi");
		return false;
	} else if (form["isi"].value.split(" ").length < 20) {
		alert("Laporan Harus Memiliki 20 Kata Lebih");
		return false;
	} else if (form["aspek"].value == "kosong") {
		alert("Harus Memilih Salah Satu Aspek");
		return false;
	}else if (form["lampiran"].value == "") {
		alert("Harus Melampirkan Sebuah FIle");
		return false;
	}
}
