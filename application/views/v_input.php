<!DOCTYPE html>
<html>
<head>
<title>Tambah data baru </title>
</head>
<body>
<center>
<h3>Tambah data baru</h3>
</center>
<form action="<?php echo site_url(). '/crud/tambah_aksi'; ?>" method="post">
<table style="margin:20px auto;">
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Kelas</td>
<td><select name='kelas'>
<option value='X-RPL'>X-RPL</option>
<option value='X-TKJ'>X-TKJ</option>
<option value='X-MM'>X-MM</option>
</select></td>
</tr>
<tr>
<td>SPP Bulan</td>
<td><select name='spp'>
<option value='Januari'>Januari</option>
<option value='Februari'>Februari</option>
<option value='Maret'>Maret</option>
</select></td>
</tr>
<tr>
<td>Tanggal Bayar</td>
<td><input type="date" name="tanggal_bayar"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Tambah"></td>
</tr>
</table>
</form>
</body>
</html>