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
Author  :   V4LD0 T4R0R3H
Type    : Bot Comment FB
Github  : http://github.com/Al2VyN
Version : 0.1 (Private)
Date    : $date\n";
    echo "$red(_)(_)========================D$green\n";
@header('Content-Type: text/html; charset=UTF-8');
function input($echo) {
    echo "$echo : ";
}
input("Mau Pake Bot Ga ? [y/g]");
$pilih = trim(fgets(STDIN));
if($pilih == "g") {
    die("$red(!)$CABUT SONO$red (!)\n");
} elseif($pilih == "y") {
    echo "$red(_)(_)========================D$green\n";
    input("Masukin Kode Akses Token Lu");
    $token = trim(fgets(STDIN));
    echo "$red(_)(_)========================D$green\n";
} else {
    echo "$red(!)$yellow Invalid$red (!)$green\n";
    goto pilih;
}
input("Mau Komentar Apaan ?");
$msgx=trim(fgets(STDIN));
    echo "$red(_)(_)========================D$green\n";
input("Mau Berapa Komentar?");
$jumlah=trim(fgets(STDIN));
    echo "$red(_)(_)========================D$green\n";
$ambil = "https://graph.facebook.com/me/home?fields=id,from,name,message,type&limit=".$jumlah."&access_token=".$token;
$ambil = file_get_contents($ambil);
$ambil = json_decode($ambil, true);
foreach($ambil['data'] as $data) {
        $stat_id = $data['id'];
        $post_id = explode("_", $stat_id);
        $data_id = $data['id']; // data id
        $data_name = $data['from']['name']; // pemilik status
        $data_time = $data['created_time']; // waktu status
        $data_pesan = $data['message'];
        $msg=$msgx . "\n";
        $url ="https://graph.facebook.com/".$post_id[1]."/comments";
$var="method=POST&message=".$msg."&access_token=".$token;
           $ch=curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $var);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                curl_close($ch);
echo "Nih Komentar Lu Bangsat => $msg\n";
if(preg_match('/error/', $result)) {
     die("$red(!)$yellow Token Invalid$red (!)\n");
                } else {
        echo "Statusnya Nih :".$data_pesan."\n";
        echo "Yang Posting Nih :".$data_name."\r\n";
        echo "ID Postingannya Nih :".$post_id[1]."\n";
        echo "Oke Sukses Hwhw\n";
        $sleep = array(
        "5",
    ); // Detik
    $slp   = array_rand($sleep);
    $slp2  = $sleep[$slp];
    echo "Tunda dulu selama $slp2 Abad Hwhw\n";
    echo "$red(_)(_)========================D$green\n";
    sleep($slp2);
                }
        }
        unset($data);
?>
