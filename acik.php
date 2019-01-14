<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">
<title> AYLIK RAPOR </title>
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
			$("#toplammsp").click(function(){	$(".toplampmsprapor").slideToggle();	})
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
include("baglanti.php");
@$tarih2=date('Y-m-d');
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI RAPOR </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>
<form action="acik.php" method="post"> 
<table align="center" border="1" class="banner3" width="1012" cellpadding="5">
<tr><td width="974" align="center">Aralık Seç :

  <select name="tarih1" class="arkatarih"><option selected="selected"></option>
    <?php $sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta ORDER BY aylikpasta.tarih2 ASC"); while($dongu = mysql_fetch_array($sorgu)) { ?> <option> <?php echo $dongu['tarih2']; } ?> </option> </select> ~ <select name="tarih2" class="arkatarih"><option selected="selected"></option>
<?php $sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta"); while($dongu = mysql_fetch_array($sorgu)) { ?> <option> <?php echo $dongu['tarih2']; } ?> </option> </select>  <input type="submit" value="SEC" class="arkatarih" /></td></form></tr></table>
<?php //------------------------------------------------------------------------------------------PASTA-----------------------------------------------------------------------------?>
<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="pasta">PASTA RAPOR</td></tr>
</table>
<div class="pastarapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK PASTA </h2></td></tr>

<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikpasta.tarih2 ASC ");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="pastaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
	<tr align="center"><td width="20"> <?php echo $adetdongu['SUM(sifir)']; ?> </td><td width="20"> <?php echo $adetdongu['SUM(bir)']; ?> </td><td width="20"> <?php echo $adetdongu['SUM(iki)']; ?> </td></tr>
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
<div class="figurrapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK FİGÜR PASTA </h2></td></tr>

<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikfigur WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikfigur.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="tekpastaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="tekpastarapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK TEKPASTA </h2></td></tr>

<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM ayliktekpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY ayliktekpasta.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="tekpastaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="sutlurapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK SÜTLÜ TATLI </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="sutlutatliresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="gramajrapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK GRAMAJLI ÜRÜN </h2></td></tr>

<tr class="rapor"><td>&nbsp;</td><td>Ürün Adı</td>
<td>
<table border="1" cellpadding="5" class="rapor">
<tr>
<?php
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$tarihsorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' ORDER BY aylikgramajtek.tarih2 ASC");
while($tarihdongu = mysql_fetch_array($tarihsorgu))
{
	$tarihdizi[$sayi] = $tarihdongu['tarih2'];
	$sayi++;
?>
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="gramajtekresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="specialrapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK SPECİAL KURABİYE </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="specialresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="mayarapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK MAYALI ÜRÜN </h2></td></tr>

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
<td width="89" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="mayaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="msprapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK MEKİK & SUFLE & PİZZA </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="mspresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="tatlirapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> TATLI KURABİYE </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="tatlikurabiyeresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="tuzlurapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK TUZLU ÜRÜN </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="tuzlukurabiyeresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="kekrapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK KEK </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="kekresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="tartrapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK TART </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="tartresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="adetrapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK ADET ÜRÜN </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="adetresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="paketrapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK PAKET ÜRÜN </h2></td></tr>

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
<td width="89" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="paketresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div class="yarirapor" style="display:">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center"><h2 id="pasta"> AYLIK KREMA & DONDURMA </h2></td></tr>

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
<td width="86" align="center"><?php if($tarihdongu['tarih2'] == $tarih2) { ?> <span class="bugun"> <?php echo $tarihdongu['tarih2']; ?> </span> <?php } else { echo $tarihdongu['tarih2']; } ?> </td>
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
<tr><td><a href="###" rel="yariresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td></tr>
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
<div style="height:300px">
</body>
</html>