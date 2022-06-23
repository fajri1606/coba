<!DOCTYPE html>
<html>
<head>
<title>Database Buku Tamu</title>
</head>
<body>
<h2>Buku Tamu </h2>
<form method="post" action="simpantamu.php">
<input type="hidden" value="<?php echo $data['id'];?>" name="id_tamu">
<table>
<tr><td>Nama : </td><td><input type="text" name="nama"></td></tr>
<tr><td>Email :</td><td><input type="email" name="email"></td></tr>
<tr><td>Komentar :</td><td><textarea type="textarea" name="komentar"> </textarea> </td></tr>


<tr><td colspan="2"><button type="submit" value="simpantamu">Kirim</button></td></tr>
</table>
</form>
</body>
</html>