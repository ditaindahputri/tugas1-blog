<?php 

include_once "app/Photos.php";

$photos = new app\Photos();
$rows = $photos->tampil();

?>

<html>

	<head>
	<title></title>
	</head>

<body>
	<div class="utama">
	
	
	<div class="isi">

			<h2 align="center">DATA PHOTOS</h2>
			<center><a class="input" href="index2.php?halaman=photos_input">Tambah</a></center>
			<br>
			
			<thead>
			<table align="center">
				<div>
				<tr>
					<th>No.</th>
					<th>Tanggal Foto</th>
					<th>Title Photo</th>
					<th>Keterangan</th>
					<th>Post</th>
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
					<td><?php echo $row['photo_date']; ?></td>
					<td><img src="Upload/<?php echo $row['photo_title'] ?>" width="100px" height="100px"></td> 
					<td><?php echo $row['photo_text']; ?></td>
					<td><?php echo $row['post_title']; ?></td>
					
					<td width="90px" align="center">
					<a class="edit" href="index2.php?halaman=photos_edit&id=<?php echo $row['photo_id']; ?>">Edit</a>
					<a class ="hapus"  href="index2.php?halaman=photos_proses&delete-id=<?php echo $row['photo_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 
</div>
</body>
</html>
<link rel="stylesheet"href="<?php echo ASSET; ?>css/style.css">