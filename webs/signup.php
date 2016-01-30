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
	}
	}
?>
