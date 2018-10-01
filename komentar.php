<form method="POST">
	<table align="center">
		<tr>
			<td colspan="2" align="center"><h2>Silahkan Berkomentar</h2></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" maxlength="25" required></td>
		</tr>
		<tr>
			<td colspan="2"><textarea placeholder="Masukkan Komentar min 5 Kata" cols="50" rows="5" name="komentar"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><br><input type="submit" name="kirim" value="Kirim"></td>
		</tr>
	</table>
</form>

<?php 
if (isset($_POST['nama'])) {
	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];

	$jumlah_kata = explode(" ", $komentar);
	$count = count($jumlah_kata);

	if ($count < 5) {
		echo "Jumlah Komentar Sedikit";
	} else{
		echo "Jumlah Komentar Anda Sesuai : ".$count." Kata";
	}
}

 ?>
