<?php
require_once"koneksi.php";

if($_POST['submit'] == "submit"){
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];

	$cek = mysqli_num_rows(mysqli_query($db, "SELECT nama_produk FROM produk WHERE nama_produk = '$_POST[nama_produk]'"));

	if($cek > 0){
		?>
		<script type="text/javascript">
			alert("Maaf Produk sudah tersedia");
			document.location = "./";
		</script>
		<?php
	}
	else{
		mysqli_query($db, "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$nama_produk', '$keterangan', '$harga', '$jumlah')");
		?>
		<script type="text/javascript">
			alert("Selamat produk berhasil ditambahkan");
			document.location = "index.php"
		</script>
		<?php
	}
}