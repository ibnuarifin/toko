<?php session_start(); ?>
<?php if (!empty($_SESSION['usernameku']) && !empty($_SESSION['passwordku'])) { ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>halaman admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #000033;
}
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style1 {color: #FFFFFF}
-->
</style></head>

<body>
<div align="center">
  <table width="100" border="0" cellpadding="0">
    <tr>
      <td colspan="2"><img src="../banner-admin.jpg" width="961" height="208"></td>
    </tr>
    <tr>
      <td width="206" align="center" valign="top" bgcolor="#000099"><table width="206" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="258" align="center" bgcolor="#000000"><span class="style1"><strong>Menu</strong></span></td>
        </tr>
        <tr>
          <td bgcolor="#000048"><a href="../kategori/kategori.php"><span class="style1">- Kategori</span></a></td>
        </tr>
        <tr>
          <td bgcolor="#00006A"><a href="produk.php"><span class="style1">- Produk</span></a></td>
        </tr>
        <tr>
          <td bgcolor="#000048"><span class="style1">- Kota </span></td>
        </tr>
        <tr>
          <td bgcolor="#00006A"><span class="style1">- Ongkos Kirim </span></td>
        </tr>
        <tr>
          <td bgcolor="#000048"><span class="style1">- Contact Us </span></td>
        </tr>
        <tr>
          <td bgcolor="#00006A"><span class="style1">- Cara Belanja</span></td>
        </tr>
        <tr>
          <script language="javascript">
<!--
function logout()
{
	tanya=confirm("Apakah anda yakin akan keluar ?")
	if (tanya !="0")
	{
		top.location="../logout.php"
	}
}
//-->
</script>
<td bgcolor="#000048"><span class="style1"><a href="#"onClick="logout()"><strong>- Logout</strong></a></span></td>

        </tr>
      </table></td>
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">INPUT  PRODUK
        </div>
        <table width="755" border="0">
        <tr>
          <td width="27">&nbsp;</td>
          <td width="702">&nbsp;</td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><p align="left"><form action="proses_produk.php" method="post" enctype="multipart/form-data">
        <table width="383" border="0">
<?php
include'../koneksi.php';
$sql_kategori="select * from kategori order by id_kategori";
$kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());


?>
          <tr>
            <td width="92"><small><strong>Kategori</strong></small></td>
            <td width="10">:</td>
            <td width="267"><select name="kategori">
              <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_kategori))
   {
?>
              <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
              <?php
  }
?>
            </select></td>
          </tr>
          <tr>
            <td><small><strong>Nama Produk </strong></small></td>
            <td>:</td>
            <td><input type="text" name="produk"></td>
          </tr>
          <tr>
            <td><small><strong>Deskripsi</strong></small></td>
            <td>:</td>
            <td><textarea name="deskripsi" id="deskripsi"></textarea></td>
          </tr>
          <tr>
            <td><small><strong>Harga</strong></small></td>
            <td>:</td>
            <td><input name="harga" type="text" id="harga" size="7"> 
              Rupiah </td>
          </tr>
          <tr>
            <td><small><strong>Stock</strong></small></td>
            <td>:</td>
            <td><input name="stock" type="text" id="stock"></td>
          </tr>
          <tr>
            <td><small><strong>Berat</strong></small></td>
            <td>:</td>
            <td><input name="berat" type="text" id="berat" size="5">
            kg</td>
          </tr>
          <tr>
            <td><small><strong>Dibeli</strong></small></td>
            <td>:</td>
            <td><input name="dibeli" type="text" id="dibeli"></td>
          </tr>
          <tr>
            <td><small><strong>Gambar</strong></small></td>
            <td>:</td>
            <td><input type="file" name="fupload" id="nama_file"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit"></td>
          </tr>
        </table>
          </form></p>
            <p></p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr align="center" valign="middle" bgcolor="#000099">
      <td colspan="2"><span class="style1">&copy; 2013 Pidjar <br>
design by Achmad Pidjarianto </span></td>
    </tr>
  </table>
</div>
</body>
</html>
<?php

}else{
  echo "<script language='javascript'>alert('Silakan Login Terlebih Dahulu')</script>";
 echo"<script language='javascript'>window.location = 'index.php'</script>";
}
?>
