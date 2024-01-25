<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
</head>
<body>
<center><h3>Edit Data</h3></center>
<?php foreach($user as $u){ ?>
<form action="<?php echo site_url(). '/crud/update'; ?>" method="post">
<table style="margin:20px auto;">
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="id" value="<?php echo $u->id ?>">
<input type="text" name="nama" value="<?php echo $u->nama ?>">
</td>
</tr>
<tr>
<td>Kelas</td>
<td><select name='kelas' >
<option value="<?php echo $u->kelas ?>"><?php echo $u->kelas ?></option>
<option value='X-RPL'>X-RPL</option>
<option value='X-TKJ'>X-TKJ</option>
<option value='X-MM'>X-MM</option>
</select></td>
</tr>
<tr>
<td>SPP Bulan</td>
<td><select name='spp'>
<option value="<?php echo $u->spp ?>"><?php echo $u->spp ?></option>
<option value='Januari'>Januari</option>
<option value='Februari'>Februari</option>
<option value='Maret'>Maret</option>
</select></td>
</tr>
<tr>
<td>Tanggal Bayar</td>
<td>: <?php echo $u->tanggal_bayar ?></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
</tr>
<table>
</form>
<?php } ?>
</body>
</html>