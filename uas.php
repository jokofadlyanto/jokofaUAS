<?php

$conn = mysqli_connect("localhost", "root", "", "databaseuas");

session_start();

if(isset($_POST['tombolCari'])) {
	$cari = $_POST['cari'];
	$_SESSION['cari'] = $cari;
} else {
	$cari = $_SESSION['cari'];
}

$ambilData = mysqli_query($conn, "SELECT * FROM admin WHERE 
	nama LIKE '%$cari%' OR
	alamat LIKE '%$cari%' OR
	perusahaan LIKE '%$cari%' OR
	tanggal LIKE '%$cari%'
	");


// konfigurasi pagination
$jumlahData = 4;
$totalData = mysqli_num_rows($ambilData);
$jumlahPagination = ceil($totalData / $jumlahData);


if(isset($_GET['halaman'])) {
	$halamanAktif = $_GET['halaman'];
} else {
	$halamanAktif = 1;
}

$dataAwal = ($halamanAktif * $jumlahData) - $jumlahData;
// end
$ambilDataPerhalaman =  mysqli_query($conn, "SELECT * FROM admin WHERE 
	nama LIKE '%$cari%' OR
	alamat LIKE '%$cari%' OR
	perusahaan LIKE '%$cari%' OR
	tanggal LIKE '%$cari%'
	LIMIT $dataAwal, $jumlahData
	");




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="foto">
	<img src="gambar/foto.jpg">
</div>
<section id="sidebar">
	<nav>
		<a href="#" class="active"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
		<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Bookmark</a>
		<a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Calender</a>
		<a href="#"><i class="fa fa-user" aria-hidden="true"></i> User</a>
		<a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>
	</nav>
</section>

<header>
<form method="post" action="uas.php">
<div class="search">
	<button type="submit" value="cariData" name="tombolCari"><img src="gambar/search.png"></button>
	<input type="text" name="cari" autofocus value="<?php echo $cari; ?>" autocomplete="off">
</div>
</form>
<div class="user-area">
	<a href="#">+ Add</a>
	<a href="#"><img src="gambar/bel.png"></a>
	<a href="#">
		<div class="user-image">
			<img src="gambar/down.png">
		</div>
	</a>
</div>
<div class="dashboard">
	<h1>DASHBOARD</h1>
	<P>Welcome to your dashboard admin</P>
</div>	
<div class="row">
  <div class="column">
    <div class="card1">
    	<h3>User Registred</h3>
    	<h3>-</h3>
    	<h4>100 user</h4>
    </div>
  </div>
  <div class="column">
    <div class="card2">
    	<h3>Kehadiran</h3>
    	<h3>-</h3>
    	<h4>90 online</h4>
    </div>
  </div>
  <div class="column">
    <div class="card3">
    	<h3>Date</h3>
    	<h3>-</h3>
    	<h4>Kamis, 07 Mei 2020</h4>
    </div>
  </div>
  <div class="column">
    <div class="card4">
    	<h3>Apply</h3>
    	<h3>-</h3>
    	<h4>No Apply</h4>
    </div>
  </div>
</div>

<?php if($halamanAktif > 1) : ?>
<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for ($i=1; $i <= $jumlahPagination ; $i++) : ?>
	<?php if($i == $halamanAktif) : ?>
	<a href="?halaman=<?php echo $i ; ?>" style="font-weight: bold; color: blue;"><?php echo $i; ?></a>
	<?php else : ?>
	<a href="?halaman=<?php echo  $i ; ?>"><?php echo $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahPagination) : ?>
<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>



<table>
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Perusahaan</th>
			<th>Tanggal</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$nomor = 0 + $dataAwal;
			while($row = mysqli_fetch_assoc($ambilDataPerhalaman)) {
				$nomor++;
				?>
				<tr>
					<td><?php echo $nomor ?></td>
					<td><?php echo $row["nama"] ?></td>
					<td><?php echo $row["alamat"] ?></td>
					<td><?php echo $row["perusahaan"] ?></td>
					<td><?php echo $row["tanggal"] ?></td>
				</tr>
				<?php
			}
		 ?>
	</tbody>
</table>
</header>
<footer>
	<div class="identitas">
		<p>&copy; Copyright 2020 : Joko Fadlyanto 311810184</p>
	</div>
</footer>
</body>
</html>