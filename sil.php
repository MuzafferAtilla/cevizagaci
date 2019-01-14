<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?php
include("baglanti.php");
?>
<?php
if($_GET['tablo'] == "pasta")
{
	$sorgu = mysql_query("DELETE FROM pasta2 WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikpasta WHERE urun_adi = '$_GET[urunadi]' AND sifir = '$_GET[sifir]' AND bir = '$_GET[bir]' AND iki = '$_GET[iki]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=pasta">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "figur")
{
	$sorgu = mysql_query("DELETE FROM figur WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikfigur WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=figur">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "tekpasta")
{
	$sorgu = mysql_query("DELETE FROM tekpasta2 WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM ayliktekpasta WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=tekpasta">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "sutlutatli")
{
	$sorgu = mysql_query("DELETE FROM sutlutatli WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM ayliksutlutatli WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=sutlutatli">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "gramajtek")
{
	$sorgu = mysql_query("DELETE FROM gramajtek WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikgramajtek WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=gramajtek">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "special")
{
	$sorgu = mysql_query("DELETE FROM special WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikspecial WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=special">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "maya")
{
	$sorgu = mysql_query("DELETE FROM maya WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikmaya WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND gram = '$_GET[gram]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=maya">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "msp")
{
	$sorgu = mysql_query("DELETE FROM msp WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikmsp WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=msp">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "tatli")
{
	$sorgu = mysql_query("DELETE FROM tatlikurabiye WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM ayliktatlikurabiye WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=tatli">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "tuzlu")
{
	$sorgu = mysql_query("DELETE FROM tuzlukurabiye WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM ayliktuzlukurabiye WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=tuzlu">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "kek")
{
	$sorgu = mysql_query("DELETE FROM kek WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikkek WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=kek">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "tart")
{
	$sorgu = mysql_query("DELETE FROM tart WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM ayliktart WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=tart">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "adet")
{
	$sorgu = mysql_query("DELETE FROM adet WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikadet WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=adet">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "paket")
{
	$sorgu = mysql_query("DELETE FROM paket WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikpaket WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND gram = '$_GET[gram]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=paket">
    <?php
	}
?>
<?php
if($_GET['tablo'] == "yari")
{
	$sorgu = mysql_query("DELETE FROM yari WHERE id = $_GET[id]");
	$sorgu2 = mysql_query("DELETE FROM aylikyari WHERE urun_adi = '$_GET[urunadi]' AND adet = '$_GET[adet]' AND tarih2 = '$_GET[tarih]'");
	?>
	<meta http-equiv="refresh" content="0;URL=rapor.php?tarih=<?php echo $_GET['tarih']; ?>&durum=1&tablo=yari">
    <?php
	}
?>
</body>
</html>