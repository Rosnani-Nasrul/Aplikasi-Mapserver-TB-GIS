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
		
		
		crossref(n).style.color=neontextcolor
		
		if (n<message.length-1)
		n++
		else{
		n=0
		clearInterval(flashing)
		setTimeout("beginneon()",1500)
		return
		}
		}
		
		function beginneon(){
		if (document.all||document.getElementById)
		flashing=setInterval("neon()",flashspeed)
		}
		beginneon()
		//-->
		
</script>
	</h4></font>
	  <table>
	  <tr>
	  	<td valign="top"><div align="center"><font face="comic sans" size="4" color="#FF0000">Hello guys ... Anda berada di halaman utama web GIS untuk menampilkan peta lokasi. </font> </div></td>
		<td>&nbsp;</td>
	  </tr>
	  <p align="center">&nbsp;</p>
	  <p align="center"><br>
	    <img src="./img/GIS.jpg" border="0" title="Gambar Gis"></a></p>
	</blockquote>
	</td>
</tr>
<tr>
    </td>
	<td>
   	 <p><a href="about.php">
      <input type="button" value="About Us" name="About Us" onClick=" return cek()">
      </a></p>
	<p><a href="index.php">
      <input type="button" value="Next" name="next" onClick=" return cek()">
      </a></p>
      <p><a href="login.php">
      <input type="button" value="Logout" name="logout" onClick=" return cek()">
    </a></p>
    </td>
</tr>
</table>
</body>
</html>
