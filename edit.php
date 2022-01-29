<html>
<head>
	<title>Tabel Mahasiswa</title>
</head>
<body>

<style>

	body{
		background-color: teal;
	}
	.container{
		border-radius: 20px;
		position: absolute;
		background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 5px 45px rgba(0, 0, 0, 0.15);
		width:400px;
		padding: 20px;
		color: white;
		margin-top: 100px;
		margin-left: 450px;
		text-align: center;
		align-items: center;
	}

	.container a{
		text-decoration: none;
		color: black;
	}

	form table{
		padding-top: 10px;
		padding-left: 60px;
	}

	form input{
		padding: 8px;
		margin-top: 8px;
	}

	form .btn{
		background-color: teal;
		border-style: none;
		margin-top: 15px;
		margin-bottom: 20px;
	}

	.jdl{
		text-align: center;
	}

	.kembali{
		margin-top: 20px;
	}
</style>

<h1 class="jdl">EDIT DATA DIRI</h1>

<div class="container">
	
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="btn"></td>
				</tr>		
			</table>
			<a href="index.php" class="kembali">Kembali</a>
		</form>
		<?php 
	}
	?>

</div>
 
</body>
</html>