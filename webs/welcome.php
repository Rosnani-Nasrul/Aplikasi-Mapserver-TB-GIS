<html>
<head><title>Welcome to Web Gis Menampilkan Peta Lokasi</title></head>
<body>
<table>
<tr>
	<td>
	<blockquote>
	<font face="Arial, Helvetica, sans-serif" color="#000000" size="2"><h4>
	  <script language="JavaScript" type="text/javascript">
	  <!--
		var message="Selamat Datang..."
		var neonbasecolor="white"
		var neontextcolor="black"
		var flashspeed=100  //dalam milisekon
		
		var n=0
		if (document.all||document.getElementById){
		document.write('<font color="'+neonbasecolor+'">')
		for (m=0;m<message.length;m++)
		document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
		document.write('</font>')
		}
		else
		document.write(message)
		
		function crossref(number){
		var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
		return crossobj
		}
		//Mengubah semua karakter ke warna dasar
		if (n==0){
		for (m=0;m<message.length;m++)
		//eval("document.all.neonlight"+m).style.color=neonbasecolor
		crossref(m).style.color=neonbasecolor
		}
