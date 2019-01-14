<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">
<title>GÜNCELLE</title>
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
<?php
include("baglanti.php");
@$tarih2=date('y/m/d H:i');
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI GÜNCELLE </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
<form action="guncelle.php" method="post">



<table width="500" border="1" align="center" class="banner" cellpadding="5">
  <tr>
    <td align="center"><h2> ÜRÜN LİSTESİ GÜNCELLEME FORMU </h2></td>
  </tr>
  <tr>
    <td align="center"><select name="tablo" class="arkatarih">
      <option selected="selected"> Form İsmi</option>
      <option>PASTA</option>
      <option>FİGÜR</option>
      <option>TEK PASTA</option>
      <option>SÜTLÜ TATLI</option>
      <option>GRAMAJLI ÜRÜN TEK PASTA</option>
      <option>SPECİAL KURABİYE</option>
      <option>MAYALI ÜRÜN</option>
      <option>MEKİK & SUFLE & PİZZA</option>
      <option>TATLI KURABİYE</option>
      <option>TUZLU ÜRÜN</option>
      <option>KEK</option>
      <option>TART</option>
      <option>ADET ÜRÜN</option>
      <option>PAKET ÜRÜN</option>
      <option>DONDURMA &amp; KREMA</option>
    </select></td>
    </tr>
  <tr>
    <td align="center"><span class="m">Ürün Adı </span>:
<input type="text" name="urunadi" style="width:230px" class="arkatarih"/></td>
    </tr>
  <tr>
    <td align="center"><input type="submit" value="GÜNCELLE" style="width:400px" class="arkatarih"/></td>
  </tr>
<tr><td align="center">  



<?php
if(@$_POST['tablo'] == "PASTA")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('$_POST[urunadi]', '00', '00', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "TEK PASTA")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktekpasta");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "SÜTLÜ TATLI")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliksutlutatli");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "GRAMAJLI ÜRÜN TEK PASTA")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikgramajtek");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "SPECİAL KURABİYE")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikspecial");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "MAYALI ÜRÜN")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikmaya");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('$_POST[urunadi]', '00', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "MEKİK & SUFLE & PİZZA")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikmsp");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "TATLI KURABİYE")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktatlikurabiye");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "TUZLU ÜRÜN")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktuzlukurabiye");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "KEK")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikkek");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "TART")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktart");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "ADET ÜRÜN")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikadet");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "PAKET ÜRÜN")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpaket");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('$_POST[urunadi]', '00', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "FİGÜR")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikfigur");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikfigur (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
if(@$_POST['tablo'] == "DONDURMA & KREMA")
{
	$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikyari");
	while($dongu = mysql_fetch_array($sorgu))
	{
		@$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('$_POST[urunadi]', '00', '$dongu[tarih2]')");
	}
	echo $_POST['urunadi']." Güncellendi";
}
?>
</td></tr>
</table>
</form>
<div id="resimac"></div>
<div style="height:300px">
</div>
</body>
</html>