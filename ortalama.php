<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<hr  style="border-width:1px; border-color:#784B39;"/>
<title> ORTALAMA </title>
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
$tarihdizi = array();
$sayi=1;
$date1 = @$_POST['tarih1'];
$date2 = @$_POST['tarih2'];
$fark = ((strtotime($date2)-strtotime($date1))/86400)+1;
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI ORTALAMA </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>
<form action="ortalama.php" method="post"> 
<table align="center" border="1" class="banner3" width="1012" cellpadding="5">
<tr><td width="974" align="center">Aralık Seç :

  <select name="tarih1" class="arkatarih"><option selected="selected"><?php echo @$_POST['tarih1']; ?></option>
    <?php 	@$tarihx=$_POST['tarih1']; $sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta WHERE tarih2 != '$tarihx' ORDER BY aylikpasta.tarih2 ASC");  while($dongu = mysql_fetch_array($sorgu)) { ?> <option> <?php echo $dongu['tarih2']; } ?> </option> </select> ~ <select name="tarih2" class="arkatarih"><option selected="selected"> <?php echo @$_POST['tarih2']; ?></option>
<?php @$tarihy=$_POST['tarih2']; $sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikpasta WHERE tarih2 != '$tarihy' ORDER BY aylikpasta.tarih2 DESC"); while($dongu = mysql_fetch_array($sorgu)) { ?> <option> <?php echo $dongu['tarih2']; } ?> </option> </select>  <input type="submit" value="SEC" class="arkatarih" /></td></form></tr></table>
<?php //------------------------------------------------------------------------------------------PASTA-----------------------------------------------------------------------------?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="pasta">PASTA ORTALAMA</td></tr>
</table>
<div class="pastarapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> PASTA ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA ADET </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(sifir+bir+iki) FROM aylikpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikpasta`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="pastaresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo ceil($dongu['SUM(sifir+bir+iki)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>


</table>
</div>
<?php // --------------------------------------------------------------------------FİGÜR-------------------------------------------------------------------------------------------------?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="figur">FİGÜR PASTA ORTALAMA</td></tr>
</table>
<div class="figurrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> FİGÜR PASTA ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA ADET </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM aylikfigur WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikfigur`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="figurpastaresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>





<?php //------------------------------------------------------------------------TEKPASTA------------------------------------------------------------------------------------------------- ?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="tekpasta">TEKPASTA ORTALAMA</td></tr>
</table>
<div class="tekpastarapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> TEK PASTA ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA ADET </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM ayliktekpasta WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliktekpasta`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="tekpastaresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>
<?php //--------------------------------------------------------------------------------SÜTLÜ TATLI-----------------------------------------------------------------------------------?>


<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="sutlutatli">SÜTLÜ TATLI ORTALAMA</td></tr>
</table>
<div class="sutlurapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> SÜTLÜ TATLI ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA ADET </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM ayliksutlutatli WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliksutlutatli`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="sutlutatliresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>

<?php //--------------------------------------------------------------------------------------------------GRAMAJ------------------------------------------------------------------------- ?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="gramaj">TEK PASTA GRAMAJLI ÜRÜN ORTALAMA</td></tr>
</table>
<div class="gramajrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> GRAMAJLI ÜRÜN ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA GRAM </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM aylikgramajtek WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikgramajtek`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="gramajtekresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>






<?php //----------------------------------------------------------------------------------------------------SPECİAL-----------------------------------------------------------------------?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="special">SPECİAL KURABİYE ORTALAMA</td></tr>
</table>
<div class="specialrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> SPECİAL KURABİYE ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA GRAM </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM aylikspecial WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikspecial`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="specialresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>


</table>
</div>










<?php //----------------------------------------------------------------------------------------------------Maya-----------------------------------------------------------------------?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="maya">MAYALI ÜRÜN ORTALAMA</td></tr>
</table>
<div class="mayarapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> MAYALI ÜRÜN ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="150"> ORTALAMA ADET </td> <td width="150" align="center"> ORTALAMA GRAM </td></tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikmaya WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikmaya`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="mayaresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(adet)']/$fark); ?> </td> <td align="center"> <?php  echo round($dongu['SUM(gram)']/$fark); ?> </td></tr>
<?php
$sayi ++;
}
?>


</table>
</div>







<?php //------------------------------------------------------------------------------------------MEKİK SUFLE PİZZA-----------------------------------------------------------------------?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="msp">MEKİK & SUFLE & PİZZA ORTALAMA</td></tr>
</table>
<div class="msprapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> MEKİK & SUFLE & PİZZA ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA GRAM </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM aylikmsp WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikmsp`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="mspresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>




<?php //----------------------------------------------------------------------------------------------------TATLI KRUABİYE-----------------------------------------------------------------?>




<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="tatli">TATLI KURABİYE ORTALAMA</td></tr>
</table>
<div class="tatlirapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> TATLI KURABİYE ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA GRAM </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM ayliktatlikurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliktatlikurabiye`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="tatlikurabiyeresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>
</table>
</div>










<?php //----------------------------------------------------------------------------------------------------TUZLU-----------------------------------------------------------------------?>
<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="tuzlu">TUZLU ÜRÜN ORTALAMA</td></tr>
</table>
<div class="tuzlurapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> TUZLU ÜRÜN ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA GRAM </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM ayliktuzlukurabiye WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliktuzlukurabiye`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="tatlikurabiyeresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>

















<?php //----------------------------------------------------------------------------------------------------KEK-----------------------------------------------------------------------?>
<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="kek">KEK ORTALAMA</td></tr>
</table>
<div class="kekrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> KEK ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA ADET </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM aylikkek WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikkek`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="kekresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo ceil($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>








<?php //----------------------------------------------------------------------------------------------------TART-----------------------------------------------------------------------?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="tart">TART ORTALAMA</td></tr>
</table>
<div class="tartrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> TART ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA ADET </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM ayliktart WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `ayliktart`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="tartresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo ceil($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>







<?php //----------------------------------------------------------------------------------------------------ADET ÜRÜN-----------------------------------------------------------------------?>

<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="adet">ADET ÜRÜN ORTALAMA</td></tr>
</table>
<div class="adetrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> ADET ÜRÜN ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA ADET </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM aylikadet WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikadet`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="adetresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo ceil($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>

</table>
</div>


<?php //-------------------------------------------------------------------------------------------------PAKETLİ ÜRÜN-----------------------------------------------------------------------?>



<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="paket">PAKET ÜRÜN ORTALAMA</td></tr>
</table>
<div class="paketrapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> PAKET ÜRÜN ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="150"> ORTALAMA ADET </td> <td width="150" align="center"> ORTALAMA GRAM </td></tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM aylikpaket WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikpaket`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="paketresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(adet)']/$fark); ?> </td> <td align="center"> <?php  echo round($dongu['SUM(gram)']/$fark); ?> </td></tr>
<?php
$sayi ++;
}
?>


</table>
</div>


















<?php //----------------------------------------------------------------------------------------------------YARI MAMÜL-----------------------------------------------------------------------?>





<table border="1" align="center" class="banner" width="1012" cellpadding="5">
<tr><td align="center" id="yari">KREMA & DONDURMA ORTALAMA</td></tr>
</table>
<div class="yarirapor" style="display:none">

<table border="1" align="center" class="banner" cellpadding="5">

<tr><td colspan="4" align="center" width=""><h2 id="toplampasta"> KREMA & DONDURMA ORTALAMA </h2></td></tr>

<tr class="rapor"><td width="10">&nbsp;  </td> <td width="400"> Ürün Adı </td> <td align="center" width="200"> ORTALAMA GRAM </td> </tr>

<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi, SUM(ADET) FROM aylikyari WHERE tarih2 BETWEEN '$date1' AND '$date2' GROUP BY urun_adi ORDER BY `aylikyari`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{
?>
<tr class="rapor"><td width="10"><?php echo $sayi; ?></td><td width=""><a href="###" rel="yariresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a> </td> <td align="center"> <?php  echo round($dongu['SUM(ADET)']/$fark); ?> </td> </tr>
<?php
$sayi ++;
}
?>


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