<!DOCTYPE html>
<html>
    <head>
  <title>CRUD PDO Kampus</title>
    </head>
<body bgcolor="#CCCCCC">
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="post" action="index.php?save=true">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle" >NIM</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nim" required>
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle" >Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" required>
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle" >Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" required>
    </label></td>
  </tr>
 <tr>
    <td height="27" align="right" valign="middle" >Jurusan</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="jurusan" required>
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="simpan" value="SIMPAN">
        <input type="reset" name="reset" value="RESEST"></td>
  </tr>
</table>
</body>
</html>