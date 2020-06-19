<?php 
include_once "app/Album.php";
$album = new app\Album();
$rows = $album->tampil();
?>

<html>
	<head>
	<title></title>
	</head>
<body>
	<div class="utama">
	<div class="isi">
			<h2 align="center">DATA ALBUM</h2>
			<center><a class="input" href="index2.php?halaman=album_input">Tambah</a></center>
			<br>
			<thead>
			<table align="center">
				<div class="tr1">
				<tr>
					<th>No. </th>
					<th>Nama Album</th>
					<th>Keterangan</th>
					<th>Keterangan Photo</th>
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
					<td><?php echo $row['album_name']; ?></td>
					<td><?php echo $row['album_text']; ?></td>
					<td><?php echo $row['photo_id']; ?></td>
					
					<td>
					<a class="edit" href="index2.php?halaman=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a>
					<a class ="hapus" href="index2.php?halaman=album_proses&delete-id=<?php echo $row['album_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 
</div>
</body>
</html>
<link rel="stylesheet"href="<?php echo ASSET; ?>css/style.css">