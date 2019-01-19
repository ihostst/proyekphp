<?php

error_reporting(0);


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
$token_admin = trim($_POST['token']);
}


if( is_dir ('log')) ;
else mkdir ('log') ; 

# SIMPAN ACCESS-_TOKEN KE FILE #

file_put_contents('log/token_admin', $token_admin);


# SIMPAN PENGATURAN KE FILE #

file_put_contents('log/pengaturan_bot', $pengaturan_bot);



echo "<script type='text/javascript'>
alert(' access token berhasil di instal ! ');
history.back(self);
</script>";



?>

