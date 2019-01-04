<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : PlainLeaf 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<style type="text/css">
<!--
.style9 {	color: #FF0000;
	font-size: 18pt;
}
-->
</style>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Jersey Murah </a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="index.php" accesskey="1" title="">Homepage</a></li>
			<li><a href="aboutus.php" accesskey="3" title="">About Us</a></li>
			<li><a href="carabelanja.php" accesskey="4" title="">cARA BELANJA </a></li>
			<li><a href="contactus.php" accesskey="5" title="">Contact Us</a></li>
		</ul>
	</div>
</div>
<div id="banner"></div>
<div id="page" class="container">
  <table height="91" border="0">
    <tr>
      <td>
        <table width="100%" border="0">
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
      </table></td>
      <?php  
    include "koneksi.php";  
    $no=1;  
    $tampil = mysql_query("SELECT * FROM produk limit 0,5");  
    while($r=mysql_fetch_array($tampil)){  ?>
      <?php  echo"<td><table border='0'><tr> 
        <td bgcolor='#FFFFFF'><img border=2 src='../ngadimin/produk/foto/$r[gambar]' border=0 width=200 height=200></td></tr><tr> 
        <td></td></tr>
		<tr><td bgcolor='#FFFFFF'><strong>$r[2]</strong></td></tr><tr> 
        <td></td></tr><tr> 
        <td bgcolor='#FFFFFF'>Rp$r[4],00</td></tr><tr> 
        <td></td></tr><tr> 
        <td bgcolor='#FFFFFF'>
        
        </td></tr></table></td> "; ?>
      <?php  
    $no++;  
    }  
?>
    </tr>
  </table>
<table height="91" border="0">
    <tr>
      <td>
        <table width="100%" border="0">
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
      </table></td>
      <?php  
    include "koneksi.php";  
    $no=1;  
    $tampil = mysql_query("SELECT * FROM produk order by id_produk limit 0,5");  
    while($r=mysql_fetch_array($tampil)){  ?>
      <?php  echo"<td><table border='0'><tr> 
        <td bgcolor='#FFFFFF'><img border=2 src='../ngadimin/produk/foto/$r[gambar]' border=0 width=200 height=200></td></tr><tr> 
        <td></td></tr>
		<tr><td bgcolor='#FFFFFF'><strong>$r[2]</strong></td></tr><tr> 
        <td></td></tr><tr> 
        <td bgcolor='#FFFFFF'>Rp$r[4],00</td></tr><tr> 
        <td></td></tr><tr> 
        <td bgcolor='#FFFFFF'>
        
        </td></tr></table></td> "; ?>
      <?php  
    $no++;  
    }  
?>
    </tr>
  </table>
  <table height="91" border="0">
    <tr>
      <td>
        <table width="100%" border="0">
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor='#FFFFFF'>&nbsp;</td>
          </tr>
      </table></td>
      <?php  
    include "koneksi.php";  
    $no=1;  
    $tampil = mysql_query("SELECT * FROM produk order by id_produk  limit 5,5");  
    while($r=mysql_fetch_array($tampil)){  ?>
      <?php  echo"<td><table border='0'><tr> 
        <td bgcolor='#FFFFFF'><img border=2 src='../ngadimin/produk/foto/$r[gambar]' border=0 width=200 height=200></td></tr><tr> 
        <td></td></tr><tr> 
        <td bgcolor='#FFFFFF'><strong>$r[2]</strong></td></tr><tr> 
        <td></td></tr><tr> 
        <td bgcolor='#FFFFFF'>Rp$r[4],00</td></tr><tr> 
        <td></td></tr><tr> 
        <td bgcolor='#FFFFFF'>
        
        </td></tr></table></td>  
    "; ?>
      <?php  
    $no++;  
    }  
?>
    </tr>
  </table>
</div>
<p class="style9">PARTNER KAMI </p>
<table width="875" border="0" align="center">
  <tr>
    <td><img src="images/cek-kiriman-paket-barang-TIKI.jpg" width="150" height="100" /><img src="images/TIKI-JNE.gif" width="150" height="100" /><img src="images/bank-mandiri-logo11.jpg" width="150" height="100" /><img src="images/248_logo.jpg" width="200" height="100" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<div id="copyright" class="container">
	<p>Copyright (c) 2013 PIDJAR | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">aCHMAD PIDJARIANTO </a>.</p>
</div>
</body>
</html>
