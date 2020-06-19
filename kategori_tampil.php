<?php 

include_once "app/Kategori.php";
$kategori = new app\Kategori();
$rows = $kategori->tampil();
?>

<html>

	<head>
	<title></title> 
	<link rel="stylesheet"href="<?php echo ASSET; ?>css/style.css">
	</head>

<body>
	<div class="utama">
	<div class="isi">

			<h2 align="center">DATA CATEGORY</h2>
			<center><a class="input" href="index2.php?halaman=kategori_input">Tambah</a></center>
			<br>
			
			<thead>
			<table align="center">
				<div class="tr1">
				<tr>
					<th>No.</th>
					<th>Nama Category</th>
					<th>Keterangan</th>
					<th>Aksi</th>
					
				</tr> 
				</div>
			</thead>

				<?php 
				$no = 1;
				?>

				<?php foreach ($rows as $row) { ?>
			<tbody>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $row['cat_nama']; ?></td>
					<td><?php echo $row['cat_text']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="index2.php?halaman=kategori_edit&id=<?php echo $row['cat_id']; ?>">Edit</a>
					<a class ="hapus"  href="index2.php?halaman=kategori_proses&delete-id=<?php echo $row['cat_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 

			

</div>



</body>

</html>



