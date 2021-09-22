<?php
require_once"koneksi.php";
if(isset($_GET['nama_produk'])){
	$nama = $_GET['nama_produk'];
}
else{
	die("ERROR!!!");
}
$query = mysqli_query($db, "SELECT * FROM produk WHERE nama_produk = '$nama'");
$data = mysqli_fetch_array($query);

if($_POST['submit'] == "submit"){
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];

	$cek = mysqli_num_rows(mysqli_query($db, "SELECT nama_produk FROM produk WHERE nama_produk = '$_POST[nama_produk]' and nama_produk != '$nama'"));

	if($cek > 0){
		?>
		<script type="text/javascript">
			alert("Maaf Produk sudah tersedia");
			document.location = "./";
		</script>
		<?php
	}
	else{
		mysqli_query($db, "UPDATE produk SET nama_produk = '$nama_produk', keterangan ='$keterangan' , harga = '$harga', jumlah = '$jumlah' WHERE nama_produk = '$nama'");
		?>
		<script type="text/javascript">
			alert("Selamat produk berhasil diupdate");
			document.location = "index.php"
		</script>
		<?php
	}
}