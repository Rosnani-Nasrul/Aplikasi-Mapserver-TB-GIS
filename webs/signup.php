<?
if (isset($_POST['daftar']))
{
	include "./include/conn.php";
	$nama=ucwords($_POST['nama']);
	$user=$_POST['user'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	if (!empty($nama) && !empty($user) && !empty($email) && !empty($password))
	{
		$cek=mysql_db_query($db,"select * from daftar where user='$user'",$koneksi);
		$valid=mysql_num_rows($cek);
		
		if ($valid){
			echo "<script> document.location.href='signup.php?status=Maaf, USERNAME Anda sudah ada yang punya!!'; </script>";
	} else {
		$insert=mysql_db_query($db,"insert into daftar values('','$nama','$user','$email','$password','$tanggal')",$koneksi);
		if ($insert)
		{
			echo "<script> document.location.href='signup.php?status=Selamat bergabung dengan situs kami.'; </script>";
	}
	}
	}
	else {
	echo "<script> document.location.href='signup.php?status=Maaf, Data yang anda kirim belum lengkap!!'; </script>";	
	}
}
?>
