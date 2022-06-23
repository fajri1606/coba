<!DOCTYPE html>
<html>
<head>
<title>Belajar Insert Data Form ke Database</title>
</head>
<body>
<h2>Form Input Data Mahasiswa </h2>
<form method="post" action="simpan4.php">
<input type="hidden" value="<?php echo $data['id'];?>" name="id_mahasiswa">
<table>
<tr><td>NIM : </td><td><input type="text" name="nim"></td></tr>
<tr><td>Nama :</td><td><input type="text" name="nama"></td></tr>
<tr><td>Jenis Kelamin</td><td>
<input type="radio" name="jenis_kelamin" value="L" checke
d>Laki Laki
<input type="radio" name="jenis_kelamin" value="P">Perempuan
</td></tr>
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
<tr><td>Tempat Lahir :</td><td><input type="text" name="tmptlahir"></td></tr>
<tr><td>Jurusan :</td><td>
<select name="jurusan">
<option value="Teknik Informatika">Teknik Informatika
</option>
<option value="Sistem Informasi">Sistem Informasi</op
tion>
<option value="Teknik Komputer dan Jaringan">Teknik K
omputer dan Jaringan</option>
</select>
</td></tr>
<tr><td>Tahun Masuk :</td><td>
<select name="thnmsk" size="1" id="thnmsk">
<?php
for ($i=2000;$i<=2021;$i++)
{

echo "<option value=".$i.">".$i."</option>";
}
?>
</td></tr>
</td></tr>
<tr><td>Dosen PA :</td><td>
<select name="pa">
<option disabled selected> Pilih </option>
<?php
include 'koneksi4.php';
$sql="select * from data_dosen";
$hasil=mysqli_query($koneksi,$sql);
$no=0;
while($data=mysqli_fetch_array($hasil)){
$no++;
?>
<option value="<?php echo $data['nama'];?>"><?php echo $data['nama'];?></option>
<?php
}
?>
<tr><td colspan="2"><button type="submit" value="simpan4">Simpan Data</button></td></tr>
</table>
</form>
</body>
</html>