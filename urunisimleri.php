<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">
<title></title>
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
@$tarih2=date('d/m/y H:i');
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI ÜRETİM </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>
<table border="1" align="center">
<?php






$dolar = "$";
$senmisin = "tarih2";
$senmisinekle = "ekle = ";
$qsorgu = "mysql_query(";
$tirnakparantez = ");";






echo "<tr>";
echo "<td>";
$sorgu = mysql_query("SELECT DISTINCT urun_adi FROM pasta2 WHERE tarih2 = '2017-08-20' ORDER BY `pasta2`.`urun_adi` ASC");
while($dongu = mysql_fetch_array($sorgu))
{	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikpasta (urun_adi, sifir, bir, iki, tarih2) values('".$dongu['urun_adi']."', '00', '00', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";






echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM tekpasta2 WHERE tarih2 = '2017-08-20' ORDER BY `tekpasta2`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO ayliktekpasta (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";






echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM sutlutatli WHERE tarih2 = '2017-08-20' ORDER BY `sutlutatli`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO ayliksutlutatli (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";





echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM gramajtek WHERE tarih2 = '2017-08-20'ORDER BY `gramajtek`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikgramajtek (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";





echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM special WHERE tarih2 = '2017-08-20' ORDER BY `special`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikspecial (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";





echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM maya WHERE tarih2 = '2017-08-20' ORDER BY `maya`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikmaya (urun_adi, adet, gram, tarih2) values('".$dongu2['urun_adi']."', '00', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";




echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM  msp WHERE tarih2 = '2017-08-20' ORDER BY `msp`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikmsp (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";







echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM tatlikurabiye WHERE tarih2 = '2017-08-20' ORDER BY `tatlikurabiye`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO ayliktatlikurabiye (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";




echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM tuzlukurabiye WHERE tarih2 = '2017-08-20' ORDER BY `tuzlukurabiye`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO ayliktuzlukurabiye (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";







echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM kek WHERE tarih2 = '2017-08-20' ORDER BY `kek`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikkek (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";










echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM tart WHERE tarih2 = '2017-08-20' ORDER BY `tart`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO ayliktart (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";






echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM adet WHERE tarih2 = '2017-08-20' ORDER BY `adet`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikadet (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";





echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM paket WHERE tarih2 = '2020-08-17' ORDER BY `paket`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikpaket (urun_adi, adet, gram, tarih2) values('".$dongu2['urun_adi']."', '00', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";








echo "<tr>";
echo "<td>";
$sorgu2 = mysql_query("SELECT DISTINCT urun_adi FROM yari ORDER BY `yari`.`urun_adi` ASC");

while($dongu2 = mysql_fetch_array($sorgu2))
{
	
	echo $dolar. $senmisinekle. $qsorgu."\"INSERT INTO aylikyari (urun_adi, adet, tarih2) values('".$dongu2['urun_adi']."', '00', '$dolar$senmisin')\"$tirnakparantez"."<br>";
}
echo "</td>";
echo "</tr>";







?>

</table>

<div id="resimac"></div>
<div style="height:300px">
</div>
</body>
</html>