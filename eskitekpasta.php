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
@$tarih2=date('d/m/y H:i');
?>
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI ÜRETİM </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>

<body>
<form action="tekpasta.php" method="post">
<table border="1" align="center" width="500" cellpadding="5" class="rapor">
  <tr>
    <td colspan="3" align="center" class="banner"><h3>TEK PASTA ÜRETİM FORMU</h3></td>
  </tr>
  <tr>
    <td width="10">&nbsp;</td>
    <td>Ürün Adı</td>
    <td align="center">Adet</td>
    </tr>
  <tr>
    <td>1.</td>
    <td><a href="###" rel="" class="resimver">Aligo</a></td>
    <td align="center"><input type="text" name="ali" style="width:50px"/></td>
    </tr>
    <?php
	if(!empty($_POST['ali']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Aligo', '$_POST[ali]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>2.</td>
    <td>Çilekli Küçük Alman</td>
    <td align="center"><input type="text" name="cka" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cka']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çilekli Küçük Alman', '$_POST[cka]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>3.</td>
    <td>Muzlu Küçük Alman</td>
    <td align="center"><input type="text" name="mka" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['mka']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Muzlu Küçük Alman', '$_POST[mka]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>4.</td>
    <td>Bambu</td>
    <td align="center"><input type="text" name="bam" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['bam']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Bambu', '$_POST[bam]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>5.</td>
    <td>Bitter Portakal</td>
    <td align="center"><input type="text" name="bit" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['bit']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Bitter Portakal', '$_POST[bit]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>6.</td>
    <td>Bon Apetit</td>
    <td align="center"><input type="text" name="bon" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['bon']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Bon Apetit', '$_POST[bon]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>7.</td>
    <td>Çilekli Budapeşte</td>
    <td align="center"><input type="text" name="cbuda" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cbuda']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çilekli Budapeşte', '$_POST[cbuda]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>8.</td>
    <td>Muzlu Budapeşte</td>
    <td align="center"><input type="text" name="mbuda" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['mbuda']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Muzlu Budapeşte', '$_POST[mbuda]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>9.</td>
    <td>Cheesecake Çikolatalı</td>
    <td align="center"><input type="text" name="ccik" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['ccik']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Cheesecake Çikolatalı', '$_POST[ccik]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>10.</td>
    <td>Cheesecake Frambuazlı</td>
    <td align="center"><input type="text" name="cfra" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cfra']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Cheesecake Frambuazlı', '$_POST[cfra]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>11.</td>
    <td>Cheesecake Karamelli</td>
    <td align="center"><input type="text" name="ckar" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['ckar']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Cheesecake Karamelli', '$_POST[ckar]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>12.</td>
    <td>Cheesecake Limonlu</td>
    <td align="center"><input type="text" name="cli" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cli']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Cheesecake Limonlu', '$_POST[cli]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>13.</td>
    <td>Cheesecake Portakallı</td>
    <td align="center"><input type="text" name="cpor" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cpor']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Cheesecake Portakallı', '$_POST[cpor]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>14.</td>
    <td>Cheesecake Tobleronlu</td>
    <td align="center"><input type="text" name="cto" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cto']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Cheesecake Tobleronlu', '$_POST[cto]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>15.</td>
    <td>Cheesecake Çilekli</td>
    <td align="center"><input type="text" name="cci" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cci']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Cheesecake Çilekli', '$_POST[cci]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>16.</td>
    <td>Bademli Büyük Ekler</td>
    <td align="center"><input type="text" name="bbe" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['bbe']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Bademli Büyük Ekler', '$_POST[bbe]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>17.</td>
    <td><a href="###" rel="" class="resimver">Çilekli Büyük Ekler</a></td>
    <td align="center"><input type="text" name="cbe" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cbe']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çilekli Büyük Ekler', '$_POST[cbe]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>18.</td>
    <td>Sade Büyük Ekler</td>
    <td align="center"><input type="text" name="sbe" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['sbe']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Sade Büyük Ekler', '$_POST[sbe]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>19.</td>
    <td>Ekpa</td>
    <td align="center"><input type="text" name="ekpa" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['ekpa']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Ekpa', '$_POST[ekpa]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>20.</td>
    <td><a href="###" rel="" class="resimver">Elegante</a></td>
    <td align="center"><input type="text" name="ele" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['ele']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Elegante', '$_POST[ele]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>21.</td>
    <td>Profiterollü Fıstıklı</td>
    <td align="center"><input type="text" name="prof" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['prof']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Profiterollü Fıstıklı', '$_POST[prof]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>22.</td>
    <td>Concord</td>
    <td align="center"><input type="text" name="con" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['con']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Concord', '$_POST[con]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>23.</td>
    <td>Gato</td>
    <td align="center"><input type="text" name="gat" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['gat']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Gato', '$_POST[gat]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>24.</td>
    <td>Jaconde</td>
    <td align="center"><input type="text" name="jak" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['jak']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Jaconde', '$_POST[jak]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>25.</td>
    <td>Kardinal</td>
    <td align="center"><input type="text" name="kar" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['kar']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Kardinal', '$_POST[kar]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>26.</td>
    <td>Profiterollü Kule</td>
    <td align="center"><input type="text" name="prok" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['prok']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Profiterollü Kule', '$_POST[prok]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>27.</td>
    <td>Siyah Malaga</td>
    <td align="center"><input type="text" name="sm" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['sm']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Siyah Malaga', '$_POST[sm]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>28.</td>
    <td><a href="###" rel="" class="resimver">Beyaz Malaga</a></td>
    <td align="center"><input type="text" name="bm" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['bm']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Beyaz Malaga', '$_POST[bm]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>29.</td>
    <td><a href="###" rel="" class="resimver">Çikolatalı Milföy</a></td>
    <td align="center"><input type="text" name="cikm" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cikm']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çikolatalı Milföy', '$_POST[cikm]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>30.</td>
    <td>Çilekli Milföy</td>
    <td align="center"><input type="text" name="cilm" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['cilm']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çilekli Milföy', '$_POST[cilm]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>31.</td>
    <td><a href="###" rel="" class="resimver">Muzlu Milföy</a></td>
    <td align="center"><input type="text" name="muzm" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['muzm']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Muzlu Milföy', '$_POST[muzm]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>32.</td>
    <td>Sade Milföy</td>
    <td align="center"><input type="text" name="sadm" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['sadm']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Sade Milföy', '$_POST[sadm]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>33.</td>
    <td>Missisipi</td>
    <td align="center"><input type="text" name="mis" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['mis']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Missisipi', '$_POST[mis]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>34.</td>
    <td>Mont Blanc</td>
    <td align="center"><input type="text" name="mont" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['mont']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Mont Blanc', '$_POST[mont]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>35.</td>
    <td>Mozaik</td>
    <td align="center"><input type="text" name="moz" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['moz']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Mozaik', '$_POST[moz]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>36.</td>
    <td>Opal</td>
    <td align="center"><input type="text" name="op" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['op']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Opal', '$_POST[op]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>37.</td>
    <td>Opera</td>
    <td align="center"><input type="text" name="ope" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['ope']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Opera', '$_POST[ope]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>38.</td>
    <td><a href="###" rel="" class="resimver">Piramit</a></td>
    <td align="center"><input type="text" name="pir" style="width:50px"/></td>
    </tr>
        <?php
	if(!empty($_POST['pir']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Piramit', '$_POST[pir]', '$tarih', '$tarih2')");
	}
	?>
  <tr>
    <td>39.</td>
    <td>Polka</td>
    <td align="center"><input type="text" name="pol" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['pol']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Polka', '$_POST[pol]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>39.</td>
    <td>Prenses</td>
    <td align="center"><input type="text" name="pre" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['pre']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Prenses', '$_POST[pre]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>40.</td>
    <td>Raspberry King</td>
    <td align="center"><input type="text" name="rk" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['rk']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Raspberry King', '$_POST[rk]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>41.</td>
    <td>Raspberry Doum</td>
    <td align="center"><input type="text" name="rd" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['rd']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Raspberry Doum', '$_POST[rd]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>42.</td>
    <td>Rosalinda</td>
    <td align="center"><input type="text" name="ros" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['ros']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Rosalinda', '$_POST[ros]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>43.</td>
    <td>Royal</td>
    <td align="center"><input type="text" name="roy" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['roy']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Royal', '$_POST[roy]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>44.</td>
    <td>Çilekli Tart</td>
    <td align="center"><input type="text" name="cilt" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['cilt']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çilekli Tart', '$_POST[cilt]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>45.</td>
    <td>Meyveli Tart</td>
    <td align="center"><input type="text" name="meyt" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['meyt']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Meyveli Tart', '$_POST[meyt]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>46.</td>
    <td>Stick</td>
    <td align="center"><input type="text" name="sti" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['sti']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Stick', '$_POST[sti]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>47.</td>
    <td>Tiramisu</td>
    <td align="center"><input type="text" name="tir" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['tir']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Tiramisu', '$_POST[tir]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>48.</td>
    <td>Triffle</td>
    <td align="center"><input type="text" name="tri" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['tri']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Triffle', '$_POST[tri]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>49.</td>
    <td>Valencia</td>
    <td align="center"><input type="text" name="val" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['val']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Valencia', '$_POST[val]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>50.</td>
    <td>Çilekli Adrino</td>
    <td align="center"><input type="text" name="cila" style="width:50px"/></td>
    </tr> 
            <?php
	if(!empty($_POST['cila']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çilekli Adrino', '$_POST[cila]', '$tarih', '$tarih2')");
	}
	?>
    <tr>
    <td>51.</td>
    <td>Muzlu Adrino</td>
    <td align="center"><input type="text" name="muza" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['muza']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Muzlu Adrino', '$_POST[muza]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>52.</td>
    <td>Cramio Doum</td>
    <td align="center"><input type="text" name="crad" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['crad']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Cramio Doum', '$_POST[crad]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>53.</td>
    <td>Citron Doum</td>
    <td align="center"><input type="text" name="citd" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['citd']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Citron Doum', '$_POST[citd]', '$tarih', '$tarih2')");
	}
	?>
     <tr>
    <td>54.</td>
    <td>Muzlu Rulo</td>
    <td align="center"><input type="text" name="muzr" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['muzr']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Muzlu Rulo', '$_POST[muzr]', '$tarih', '$tarih2')");
	}
	?>
       <tr>
    <td>55.</td>
    <td>Çilekli Rulo</td>
    <td align="center"><input type="text" name="cilr" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['cilr']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çilekli Rulo', '$_POST[cilr]', '$tarih', '$tarih2')");
	}
	?>
       <tr>
    <td>56.</td>
    <td>Çikolatalı Fıstıklı Rulo</td>
    <td align="center"><input type="text" name="cfr" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['cfr']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Çikolatalı Fıstıklı Rulo', '$_POST[cfr]', '$tarih', '$tarih2')");
	}
	?>
       <tr>
    <td>57.</td>
    <td>Muzlu Çilekli Cream Rulo</td>
    <td align="center"><input type="text" name="mccr" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['mccr']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Muzlu Çilekli Cream Rulo', '$_POST[mccr]', '$tarih', '$tarih2')");
	}
	?>
       <tr>
    <td>58.</td>
    <td>Şıpsevdi</td>
    <td align="center"><input type="text" name="sip" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['sip']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Şıpsevdi', '$_POST[sip]', '$tarih', '$tarih2')");
	}
	?>
       <tr>
    <td>59.</td>
    <td>Oreolu Vişneli</td>
    <td align="center"><input type="text" name="ov" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['ov']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Oreolu Vişneli', '$_POST[ov]', '$tarih', '$tarih2')");
	}
	?>
       <tr>
    <td>60.</td>
    <td>Muzlu Çilekli Moist</td>
    <td align="center"><input type="text" name="mcm" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['mcm']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Muzlu Çilekli Moist', '$_POST[mcm]', '$tarih', '$tarih2')");
	}
	?>
       <tr>
    <td>70.</td>
    <td>Babaroski</td>
    <td align="center"><input type="text" name="baba" style="width:50px"/></td>
    </tr>
            <?php
	if(!empty($_POST['baba']))
	{
		@$uret = mysql_query("INSERT INTO tekpasta2 (urun_adi, adet, tarih, tarih2) values('Babaroski', '$_POST[baba]', '$tarih', '$tarih2')");
	}
	?>
	<tr>
    <td colspan="3" align="center"><input type="submit" value="ÜRET" style="width:300px"/></td>
    </tr>
    <?php if($_POST)
	{
	?>
  	<tr>
    <td colspan="3" class="basari" align="center"> ÜRETİM BAŞARILI </td>
    </tr>
	<?php
	}
	?>
</table>
</form>
<div id="resimac"></div>
<div style="height:200px">
</div>
</body>
</html>