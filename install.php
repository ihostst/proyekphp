<?php

error_reporting(0);

//header('Origin: https://facebook.com');

if(isset($_POST['kmn']))
$kmn='kmn_'.$_POST['kmn'];

if(isset($_POST['rlk']))
$rlk='rlk_'.$_POST['rlk'];

if(isset($_POST['rss']))
$rss='rss_'.$_POST['rss'];

if(isset($_POST['upstat']))
$upstat='upstat_'.$_POST['upstat'];

$pengaturan_bot= "$kmn+$rlk+$rss+$upstat" ;

//kmn_on+rlk_on+rss_on+upstat_on

if(isset($_POST['token']))
{
$token_user = trim($_POST['token']);
}



//NAMA DAN ID USER
$userNama = $userData['data']['name'] ;
$userId = $userData['data']['id'] ;




##### SIMPAN KE MYSQL #####


include_once('data_login_mysqli.php');


//LOGIN KE MYSQLI
$login_ke_mysqli = mysqli_connect($domain, $username, $password);

if( ! $login_ke_mysqli)
{
die ("Connection failed: " . mysqli_connect_error());
}


// HAPUS DATABASE  YANG LAMA
if(mysqli_select_db($login_ke_mysqli, 'db_token') !== null)
{
$sql = "DROP DATABASE db_token";
mysqli_query($login_ke_mysqli, $sql);
echo "Database old deleted successfully";
}


// BUAT DATABASE  YANG BARU
if(mysqli_select_db($login_ke_mysqli, 'db_token') == null)
{
$sql = "CREATE DATABASE db_token";
mysqli_query($login_ke_mysqli, $sql);
echo "Database New  created successfully";
}

//SQL LOGIN BUKA DATABASE DB_TOKEN
$login_ke_mysqli = mysqli_connect($domain, $username, $password, 'db_token');

//SQL BUAT TABEL
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 0,1 ';
$query = mysqli_query($login_ke_msql, $sql);
if($query == null){
$sql = "CREATE TABLE token_user(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pengaturan_bot VARCHAR(100) NOT NULL,
access_token VARCHAR(500) NOT NULL,
reg_date TIMESTAMP
)";

mysqli_query($login_ke_mysqli, $sql);
//echo "Table user token created successfully";
}


//INSERT INTO
mysqli_select_db($login_ke_mysqli, 'db_token');
$sql = "INSERT INTO token_user(pengaturan_bot, access_token)
VALUES ('$pengaturan_bot', '$token_user')";

if(mysqli_query($login_ke_mysqli, $sql)){
echo "<script type='text/javascript'>
alert(' access token berhasil di instal ! ');
history.back(self);
</script>";
}
else
{
echo "<script type='text/javascript'>
alert('gagal instal access token ! ');
history.back(self);
</script>";
}



?>










<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
//LOGIN KE MSQLI
$conn = mysqli_connect
($servername, $username,
$password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed:
" . mysqli_connect_error());
}
// SQL HAPUS A RECORD
$sql = "DELETE FROM MyGuests
WHERE id=3";
if (mysqli_query($conn,
$sql)) {
echo "Record deleted
successfully";
} else {
echo "Error deleting
record: " . mysqli_error
($conn);
}
mysqli_close($conn);
?>

##########

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
//LOGIN KE MSQLI
$conn = mysqli_connect
($servername, $username,
$password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed:
" . mysqli_connect_error());
}
//MSQLI UPDATE
$sql = "UPDATE MyGuests SET
lastname='Doe' WHERE id=2";
if (mysqli_query($conn,
$sql)) {
echo "Record updated
successfully";
} else {
echo "Error updating
record: " . mysqli_error
($conn);
}
mysqli_close($conn);

?>



DELETE FROM 'db_token'.'token_user' WHERE 'token_user'."id' = 1;

