<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RAPOR</title>
<hr  style="border-width:1px; border-color:#784B39;"/>
<?php
include("baglanti.php");
?>
<link rel="stylesheet" type="text/css" href="lutfen.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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

@$tarih2=date('y/m/d H:i');
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="445" align="right">  CEVİZ AĞACI RAPOR </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?>
 </td></tr></table>
<table align="center" border="1" class="banner3" width="1065">
	<tr><td align="right"> Rapor Tarihi Seç :</td><td>
     <form action="rapor.php" method="post">
	<select name="tarih" class="arkatarih">
        <?php
	if(@$_GET['durum'] == 1)
	{
		@$secilentarih = $_GET['tarih'];
		@$vartarih = $_GET['tarih'];
	}
	else
	{
		@$secilentarih = $_POST['tarih'];
		@$vartarih = $_POST['tarih'];
	}
	?>
    <option selected="selected"><?php echo @$vartarih; ?></option>
    <?php
	@$tarihh=$vartarih;
	$sorgutarih = mysql_query("SELECT DISTINCT tarih2 FROM sutlutatli WHERE tarih2 != '$tarihh' ORDER BY tarih2 DESC");
	while($dongutarih = mysql_fetch_array($sorgutarih))
	{		
	?>
	<option ><?php echo $dongutarih['tarih2'] ?></option>
    <?php
	}
	?>
	</select>
    <input type="submit" value="SEÇ"  class="arkatarih"/>
    </form>
    </td></tr>
</table>
<?php
@$tarih=date('y/m/d');
$ilktarih =  $secilentarih. " 00:00:00";
$sontarih = $secilentarih. " 23:00:00";
?>
<table border="1" align="center" class="banner">
  <tr >
    <td align="center" width="550"><h2 id="pasta">PASTA</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplampasta"> TOPLAM ADET </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="pastarapor" style="display:<?php if(@$_GET['tablo'] == "pasta") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">0</td>
        <td align="center">1</td>
        <td align="center">2</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
	$pastagetir = mysql_query("SELECT * FROM pasta2 WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
	$sayi = 0;
	while($pastadongu = mysql_fetch_array($pastagetir))
	{
	$sayi ++;
	?>
      <tr>
			<td> <?php echo $sayi; ?>  </td>
            <td><a href="###" rel="pastaresim/<?php echo $pastadongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $pastadongu['urun_adi']; ?> </a></td>
            <td align="center"> <?php echo $pastadongu['sifir']; ?></td>
            <td align="center"> <?php echo $pastadongu['bir']; ?></td>
            <td align="center"> <?php echo $pastadongu['iki']; ?></td>
            <td align="center"> <?php echo $pastadongu['tarih']; ?></td>
            <td align="center"><a href="sil.php?id=<?php echo $pastadongu['id']; ?>&tablo=pasta&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $pastadongu['urun_adi']; ?>&sifir=<?php echo $pastadongu['sifir']; ?>&bir=<?php echo $pastadongu['bir']; ?>&iki=<?php echo $pastadongu['iki']; ?>"> Sil </a></td>	
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplampastarapor" style="display:<?php if(@$_GET['tablo'] == "pasta") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">0</td>
        <td align="center">1</td>
        <td align="center">2</td>
      </tr>
    <?php
	$sorgupasta = mysql_query("SELECT DISTINCT urun_adi, SUM(sifir), SUM(bir), SUM(iki) FROM pasta2 WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
	while($dongupasta = mysql_fetch_array($sorgupasta))
	{
	?>
      <tr>
		<td><a href="###" rel="pastaresim/<?php echo $dongupasta['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongupasta['urun_adi']; ?> </a></td>
        <td align="center"> <?php echo $dongupasta['SUM(sifir)']; ?> </td>
        <td align="center"> <?php echo $dongupasta['SUM(bir)']; ?> </td>
        <td align="center"> <?php echo $dongupasta['SUM(iki)']; ?> </td>
      </tr>
    <?php
	}
	?>
    <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(sifir), SUM(bir), SUM(iki) FROM pasta2 WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(sifir)'] + $dongu['SUM(bir)'] + $dongu['SUM(iki)'];
			}
			?>
            Günlük Toplam :
         </td>
         <td align="center" colspan="3">
         	<?php echo $toplam; ?>
         </td>
    </tr>
    </table>
    </div>
    </td>
  </tr>
</table>
<?php //-------------------------------------------------------------------------------FİGÜR------------------------------------------------------------------------------------?>

<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="figur">FİGÜR PASTA</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamfigur"> TOPLAM ADET </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="figurrapor" style="display:<?php if(@$_GET['tablo'] == "figur") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Adet</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
	$sayi = 0;
	$tekpastagetir = mysql_query("SELECT * FROM figur WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
	while($tekpastadongu = mysql_fetch_array($tekpastagetir))
{
	$sayi ++;
?>
      <tr>
			<td> <?php echo $sayi; ?>  </td><td width="250"><a href="###" rel="figurresim/<?php echo $tekpastadongu['urun_adi']; ?>.jpg" class="resimver">  <?php echo $tekpastadongu['urun_adi']; ?> </td><td align="center"> <?php echo $tekpastadongu['adet']; ?></td><td align="center"> <?php echo $tekpastadongu['tarih']; ?><td align="center" width=""><a href="sil.php?id=<?php echo $tekpastadongu['id']; ?>&tablo=figur&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $tekpastadongu['urun_adi']; ?>&adet=<?php echo $tekpastadongu['adet']; ?>"> Sil </a></td>
    </td>	
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamfigurrapor" style="display:<?php if(@$_GET['tablo'] == "figur") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td >Ürün Adı</td>
        <td align="center">Toplam Adet</td>
      </tr>
    <?php
	$sorgutekpasta = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM figur WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongutekpasta = mysql_fetch_array($sorgutekpasta))
{
?>
      <tr>
<td width="350"><a href="###" rel="figurresim/<?php echo $dongutekpasta['urun_adi']; ?>.jpg" class="resimver">  <?php echo $dongutekpasta['urun_adi']; ?> </td><td align="center"> <?php echo $dongutekpasta['SUM(adet)']; ?> </td>	
      </tr>
    <?php
	}
	?>
        <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM figur WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam :
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>






<?php //--------------------------------------------------------------------------------TEK PASTA -----------------------------------------------------------------------------------?>
<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="tekpasta">TEK PASTA</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamtekpasta"> TOPLAM ADET </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="tekpastarapor" style="display:<?php if(@$_GET['tablo'] == "tekpasta") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Adet</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
	$sayi = 0;
	$tekpastagetir = mysql_query("SELECT * FROM tekpasta2 WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
	while($tekpastadongu = mysql_fetch_array($tekpastagetir))
{
	$sayi ++;
?>
      <tr>
			<td> <?php echo $sayi; ?>  </td><td><a href="###" rel="tekpastaresim/<?php echo $tekpastadongu['urun_adi']; ?>.jpg" class="resimver">  <?php echo $tekpastadongu['urun_adi']; ?> </td><td align="center"> <?php echo $tekpastadongu['adet']; ?></td><td align="center"> <?php echo $tekpastadongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $tekpastadongu['id']; ?>&tablo=tekpasta&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $tekpastadongu['urun_adi']; ?>&adet=<?php echo $tekpastadongu['adet']; ?>"> Sil </a></td>	
    </td>	
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamtekpastarapor" style="display:<?php if(@$_GET['tablo'] == "tekpasta") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td >Ürün Adı</td>
        <td align="center">Toplam Adet</td>
      </tr>
    <?php
	$sorgutekpasta = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM tekpasta2 WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongutekpasta = mysql_fetch_array($sorgutekpasta))
{
?>
      <tr>
<td><a href="###" rel="tekpastaresim/<?php echo $dongutekpasta['urun_adi']; ?>.jpg" class="resimver">  <?php echo $dongutekpasta['urun_adi']; ?> </td><td align="center"> <?php echo $dongutekpasta['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
        <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM tekpasta2 WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam :
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>
<?php
//--------------------------------------------------------------------------------Sütlü Tatlı -------------------------------------------------------------------------------------------------------
?>

<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="sutlutatli">SÜTLÜ TATLI</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamsutlutatli"> TOPLAM ADET </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="sutlurapor" style="display:<?php if(@$_GET['tablo'] == "sutlutatli") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td >Ürün Adı</td>
        <td align="center">Adet</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
	$sutlugetir = mysql_query("SELECT * FROM sutlutatli WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($sutludongu = mysql_fetch_array($sutlugetir))
{
	$sayi ++;
?>
      <tr>
			<td> <?php echo $sayi; ?>  </td><td><a href="###" rel="sutlutatliresim/<?php echo $sutludongu['urun_adi']; ?>.jpg" class="resimver">   <?php echo $sutludongu['urun_adi']; ?> </td><td align="center"> <?php echo $sutludongu['adet']; ?></td><td align="center"> <?php echo $sutludongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $sutludongu['id']; ?>&tablo=sutlutatli&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $sutludongu['urun_adi']; ?>&adet=<?php echo $sutludongu['adet']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamsutlurapor" style="display:<?php if(@$_GET['tablo'] == "sutlutatli") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Toplam Adet</td>
      </tr>
    <?php
	$sorgusutlu = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM sutlutatli WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongusutlu = mysql_fetch_array($sorgusutlu))
{
?>
      <tr>
<td><a href="###" rel="sutlutatliresim/<?php echo $dongusutlu['urun_adi']; ?>.jpg" class="resimver">   <?php echo $dongusutlu['urun_adi']; ?> </td><td align="center"> <?php echo $dongusutlu['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
        <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM sutlutatli WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam :
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>





<?php
//-------------------------------------------------------------------------------- GRAMAJ TEK -------------------------------------------------------------------------------------------------------
?>

<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="gramaj">GRAMAJLI ÜRÜN TEK PASTA</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamgramaj"> TOPLAM GRAMAJ </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="gramajrapor" style="display:<?php if(@$_GET['tablo'] == "gramajtek") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Gram</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$gramajtekgetir = mysql_query("SELECT * FROM gramajtek WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($gramajtekdongu = mysql_fetch_array($gramajtekgetir))
{
	$sayi ++;
?>
      <tr>
			<td> <?php echo $sayi; ?>  </td><td><a href="###" rel="gramajtekresim/<?php echo $gramajtekdongu['urun_adi']; ?>.jpg" class="resimver">    <?php echo $gramajtekdongu['urun_adi']; ?> </td><td align="center"> <?php echo $gramajtekdongu['adet']; ?></td><td align="center"> <?php echo $gramajtekdongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $gramajtekdongu['id']; ?>&tablo=gramajtek&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $gramajtekdongu['urun_adi']; ?>&adet=<?php echo $gramajtekdongu['adet']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamgramajrapor" style="display:<?php if(@$_GET['tablo'] == "gramajtek") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Toplam Gramaj</td>
      </tr>
    <?php
	$sorgugramajtek = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM gramajtek WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongugramajtek = mysql_fetch_array($sorgugramajtek))
{
?>
      <tr>
<td><a href="###" rel="gramajtekresim/<?php echo $dongugramajtek['urun_adi']; ?>.jpg" class="resimver">    <?php echo $dongugramajtek['urun_adi']; ?> </td><td align="center"> <?php echo $dongugramajtek['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
        <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM gramajtek WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam :
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>





<?php
//-------------------------------------------------------------------------------- SPECİAL -------------------------------------------------------------------------------------------------------
?>

<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="special">SPECIAL KURABİYE</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamspecial"> TOPLAM GRAMAJ </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="specialrapor" style="display:<?php if(@$_GET['tablo'] == "special") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Gram</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$specialgetir = mysql_query("SELECT * FROM special WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($specialdongu = mysql_fetch_array($specialgetir))
{
	$sayi ++;
?>
      <tr>
			<td> <?php echo $sayi; ?>  </td><td> <?php echo $specialdongu['urun_adi']; ?> </td><td align="center"> <?php echo $specialdongu['adet']; ?></td><td align="center"> <?php echo $specialdongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $specialdongu['id']; ?>&tablo=special&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $specialdongu['urun_adi']; ?>&adet=<?php echo $specialdongu['adet']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamspecialrapor" style="display:<?php if(@$_GET['tablo'] == "special") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Toplam Gramaj</td>
      </tr>
    <?php
	$sorguspecial = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM special WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($donguspecial = mysql_fetch_array($sorguspecial))
{
?>
      <tr>
<td> <?php echo $donguspecial['urun_adi']; ?> </td><td align="center"> <?php echo $donguspecial['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
        <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM special WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam :
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>






<?php
//-------------------------------------------------------------------------------- MAYA -------------------------------------------------------------------------------------------------------
?>


<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="maya">MAYALI ÜRÜN</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplammaya"> TOP. ADET / GRAMAJ </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="mayarapor" style="display:<?php if(@$_GET['tablo'] == "maya") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Adet</td>
        <td align="center">Gramaj</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$mayagetir = mysql_query("SELECT * FROM maya WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($mayadongu = mysql_fetch_array($mayagetir))
{
	$sayi ++;
	?>
      <tr>
<td> <?php echo $sayi; ?>  </td><td> <?php echo $mayadongu['urun_adi']; ?> </td><td align="center"> <?php echo $mayadongu['adet']; ?></td> <td align="center"> <?php echo $mayadongu['gram']; ?></td><td align="center"> <?php echo $mayadongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $mayadongu['id']; ?>&tablo=maya&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $mayadongu['urun_adi']; ?>&adet=<?php echo $mayadongu['adet']; ?>&gram=<?php echo $mayadongu['gram']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplammayarapor" style="display:<?php if(@$_GET['tablo'] == "maya") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Top. Adet</td>
        <td align="center">Top. Gramaj</td>
      </tr>
    <?php
$sorgumaya = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM maya WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongumaya = mysql_fetch_array($sorgumaya))
{
	?>
      <tr>
<td> <?php echo $dongumaya['urun_adi']; ?> </td><td align="center"> <?php echo $dongumaya['SUM(adet)']; ?> </td><td align="center"> <?php echo $dongumaya['SUM(gram)']; ?> </td>
      </tr>
    <?php
	}
	?>
        <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet), SUM(gram) FROM maya WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
				$toplam2 = $dongu['SUM(gram)'];
			}
			?>
            Günlük Toplam:
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         <td align="center">
         	<?php echo $toplam2; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>


<?php
//-------------------------------------------------------------------------------- MEKİK SUFLE PİZZA -------------------------------------------------------------------------------------------------------
?>


<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="msp">MEKİK & SUFLE & PİZZA</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplammsp"> TOPLAM GRAMAJ </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="msprapor" style="display:<?php if(@$_GET['tablo'] == "msp") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Gramaj</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$mspgetir = mysql_query("SELECT * FROM msp WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($mspdongu = mysql_fetch_array($mspgetir))
{
	$sayi ++;
	?>
      <tr>
<td> <?php echo $sayi; ?>  </td><td> <?php echo $mspdongu['urun_adi']; ?> </td><td align="center"> <?php echo $mspdongu['adet']; ?></td><td align="center"> <?php echo $mspdongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $mspdongu['id']; ?>&tablo=msp&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $mspdongu['urun_adi']; ?>&adet=<?php echo $mspdongu['adet']; ?>"> Sil </a></td>	
    </td>
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplampmsprapor" style="display:<?php if(@$_GET['tablo'] == "msp") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Toplam Gramaj</td>
      </tr>
    <?php
$sorgumsp = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM msp WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongumsp = mysql_fetch_array($sorgumsp))
{
	?>
      <tr>
<td> <?php echo $dongumsp['urun_adi']; ?> </td><td align="center"> <?php echo $dongumsp['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
     <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM msp WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam:
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>


<?php
//-------------------------------------------------------------------------------- TATLI KURABİYE -------------------------------------------------------------------------------------------------------
?>




<table border="1" align="center" class="banner" >
  <tr> 
    <td align="center" width="550"><h2 id="tatli">TATLI KURABİYE</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamtatli"> TOPLAM GRAMAJ </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="tatlirapor" style="display:<?php if(@$_GET['tablo'] == "tatli") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td align="center">Ürün Adı</td>
        <td align="center">Gramaj</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$tatlikurabiyegetir = mysql_query("SELECT * FROM tatlikurabiye WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($tatlikurabiyedongu = mysql_fetch_array($tatlikurabiyegetir))
{
	$sayi ++;
	?>
      <tr>
<td> <?php echo $sayi; ?>  </td><td> <?php echo $tatlikurabiyedongu['urun_adi']; ?> </td><td align="center"> <?php echo $tatlikurabiyedongu['adet']; ?></td><td align="center"> <?php echo $tatlikurabiyedongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $tatlikurabiyedongu['id']; ?>&tablo=tatli&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $tatlikurabiyedongu['urun_adi']; ?>&adet=<?php echo $tatlikurabiyedongu['adet']; ?>"> Sil </a></td>	
    </td>
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamtatlirapor" style="display:<?php if(@$_GET['tablo'] == "tatli") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Toplam Gramaj</td>
      </tr>
    <?php
$sorgutatlikurabiye = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM tatlikurabiye WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongutatlikurabiye = mysql_fetch_array($sorgutatlikurabiye))
{
	?>
      <tr>
<td> <?php echo $dongutatlikurabiye['urun_adi']; ?> </td><td align="center"> <?php echo $dongutatlikurabiye['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
     <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM tatlikurabiye WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam:
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>



<?php
//-------------------------------------------------------------------------------- TUZLU KURABİYE -------------------------------------------------------------------------------------------------------
?>

<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="tuzlu">TUZLU</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamtuzlu"> TOPLAM GRAMAJ </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="tuzlurapor" style="display:<?php if(@$_GET['tablo'] == "tuzlu") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Gramaj</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$tuzlukurabiyegetir = mysql_query("SELECT * FROM tuzlukurabiye WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($tuzlukurabiyedongu = mysql_fetch_array($tuzlukurabiyegetir))
{
	$sayi ++;
	?>
      <tr>
<td> <?php echo $sayi; ?>  </td><td> <?php echo $tuzlukurabiyedongu['urun_adi']; ?> </td><td align="center"> <?php echo $tuzlukurabiyedongu['adet']; ?></td><td align="center"> <?php echo $tuzlukurabiyedongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $tuzlukurabiyedongu['id']; ?>&tablo=tuzlu&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $tuzlukurabiyedongu['urun_adi']; ?>&adet=<?php echo $tuzlukurabiyedongu['adet']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamtuzlurapor" style="display:<?php if(@$_GET['tablo'] == "tuzlu") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td >Ürün Adı</td>
        <td align="center">Toplam Gramaj</td>
      </tr>
    <?php
$sorgutuzlukurabiye = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM tuzlukurabiye WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongutuzlukurabiye = mysql_fetch_array($sorgutuzlukurabiye))
{
	?>
      <tr>
<td> <?php echo $dongutuzlukurabiye['urun_adi']; ?> </td><td align="center"> <?php echo $dongutuzlukurabiye['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
     <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM tuzlukurabiye WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam:
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>



<?php
//-------------------------------------------------------------------------------- KEK -------------------------------------------------------------------------------------------------------
?>


<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="kek">KEK</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamkek"> TOPLAM ADET</h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="kekrapor" style="display:<?php if(@$_GET['tablo'] == "kek") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Adet</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$kekgetir = mysql_query("SELECT * FROM kek WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($kekdongu = mysql_fetch_array($kekgetir))
{
	$sayi ++;
	?>
      <tr>
<td> <?php echo $sayi; ?>  </td><td><a href="###" rel="kekresim/<?php echo $kekdongu['urun_adi']; ?>.jpg" class="resimver">     <?php echo $kekdongu['urun_adi']; ?> </td><td align="center"> <?php echo $kekdongu['adet']; ?></td><td align="center"> <?php echo $kekdongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $kekdongu['id']; ?>&tablo=kek&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $kekdongu['urun_adi']; ?>&adet=<?php echo $kekdongu['adet']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamkekrapor" style="display:<?php if(@$_GET['tablo'] == "kek") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Toplam Adet</td>
      </tr>
    <?php
$sorgukek = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM kek WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongukek = mysql_fetch_array($sorgukek))
{
	?>
      <tr>
<td><a href="###" rel="kekresim/<?php echo $dongukek['urun_adi']; ?>.jpg" class="resimver">     <?php echo $dongukek['urun_adi']; ?> </td><td align="center"> <?php echo $dongukek['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
     <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM kek WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam:
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>


<?php
//-------------------------------------------------------------------------------- TART -------------------------------------------------------------------------------------------------------
?>



<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="tart">TART</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamtart"> TOPLAM ADET </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="tartrapor" style="display:<?php if(@$_GET['tablo'] == "tart") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Adet</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$tartgetir = mysql_query("SELECT * FROM tart WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($tartdongu = mysql_fetch_array($tartgetir))
{
	$sayi ++;
	?>
      <tr>
<td> <?php echo $sayi; ?>  </td><td><a href="###" rel="tartresim/<?php echo $tartdongu['urun_adi']; ?>.jpg" class="resimver">  <?php echo $tartdongu['urun_adi']; ?> </td><td align="center"> <?php echo $tartdongu['adet']; ?></td><td align="center"> <?php echo $tartdongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $tartdongu['id']; ?>&tablo=tart&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $tartdongu['urun_adi']; ?>&adet=<?php echo $tartdongu['adet']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamtartrapor" style="display:<?php if(@$_GET['tablo'] == "tart") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td >Ürün Adı</td>
        <td align="center">Toplam Adet</td>
      </tr>
    <?php
$sorgutart = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM tart WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongutart = mysql_fetch_array($sorgutart))
{
	?>
      <tr>
<td> <a href="###" rel="tartresim/<?php echo $dongutart['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongutart['urun_adi']; ?> </td><td align="center"> <?php echo $dongutart['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
     <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM tart WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam:
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>





<?php
//-------------------------------------------------------------------------------- ADET ÜRÜN -------------------------------------------------------------------------------------------------------
?>

<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="adet">ADET HAMUR</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamadet"> TOPLAM ADET </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="adetrapor" style="display:<?php if(@$_GET['tablo'] == "adet") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Adet</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$adetgetir = mysql_query("SELECT * FROM adet WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($adetdongu = mysql_fetch_array($adetgetir))
{
	$sayi ++;
	?>
      <tr>
<td> <?php echo $sayi; ?>  </td><td> <?php echo $adetdongu['urun_adi']; ?> </td><td align="center"> <?php echo $adetdongu['adet']; ?></td><td align="center"> <?php echo $adetdongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $adetdongu['id']; ?>&tablo=adet&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $adetdongu['urun_adi']; ?>&adet=<?php echo $adetdongu['adet']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamadetrapor" style="display:<?php if(@$_GET['tablo'] == "adet") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td >Ürün Adı</td>
        <td align="center">Top. Adet</td>
      </tr>
    <?php
$sorguadet = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM adet WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($donguadet = mysql_fetch_array($sorguadet))
{
	?>
      <tr>
<td> <?php echo $donguadet['urun_adi']; ?> </td><td align="center"> <?php echo $donguadet['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
     <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM adet WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam:
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>



<?php
//-------------------------------------------------------------------------------- PAKET ÜRÜN -------------------------------------------------------------------------------------------------------
?>

<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="paket">PAKET ÜRÜN</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplampaket"> TOP. ADET / GRAMAJ </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="paketrapor" style="display:<?php if(@$_GET['tablo'] == "paket") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Adet</td>
        <td align="center">Gramaj</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
$paketgetir = mysql_query("SELECT * FROM paket WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($paketdongu = mysql_fetch_array($paketgetir))
{
	$sayi ++;
	?>
      <tr>
<td> <?php echo $sayi; ?>  </td><td><a href="###" rel="paketresim/<?php echo $paketdongu['urun_adi']; ?>.jpg" class="resimver">  <?php echo $paketdongu['urun_adi']; ?> </td><td align="center"> <?php echo $paketdongu['adet']; ?></td> <td align="center"> <?php echo $paketdongu['gram']; ?></td><td align="center"> <?php echo $paketdongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $pastadongu['id']; ?>&tablo=paket&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $paketdongu['urun_adi']; ?>&adet=<?php echo $paketdongu['adet']; ?>&gram=<?php echo $paketdongu['gram']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplampaketrapor" style="display:<?php if(@$_GET['tablo'] == "paket") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Top. Adet</td>
        <td align="center">Top. Gramaj</td>
      </tr>
    <?php
$sorgupaket = mysql_query("SELECT DISTINCT urun_adi, SUM(adet), SUM(gram) FROM paket WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($dongupaket = mysql_fetch_array($sorgupaket))
{
	?>
      <tr>
<td><a href="###" rel="paketresim/<?php echo $dongupaket['urun_adi']; ?>.jpg" class="resimver">  <?php echo $dongupaket['urun_adi']; ?> </td><td align="center"> <?php echo $dongupaket['SUM(adet)']; ?> </td><td align="center"> <?php echo $dongupaket['SUM(gram)']; ?> </td>
      </tr>
    <?php
	}
	?>
     <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet), SUM(gram) FROM paket WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
				$toplam2 = $dongu['SUM(gram)'];
			}
			?>
            Günlük Toplam:
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         <td align="center">
         	<?php echo $toplam2; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>





<?php
//-------------------------------------------------------------------------------- YARİ -------------------------------------------------------------------------------------------------------
?>



<table border="1" align="center" class="banner" >
  <tr>
    <td align="center" width="550"><h2 id="yari">YARI MAMÜL</h2></td>
    <td>&nbsp;</td>
    <td align="center" width="497"><h2 id="toplamyari"> TOPLAM GRAMAJ </h2></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="yarirapor" style="display:<?php if(@$_GET['tablo'] == "yari") { echo "block"; } else { echo "none"; } ?>">
    <table  border="1" cellpadding="5" class="rapor" width="550">
       <tr>
        <td>&nbsp;</td>
        <td>Ürün Adı</td>
        <td align="center">Gram</td>
        <td align="center">Tarih</td>
        <td align="center"> SİL </td>
      </tr>
    <?php
	$yarigetir = mysql_query("SELECT * FROM yari WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' ORDER BY tarih DESC");
$sayi = 0;
while($yaridongu = mysql_fetch_array($yarigetir))
{
	$sayi ++;
?>
      <tr>
			<td> <?php echo $sayi; ?>  </td><td> <?php echo $yaridongu['urun_adi']; ?> </td><td align="center"> <?php echo $yaridongu['adet']; ?></td><td align="center"> <?php echo $yaridongu['tarih']; ?><td align="center"><a href="sil.php?id=<?php echo $yaridongu['id']; ?>&tablo=yari&tarih=<?php echo $secilentarih; ?>&urunadi=<?php echo $yaridongu['urun_adi']; ?>&adet=<?php echo $yaridongu['adet']; ?>"> Sil </a></td>	
    </td>
      </tr>
    <?php
	}
	?>
    </table>
    </div>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <div class="toplamyarirapor" style="display:<?php if(@$_GET['tablo'] == "yari") { echo "block"; } else { echo "none"; } ?>">
    <table border="1" cellpadding="5" class="rapor" width="497">
      <tr>
        <td>Ürün Adı</td>
        <td align="center">Toplam Gramaj</td>
      </tr>
    <?php
	$sorguyari = mysql_query("SELECT DISTINCT urun_adi, SUM(adet) FROM yari WHERE tarih BETWEEN '$ilktarih' AND '$sontarih' GROUP BY urun_adi");
while($donguyari = mysql_fetch_array($sorguyari))
{
?>
      <tr>
<td> <?php echo $donguyari['urun_adi']; ?> </td><td align="center"> <?php echo $donguyari['SUM(adet)']; ?> </td>
      </tr>
    <?php
	}
	?>
    <tr>
    	<td>
        	<?php $sorgutoplam = mysql_query("SELECT SUM(adet) FROM yari WHERE tarih BETWEEN '$ilktarih' AND '$sontarih'");
			while($dongu = mysql_fetch_array($sorgutoplam))
			{
				$toplam = $dongu['SUM(adet)'];
			}
			?>
            Günlük Toplam :
         </td>
         <td align="center">
         	<?php echo $toplam; ?>
         </td>
         </tr>
    </table>
    </div>
    </td>
  </tr>
</table>
<div id="resimac"></div>
<table align="center" border="1" class="banner3" width="1065">
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
<div style="height:200px">
</body>
</html>