<!DOCTYPE html>
<html>
    <head>
 <title>CRUD PDO Kampus</title>
    </head>
 <body bgcolor="#CCCCCC">
    <h2><p align="center">EDIT DATA</p></h2>
    <form method="post" action="index.php?update=true">
<div class="modal fade" id="myModal" role="dialog">
 <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <?php foreach ($data as $value) {?>
  <tr>
    <td height="27" align="right" valign="middle">NIM</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="nim" value="<?php echo $value['nim'] ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?php echo $value['nama'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" value="<?php echo $value['alamat'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Jurusan</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
  <input name="jurusan" type="text" value="<?php echo $value['jurusan'] ?>">
    </label></td>
  </tr>
<?php } ?>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="EDIT" id="edit"></td>
  </tr>
  </table>
</div>
  </body>
</html>