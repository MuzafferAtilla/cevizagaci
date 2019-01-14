
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="tasarim.css">
<title>ÜRETİM</title>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
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
</head>
<body onload="UR_Start()">
<hr  style="border-width:1px; border-color:#784B39;"/>
<?php
include("baglanti.php");
@$tarih2=date('d/m/y H:i');
?>

<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="logo.fw.png" width="169" height="63" /></td><td width="395" align="right">  CEVİZ AĞACI ÜRETİM </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?></td></tr></table>
<table border="0" align="center" class="ana2">
<tr class="banner"><td align="center"><h2> TURTA </h2></td> <td align="center"><h2> TEK PASTA </h2></td> <td align="center"><h2> HAMUR </h2></td> <td align="center"><h2> YARI MAMÜL </h2></td></tr>
<tr>
<td valign="top" width="250">
	<table border="1" align="center" class="menu" cellpadding="10px">
    	<tr>
        	<td align="center"> <a href="pasta.php"> PASTA </a> </td>
        </tr>
        <tr>
        	<td align="center"> <a href="figur.php"> FİGÜR </a> </td>
        </tr>
    </table> 
<td valign="top" width="250">
	<table border="1" align="center" class="menu" cellpadding="10px">
     	<tr><td align="center"> <a href="tekpasta.php"> TEK PASTA</a> </td></tr>
        <tr><td align="center"> <a href="sutlutatli.php"> SÜTLÜ TATLI </a></td></tr>
        <tr><td align="center"> <a href="gramajliuruntek.php"> GRAMAJLI ÜRÜN </a> </td></tr> 
    </table>
</td> 
<td valign="top" width="250">
	<table border="1" align="center" class="menu" cellpadding="10px">
     	<tr><td align="center"> <a href="special.php"> SPECİAL KURABİYE</a> </td></tr>
        <tr><td align="center"> <a href="mayaliurun.php"> MAYALI ÜRÜN</a></td></tr>
        <tr><td align="center"> <a href="mekiksuflepizza.php"> MEKİK, SUFLE, PİZZA</a> </td></tr>
        <tr><td align="center"> <a href="tatlikurabiye.php"> TATLI KURABİYE</a> </td></tr>
        <tr><td align="center"> <a href="tuzlukurabiye.php"> TUZLU</a> </td></tr>
        <tr><td align="center"> <a href="kek.php"> KEK </a> </td></tr>
        <tr><td align="center"> <a href="tart.php"> TART </a> </td></tr>
        <tr><td align="center"> <a href="adethamur.php"> ADET ÜRÜN</a> </td></tr>
        <tr><td align="center"> <a href="paketliurun.php"> PAKETLİ ÜRÜN</a> </td></tr>
    </table>
</td>
<td valign="top" width="250">
	<table border="1" align="center" class="menu" cellpadding="10px">
     	<tr><td align="center"> <a href="yarimamul.php"> DONDURMA & KREMA </a> </td></tr>
    </table>
</td>
</tr>
<tr align="center" height=""><td colspan="4" width="250"><table border="0" class="menu2"><tr><td width="900" align="center"><a href=""> &nbsp; </a></td></tr></table></td></tr>
<tr align="center" height="30"><td colspan="4" width="250">


<?php
$dizi = array();
$dizi1 = array();
$dizi2 = array();
$dizi3 = array();
$dizi4 = array();
$dizi5 = array();
$dizi[1] = "Çikolatalı Böğürtlenli";
$dizi[2] = "Çikolatalı Çilekli";
$dizi[3] = "Çikolatalı Frambuazlı";
$dizi[4] = "Çikolatalı Hasbahçe";
$dizi[5] = "Çilekli Profiterollü";
$dizi[6] = "Çilekli";
$dizi[7] = "Ganaj";
$dizi[8] = "Hasbahçe";
$dizi[9] = "Kabaklı";
$dizi[10] = "Kestaneli";
$dizi[11] = "Krokanlı";
$dizi[12] = "Malaga";
$dizi[13] = "Muzlu Çilekli";
$dizi[14] = "Muzlu Fındıklı Pikolata";
$dizi[15] = "Newyork";
$dizi[16] = "Oreo";
$dizi[17] = "Prenses";
$dizi[18] = "Şokola";
$dizi[19] = "Truffle Meyveli";
$dizi[20] = "Üç Kırmızı Meyveli";
$dizi[21] = "Yabanmersinli Moist";
$dizi1[1] = "Aligo";
$dizi1[2] = "Bademli Büyük Ekler";
$dizi1[3] = "Bambu";
$dizi1[4] = "Beyaz Malaga";
$dizi1[5] = "Bitter Portakal";
$dizi1[6] = "Bon Apetit";
$dizi1[7] = "Caramio Doum";
$dizi1[8] = "Cheesecake Çikolatalı";
$dizi1[9] = "Cheesecake Çilekli";
$dizi1[10] = "Cheesecake Karamelli";
$dizi1[11] = "Cheesecake Limonlu";
$dizi1[12] = "Cheesecake Portakallı";
$dizi1[13] = "Citron Doum";
$dizi1[14] = "Concord";
$dizi1[15] = "Çikolatalı Milföy";
$dizi1[16] = "Çilekli Adrino";
$dizi1[17] = "Çilekli Budapeşte";
$dizi1[18] = "Çilekli Büyük Ekler";
$dizi1[19] = "Çilekli Küçük Alman";
$dizi1[20] = "Çilekli Milföy";
$dizi1[21] = "Çilekli Tart";
$dizi1[22] = "Ekpa";
$dizi1[23] = "Elegante";
$dizi1[24] = "Jaconde";
$dizi1[25] = "Kardinal";
$dizi1[26] = "Missisipi";
$dizi1[27] = "Mont Blanc";
$dizi1[28] = "Mozaik";
$dizi1[29] = "Muzlu Adrino";
$dizi1[30] = "Muzlu Budapeşte";
$dizi1[31] = "Muzlu Küçük Alman";
$dizi1[32] = "Muzlu Milföy";
$dizi1[33] = "Opal";
$dizi1[34] = "Opera";
$dizi1[35] = "Piramit";
$dizi1[36] = "Polka";
$dizi1[37] = "Prenses";
$dizi1[38] = "Profiterollü Fıstıklı";
$dizi1[39] = "Raspberry Doum";
$dizi1[40] = "Raspberry King";
$dizi1[41] = "Rosalinda";
$dizi1[42] = "Royal";
$dizi1[43] = "Sade Büyük Ekler";
$dizi1[44] = "Sade Milföy";
$dizi1[45] = "Siyah Malaga";
$dizi1[46] = "Stick";
$dizi1[47] = "Tiramisu";
$dizi1[48] = "Triffle";
$dizi1[49] = "Valencia";
$dizi2[1] = "Ananaslı Tartalet";
$dizi2[2] = "Böğürtlenli Tartalet";
$dizi2[3] = "Crunch Petifür";
$dizi2[4] = "Çikolatalı Kesme Petifür";
$dizi2[5] = "Çilekli Budapeşte Petifür";
$dizi2[6] = "Çilekli Rulo Petifür";
$dizi2[7] = "Çilekli Tartalet";
$dizi2[8] = "Fındıklı Ekler";
$dizi2[9] = "Fıstıklı Ekler";
$dizi2[10] = "Fıstıklı Kesme Petifür";
$dizi2[11] = "Frambuazlı Minik Parfe";
$dizi2[12] = "Frambuazlı Muzlu Kesme Petifür";
$dizi2[13] = "Kestaneli Tartalet";
$dizi2[14] = "Krokanlı Tartalet";
$dizi2[15] = "Lançöp Oval Petifür";
$dizi2[16] = "Mini Kazandibi";
$dizi2[17] = "Muzlu Rulo Petifür";
$dizi2[18] = "Muzlu Tartalet";
$dizi2[19] = "Pikolata Fındıklı Tartalet";
$dizi2[20] = "Renkli Huni Petifür";
$dizi2[21] = "Renkli Kesme Petifür";
$dizi2[22] = "Sade Ekler";
$dizi2[23] = "Tahinli Ekler";
$dizi2[24] = "Vişneli Tartalet";
$dizi3[1] = "Aşure";
$dizi3[2] = "Çilekli Cookies";
$dizi3[3] = "Çilekli Kaşık Pasta";
$dizi3[4] = "Damla Çikolatalı Cookies";
$dizi3[5] = "Dutlu Muhallebi";
$dizi3[6] = "Fıstıklı Muhallebi";
$dizi3[7] = "İncirli Muhallebi";
$dizi3[8] = "Kazandibi";
$dizi3[9] = "Kestaneli Muhallebi";
$dizi3[10] = "Keşkül";
$dizi3[11] = "Keşşok";
$dizi3[12] = "Krem Şokola";
$dizi3[13] = "Meyveli Kaşık Pasta";
$dizi3[14] = "Muzlu Frambuazlı Kaşık Pasta";
$dizi3[15] = "Muzlu Krokanlı Kaşık Pasta";
$dizi3[16] = "Sakızlı Muhallebi";
$dizi3[17] = "Su Muhallebisi";
$dizi3[18] = "Supangle";
$dizi3[19] = "Sütlaç";
$dizi3[20] = "Tavuk Göğsü";
$dizi3[21] = "Tiramisu";
$dizi3[22] = "Trilaçe";
$dizi3[23] = "Vişneli Muhallebi";
$dizi3[24] = "Zerde";
$dizi4[1] = "Cevizli Çikolatalı";
$dizi4[2] = "Elmalı";
$dizi4[3] = "Fıstıklı";
$dizi4[4] = "Kestaneli Çikolatalı";
$dizi4[5] = "Vişneli Bademli";
$dizi5[1] = "Çikolatalı Vişneli";
$dizi5[2] = "Damla Çikolatalı";
$dizi5[3] = "Elmalı Çikolatalı";
$dizi5[4] = "Elmalı";
$dizi5[5] = "Ganaj";
$dizi5[6] = "Havuçlu";
$dizi5[7] = "İspanyol";
$dizi5[8] = "Kakaolu Chiffon";
$dizi5[8] = "Kayısılı";
$dizi5[9] = "Krokanlı Sargı";
$dizi5[10] = "Muzlu Çikolatalı Chiffon";
$dizi5[11] = "Portakallı";
$dizi5[12] = "Sacher";
$dizi5[13] = "Yabanmersinli";
?>
<marquee behavior="alternate">
<?php
for($i=1;$i<=136;$i++)
{
?>
<img src="pastaresim/<?php echo $dizi[rand(1,21)]; ?>.jpg" width="200" height="150" style="border-color:#784B39;; border-style:solid; border-width:2px"/>
<span> &nbsp; </span>
<img src="tekpastaresim/<?php echo $dizi1[rand(1,49)]; ?>.jpg" width="200" height="150" style="border-color:#784B39;; border-style:solid; border-width:2px"/>,
<span> &nbsp; </span>
<img src="gramajtekresim/<?php echo $dizi2[rand(1,24)]; ?>.jpg" width="200" height="150" style="border-color:#784B39;; border-style:solid; border-width:2px"/>
<span> &nbsp; </span>
<img src="sutlutatliresim/<?php echo $dizi3[rand(1,24)]; ?>.jpg" width="200" height="150" style="border-color:#784B39;; border-style:solid; border-width:2px"/>
<span> &nbsp; </span>
<img src="tartresim/<?php echo $dizi4[rand(1,5)]; ?>.jpg" width="200" height="150" style="border-color:#784B39;; border-style:solid; border-width:2px"/>
<span> &nbsp; </span>
<img src="kekresim/<?php echo $dizi5[rand(1,13)]; ?>.jpg" width="200" height="150" style="border-color:#784B39;; border-style:solid; border-width:2px"/>
<span> &nbsp; </span>
<?php
}
?>
</marquee>
</td></tr>

<tr align="center" height="30"><td colspan="4" width="250"><table border="1" class="menu2"><tr><td width="900" align="center"><a href="rapor.php"> RAPOR AL </a></td></tr></table></td></tr>
<tr align="center" height="30"><td colspan="4" width="250"><table border="1" class="menu2"><tr><td width="900" align="center"><a href="aylikrapor.php"> AYLIK RAPOR AL </a></td></tr></table></td></tr>
<tr align="center" height="30"><td colspan="4" width="250"><table border="1" class="menu2"><tr><td width="900" align="center"><a href="ortalama.php"> ORTALAMA AL </a></td></tr></table></td></tr>
<tr align="center" height="30"><td colspan="4" width="250"><table border="1" class="menu2"><tr><td width="900" align="center"><a href="hazirlik.php">  GÜNLÜK HAZIRLIK </a></td></tr></table></td></tr>
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
</body>
</html>
