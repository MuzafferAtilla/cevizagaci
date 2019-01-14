<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?php
$baglanti=@mysql_connect('localhost','root','5550123');
@mysql_select_db('cevizagaci',$baglanti);
date_default_timezone_set('Europe/Istanbul');
@$tarih=date('y/m/d H:i');
session_start();
if(@$_SESSION['cik'] != 1)
{
	header("refresh:0;url=giris.php" );
}
?>
</body>
</html>