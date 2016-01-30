<?
ini_set('display_errors',false);
if (isset($_POST['login']))
{
include "./include/conn.php";
$username=htmlentites((trim($_POST['username'])));
$password=htmlentites(md5($_POST['password']));

$login=mysql_db_query($db,"select * from daftar where user='$username' and pass='$password'",$koneksi);
while($row=mysql_fetch_array($login))
{
$user_id=$row[0];
$user_name=$row[2];
$status=$row['status'];
}

$cek_login=mysql_num_rows($login);
if (empty($cek_login))
{
?>
<script languange="javascript">alert("password atau username anda salah!!");</script>
<script> document.location.href='index.php?page=4'; </script>
<?
}
else
{
