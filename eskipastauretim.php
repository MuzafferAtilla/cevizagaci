<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">
<title>PASTA</title>
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
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI ÜRETİM </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>

<body>
<form action="pasta.php" method="post">
<table border="1" align="center" width="500" cellpadding="5" class="rapor">
  <tr>
    <td colspan="5" align="center" class="banner"><h3>PASTA ÜRETİM FORMU</h3></td>
  </tr>
  <tr>
    <td width="10">&nbsp;</td>
    <td>Ürün Adı</td>
    <td width="10" align="center">0</td>
    <td width="10" align="center">1</td>
    <td width="10" align="center">2</td>
    </tr>
  <tr>
    <td>1.</td>
    <td><a href="###" rel="pastaresim/Hasbahçe.jpg" class="resimver">Hasbahçe</a></td>
    <td><input type="text" name="has0" style="width:15px"/></td>
    <td><input type="text" name="has1" style="width:15px"/></td>
    <td><input type="text" name="has2" style="width:15px"/></td>
    </tr>
    <?php
	if(!empty($_POST['has0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Hasbahçe', '$_POST[has0]', '$_POST[has1]', '$_POST[has2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Hasbahçe', '$_POST[has0]', '$_POST[has1]', '$_POST[has2]', '$tarih2')");
	}
	?>
  <tr>
    <td>2.</td>
    <td><a href="###" rel="pastaresim/Çilekli.jpg" class="resimver">Çilekli</a></td>
    <td><input type="text" name="c0" style="width:15px"/></td>
    <td><input type="text" name="c1" style="width:15px"/></td>
    <td><input type="text" name="c2" style="width:15px"/></td>
  </tr>
   <?php
	if(!empty($_POST['c0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çilekli', '$_POST[c0]', '$_POST[c1]', '$_POST[c2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çilekli', '$_POST[c0]', '$_POST[c1]', '$_POST[c2]', '$tarih2')");
	}
	?>
  <tr>
    <td>3.</td>
    <td><a href="###" rel="pastaresim/Muzlu Çilekli.jpg" class="resimver">Muzlu Çilekli</td>
    <td><input type="text" name="mc0" style="width:15px"/></td>
    <td><input type="text" name="mc1" style="width:15px"/></td>
    <td><input type="text" name="mc2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['mc0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Muzlu Çilekli', '$_POST[mc0]', '$_POST[mc1]', '$_POST[mc2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Muzlu Çilekli', '$_POST[mc0]', '$_POST[mc1]', '$_POST[mc2]', '$tarih2')");
	}
	?>
  <tr>
    <td>4.</td>
    <td>Beyaz İnci</td>
    <td><input type="text" name="i0" style="width:15px"/></td>
    <td><input type="text" name="i1" style="width:15px"/></td>
    <td><input type="text" name="i2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['i0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Beyaz İnci', '$_POST[i0]', '$_POST[i1]', '$_POST[i2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Beyaz İnci', '$_POST[i0]', '$_POST[i1]', '$_POST[i2], '$tarih2')");
	}
	?>
  <tr>
    <td>5.</td>
    <td>Karayip</td>
    <td><input type="text" name="k0" style="width:15px"/></td>
    <td><input type="text" name="k1" style="width:15px"/></td>
    <td><input type="text" name="k2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['k0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Karayip', '$_POST[k0]', '$_POST[k1]', '$_POST[k2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Karayip', '$_POST[k0]', '$_POST[k1]', '$_POST[k2]', '$tarih2')");
	}
	?>
  <tr>
    <td>6.</td>
    <td><a href="###" rel="pastaresim/Üç Kırmızı Meyveli.jpg" class="resimver">Üç Kırmızı Meyveli</a></td>
    <td><input type="text" name="u0" style="width:15px"/></td>
    <td><input type="text" name="u1" style="width:15px"/></td>
    <td><input type="text" name="u2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['u0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Üç Kırmızı Meyveli', '$_POST[u0]', '$_POST[u1]', '$_POST[u2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Üç Kırmızı Meyveli', '$_POST[u0]', '$_POST[u1]', '$_POST[u2]', '$tarih2')");
	}
	?>
  <tr>
    <td>7.</td>
    <td><a href="###" rel="pastaresim/Prenses.jpg" class="resimver">Prenses</a></td>
    <td><input type="text" name="p0" style="width:15px"/></td>
    <td><input type="text" name="p1" style="width:15px"/></td>
    <td><input type="text" name="p2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['p0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Prenses', '$_POST[p0]', '$_POST[p1]', '$_POST[p2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Prenses', '$_POST[p0]', '$_POST[p1]', '$_POST[p2]', '$tarih2')");
	}
	?>
  <tr>
    <td>8.</td>
    <td>Fıstıklı</td>
    <td><input type="text" name="f0" style="width:15px"/></td>
    <td><input type="text" name="f1" style="width:15px"/></td>
    <td><input type="text" name="f2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['f0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Fıstıklı', '$_POST[f0]', '$_POST[f1]', '$_POST[f2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Fıstıklı', '$_POST[f0]', '$_POST[f1]', '$_POST[f2]', '$tarih2')");
	}
	?>
  <tr>
    <td>9.</td>
    <td>Profiterollü</td>
    <td><input type="text" name="pro0" style="width:15px"/></td>
    <td><input type="text" name="pro1" style="width:15px"/></td>
    <td><input type="text" name="pro2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['pro0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Profiterollü', '$_POST[pro0]', '$_POST[pro1]', '$_POST[pro2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Profiterollü', '$_POST[pro0]', '$_POST[pro1]', '$_POST[pro2]', '$tarih2')");
	}
	?>
  <tr>
    <td>10.</td>
    <td>Şampiyon</td>
    <td><input type="text" name="s0" style="width:15px"/></td>
    <td><input type="text" name="s1" style="width:15px"/></td>
    <td><input type="text" name="s2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['s0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Şampiyon', '$_POST[s0]', '$_POST[s1]', '$_POST[s2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Şampiyon', '$_POST[s0]', '$_POST[s1]', '$_POST[s2]', '$tarih2')");
	}
	?>
  <tr>
    <td>11.</td>
    <td>Boğaziçi</td>
    <td><input type="text" name="b0" style="width:15px"/></td>
    <td><input type="text" name="b1" style="width:15px"/></td>
    <td><input type="text" name="b2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['b0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Boğaziçi', '$_POST[b0]', '$_POST[b1]', '$_POST[b2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Boğaziçi', '$_POST[b0]', '$_POST[b1]', '$_POST[b2]', '$tarih2')");
	}
	?>
  <tr>
    <td>12.</td>
    <td><a href="###" rel="pastaresim/Kestaneli.jpg" class="resimver">Kestaneli</a></td>
    <td><input type="text" name="k0" style="width:15px"/></td>
    <td><input type="text" name="k1" style="width:15px"/></td>
    <td><input type="text" name="k2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['k0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Kestaneli', '$_POST[k0]', '$_POST[k1]', '$_POST[k2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Kestaneli', '$_POST[k0]', '$_POST[k1]', '$_POST[k2]', '$tarih2')");
	}
	?>
  <tr>
    <td>13.</td>
    <td><a href="###" rel="pastaresim/Krokanlı.jpg" class="resimver">Krokanlı</a></td>
    <td><input type="text" name="kro0" style="width:15px"/></td>
    <td><input type="text" name="kro1" style="width:15px"/></td>
    <td><input type="text" name="kro2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['kro0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Krokanlı', '$_POST[kro0]', '$_POST[kro1]', '$_POST[kro2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Krokanlı', '$_POST[kro0]', '$_POST[kro1]', '$_POST[kro2]', '$tarih2')");
	}
	?>
  <tr>
    <td>14.</td>
    <td><a href="###" rel="pastaresim/Çikolatalı Çilekli.jpg" class="resimver">Çikolatalı Çilekli</a></td>
    <td><input type="text" name="ck0" style="width:15px"/></td>
    <td><input type="text" name="ck1" style="width:15px"/></td>
    <td><input type="text" name="ck2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['ck0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çikolatalı Çilekli', '$_POST[ck0]', '$_POST[ck1]', '$_POST[ck2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Çilekli', '$_POST[ck0]', '$_POST[ck1]', '$_POST[ck2]', '$tarih2')");
	}
	?>
  <tr>
    <td>15.</td>
    <td><a href="###" rel="pastaresim/Çikolatalı Böğürtlenli.jpg" class="resimver">Çikolatalı Böğürtlenli</a></td>
    <td><input type="text" name="cb0" style="width:15px"/></td>
    <td><input type="text" name="cb1" style="width:15px"/></td>
    <td><input type="text" name="cb2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['cb0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çikolatalı Böğürtlenli', '$_POST[cb0]', '$_POST[cb1]', '$_POST[cb2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Böğürtlenli', '$_POST[cb0]', '$_POST[cb1]', '$_POST[cb2]', '$tarih2')");
	}
	?>
  <tr>
    <td>16.</td>
    <td><a href="###" rel="pastaresim/Çikolatalı Vişneli.jpg" class="resimver">Çikolatalı Vişneli</a></td>
    <td><input type="text" name="cv0" style="width:15px"/></td>
    <td><input type="text" name="cv1" style="width:15px"/></td>
    <td><input type="text" name="cv2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['cv0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çikolatalı Vişneli', '$_POST[cv0]', '$_POST[cv1]', '$_POST[cv2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Vişneli', '$_POST[cv0]', '$_POST[cv1]', '$_POST[cv2]', '$tarih2')");
	}
	?>
  <tr>
    <td>17.</td>
    <td><a href="###" rel="pastaresim/Çikolatalı Frambuazlı.jpg" class="resimver">Çikolatalı Frambuazlı</a></td>
    <td><input type="text" name="cf0" style="width:15px"/></td>
    <td><input type="text" name="cf1" style="width:15px"/></td>
    <td><input type="text" name="cf2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['cf0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çikolatalı Frambuazlı', '$_POST[cf0]', '$_POST[cf1]', '$_POST[cf2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Frambuazlı', '$_POST[cf0]', '$_POST[cf1]', '$_POST[cf2]', '$tarih2')");
		
	}
	?>
  <tr>
    <td>18.</td>
    <td>Çikolatalı Hasbahçe</td>
    <td><input type="text" name="ch0" style="width:15px"/></td>
    <td><input type="text" name="ch1" style="width:15px"/></td>
    <td><input type="text" name="ch2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['ch0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çikolatalı Hasbahçe', '$_POST[ch0]', '$_POST[ch1]', '$_POST[ch2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çikolatalı Hasbahçe', '$_POST[ch0]', '$_POST[ch1]', '$_POST[ch2]', '$tarih2')");
	}
	?>
  <tr>
    <td>19.</td>
    <td><a href="###" rel="pastaresim/Ganaj.jpg" class="resimver">Ganaj</a></td>
    <td><input type="text" name="g0" style="width:15px"/></td>
    <td><input type="text" name="g1" style="width:15px"/></td>
    <td><input type="text" name="g2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['g0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Ganaj', '$_POST[g0]', '$_POST[g1]', '$_POST[g2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Ganaj', '$_POST[g0]', '$_POST[g1]', '$_POST[g2]', '$tarih2')");
	}
	?>
  <tr>
    <td>20.</td>
    <td><a href="###" rel="pastaresim/Şokola.jpg" class="resimver">Şokola</a></td>
    <td><input type="text" name="so0" style="width:15px"/></td>
    <td><input type="text" name="so1" style="width:15px"/></td>
    <td><input type="text" name="so2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['so0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Şokola', '$_POST[so0]', '$_POST[so1]', '$_POST[so2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Şokola', '$_POST[so0]', '$_POST[so1]', '$_POST[so2]', '$tarih2')");
	}
	?>
  <tr>
    <td>21.</td>
    <td><a href="###" rel="pastaresim/Çilekli Profiterollü.jpg" class="resimver">Çilekli Profiterollü</a></td>
    <td><input type="text" name="cpro0" style="width:15px"/></td>
    <td><input type="text" name="cpro1" style="width:15px"/></td>
    <td><input type="text" name="cpro2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['cpro0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çilekli Profiterollü', '$_POST[cpro0]', '$_POST[cpro1]', '$_POST[cpro2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çilekli Profiterollü', '$_POST[cpro0]', '$_POST[cpro1]', '$_POST[cpro2]', '$tarih2')");
	}
	?>
  <tr>
    <td>22.</td>
    <td>Kırıntı</td>
    <td><input type="text" name="ki0" style="width:15px"/></td>
    <td><input type="text" name="ki1" style="width:15px"/></td>
    <td><input type="text" name="ki2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['ki0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Kırıntı', '$_POST[ki0]', '$_POST[ki1]', '$_POST[ki2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Kırıntı', '$_POST[ki0]', '$_POST[ki1]', '$_POST[ki2]', '$tarih2')");
	}
	?>
  <tr>
    <td>23.</td>
    <td>Kaçkar</td>
    <td><input type="text" name="ka0" style="width:15px"/></td>
    <td><input type="text" name="ka1" style="width:15px"/></td>
    <td><input type="text" name="ka2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['ka0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Kaçkar', '$_POST[ka0]', '$_POST[ka1]', '$_POST[ka2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Kaçkar', '$_POST[ka0]', '$_POST[ka1]', '$_POST[ka2]', '$tarih2')");
	}
	?>
  <tr>
    <td>24.</td>
    <td>Çilekli Moist</td>
    <td><input type="text" name="cm0" style="width:15px"/></td>
    <td><input type="text" name="cm1" style="width:15px"/></td>
    <td><input type="text" name="cm2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['cm0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çilekli Moist', '$_POST[cm0]', '$_POST[cm1]', '$_POST[cm2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çilekli Moist', '$_POST[cm0]', '$_POST[cm1]', '$_POST[cm2]', '$tarih2')");
	}
	?>
  <tr>
    <td>25.</td>
    <td><a href="###" rel="pastaresim/Yabanmersinli Moist.jpg" class="resimver">Yabanmersinli Moist</a></td>
    <td><input type="text" name="ym0" style="width:15px"/></td>
    <td><input type="text" name="ym1" style="width:15px"/></td>
    <td><input type="text" name="ym2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['ym0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Yabanmersinli Moist', '$_POST[ym0]', '$_POST[ym1]', '$_POST[ym2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Yabanmersinli Moist', '$_POST[ym0]', '$_POST[ym1]', '$_POST[ym2]', '$tarih2')");
	}
	?>
  <tr>
    <td>26.</td>
    <td>Meyveli Moist</td>
    <td><input type="text" name="mm0" style="width:15px"/></td>
    <td><input type="text" name="mm1" style="width:15px"/></td>
    <td><input type="text" name="mm2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['mm0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Meyveli Moist', '$_POST[mm0]', '$_POST[mm1]', '$_POST[mm2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Meyveli Moist', '$_POST[mm0]', '$_POST[mm1]', '$_POST[mm2]', '$tarih2')");
	}
	?>
  <tr>
    <td>27.</td>
    <td>Muzlu Krokanlı Moist</td>
    <td><input type="text" name="mkm0" style="width:15px"/></td>
    <td><input type="text" name="mkm1" style="width:15px"/></td>
    <td><input type="text" name="mkm2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['mkm0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Muzlu Krokanlı Moist', '$_POST[mkm0]', '$_POST[mkm1]', '$_POST[mkm2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Muzlu Krokanlı Moist', '$_POST[mkm0]', '$_POST[mkm1]', '$_POST[mkm2]', '$tarih2')");
	}
	?>
  <tr>
    <td>28.</td>
    <td><a href="###" rel="pastaresim/Oreo.jpg" class="resimver">Oreo</a></td>
    <td><input type="text" name="o0" style="width:15px"/></td>
    <td><input type="text" name="o1" style="width:15px"/></td>
    <td><input type="text" name="o2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['o0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Oreo', '$_POST[o0]', '$_POST[o1]', '$_POST[o2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Oreo', '$_POST[o0]', '$_POST[o1]', '$_POST[o2]', '$tarih2')");
	}
	?>
  <tr>
    <td>29.</td>
    <td><a href="###" rel="pastaresim/Newyork.jpg" class="resimver">Newyork</a></td>
    <td><input type="text" name="n0" style="width:15px"/></td>
    <td><input type="text" name="n1" style="width:15px"/></td>
    <td><input type="text" name="n2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['n0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Newyork', '$_POST[n0]', '$_POST[n1]', '$_POST[n2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Newyork', '$_POST[n0]', '$_POST[n1]', '$_POST[n2]', '$tarih2')");
	}
	?>
  <tr>
    <td>30.</td>
    <td>Şıpsevdi</td>
    <td><input type="text" name="sip0" style="width:15px"/></td>
    <td><input type="text" name="sip1" style="width:15px"/></td>
    <td><input type="text" name="sip2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['sip0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Şıpsevdi', '$_POST[sip0]', '$_POST[sip1]', '$_POST[sip2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Şıpsevdi', '$_POST[sip0]', '$_POST[sip1]', '$_POST[sip2]', '$tarih2')");
	}
	?>
  <tr>
    <td>31.</td>
    <td><a href="###" rel="pastaresim/Kabaklı.jpg" class="resimver">Kabaklı</a></td>
    <td><input type="text" name="kab0" style="width:15px"/></td>
    <td><input type="text" name="kab1" style="width:15px"/></td>
    <td><input type="text" name="kab" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['kab0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Kabaklı', '$_POST[kab0]', '$_POST[kab1]', '$_POST[kab2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Kabaklı', '$_POST[kab0]', '$_POST[kab1]', '$_POST[kab2]', '$tarih2')");
	}
	?>
  <tr>
    <td>32.</td>
    <td>Cheesecake Limonlu</td>
    <td><input type="text" name="cl0" style="width:15px"/></td>
    <td><input type="text" name="cl1" style="width:15px"/></td>
    <td><input type="text" name="cl2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['cl0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Cheesecake Limonlu', '$_POST[cl0]', '$_POST[cl1]', '$_POST[cl2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Cheesecake Limonlu', '$_POST[cl0]', '$_POST[cl1]', '$_POST[cl2]', '$tarih2')");
	}
	?>
  <tr>
    <td>33.</td>
    <td>Cheesecake Frambuazlı</td>
    <td><input type="text" name="cfra0" style="width:15px"/></td>
    <td><input type="text" name="fra1" style="width:15px"/></td>
    <td><input type="text" name="cfra2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['cf0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Cheesecake Frambuazlı', '$_POST[cfra0]', '$_POST[cfra1]', '$_POST[cfra2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Cheesecake Frambuazlı', '$_POST[cfra0]', '$_POST[cfra1]', '$_POST[cfra2]', '$tarih2')");
	}
	?>
  <tr>
    <td>34.</td>
    <td><a href="###" rel="pastaresim/Truffle Meyveli.jpg" class="resimver">Truffle Meyveli</a></td>
    <td><input type="text" name="tm0" style="width:15px"/></td>
    <td><input type="text" name="tm1" style="width:15px"/></td>
    <td><input type="text" name="tm2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['tm0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Truffle Meyveli', '$_POST[tm0]', '$_POST[tm1]', '$_POST[tm2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Truffle Meyveli', '$_POST[tm0]', '$_POST[tm1]', '$_POST[tm2]', '$tarih2')");
	}
	?>
  <tr>
    <td>35.</td>
    <td>Magnolia Muzlu</td>
    <td><input type="text" name="magm0" style="width:15px"/></td>
    <td><input type="text" name="magm1" style="width:15px"/></td>
    <td><input type="text" name="magm2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['magm0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Magnolia Muzlu', '$_POST[magm0]', '$_POST[magm1]', '$_POST[magm2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Magnolia Muzlu', '$_POST[magm0]', '$_POST[magm1]', '$_POST[magm2]', '$tarih2')");
	}
	?>
  <tr>
    <td>36.</td>
    <td>Magnolia Çilekli</td>
    <td><input type="text" name="magc0" style="width:15px"/></td>
    <td><input type="text" name="magc1" style="width:15px"/></td>
    <td><input type="text" name="magc2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['magc0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Magnolia Çilekli', '$_POST[magc0]', '$_POST[magc1]', '$_POST[magc2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Magnolia Çilekli', '$_POST[magc0]', '$_POST[magc1]', '$_POST[magc2]', '$tarih2')");
	}
	?>
  <tr>
    <td>37.</td>
    <td><a href="###" rel="pastaresim/Kestaneli.jpg" class="resimver">Kestaneli</a></td>
    <td><input type="text" name="kes0" style="width:15px"/></td>
    <td><input type="text" name="kes1" style="width:15px"/></td>
    <td><input type="text" name="kes2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['kes0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Kestaneli', '$_POST[kes0]', '$_POST[kes1]', '$_POST[kes2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Kestaneli', '$_POST[kes0]', '$_POST[kes1]', '$_POST[kes2]', '$tarih2')");
	}
	?>
  <tr>
    <td>38.</td>
    <td><a href="###" rel="pastaresim/Muzlu Fındıklı Pikolata.jpg" class="resimver">Muzlu Fındıklı Pikolata</a></td>
    <td><input type="text" name="piko0" style="width:15px"/></td>
    <td><input type="text" name="piko1" style="width:15px"/></td>
    <td><input type="text" name="piko2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['piko0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Muzlu Fındıklı Pikolata', '$_POST[piko0]', '$_POST[piko1]', '$_POST[piko2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Muzlu Fındıklı Pikolata', '$_POST[piko0]', '$_POST[piko1]', '$_POST[piko2]', '$tarih2')");
	}
	?>
  <tr>
    <td>39.</td>
    <td>Beyaz Çikolatalı Frambuazlı</td>
    <td><input type="text" name="bcf0" style="width:15px"/></td>
    <td><input type="text" name="bcf1" style="width:15px"/></td>
    <td><input type="text" name="bcf2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['bcf0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Beyaz Çikolatalı Frambuazlı', '$_POST[bcf0]', '$_POST[bcf1]', '$_POST[bcf2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Beyaz Çikolatalı Frambuazlı', '$_POST[bcf0]', '$_POST[bcf1]', '$_POST[bcf2]', '$tarih2')");
	}
	?>
    <td>39.</td>
    <td><a href="###" rel="pastaresim/Malaga.jpg" class="resimver">Malaga</a></td>
    <td><input type="text" name="mal0" style="width:15px"/></td>
    <td><input type="text" name="mal1" style="width:15px"/></td>
    <td><input type="text" name="mal2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['mal0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Malaga', '$_POST[mal0]', '$_POST[mal1]', '$_POST[mal2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Malaga', '$_POST[mal0]', '$_POST[mal1]', '$_POST[mal2]', '$tarih2')");
	}
	?>
     <td>40.</td>
    <td><a href="###" rel="" class="resimver">Çilekli Budapeşte</a></td>
    <td><input type="text" name="buda0" style="width:15px"/></td>
    <td><input type="text" name="buda1" style="width:15px"/></td>
    <td><input type="text" name="buda2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['buda0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Çilekli Budapeşte', '$_POST[buda0]', '$_POST[buda1]', '$_POST[buda2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Çilekli Budapeşte', '$_POST[buda0]', '$_POST[buda1]', '$_POST[buda2]', '$tarih2')");
	}
	?>
       <td>41.</td>
    <td><a href="###" rel="" class="resimver">Muzlu Budapeşte</a></td>
    <td><input type="text" name="mbuda0" style="width:15px"/></td>
    <td><input type="text" name="mbuda1" style="width:15px"/></td>
    <td><input type="text" name="mbuda2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['mbuda0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Muzlu Budapeşte', '$_POST[mbuda0]', '$_POST[mbuda1]', '$_POST[mbuda2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Muzlu Budapeşte', '$_POST[mbuda0]', '$_POST[mbuda1]', '$_POST[mbuda2]', '$tarih2')");
	}
	?>
    <td>42.</td>
    <td><a href="###" rel="" class="resimver">Tramisu</a></td>
    <td><input type="text" name="zzz0" style="width:15px"/></td>
    <td><input type="text" name="zzz1" style="width:15px"/></td>
    <td><input type="text" name="zzz2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['zzz0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Tramisu', '$_POST[zzz0]', '$_POST[zzz1]', '$_POST[zzz2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Tramisu', '$_POST[zzz0]', '$_POST[zzz1]', '$_POST[zzz2]', '$tarih2')");
	}
	?>
     <td>43.</td>
    <td><a href="###" rel="" class="resimver">Oreolu Magnolia</a></td>
    <td><input type="text" name="zzzz0" style="width:15px"/></td>
    <td><input type="text" name="zzzz1" style="width:15px"/></td>
    <td><input type="text" name="zzzz2" style="width:15px"/></td>
    </tr>
     <?php
	if(!empty($_POST['zzzz0']))
	{
		@$uret = mysql_query("INSERT INTO pasta2 (urun_adi, sifir, bir, iki, tarih, tarih2) values('Oreolu Magnolia', '$_POST[zzzz0]', '$_POST[zzzz1]', '$_POST[zzzz2]', '$tarih', '$tarih2')");
		@$uret2 = mysql_query("INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('Oreolu Magnolia', '$_POST[zzzz0]', '$_POST[zzzz1]', '$_POST[zzzz2]', '$tarih2')");
	}
	?>
	<tr>
    <td colspan="5" align="center"><input type="submit" value="ÜRET" style="width:300px"/></td>
    </tr>
    <?php if($_POST)
	{
	?>
  	<tr>
    <td colspan="5" class="basari" align="center">BAŞARIYLA ÜRETİLDİ</td>
    </tr>
	<?php
	}
	?>
</table>
</form>
<div id="resimac"></div>
<div style="height:300px">
</div>
</body>
</html>