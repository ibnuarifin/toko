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

#paging{
width:1154px;
margin-top:600px;
height:42px;
border:1px dashed #666666;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
}
#kotak-paging{
text-align:center;
margin:5px;
padding:5px;
width:50px;
float:left;
border:1px dashed #666666;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
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
   
$batas=10;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysql_query("select * from produk order by id_produk desc limit $posisi,$batas");
while($r=mysql_fetch_array($query))
{
    echo"<div class='sub-barang'><div class='jdl-brg'><div class='jdl-brg'><img border=2 src='../ngadimin/produk/foto/$r[gambar]' border=0 width=200 height=200> 
        
		<strong>$r[2]</strong>
      
        Rp$r[4] <br><a href='detail.php?id=$r[id_produk]&filenya=$r[gambar]' ><img src='images/detailButton.gif'></a></div></div></div> "; 
      
    } 
//penomoran
echo "<tr><td colspan='2' valign='top' align='center'>";
$query2=mysql_query("select * from produk");
$jumlah_data=mysql_num_rows($query2);
$jumlah_halaman=ceil($jumlah_data/$batas);
echo"<div id='paging'>";
if (1 != $paging){//tanda != berarti perintah akan dijalankan jika $paging tidak sama dengan 1, copyright all teknik paging by go_blind_hacker, powered by V-boys_studio
	$back=$paging-1;
	echo "<div id='kotak-paging'><a href='index.php?paging=$back'><b>Back</b></a></div>";
	}
	else{
	echo"<div id='kotak-paging'>Back</div>";
	}
	
if ($paging != $jumlah_halaman){
	$next=$paging+1;
	echo" <div id='kotak-paging'><a href='index.php?paging=$next'>  <b>Next</b></a></div>";
	}
	else
	{
	echo "<div id='kotak-paging'>Next</div>";
	}
echo"</div>";
?>
    </tr>
  </table>
</div>
<p class="style9">PARTNER KAMI </p>
<table width="875" border="0" align="center">
  <tr>
    <td align="center"><img src="images/cek-kiriman-paket-barang-TIKI.jpg" width="150" height="100" /><img src="images/TIKI-JNE.gif" width="150" height="100" /><img src="images/bank-mandiri-logo11.jpg" width="150" height="100" /><img src="images/248_logo.jpg" width="200" height="100" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<div id="copyright" class="container">
	<p>Copyright (c) 2013 PIDJAR | Design by <a href="index.php" rel="nofollow">aCHMAD PIDJARIANTO </a>.</p>
</div>
</body>
</html>
