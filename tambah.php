<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

	<title>tambah-data</title>
</head>
<body>

	<div class="jumbotron">
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
		<h2>Tambah Produk</h2>

		<form method="post" action="tambah-aksi.php">
		  <div class="form-group">
		    <label >Nama Produk</label>
		    <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan Nama Produk">
		  </div>
		  <div class="form-group">
		    <label >Keterangan</label>
		    <input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan">
		  </div>
		  <div class="form-group">
		    <label >Harga</label>
		    <input type="text" name="harga" class="form-control" placeholder="Masukkan harga">
		  </div>
		  <div class="form-group">
		    <label >Jumlah</label>
		    <input type="text" name="jumlah" class="form-control" placeholder="Masukkan jumlah">
		  </div>
		  
		  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
		</form>	
	</div>
	</div>
	</div>


</body>
</html>