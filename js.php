<button onclick="ornek()">Çalıştır</button>
 
<script>
var inervalID;
 
function ornek() {
inervalID = setInterval(uyariVer, 3000);
}
 
function uyariVer() {
alert("Merhaba Dünya!");
}
</script>