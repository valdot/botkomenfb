#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
date_default_timezone_set('Asia/Jakarta');
$date   = date('d-M-Y H:i:s');
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
pilih:
system($bersih);
echo "\n$yellow
 ____        _    _   __        _    _____
| __ )  ___ | |_ | | / / _____ | |_ |  __ \
|  _ \ / _ \|  _|| |/ / |  _  ||  _|| |  \ \
| |_) | (_) | |_ |  _ \ | | | || |_ | |__/ /
|____/ \___/ \__||_| \_\|_| |_|\___||_____/";
echo "\n$blue
Author  : Valdo Taroreh
Type    : Kode Akses Token FB
Github  : http://github.com/valdot
Version : 0.1 (Private)
Date    : $date\n";
    echo "$red(_)(_)========================D$green\n";
@header('Content-Type: text/html; charset=UTF-8');
function input($echo) {
    echo "$echo : ";
}
echo "$red HARAP LOGIN DAHULU DI OPERA MINI + UC BROWSER AGAR TIDAK CHECKPOINT !!! $green\n";
input("Masukin Email/No.HP/User ID Lo Bujank");
$iduser=trim(fgets(STDIN));
input("Masukin Password Lo MEMEK ");
$pass=trim(fgets(STDIN));
echo "$red(_)(_)========================D$green\n";
$konten=file_get_contents('https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email='.$iduser.'&locale=en_US&password='.$pass.'&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6');
$json= json_decode($konten, true);
$userid = $json['session_cookies'][0]['value'];
$token = $json['access_token'];
if(preg_match('/session_key/', $konten)) {
	echo "Kode Akses Token Lo Ngentod  :\t".$token."\n";
	echo "ID Facebook Lo Bangsat :\t".$userid."\n";
	$tulis=fopen("token.txt","w+");
	fwrite($tulis,$token);
	fclose($tulis);
	if(file_exists("token.txt")) {
		echo "Disimpennya Di File -> token.txt\n";
	}
 } else {	
   die("Cek Username / Password Lo Ngentod");
   }
   echo "$red(_)(_)========================D$green\n";
?>
