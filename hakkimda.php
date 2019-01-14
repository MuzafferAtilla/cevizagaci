<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lutfen.css">
<title>HAKKIMDA</title>
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
<table border="0" align="center" class="ustbanner"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="anasayfa.php"> <img src="logo.fw.png"  width="169" height="63" /> </a></td><td width="395" align="right">  CEVİZ AĞACI HAKKIMDA </td><td width="395" align="right"><?php echo date('d/m/y') . '<br>' . '<font id="ur"></font>'; ?> </td></tr></table>
<table align="center" border="1" class="banner3" width="1012">
<tr><td></td></tr>
</table>
</head>
<table border="0" align="center" width="900">
<tr><td>
    <table border="0" align="left">
        <tr><td>
            <h2> Hakkımda </h2>
            <h3> Ceviz Ağacı - Koşuyolu </h3>
            <p> Sakarya Üniversitesi 2017 Eğitim Fakültesi Bilgisayar Öğretmenliği mezunuyum. Mezun olduktan sonra hiç vakit kaybetmeden iş arama konvoyuna katıldım, fakat tecrübesizliğim ve askerlik durumum yüzünden torpil ve tanıdık vasıtasıyla belki gerçekten işe yarar elemanlar yerine kendi istedikleri elemanları alan özel sektörde kendime iş olanağı yakalayamadım. Devlette öğretmenlik yapmak için ise KPSS sınavından yüksek puanlar, çok yüksek puanlar alınması gerekiyor, bunun içinde hayli bir süre ders çalışmak gerekiyor. 16 Sene eğitim hayatı ve bunun son 4 senesi lisans eğitimi sonrası mesleğimi icra etmem için iş gücümün yüksek olduğu çağlarımda tekrardan kapalı ve sıkıcı ortamlarda ders çalışmak aklıma ve fikrime yatmadığı için devlet memurluğu seçeneğinden zorunda bırakılarak aynı zamanda malesef kendi istedğimle vazgeçtim. Durumlar mütakibinde askere gitmeye karar verdim, bu kararı alırken sözlüm ve ailemden destek aldım. Çalıştığım imalathane sevkiyat veri giriş elemanlığı mevkisine Kasım ayında askere gidecek olmama rağmen beni işe alan ve büyük bir yükten kurtaran öncelikle Ceviz Ağacı Pastahanesinin sahibi Levent Yüksel'e ve aynı öncelikte müdürüm ve ağabeyim gibi gördüğüm Özden ağabeyime teşekkür ediyorum. Takibinde yazılımını üstlendiğim içerisinde bulunduğunuz veritabanı yazılımını sunuyorum.</p> <p> Muzaffer Atilla, en büyük hayali canından çok sevdiği sözlüsüyle evlenmek olan, muzu ve fırında sütlaçı seven bir bilgisayar öğretmeni.  </p>
            <p> Ağustos 2017 </p>
        </td></tr>
    </table>
</td></td>
</table>
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