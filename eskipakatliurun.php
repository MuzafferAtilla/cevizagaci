﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">
<title>PAKET ÜRÜNLER</title>
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
<?php
include("baglanti.php");
@$tarih2=date('d/m/y H:i');
$oncekitarih = date('y/m/d H:i', strtotime("-1 days"));
$oncekitarih2 = date('y/m/d H:i', strtotime("-1 days"));
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI ÜRETİM </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?></td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
<form action="paketliurun.php" method="post">
<table border="1" align="center" class="birim" cellpadding="5">
<tr><td colspan="2" align="center">	PAKET ÜRÜNLERİ ÜRETİM FORMU </td></tr>
<tr><td> Ürün Adı: </td><td><input type="text" name="urun_adi" /></td></tr>
<tr><td> Adet: </td><td><input type="text" name="adet" /></td></tr>
<tr><td> Gram: </td><td><input type="text" name="gram" /></td></tr>
<tr><td>&nbsp;  </td><td><input type="submit" value="ÜRET"/></td></tr>
<?php
@$urun_adi = $_POST['urun_adi'];
@$adet = $_POST['adet'];
@$gram = $_POST['gram'];
if(@$urun_adi == !null and @$adet == !null or @$urun_adi == !null and @$gram == !null)
{
	@$uret=mysql_query("INSERT INTO paket (urun_adi, adet, tarih, tarih2, gram) values('$urun_adi', '$adet', '$oncekitarih' ,'$oncekitarih2', '$gram')");
?>
	<tr><td>&nbsp;  </td><td class="basari">ÜRETİLDİ</td></tr>
<?php
}
?>
</table></form>
</body>
</html>