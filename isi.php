<form>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="D3MI4101">D3MI4101</td>
			<td><input type="radio" name="kelas" value="D3MI4102">D3MI4101</td>
			<td><input type="radio" name="kelas" value="D3MI4103">D3MI4101</td>
			<td><input type="radio" name="kelas" value="D3MI4104">D3MI4101</td>
		</tr>
		<tr>
			<td>Jenis kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis" value="laki-laki">laki-laki</td>
			<td><input type="radio" name="jenis" value="perempuan">perempuan</td>
		</tr>
		<tr>
			<td>Hobby</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="Makan"></td>
			<td><input type="checkbox" name="hobi[]" value="Berenang"></td>
			<td><input type="checkbox" name="hobi[]" value="Basket"></td>
			<td><input type="checkbox" name="hobi[]" value="Lari"></td>
			<td><input type="checkbox" name="hobi[]" value="Belajar"></td>
			<td><input type="checkbox" name="hobi[]" value="Menulis"></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="fit">Fakultas Ilmu Terapan</option>
				<option value="fik">Fakultas Ildustri Kreatif</option>
				<option value="fkb">Fakultas Komunikasi dan Bisnis</option>
				<option value="fri">Fakultas Rekayasa Industri</option>
				<option value="fte">Fakultas Teknik elektro</option>
				<option value="fti">Fakultas teknik Informatika</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" name="alamat"></td>
		</tr>

	</table>
</form>