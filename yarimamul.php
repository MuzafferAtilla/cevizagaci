<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">
<title>KREMA & DONDURMA</title>
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
@$tarih2=date('y/m/d H:i');
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI ÜRETİM </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>

<body>
<form action="yarimamul.php" method="post">
<table border="1" align="center" width="500" cellpadding="5" class="rapor">
  <tr>
    <td colspan="5" align="center" class="banner"><h3>KREMA & DONRUDMRA ÜRETİM FORMU</h3></td>
  </tr>
    <?php 
	if(@$_POST['uret'])
	{
	?>
  	<tr>
    <td colspan="3" class="basari" align="center">BAŞARIYLA ÜRETİLDİ</td>
    </tr>
	<?php
	}
	else if(@$_POST['ekle'])
	{
	?>
  	<tr>
    <td colspan="3" class="basari" align="center">BAŞARIYLA EKLENDİ</td>
    </tr>
	<?php
	}	
	?>
  <tr>
    <td width="10">&nbsp;</td>
    <td>Ürün Adı</td>
    <td width="110" align="center">Gram</td>
    </tr>
<?php
$sayi = 1;
$sorgu = mysql_query("SELECT DISTINCT urun_adi FROM aylikyari ORDER BY aylikyari.urun_adi ASC");
while($dongu = mysql_fetch_array($sorgu))
{
	$urun_adi = $dongu['urun_adi'];
	$dizi = explode(" ",$urun_adi);
	@$son = $dizi[0]."_".$dizi[1]."_".$dizi[2]."_".$dizi[3]."_".$dizi[4];
	
?>
  <tr>
	<td> <?php echo $sayi."."; 	$sayi++; ?> </td>
    <td> <a href="###" rel="yariresim/<?php echo $dongu['urun_adi']; ?>.jpg" class="resimver"> <?php echo $dongu['urun_adi']; ?> </a></td>
    <td align="center"> <input type="text" name="<?php echo $son; ?>" style="width:50px"/></td>
    </tr>
<?php
	if(!empty($_POST[$son]))
	{
		@$uret = mysql_query("INSERT INTO yari (urun_adi, adet, tarih, tarih2) values('$dongu[urun_adi]', '$_POST[$son]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('$dongu[urun_adi]', '$_POST[$son]', '$tarih2')");
	}
}
?>
<?php
	if(!empty($_POST['urunekle']))
	{
		$sorgu = mysql_query("SELECT DISTINCT tarih2 FROM aylikyari");
		while($dongu = mysql_fetch_array($sorgu))
		{
			@$ekle = mysql_query("INSERT INTO aylikyari (urun_adi, adet, tarih2) values('$_POST[urunekle]', '00', '$dongu[tarih2]')");
		}
	}
?>
<tr><td>&nbsp;</td><td> <input type="text" name="urunekle" style="width:330px"/ ></td><td colspan="3" align="center"><input type="submit" name="ekle" value="EKLE" style="width:80px" class="arkatarih"/> </tr>
<tr><td colspan="5" align="center"><input type="submit" name="uret" value="ÜRET" style="width:300px" class="arkatarih"/></td></tr>
</table>
</form>
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