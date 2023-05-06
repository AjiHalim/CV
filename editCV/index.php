<?php   ?>
<!DOCTYPE html>
<html>
<head>
	<title>my cv admin</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<!-- kuncinya -->
</head>
<body>
	<div class="box">
		<form action="jembatan.php" method="post">
			<article class="tentang_saya">
					<h3>DESKRIPSI SAYA : </h3>
					<textarea name="tentang_saya"></textarea>
			</article>
			<article class="pengalaman">
					<h3>PENGALAMAN : </h3>
					<label>Tempat Pengalaman : </label>
					<input type="text" name="tempat" placeholder="DIMANA"><br/>
					<textarea name="deskripsi"></textarea> 
			</article>
			<article id="pendidikan">
					<h3>PENGALAMAN : </h3>
					<label>Tempat Pengalaman : </label>
					<input type="text" name="tempat[0]" placeholder="DIMANA"><br/>
					<textarea name="deskripsi[0]"></textarea>
					<div id="baru"></div>
					<!-- itu versi saya sendiri -->
					<input type="button" name="add" id="new" value="Tambah">
					<!-- <input type="button" name="tambah" id="new" value="Tambah" onclick="tambah()">  
						jika ada yang sama maka tidak akan di proses misal contoh kode di atas name nya sama dengan nama function nya maka tidak akan di proses

						HARUS BERBEDA
						-->
					<!-- tamna tombol hapus -->
			</article>
			<article class="tentang_saya">
					<h3>PENGALAMAN : </h3>
					<label>Tempat Pengalaman : </label>
					<input type="text" name="tempat" placeholder="DIMANA"><br/>
					<textarea name="deskripsi"></textarea>
			</article>
			<article class="tentang_saya">
					<h3>PENGALAMAN : </h3>
					<label>Tempat Pengalaman : </label>
					<input type="text" name="tempat" placeholder="DIMANA"><br/>
					<textarea name="deskripsi"></textarea>
			</article>
			<input type="submit" name="kirim">
		</form>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(
		function(){
		var i = 1;
		$('#new').click(function(){
			$('#pendidikan').append('<input type="text" name="tempat['+ i +']" placeholder="DIMANA"><br/><textarea name="deskripsi['+ i +']"></textarea>');
		})
		  
	}) 

	// function tambah() {
	// 	var coba = document.getElementById('baru');
	// 	coba.innerHTML = "<input type='text' name='tempat[0]' placeholder='DIMANA'><br/><textarea name='deskripsi[0]'></textarea>"; 
	// } 

	// function tambah() {
	//   var coba = document.getElementById('baru');
	// 	coba.innerHTML = "<input type='text' name='tempat[1]' placeholder='DIMANA'><br/><textarea name='deskripsi[1]'></textarea>"; 
	// }
</script>
</html>