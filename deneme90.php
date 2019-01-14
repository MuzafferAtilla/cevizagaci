<style>
div.bilgi{
border:2px solid #784B39;;
border-radius:0px 0px 5px 5px;
}
.bilgi{
position:absolute;
}
</style>
<script>
function Goster(){
var a;
a=document.getElementById("bilgi");
a.style.display="";
document.getElementById("link").focus();


document.getElementById("link").setAttribute("onclick","Gizle()");
}
function Gizle(){
var a;
a=document.getElementById("bilgi");
a.style.display="none";
document.getElementById("link").setAttribute("onclick","Goster()");
}


</script>
<a onblur="Gizle()" onclick="Goster()" href="###">Link</a>
<div class="bilgi" id="bilgi" style="display:none;">
Bilgi<br />
bilgi...<br />
bilgi Buraya Gelecek. Lorem Ipsum .
</div>
