<?php
require_once"koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

	<title>Level-3-10</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<div class="container">
	  <a class="navbar-brand" href="index.php">MyFi</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link" href="tambah.php">Input</a>
	      <a class="nav-item nav-link disabled" ><?php echo date('m/j/Y'); ?>
			</a>
	    </div>
	  </div>
	</div>
	</nav>

	<div class="jumbotron">
	  <div class="container">
	  	<h1 class="display-4">Produk Kita</h1>
		 <a href="tambah.php">Input</a>
		 <table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama Produk</th>
		      <th scope="col">Keterangan</th>
		      <th scope="col">Harga</th>
		      <th scope="col">Jumlah</th>
		      <th scope="col">Opsi</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  	$query = mysqli_query($db, "SELECT * FROM produk");
		  	$nomor = 1;
		  	while($data = mysqli_fetch_assoc($query)){
		  	?>
		    <tr>
		      <th scope="row"><?php echo $nomor++ ?></th>
		      <td><?php echo $data['nama_produk']?></td>
		      <td><?php echo $data['keterangan']?></td>
		      <td><?php echo $data['harga']?></td>
		      <td><?php echo $data['jumlah']?></td>
		      <td><a class="btn btn-outline-info" href="edit.php?nama_produk=<?=$data['nama_produk'];?>">Edit</a>
		      	<a class="btn btn-outline-danger" href="hapus.php?nama_produk=<?=$data['nama_produk']?>" onclick = "return confirm('Anda yakin akan menghapus <?php echo $data['nama_produk']?> dari database?">Hapus</a></td>
		    </tr>

		    <?php
			}
			?>

		  </tbody>
		</table>
	  </div>
	</div>


</body>
</html>