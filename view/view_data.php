<!DOCTYPE html>
<html>
<head>
<title>CRUD PDO Kampus</title>
</head>
<body>
<h2><strong><p align="center">Data Mahasiswa Unikama</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th colspan="5" bgcolor="#669999" align="left"><button style="width: 20%;"><a href='index.php?insert=add'>TAMBAH DATA</a></button></th>
    </tr>
    <tr>
    <td width="200" height="30" align="center" valign="middle" bgcolor="orange">NIM</td>
    <td width="200" align="center" valign="middle" bgcolor="orange">Nama</td>
    <td width="200" align="center" valign="middle" bgcolor="orange">Alamat</td>
    <td width="200" align="center" valign="middle" bgcolor="orange">Jurusan</td>
    <td width="200" align="center" valign="middle" bgcolor="orange">Aksi</td></tr>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['nim'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['nama'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['alamat'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['jurusan'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF">
                        <a href="index.php?nim=<?php echo $value['nim']?>&get=true">Edit</a>
                       <a href="index.php?nim=<?php echo $value['nim']?>&delete=true">Delete</a>
                    </td>
                </tr>
 </td>
  </tr>
<?php } ?>
</table>
</body>
</html>