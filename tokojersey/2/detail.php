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
.kotak { 
height:250px; 
width : 180px;
padding:10px;
background-color:#ffffff;
width:250px; 
margin-top:10px; }

.sub-barang{
text-align:center;
padding:5px;
width:210px;
float:left;
border:1px dashed #333333;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
	margin:5px 5px 10px 5px;
}
.jdl-brg{
font-size:14px;
height:200px;
margin-bottom:70px;
font-family:"Comic Sans MS";
}

</style>

<style type="text/css">
img {
padding:5px;
background-color:000066;
border-radius:20px;
}
</style>

<style type="text/css">
<!--
.style9 {	color: #FF0000;
	font-size: 18pt;
}
.style10 {
	color: #8dc63f;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Bambu Kuning Jersey</a></h1>
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
      <?php
include "koneksi.php";
$id=$_GET['id'];
$tampil="select * from  produk where id_produk='$id'";
$hasil=mysql_query($tampil);
$r=mysql_fetch_array($hasil);

//while($data=mysql_fetch_array($edit)){
?>
<table border="0">
<tr>
<td rowspan="5"><?php echo "<img border=2 src='../ngadimin/produk/foto/$r[gambar]' border=0 width=200 height=200>"; ?> </td>
<td>&nbsp;</td>
<td><strong><?php echo $r['nama_produk']; ?></strong></td>
<td>
</td>
</tr>  
<tr>
<td></td>
<td>tersedia : <?php echo $r['deskripsi']; ?></td>
<td>&nbsp;</td>
</tr>  
<tr>
<td>&nbsp;</td>
<td>harga Rp <?php echo $r['harga']; ?>,00</td>
<td>&nbsp;</td>
</tr>  
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>  
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>  

  </table><br><br>
<p>untuk berbelanja di toko kami sangat mudah. anda hanya melihat barang yang tersedia pada tampilan produk. setelah itu anda hubungi kami di no <span class="style5"><strong>085789624133</strong></span> atau pin bb <span class="style5 style10">29b46fd2</span>. transaksi bisa dilakukan melalui bank <span class="style7">BNI </span>dan <span class="style7">Mandiri</span>. untuk ongkos kirim kami menyesuaikan agen pengiriman paket barang. biasanya kami menggunakan <span class="style7">tiki</span> atau <span class="style7">JNE</span>. anda bisa memilih sesuai dengan keinginan anda. bila anda ingin membeli dalam jumlah banyak/grosir, maka harga bisa sedikit miring. terima kasih telah mengunjungi situs kami. selamat berbelanja. <span class="style8"><strong>.::'kepuasan customer adalah kebanggaan buat kami'::..</strong></span></p>
</div>
<p class="style9">PARTNER KAMI </p>
<table width="875" border="0" align="center">
  <tr>
    <td align="center"><img src="images/cek-kiriman-paket-barang-TIKI.jpg" width="150" height="100" /><img src="images/TIKI-JNE.gif" width="150" height="100" /><img src="images/bank-mandiri-logo11.jpg" width="150" height="100" /><img src="images/248_logo.jpg" width="200" height="100" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<div id="copyright" class="container">
	<p>Copyright (c) 2013 PIDJAR | Design by <a href="index.php" rel="nofollow">ACHMAD PIDJARIANTO </a>.</p>
</div>
</body>
</html>
