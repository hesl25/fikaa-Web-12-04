<?php
require_once"koneksi.php";
if(isset($_GET['nama_produk'])){
	$nama = $_GET['nama_produk'];

	$query = mysqli_query($db, "DELETE FROM produk WHERE nama_produk = '$nama'");
	?>
	<script type="text/javascript">
		document.location = "index.php";
	</script>
	<?php
}
else{
	die("ERROR!!!");
}