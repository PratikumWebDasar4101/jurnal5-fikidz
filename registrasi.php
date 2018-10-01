<form action="prosesregis.php" method="POST">
	<table align="center">
		<tr>
			<td colspan="3" align="center" bgcolor="lightblue"><h2>Form Registrasi</h2></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" maxlength="10" pattern="\d*"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" maxlength="25"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="Email" name="email" placeholder="example@gmail.com"></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
