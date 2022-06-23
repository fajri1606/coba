<!DOCTYPE html>
<html>
<head>
<title>Belajar Insert Data Form ke Database</title>
</head>
<body>
<h2>Form Input Data Dosen </h2>
<form method="post" action="simpandos.php">
<input type="hidden" value="<?php echo $data['id'];?>" name="id_dosen">
<table>
<tr><td>NIP : </td><td><input type="text" name="nip"></td></tr>
<tr><td>Nama :</td><td><input type="text" name="nama"></td></tr>

<!--Tanggal Lahir -->
<tr>
<td>Tanggal Lahir :</td>
<td><select name="tgl" size="1" id="tgl">
<?php

for ($i=1;$i<=31;$i++)
{
echo "<option value=".$i.">".$i."</option>";
}
?>
</select>
<select name="bln" size="1" id="bln">
<?php
$bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
for ($i=1;$i<=12;$i++)
{
echo "<option value=".$i.">".$bulan[$i]."</option>";
}
?>
</select>
<select name="thn" size="1" id="thn">
<?php
for ($i=1980;$i<=2010;$i++)
{
echo "<option value=".$i.">".$i."</option>";
}
?>
</select></td>
</tr>
<tr><td>Tempat Lahir :</td><td><input type="text" name="temptlahir"></td></tr>
<tr><td>bidangstudi :</td><td>
<select name="bidangstudi">
<option value="Teknik Informatika">Teknik Informatika</option>
<option value="Sistem Informasi">Sistem Informasi</option>
<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
</select>
</td></tr>
<td>tmt:</td>
<td><select name="tgl" size="1" id="tgl">
<?php

for ($i=1;$i<=31;$i++)
{
echo "<option value=".$i.">".$i."</option>";
}
?>
</select>
<select name="bln" size="1" id="bln">
<?php
$bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
for ($i=1;$i<=12;$i++)
{
echo "<option value=".$i.">".$bulan[$i]."</option>";
}
?>
</select>
<select name="thn" size="1" id="thn">
<?php
for ($i=1980;$i<=2010;$i++)
{
echo "<option value=".$i.">".$i."</option>";
}
?>


<?php
for ($i=2000;$i<=2021;$i++)
{

echo "<option value=".$i.">".$i."</option>";
}
?>
</td></tr>







<tr><td colspan="2"><button type="submit" value="simpandos">Simpan Data</button></td></tr>
</table>
</form>
</body>
</html>