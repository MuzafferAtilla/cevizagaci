<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">
<title>HAZIRLIK</title>
    <script type="text/javascript">
function UR_Start()
{
    UR_Nu = new Date;
    UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
    document.getElementById("ur").innerHTML = UR_Indhold;
    setTimeout("UR_Start()",1000);
}
function showFilled(Value)
{
    return (Value > 9) ? "" + Value : "0" + Value;
}

</script>
<script  src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
 $(document).ready(function(){ 
$("a.resimver").mouseover(function() {;
                $('#resimac').css("position","absolute");
                $("#resimac").html('<img src="'+$(this).attr("rel")+'">');
 }
 ).mouseout(function () {
                $('#resimac').empty();                    
            }
            ).mousemove(function(e){
                var x=e.pageX ;
                var y=e.pageY ;
                $('#resimac').css("top", y+5);
                $('#resimac').css("left", x+5);
            }      
            );


 
 });
</script>
</head>

<body onload="UR_Start()">
<hr  style="border-width:1px; border-color:#784B39;"/>
<?php
include("baglanti.php");
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI HAZIRLIK </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>

<div align="center">
<?php
//$ekle = mysql_query("INSERT INTO deneme (urun_adi, adet, tarih2) values('Muz', '00', '$tarih2')");
?>
<table border="0" width="1018" align="center"><tr><td align="center">
<form action="hazirlik.php" method="post" class="banner" >
Hazırlık Tarihi : <input type="text" name="tarih" class="arkatarih"/> <input type="submit" value="SEÇ" class="arkatarih"/> <br /> <br />
<?php
$tarih2 = @$_POST['tarih'];
$ekle = mysql_query("UPDATE deneme SET tarih2 = '$tarih2' WHERE deneme.id = 42");
?>
<input type="submit" value="PASTA HAZIRLA" style=" width:1000px; height:31px" name="pasta" class="arkatarih"/> <br  /> <br />
<input type="submit" value="FİGÜR PASTA HAZIRLA" style=" width:1000px; height:31px" name="figur" class="arkatarih"/> <br  /> <br />
<input type="submit" value="TEKPASTA HAZIRLA" style=" width:1000px; height:31px" name="tekpasta" class="arkatarih"/> <br /> <br />
<input type="submit" value="SÜTLÜTATLI HAZIRLA" style=" width:1000px; height:31px" name="sutlutatli" class="arkatarih"/> <br /> <br />
<input type="submit" value="GRAMAJLI TEK PASTA ÜRÜN HAZIRLA" style=" width:1000px; height:31px" name="gramajtek" class="arkatarih"/> <br /> <br />
<input type="submit" value="SPECİAL KURABİYE HAZIRLA" style=" width:1000px; height:31px" name="special" class="arkatarih"/> <br /> <br />
<input type="submit" value="MAYALI ÜRÜN HAZIRLA" style=" width:1000px; height:31px" name="maya" class="arkatarih"/> <br /> <br />
<input type="submit" value="MEKİK & SUFLE & PİZZA HAZIRLA" style=" width:1000px; height:31px" name="msp" class="arkatarih"/> <br /> <br />
<input type="submit" value="TATLI KUREBİYE HAZIRLA" style=" width:1000px; height:31px" name="tatlikurabiye" class="arkatarih"/> <br /> <br />
<input type="submit" value="TUZLU ÜRÜN HAZIRLA" style=" width:1000px; height:31px" name="tuzlukurabiye" class="arkatarih"/> <br /> <br />
<input type="submit" value="KEK HAZIRLA" style=" width:1000px; height:31px" name="kek" class="arkatarih"/> <br /> <br />
<input type="submit" value="TART HAZIRLA" style=" width:1000px; height:31px" name="tart" class="arkatarih"/> <br /> <br />
<input type="submit" value="ADET ÜRÜN HAZIRLA" style=" width:1000px; height:31px" name="adet" class="arkatarih"/> <br /> <br />
<input type="submit" value="PAKET ÜRÜN HAZIRLA" style=" width:1000px; height:31px" name="paket" class="arkatarih"/> <br /> <br />
<input type="submit" value="KREMA & DONDURMA HAZIRLA" style=" width:1000px; height:31px" name="yari" class="arkatarih"/> <br /> <br />
<?php
if(@$_POST['pasta'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikpasta");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('$dongu2[urun_adi]', '00', '00', '00', '$tarih2')");
	}
	echo "PASTA HAZIRLANDI";
}
if(@$_POST['tekpasta'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM ayliktekpasta");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo "TEKPASTA HAZIRLANDI";
}
if(@$_POST['sutlutatli'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM ayliksutlutatli");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo "SÜTLÜ TATLI HAZIRLANDI";
}

if(@$_POST['gramajtek'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikgramajtek");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo "GRAMAJLI ÜRÜNLER HAZIRLANDI";
}
if(@$_POST['special'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikspecial");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	

	echo "SPECİAL KURABİYELER HAZIRLANDI";
}
if(@$_POST['maya'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikmaya");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('$dongu2[urun_adi]', '00', '00', '$tarih2')");
	}
	
	echo "MAYALI ÜRÜNLER HAZIRLANDI";
}
if(@$_POST['msp'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikmsp");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo "MEKİK & SUFLE & PİZZA HAZIRLANDI";
}
if(@$_POST['tatlikurabiye'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM ayliktatlikurabiye");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo "TATLI KURABİYE HAZIRLANDI";
}
if(@$_POST['tuzlukurabiye'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM ayliktuzlukurabiye");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo  "TUZLU ÜRÜN HAZIRLANDI";
}
if(@$_POST['kek'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikkek");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}

	echo  "KEK HAZIRLANDI";
}
if(@$_POST['tart'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM ayliktart");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo  "TART HAZIRLANDI";
}
if(@$_POST['adet'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikadet");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo  "ADET ÜRÜN HAZIRLANDI";
}
if(@$_POST['paket'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikpaket");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('$dongu2[urun_adi]', '00', '00', '$tarih2')");
	}
	
	echo "PAKET ÜRÜN HAZIRLANDI";
}
if(@$_POST['yari'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikyari");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo "KREMA & DONDURMA HAZIRLANDI";
}
if(@$_POST['figur'])
{
	$sorgu = mysql_query("SELECT * FROM deneme WHERE id = 42");
	while($dongu = mysql_fetch_array($sorgu))
	{
		$tarih2 = $dongu['tarih2'];
	}	
	$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM aylikfigur");
	while($dongu2 = mysql_fetch_array($sorgu2))
	{
		$ekle = mysql_query("INSERT INTO aylikfigur (urun_adi, adet, tarih2) values('$dongu2[urun_adi]', '00', '$tarih2')");
	}
	
	echo "FİGÜR PASTA HAZIRLANDI";
}
?>
</form>
</td></tr></table>
</div>
<div id="resimac"></div>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
<table border="0" align="center" width="1015" height="80" class="altbanner">
<tr>
<td>
	<table border="0" align="left" width="620">
    <tr>
    <td>
    <table border="0" cellpadding="5" align="right"><tr><td><a href="hakkimda.php"> Hakkımda </td><td><a href="gizlilik.php"> Gizlilik ve Güvenlik </td><td><a href="iletisim.php"> İletişim </td></tr></table>
    </td>
    </tr>
    <tr>
    <td>
    <table border="0"><tr valign="bottom"><td>&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2017 Muzaffer Atilla</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2016 Cevizağacı Gıda İşletmeleri San. ve Tic. Ltd. Şti.</td></tr></table>
    </td>
    </tr>
    </table>
</td>
<td>
	<table border="0" align="right">
    <tr>
    <td>
    <img src="logo2.png" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
    </tr>
    </table>
</td>
</tr>
</table>
<hr  style="border-width:1px; border-color:#784B39;"/>
<div style="height:300px">
</div>

</body>
</html>