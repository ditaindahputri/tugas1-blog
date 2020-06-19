<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/nav.css">
<div class="header">
	<div class="nav">
		<a href="index2.php">Home</a>
		<a href="index2.php?halaman=kategori_tampil">Category</a>
		<a href="index2.php?halaman=post_tampil">Post</a>
		<a href="index2.php?halaman=photos_tampil">Photos</a>
		<a href="index2.php?halaman=album_tampil">Album</a>
		<a href="index2.php?halaman=logout"><?php echo $_SESSION['user_nama']; ?> (Logout)</a>
	</div>
</div>



