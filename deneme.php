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
<?php
include("baglanti.php");
@$tarih2=date('y/m/d H:i');
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
<form action="deneme.php" method="post" class="banner" >
<input type="submit" value="PASTA HAZIRLA" style=" width:1000px; height:40px" name="pasta" /> <br  /> <br />
<input type="submit" value="TEKPASTA HAZIRLA" style=" width:1000px; height:40px" name="tekpasta" /> <br /> <br />
<input type="submit" value="SÜTLÜTATLI HAZIRLA" style=" width:1000px; height:40px" name="sutlutatli" /> <br /> <br />
<input type="submit" value="GRAMAJLI TEK PASTA ÜRÜN HAZIRLA" style=" width:1000px; height:40px" name="gramajtek" /> <br /> <br />
<input type="submit" value="SPECİAL KURABİYE HAZIRLA" style=" width:1000px; height:40px" name="special" /> <br /> <br />
<input type="submit" value="MAYALI ÜRÜN HAZIRLA" style=" width:1000px; height:40px" name="maya" /> <br /> <br />
<input type="submit" value="MEKİK & SUFLE & PİZZA HAZIRLA" style=" width:1000px; height:40px" name="msp" /> <br /> <br />
<input type="submit" value="TATLI KUREBİYE HAZIRLA" style=" width:1000px; height:40px" name="tatlikurabiye" /> <br /> <br />
<input type="submit" value="TUZLU ÜRÜN HAZIRLA" style=" width:1000px; height:40px" name="tuzlukurabiye" /> <br /> <br />
<input type="submit" value="KEK HAZIRLA" style=" width:1000px; height:40px" name="kek" /> <br /> <br />
<input type="submit" value="TART HAZIRLA" style=" width:1000px; height:40px" name="tart" /> <br /> <br />
<input type="submit" value="ADET ÜRÜN HAZIRLA" style=" width:1000px; height:40px" name="adet" /> <br /> <br />
<input type="submit" value="PAKET ÜRÜN HAZIRLA" style=" width:1000px; height:40px" name="paket" /> <br /> <br />
<input type="submit" value="KREMA & DONDURMA HAZIRLA" style=" width:1000px; height:40px" name="yari" /> <br /> <br />
<?php
if(@$_POST['pasta'])
{
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Çilekli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Böğürtlenli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Frambuazlı', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Hasbahçe', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Vişneli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çilekli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çilekli Budapeşte', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çilekli Moist', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çilekli Profiterollü', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Üç Kırmızı Meyveli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Beyaz Çikolatalı Frambuazlı', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Beyaz İnci', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Boğaziçi', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Cheesecake Limonlu', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Fıstıklı', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Ganaj', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Hasbahçe', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Kaçkar', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Karayip', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Kestaneli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Krokanlı', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Kırıntı', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Magnolia Çilekli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Magnolia Muzlu', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Malaga', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Meyveli Moist', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Muzlu Çilekli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Muzlu Budapeşte', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Muzlu Fındıklı Pikolata', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Muzlu Krokanlı Moist', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Newyork', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Oreo', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Oreolu Magnolia', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Prenses', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Profiterollü', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Tramisu', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Truffle Meyveli', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Yabanmersinli Moist', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Şampiyon', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Şokola', '00', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Şıpsevdi', '00', '00', '00', '$tarih2')");
	echo "<br>". "PASTA HAZIRLANDI";
}
if(@$_POST['tekpasta'])
{
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Aligo', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çikolatalı Fıstıklı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çikolatalı Fıstıklı Rulo', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çikolatalı Milföy', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Adrino', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Büyük Alman', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Büyük Ekler', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Budapeşte', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Frooze', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Küçük Alman', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Milföy', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Rulo', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Çilekli Tart', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Babaroski', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Bademli Büyük Ekler', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Bambu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Beyaz Malaga', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Biryant', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Bitter Portakal', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Bon Apetit', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Caramio Doum', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Cheesecake Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Cheesecake Çilekli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Cheesecake Frambuazlı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Cheesecake Karamelli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Cheesecake Limonlu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Cheesecake Portakallı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Cheesecake Tobleronlu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Citron Doum', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Concord', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Ekpa', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Elegante', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Gato', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Jaconde', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Kardinal', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Meyveli Tart', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Missisipi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Mont Blanc', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Mozaik', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Muzlu Adrino', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Muzlu Çilekli Cream Rulo', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Muzlu Çilekli Moist', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Muzlu Büyük Alman', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Muzlu Budapeşte', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Muzlu Küçük Alman', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Muzlu Milföy', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Muzlu Rulo', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Opal', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Opera', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Oreolu Vişneli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Piramit', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Pistacu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Polka', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Prenses', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Profiterollü Fıstıklı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Profiterollü Kule', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Raspberry Doum', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Raspberry King', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Rosalinda', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Royal', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Sade Büyük Ekler', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Sade Milföy', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Siyah Malaga', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Stick', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Tiramisu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Triffle', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Valencia', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('Şıpsevdi', '00', '$tarih2')");
	echo "<br>". "TEKPASTA HAZIRLANDI";
}
if(@$_POST['sutlutatli'])
{
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Aşure', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Çilekli Cookies', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Çilekli Kaşık Pasta', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Damla Çikolatalı Cookies', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Dutlu Muhallebi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Fıstıklı Muhallebi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Kadayıflı Muhallebi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Kazandibi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Kestaneli Muhallebi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Keşkül', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Keşşok', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Krem Şokola', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Meyveli Kaşık Pasta', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Muz Frambuazlı Kaşık Pasta', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Muz Krokanlı Kaşık Pasta', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Muzlu Cookies', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Oreolu Cookies', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Sakızlı Muhallebi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Sütlaç', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Su Muhallebisi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Supangle', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Tavuk Göğsü', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Tiramisu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Trilaçe', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Vişneli Muhallebi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('Zerde', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('İncirli Muhallebi', '00', '$tarih2')");
	echo "<br>". "SÜTLÜ TATLI HAZIRLANDI";
}

if(@$_POST['gramajtek'])
{
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Altın Çilekli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Ananaslı Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Armutlu Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Çikolatalı Ekler', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Çikolatalı Kesme Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Çikolatalı Rulo Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Çilekli Budapeşte Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Çilekli Rulo Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Çilekli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Üzümlü Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Böğürtlenli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Cevizli Kesme Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Crunch', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Draje Fıstıklı Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Elmalı Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Erikli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Frambuazlı Kesme Parfe', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Frambuazlı Minik Parfe', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Fındıklı Ekler', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Fıstıklı Ekler', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Fıstıklı Kesme Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Fıstıklı Top Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Kavunlu Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Kestaneli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Kivili Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Krokanlı Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Lançöp Oval Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Mini Kazandibi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Muzlu Budapeşte Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Muzlu Rulo Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Muzlu Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Oreolu Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Pikola Fındıklı Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Profiterol Kafa', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Renkli Huni Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Renkli Kesme Petifür', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Sade Ekler', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Tahinli Ekler', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Vişneli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Yabanmersinli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('Şeftalili Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('İncirli Tartalet', '00', '$tarih2')");
	echo "<br>". "GRAMAJLI ÜRÜNLER HAZIRLANDI";
}
if(@$_POST['special'])
{
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Amerikan Cookie', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Amoretti Badem', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Çikolatalı Vişneli Sarma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Çilekli Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Badem Ezmesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Badem Pralinli Father', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Bademli Kavala', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Bademli Kıbrıs Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Balayı Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Ballı Lokum Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Ballı Lokum Hurmalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Ballı Lokum İncirli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Beyaz Çikolatalı Biryant', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Bitter Bretzel', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Cevizli Karamel Yuvarlak', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Cevizli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Cevizli Şokola', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Elmalı Gül', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Elmalı Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Elmalı prenses', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Elmalı Rulo', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Fildişi Bretzel', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Frambuazlı Böğürtlenli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Frambuazlı Brownie', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Frambuazlı Marble', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Fındıklı Pralin', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Fıstıklı Bade', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Fıstıklı Bar', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Fıstıklı Kavala', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Fıstıklı Lokum', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Fıstıklı Pralin', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Fıstıklı Sufle', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Havuçlu Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Hindistan Cevizli Lokum', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Hurmalı Tereyağlı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Kahveli Çatlayan', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Kahveli Şokola', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Karamelli Bademli Sufle', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Kayısılı Bar', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Kayısılı Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Kayısılı İncirli Papatya', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Kestaneli Brownie', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Kestaneli Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Kestaneli Marble', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Limonl Bar', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Limonlu Bade', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Lokumlu Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Marzipan Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Minik Kare Brownie', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Muzlu Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Nescafeli Bar', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Nuteklife', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Oval Susam', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Portakallı Bar', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Sütlü Bretzel', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Siyah Çikolatalı Biryant', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Siyah Beyaz Pralin Fındıklı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Tahinli Çikolata Susam', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Tahinli Sarma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Truff Badem', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Viyana Beyaz', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Viyana Coco', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Vişneli Bohça', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Vişneli Pralinli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('Yabanmersinli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('İçi Dolgulu Tart', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('İncirli Bar', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('İncirli Sarma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('İncirli Tartalet', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('İncirli Top', '00', '$tarih2')");

	echo "<br>". "SPECİAL KURABİYELER HAZIRLANDI";
}
if(@$_POST['maya'])
{
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Acıkalı Sakallı', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Çavdarlı Roll Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Çekirdekli Sandviç Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Çikolatalı Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Brunch Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Caibatta Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Cevizli Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Cevizli Kepekli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Cevizli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Cevizli Roll Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Cevizli Simit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Cevizli Tahıllı Simit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Cheddarlı Sakallı', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Dana Jambonlu Sandviç', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Dereotlu Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Ev Poğaçası', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Hamburger Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Hanımeli Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Haşhaşlı Zeytinli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Jambon Kaşarlı', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kaşarlı Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kaşarlı Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kaşarlı Sakallı', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kaşarlı Simit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kaşarlı Zeytinli Simit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kepekli Caibatta', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kepekli Kokteyl', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kepekli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kepekli Roll Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kol Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kıymalı Gül Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kıymalı Patatesli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kıymalı Sarma Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kıymalı Sigara Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Kıymalı Yufka Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Maydanozlu Peynirli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Mini Pizza', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Mini Simit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Minik Bohça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Minik Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Mısırunlu Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Napolitan', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Pastahane Simiti', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Pastane Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Patatesli Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Patatesli Gül Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Patatesli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Patatesli Sigara Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Patatesli Yufka Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Peperkokos', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Peynirli Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Peynirli Gül Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Peynirli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Peynirli Sigara Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Peynirli Yufka Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Sade Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Sade Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Sade Roll Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Sade Sandviç Ekmeği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Sokak Simiti', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Sosisli Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Su Böreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Sucuklu Kaşarlı Simit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Tahıllı Simit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Tereyağlı Simit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Venedik Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Yuvarlak Pizza', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Zeytinli Açma', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Zeytinli Caibatta', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('Zeytinli Poğaça', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('İçli Simit', '00', '00', '$tarih2')");
	echo "<br>". "MAYALI ÜRÜNLER HAZIRLANDI";
}
if(@$_POST['msp'])
{
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Frambuazlı Mekik', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Kakaolu Bademli Mekik', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Kakaolu Mini Mekik', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Kaşarlı Mini Pizza', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Kıymalı Mini Pizza', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Mini Sufle', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Patatesli Mini Pizza', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Peynirli Mini Pizza', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Portakallı Mini Mekik', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Sade Mekik', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Sosisli Mini Pizza', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Sucuklu Mini Pizza', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Tahinli Mini Pizza', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Tuzlu Mekik', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Vişneli Mekik', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('Zeytinli Mini Pizza', '00', '$tarih2')");
	echo "<br>". "MEKİK & SUFLE & PİZZA HAZIRLANDI";
}
if(@$_POST['tatlikurabiye'])
{
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Amerikan Badem', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Amerikan Coco', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Çatlayan Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Çikolatalı Ay', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Çikolatalı Cips', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Çikolatalı Un Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Çizgili Landöşe', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Üzümlü Yelpaze', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Beyaz Esron', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Bonibonlu Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Bonibonlu Sade', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Cevizli Tadım', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Cevizli Un Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Damla Çikolatalı Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Emily', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Fındıklı Çikolatalı Breçel', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Fındıklı Bonbon', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Fındıklı Landöşe', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Fındıklı Melisa', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Fındıklı Rulo', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Fıstıklı Keçi Tırnağı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Fıstıklı Melisa', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Fıstıklı Un Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Hindistan Cevizli Breçel', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Kahve Çekirdekli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Kahve Susamlı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Kepekli Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Marmelatlı Sable', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Muz Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Nostaji Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Paintürk', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Portakallı Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Sade Un Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Sakızlı Un Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Siyah Esron', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Tahinli Çikolatalı Susamlı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Tahinli Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Tahinli Pekmezli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('Tarçınlı Kurabiye', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('İki Renk Ay', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('İki Renk Burgu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('İncirli Cookie', '00', '$tarih2')");
	echo "<br>". "TATLI KURABİYE HAZIRLANDI";
}
if(@$_POST['tuzlukurabiye'])
{
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Çekirdekli Kahke', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Çift Renk Peynirli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Çift Renk Siyah Zeytinli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Çift Renk Yeşil Zeytinli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Beşemenli Patlıcanlı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Biberli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Dereotlu Patatesli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Dereotlu Peynirli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Elişi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Haşhaşlı Peynirli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Kare Kıymalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Köy Böreği', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Kekikli Yeşil Zeytinli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Kıymalı Börekitas', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Mini Simit', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Mini Susamlı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Patatesli Börekitas', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Patatesli Dudak', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Patatesli Susamlı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Peynirli Ay', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Peynirli Börekitas', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Peynirli Cips', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Susamlı Kahke', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Yoğurtlu Peynirli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Yoğurtlu Zeytinli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('Zeytinli Ay', '00', '$tarih2')");
	echo "<br>". "TUZLU ÜRÜN HAZIRLANDI";
}
if(@$_POST['kek'])
{
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Çikolatalı Islak', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Çikolatalı Vişneli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Damla Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Elmalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Elmalı Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Elmalı Cevizli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Elmalı Pay', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Frambuazlı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Ganaj', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Havuçlu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Havuçlu Cevizli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Havuçlu Tarçınlı Chiffon', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Hurmalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Kakaolu Chiffon', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Kakaolu Marble', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Kayısılı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Krokanlı Sargı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Limonlu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Limonlu Beyaz Çikolata Soslu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Limonlu Bitter Çikolata Soslu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Marble Chiffon', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Meyveli Marble', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Muzlu Çikolatalı Chiffon', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Portakallı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Portakallı Chiffon', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Portakallı Islak', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Sacher', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('Yabanmersinli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikkek (urun_adi, adet, tarih2) values('İspanyol', '00', '$tarih2')");
	echo "<br>". "KEK HAZIRLANDI";
}
if(@$_POST['tart'])
{
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Bademli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Cevizli Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Elmalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Elmalı Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Fıstıklı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Hurmalı Bademli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Kestane Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Kestaneli Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Portakallı Çikolatalı', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Vişneli Bademli', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO ayliktart (urun_adi, adet, tarih2) values('Yeşil Elmalı', '00', '$tarih2')");
	echo "<br>". "TART HAZIRLANDI";
}
if(@$_POST['adet'])
{
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Ay Çöreği', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Çatal', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Çikolatalı Muffin Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Çilekli Tart', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Üzümlü Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Büyük Acıbadem', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Emilly', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Frambuazlı Beze', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Gelin Bohçası', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Halley Halley', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Halley Siyah', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Havuçlu Cevizli Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Islak Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Limonlu Muffin Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Paskalya', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Pürizyen', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Peynirli Açma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Portakallı Muffin Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Sade Beze', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Tahinli Çörek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Un Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Vişneli Bursa Lokumlusu', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Vişneli Islak Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Vişneli Mini Tart', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Vişneli Muffin Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Yabanmersinli Beze', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Yabanmersinli Muffin Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('Şam Kurabiyesi', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikadet (urun_adi, adet, tarih2) values('İtalyan Kurabiyesi', '00', '$tarih2')");
	echo "<br>". "ADET ÜRÜN HAZIRLANDI";
}
if(@$_POST['paket'])
{
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Amaretti', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Amerikan Cookie', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Anasonlu Gevrek', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Anasonlu Kokteyl', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Antep Fıstıklı Biscotti', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Antep Fıstıklı Cantuccini', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Ay Çekirdekli Çubuk', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Ay Çekirdekli Kokteyl', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Çörek Otlu Kokteyl', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Çikolatalı Beze', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Çikolatalı Biscotti', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Çikolatalı Bretzel', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Çikolatalı Cantuccini', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Çikolatalı Zebra Sable', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Üzümlü Yelpaze', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Bademli Çikolatalı Crispy Biscuit', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Bademli Biscotti', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Bademli Cantuccini', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Bademli Crispy', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Büyük Japonias', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Burger Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Fesleğenli Grisinli', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Finger Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Fındıklı Gevrek', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Fındıklı Sakritan', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Fıstıklı Gevrek', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Gianduja Çikolatalı Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Haşhaşlı Kokteyl', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Hindistan Cevizli Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Hindistan Cevizli Kare Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Hindistan Cevizli Yarım Ay Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Japonias', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kahveli Bademli Tulies', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kare Japonias', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kaşarlı Çubuk', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kaşarlı Kokteyl', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kepekli Çubuk', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kepekli Grisini', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kepekli Kokteyl', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kuru Meyve ve Yemişli Cantuccini', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kuruyemişli Büyük Beze', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kuruyemişli Beze', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Kıtır Arlette', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Leblebi Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Mailender', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Makronen', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Mandel Sables', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Mini Acıbadem', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Mix Grisini', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Oval Japonias', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Peperkokos', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Permesanlı Grisini', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Portakallı Amaretti', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Rokforlu tuzlu', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Sade Büyük Beze', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Sakritan Braçel', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Sütlü Çikolatalı Badem Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Sütlü Çikolatalı Ceviz Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Sütlü Çikolatalı Kakao Meyvesi Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Sütlü Çikolatalı Kalp Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Sütlü Çikolatalı Midye Bisküvi', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Selanik Gevreği', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Selanik Gevreği (Yeni)', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Speculas', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Susamlı Çubuk', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Susamlı Kokteyl', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Tahinli Kurabiye', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Taze Fesleğenli Çubuk', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Tuzlu Braçel', '00', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('Zeytinli Gevrek', '00', '00', '$tarih2')");
	echo "<br>". "PAKET ÜRÜN HAZIRLANDI";
}
if(@$_POST['yari'])
{
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Çikolatalı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Çilekli Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Bademli Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Sade Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Sakızlı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Muzlu Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Vişneli Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Kavunlu Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Limonlu Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Krokanlı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Frambuazlı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Kestaneli Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Kırıntılı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Karamelli Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('İtalyan Karamelli Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Kaymaklı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Böğürtlenli Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Beyaz Glasaj Sos', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Cevizli Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Cookies', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Devis Kek', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Fındık Pralin', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Fıstıklı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Ganaj', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Kaymaklı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Krokan', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Mandalinalı Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Mavi Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Oreolu Dondurma', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Pastacı Kreması Beyaz', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Pastacı Kreması Siyah', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Prenses Krema', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Profiterol Sos', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Siyah Glasaj Sos', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Triffle Kreması', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Tutti Furutti', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Waffle Hamuru', '00', '$tarih2')");
	$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('Şanti', '00', '$tarih2')");
	echo "<br>". "KREMA & DONDURMA HAZIRLANDI";
}
?>
</form>
</td></tr></table>
</div>
<div id="resimac"></div>
<div style="height:300px">
</div>

</body>
</html>