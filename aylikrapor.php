<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<hr  style="border-width:1px; border-color:#784B39;"/>
<title> AYLIK RAPOR </title>
<?php
include("baglanti.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#pasta").click(function(){	$(".pastarapor").slideToggle();	})
			$("#toplampasta").click(function(){	$(".toplampastarapor").slideToggle();	})
			$("#figur").click(function(){	$(".figurrapor").slideToggle();	})
			$("#toplamfigur").click(function(){	$(".toplamfigurrapor").slideToggle();	})
			$("#tekpasta").click(function(){	$(".tekpastarapor").slideToggle();	})
			$("#toplamtekpasta").click(function(){	$(".toplamtekpastarapor").slideToggle();	})
			$("#sutlutatli").click(function(){	$(".sutlurapor").slideToggle();	})
			$("#toplamsutlutatli").click(function(){	$(".toplamsutlurapor").slideToggle();	})
			$("#gramaj").click(function(){	$(".gramajrapor").slideToggle();	})
			$("#toplamgramaj").click(function(){	$(".toplamgramajrapor").slideToggle();	})
			$("#special").click(function(){	$(".specialrapor").slideToggle();	})
			$("#toplamspecial").click(function(){	$(".toplamspecialrapor").slideToggle();	})
			$("#maya").click(function(){	$(".mayarapor").slideToggle();	})
			$("#toplammaya").click(function(){	$(".toplammayarapor").slideToggle();	})
			$("#msp").click(function(){	$(".msprapor").slideToggle();	})
			$("#toplammsp").click(function(){	$(".toplammsprapor").slideToggle();	})
			$("#tatli").click(function(){	$(".tatlirapor").slideToggle();	})
			$("#toplamtatli").click(function(){	$(".toplamtatlirapor").slideToggle();	})
			$("#tuzlu").click(function(){	$(".tuzlurapor").slideToggle();	})
			$("#toplamtuzlu").click(function(){	$(".toplamtuzlurapor").slideToggle();	})
			$("#kek").click(function(){	$(".kekrapor").slideToggle();	})
			$("#toplamkek").click(function(){	$(".toplamkekrapor").slideToggle();	})
			$("#tart").click(function(){	$(".tartrapor").slideToggle();	})
			$("#toplamtart").click(function(){	$(".toplamtartrapor").slideToggle();	})
			$("#adet").click(function(){	$(".adetrapor").slideToggle();	})
			$("#toplamadet").click(function(){	$(".toplamadetrapor").slideToggle();	})
			$("#paket").click(function(){	$(".paketrapor").slideToggle();	})
			$("#toplampaket").click(function(){	$(".toplampaketrapor").slideToggle();	})
			$("#yari").click(function(){	$(".yarirapor").slideToggle();	})
			$("#toplamyari").click(function(){	$(".toplamyarirapor").slideToggle();	})
		})
	</script>
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
@$tarih2=date('Y-m-d');
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI RAPOR </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>
<form action="aylikrapor.php" method="post"> 
<table align="center" border="1" class="banner3" width="1012" cellpadding="5">
<tr><td width="974" align="center">Aralık Seç :

  <select name="tarih1" class="arkatarih"><option selected="selected"><?php echo @$_POST['tarih1']; ?></option>
    <?php 	@$tarihx=$_POST['tarih1']; $sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta WHERE tarih2 != '$tarihx' ORDER BY aylikpasta.tarih2 ASC");  while($dongu = mysql_fetch_array($sorgu)) { ?> <option> <?php echo $dongu['tarih2']; } ?> </option> </select> ~ <select name="tarih2" class="arkatarih"><option selected="selected"> <?php echo @$_POST['tarih2']; ?></option>
<?php @$tarihy=$_POST['tarih2']; $sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta WHERE tarih2 != '$tarihy' ORDER BY aylikpasta.tarih2 DESC"); while($dongu = mysql_fetch_array($sorgu)) { ?> <option> <?php echo $dongu['tarih2']; } ?> </option> </select>  <input type="submit" value="SEC" class="arkatarih" /></td></form></tr></table>
<?php //------------------------------------------------------------------------------------------PASTA-----------------------------------------------------------------------------?>
<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="pasta">PASTA RAPOR</td></tr>
</table>
<div class="pastarapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplampasta"> AYLIK PASTA </h2></td></tr>





<div class="toplampastarapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Pastalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(sifir+bir+iki) FROM aylikpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(sifir+bir+iki) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(sifir+bir+iki)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Az Üretilen Pastalar"."</span>"."<br>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi, SUM(sifir+bir+iki) FROM aylikpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' AND sifir+bir+iki != 0 GROUP BY urun_adi ORDER BY SUM(sifir+bir+iki) ASC LIMIT 0, 5");
while($dongu2 = mysql_fetch_array($sorgu2))
{
	echo $dongu2['SUM(sifir+bir+iki)']." Adet ".$dongu2['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Pastalar"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(sifir+bir+iki) FROM aylikpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(sifir+bir+iki)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	

<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikpasta.tarih2 ASC ");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px; max-width:100px" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikpasta");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikpasta ORDER BY `aylikpasta`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="pastaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikpasta.tarih2 ASC ");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(sifir), SUM(bir), SUM(iki) FROM aylikpasta WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikpasta`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td style="min-width:20px;"> <?php echo $adetdongu['SUM(sifir)']; ?> </td><td style="min-width:20px;"> <?php echo $adetdongu['SUM(bir)']; ?> </td><td style="min-width:20px;"> <?php echo $adetdongu['SUM(iki)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(sifir), SUM(bir), SUM(iki) FROM aylikpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikpasta`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="20"> <?php echo $toplamdongu['SUM(sifir)']; ?> </td><td width="20"> <?php echo $toplamdongu['SUM(bir)']; ?> </td><td width="20"> <?php echo $toplamdongu['SUM(iki)']; ?> </td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>
<?php // --------------------------------------------------------------------------FİGÜR-------------------------------------------------------------------------------------------------?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="figur">FİGÜR PASTA RAPOR</td></tr>
</table>
<div class="figurrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamfigur"> AYLIK FİGÜR PASTA </h2></td></tr>


<div class="toplamfigurrapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Figür Pastalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikfigur WHERE tarih2 BETWEEN '$date1' AND '$date2' AND `urun_adi` LIKE '%ki%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
?>
</div>
</div>	



<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikfigur WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikfigur.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikfigur");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikfigur");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikfigur ORDER BY `aylikfigur`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="tekpastaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikfigur WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikfigur.tarih2 ASC ");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikfigur WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikfigur`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikfigur WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikfigur`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>





<?php //------------------------------------------------------------------------TEKPASTA------------------------------------------------------------------------------------------------- ?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="tekpasta">TEKPASTA RAPOR</td></tr>
</table>
<div class="tekpastarapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamtekpasta"> AYLIK TEKPASTA </h2></td></tr>

<div class="toplamtekpastarapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Tek Pastalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktekpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Az Üretilen Tek Pastalar"."</span>"."<br>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktekpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu2 = mysql_fetch_array($sorgu2))
{
	echo $dongu2['SUM(adet)']." Adet ".$dongu2['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Tek Pastalar"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktekpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	



<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktekpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktekpasta.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktekpasta");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliktekpasta");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliktekpasta ORDER BY `ayliktekpasta`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="tekpastaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM ayliktekpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktekpasta.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktekpasta WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `ayliktekpasta`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktekpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliktekpasta`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>
<?php //--------------------------------------------------------------------------------SÜTLÜ TATLI-----------------------------------------------------------------------------------?>


<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="sutlutatli">SÜTLÜ TATLI RAPOR</td></tr>
</table>
<div class="sutlurapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamsutlutatli"> AYLIK SÜTLÜ TATLI </h2></td></tr>

<div class="toplamsutlurapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Sütlü Tatlılar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliksutlutatli WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Az Üretilen Sütlü Tatlılar"."</span>"."<br>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliksutlutatli WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu2 = mysql_fetch_array($sorgu2))
{
	echo $dongu2['SUM(adet)']." Adet ".$dongu2['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Sütlü Tatlılar"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliksutlutatli WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	




<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliksutlutatli WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliksutlutatli.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliksutlutatli");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliksutlutatli");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliksutlutatli ORDER BY `ayliksutlutatli`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="sutlutatliresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM ayliksutlutatli WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliksutlutatli.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliksutlutatli WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `ayliksutlutatli`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliksutlutatli WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliksutlutatli`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>

<?php //--------------------------------------------------------------------------------------------------GRAMAJ------------------------------------------------------------------------- ?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="gramaj">TEK PASTA GRAMAJLI ÜRÜN RAPOR</td></tr>
</table>
<div class="gramajrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamgramaj"> AYLIK GRAMAJLI ÜRÜN </h2></td></tr>


<div class="toplamgramajrapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Eklerler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Ekler%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Çok Üretilen Petifürler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Petifür%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Çok Üretilen Tartaletler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Tartalet%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Gramajlı Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	


<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikgramajtek.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikgramajtek");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikgramajtek");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikgramajtek ORDER BY `aylikgramajtek`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="gramajtekresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikgramajtek.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikgramajtek WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikgramajtek`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikgramajtek`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>






<?php //----------------------------------------------------------------------------------------------------SPECİAL-----------------------------------------------------------------------?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="special">SPECİAL KURABİYE RAPOR</td></tr>
</table>
<div class="specialrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamspecial"> AYLIK SPECİAL KURABİYE </h2></td></tr>


<div class="toplamspecialrapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Special Kurabiyeler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikspecial WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Az Üretilen Special Kurabiyeler"."</span>"."<br>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikspecial WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu2 = mysql_fetch_array($sorgu2))
{
	echo $dongu2['SUM(adet)']." Gram ".$dongu2['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Special Kurabiyeler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikspecial WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	









<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikspecial WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikspecial.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikspecial");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikspecial");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikspecial ORDER BY `aylikspecial`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="specialresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikspecial WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikspecial.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikspecial WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikspecial`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikspecial WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikspecial`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>










<?php //----------------------------------------------------------------------------------------------------Maya-----------------------------------------------------------------------?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="maya">MAYALI ÜRÜN RAPOR</td></tr>
</table>
<div class="mayarapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplammaya"> AYLIK MAYALI ÜRÜN </h2></td></tr>


<div class="toplammayarapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Ekmekler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Ekm%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Çok Üretilen Gramajlı Mayalı Ürünler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(gram) FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(gram) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(gram)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Çok Üretilen Açmalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Açma%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Çok Üretilen Poğaçalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Poğaça%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Çok Üretilen Simitler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Simit%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Mayalı Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 && $dongu3['SUM(gram)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	



<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikmaya.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:89px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikmaya");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikmaya");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikmaya ORDER BY `aylikmaya`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="mayaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikmaya.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikmaya WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikmaya`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="36"> <?php echo $adetdongu['SUM(adet)']; ?> </td><td width="37"> <?php echo $adetdongu['SUM(gram)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikmaya`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="40"> <?php echo $toplamdongu['SUM(adet)']; ?> </td><td width="40"> <?php echo $toplamdongu['SUM(gram)']; ?> </td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>







<?php //------------------------------------------------------------------------------------------MEKİK SUFLE PİZZA-----------------------------------------------------------------------?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="msp">MEKİK & SUFLE & PİZZA RAPOR</td></tr>
</table>
<div class="msprapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplammsp"> AYLIK MEKİK & SUFLE & PİZZA </h2></td></tr>



<div class="toplammsprapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Mini Pizzalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmsp WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Pizza%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Çok Üretilen Mekikler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmsp WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Mekik%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmsp WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	





<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikmsp WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikmsp.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikmsp");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikmsp");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikmsp ORDER BY `aylikmsp`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="mspresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikmsp WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikmsp.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmsp WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikmsp`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikmsp WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikmsp`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>




<?php //----------------------------------------------------------------------------------------------------TATLI KRUABİYE-----------------------------------------------------------------?>




<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="tatli">TATLI KURABİYE RAPOR</td></tr>
</table>
<div class="tatlirapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamtatli"> TATLI KURABİYE </h2></td></tr>


<div class="toplamtatlirapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Tatlı Kurabiyeler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktatlikurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En AZ Üretilen Tatlı Kurabiyeler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktatlikurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktatlikurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	





<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktatlikurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktatlikurabiye.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktatlikurabiye");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliktatlikurabiye");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliktatlikurabiye ORDER BY `ayliktatlikurabiye`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="tatlikurabiyeresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM ayliktatlikurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktatlikurabiye.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktatlikurabiye WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `ayliktatlikurabiye`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktatlikurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliktatlikurabiye`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>










<?php //----------------------------------------------------------------------------------------------------TUZLU-----------------------------------------------------------------------?>
<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="tuzlu">TUZLU ÜRÜN RAPOR</td></tr>
</table>
<div class="tuzlurapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamtuzlu"> AYLIK TUZLU ÜRÜN </h2></td></tr>



<div class="toplamtuzlurapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Tuzlu Ürünler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktuzlukurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En AZ Üretilen Tuzlu Ürünler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktuzlukurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktuzlukurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>




<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktuzlukurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktuzlukurabiye.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktuzlukurabiye");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliktuzlukurabiye");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliktuzlukurabiye ORDER BY `ayliktuzlukurabiye`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="tuzlukurabiyeresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM ayliktuzlukurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktuzlukurabiye.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktuzlukurabiye WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `ayliktuzlukurabiye`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktuzlukurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliktuzlukurabiye`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>

















<?php //----------------------------------------------------------------------------------------------------KEK-----------------------------------------------------------------------?>
<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="kek">KEK RAPOR</td></tr>
</table>
<div class="kekrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamkek"> AYLIK KEK </h2></td></tr>




<div class="toplamkekrapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Kekler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikkek WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En AZ Üretilen Kekler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikkek WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikkek WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>

<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikkek WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikkek.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikkek");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikkek");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikkek ORDER BY `aylikkek`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="kekresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikkek WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikkek.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikkek WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikkek`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikkek WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikkek`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>








<?php //----------------------------------------------------------------------------------------------------TART-----------------------------------------------------------------------?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="tart">TART RAPOR</td></tr>
</table>
<div class="tartrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamtart"> AYLIK TART </h2></td></tr>


<div class="toplamtartrapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Tartlar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktart WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En AZ Üretilen Tartlar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktart WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktart WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>





<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktart WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktart.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktart");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliktart");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM ayliktart ORDER BY `ayliktart`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="tartresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM ayliktart WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktart.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktart WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `ayliktart`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM ayliktart WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliktart`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>







<?php //----------------------------------------------------------------------------------------------------ADET ÜRÜN-----------------------------------------------------------------------?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="adet">ADET ÜRÜN RAPOR</td></tr>
</table>
<div class="adetrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamadet"> AYLIK ADET ÜRÜN </h2></td></tr>



<div class="toplamadetrapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Adet Ürünler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikadet WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En AZ Üretilen Adet Ürünler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikadet WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikadet WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>








<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikadet WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikadet.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikadet");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikadet");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikadet ORDER BY `aylikadet`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="tartresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikadet WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikadet.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikadet WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikadet`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikadet WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikadet`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>



<?php //-------------------------------------------------------------------------------------------------PAKETLİ ÜRÜN-----------------------------------------------------------------------?>




<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="paket">PAKET ÜRÜN RAPOR</td></tr>
</table>
<div class="paketrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplampaket"> AYLIK PAKET ÜRÜN </h2></td></tr>


<div class="toplampaketrapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Paket Ürünler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikpaket WHERE tarih2 BETWEEN '$date1' AND '$date2' AND adet != 0 AND gram != 0 GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Az Üretilen Paket Ürünler"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikpaket WHERE tarih2 BETWEEN '$date1' AND '$date2'  AND adet != 0 AND gram != 0  GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Adet ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Paket Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikpaket WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 && $dongu3['SUM(gram)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>	




<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpaket WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikpaket.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:89px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpaket");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikpaket");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikpaket ORDER BY `aylikpaket`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:300px"><a href="###" rel="paketresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikpaket WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikpaket.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikpaket WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikpaket`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="36"> <?php echo $adetdongu['SUM(adet)']; ?> </td><td width="37"> <?php echo $adetdongu['SUM(gram)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikpaket WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikpaket`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="40"> <?php echo $toplamdongu['SUM(adet)']; ?> </td><td width="40"> <?php echo $toplamdongu['SUM(gram)']; ?> </td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
</div>









<?php //----------------------------------------------------------------------------------------------------YARI MAMÜL-----------------------------------------------------------------------?>





<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="yari">KREMA & DONDURMA RAPOR</td></tr>
</table>
<div class="yarirapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="toplamyari"> AYLIK KREMA & DONDURMA </h2></td></tr>



<div class="toplamyarirapor" style="display:none" align="center">
<div align="center" class="birim" style="border-color:#784B39; border-style:solid; width:1006px;">
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
echo "<span style='font-size:22px'>"."En Çok Üretilen Dondurmalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Dondurma%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Az Üretilen Dondurmalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi LIKE '%Dondurma%' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Çok Üretilen Kremalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi NOT LIKE '%Dondurma%' GROUP BY urun_adi ORDER BY SUM(adet) DESC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."En Az Üretilen Kremalar"."</span>"."<br>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' AND urun_adi NOT LIKE '%Dondurma%' AND adet != 0 GROUP BY urun_adi ORDER BY SUM(adet) ASC LIMIT 0, 5");
while($dongu = mysql_fetch_array($sorgu))
{
	echo $dongu['SUM(adet)']." Gram ".$dongu['urun_adi']."<br>";
}
echo "<br>"."<span style='font-size:22px'>"."Hiç Üretilmeyen Ürünler"."</span>"."<br>";
$sorgu3 = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi");
$a = 0;
while($dongu3 = mysql_fetch_array($sorgu3))
{
	if($dongu3['SUM(adet)'] == 0 )
	{
		$a++;
		echo $dongu3['urun_adi']."<br>";
	}
}
if($a == 0)
{
	echo "YOK";
}
?>
</div>
</div>





<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikyari.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td style="min-width:87px;" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
<?php
}
?>
</tr>
<tr>
<?php
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikyari");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
?>
<?php
}
?>
</tr>
</table>
</td>
<td> <table border="1" align="center" cellpadding="5" width="100" class="rapor"> <tr><td colspan="3" align="center">TOPLAM</td></tr></table> </td>
</tr>
<tr>
<td valign="top" class="birim" >
<table border="0" ><tr><td>
<table border="1" class="birim" cellpadding="5">
<?php
$sayisayi = 1;
$sayisorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikyari");
while($sayidongu = mysql_fetch_array($sayisorgu))
{
?>
<tr><td> <?php echo $sayisayi; ?> </td></tr>
<?php
$sayisayi++;
}
?>
</table>
</td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="birim" cellpadding="5">
<?php
$pastasorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikyari ORDER BY `aylikyari`.`urun_adi` ASC");
while($pastadongu = mysql_fetch_array($pastasorgu))
{
?>
<tr><td style="min-width:210px"><a href="###" rel="yariresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
<?php
}
?>
</table></td></tr></table>
</td>
<td valign="top" class="rapor">
<table border="0"><tr valign="bottom">


<?php
$sorgutarih2 = mysql_query("SELECT DISTINCT tarih2 FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikyari.tarih2 ASC");
while($dongutarih2 = mysql_fetch_array($sorgutarih2))
{
?>
<td>
<table border="1" class="rapor" cellpadding="5">
<?php
$adetsorgu=mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikyari WHERE tarih2 = '$dongutarih2[tarih2]' GROUP BY urun_adi ORDER BY `aylikyari`.`urun_adi` ASC");
while($adetdongu=mysql_fetch_array($adetsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $adetdongu['SUM(adet)']; ?> </td></tr>
<?php
}
?>
</table>
</td>
<?php
}
?>
</tr></table>
</td>


<td valign="top" class="rapor">
<table border="0"><tr><td><table border="1" class="rapor" cellpadding="5">
<?php
$toplamsorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikyari`.`urun_adi` ASC");
while($toplamdongu = mysql_fetch_array($toplamsorgu))
{
?>
	<tr align="center"><td width="82"> <?php echo $toplamdongu['SUM(adet)']; ?> </tr>
<?php
}
?>
</table></td></tr></table>
</td>
</tr>

</table>
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
</body>
</html>