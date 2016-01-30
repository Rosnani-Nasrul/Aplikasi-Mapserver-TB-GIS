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
	}
	}
?>
