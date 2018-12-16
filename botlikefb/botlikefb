#!/data/data/com.termux/files/usr/bin/php
<?php
pilih:
system('clear');
date_default_timezone_set('Asia/Jakarta');
$date   = date('d-M-Y H:i:s');
$G = "\033[1;32m";
$P = "\033[1;33m";
$H = "\033[1;31m";
echo "\n\e[93m
 ____        _    _   __        _    _____
| __ )  ___ | |_ | | / / _____ | |_ |  __ \
|  _ \ / _ \|  _|| |/ / |  _  ||  _|| |  \ \
| |_) | (_) | |_ |  _ \ | | | || |_ | |__/ /                                                                                                    |____/ \___/ \__||_| \_\|_| |_|\___||_____/";
echo "\n$G
Author  : Valdo Taroreh
Type    : Bot Auto Like Fb
Github  : http://github.com/valdot
Version : 0.1 (Private)
Access  : $date\n";
    echo "$H(_)(_)======D$P\n";
@header('Content-Type: tex      t/html; charset=UTF-8');
function input($echo) {
    echo "$echo --> ";
}
error_reporting(0);
input("$G Mau Pake Bot Ga Ngentod ? [y/g]");
$pilih = trim(fgets(STDIN));
if($pilih == "g") {
    die("$red(!)$CABUT SONO LO NGENTOD$red (!)\n");
} elseif($pilih == "y") {
    echo "$G(_)(_)========================D$P\n";
    input("$P Masukin Kode Akses Token Lu Bangsat");
    $token = trim(fgets(STDIN));
    echo "$G(_)(_)========================D$P\n";
} else {
    echo "$red(!)$yellow Invalid$red (!)$green\n";
    goto pilih;
}
echo "\n$H Mau Berapa Like Tod? :$P";
$limit=trim(fgets(STDIN, 1024));
echo "$G(_)(_)========================D$P\n";
$limit = "$limit";
$ambil_konten = file_get_contents("https://graph.facebook.com/v2.1/me/home?fields=id,from,type,message&limit={$limit}&access_token={$token}");
$jdecode = json_decode($ambil_konten,true);
//print_r($jdecode);
foreach ($jdecode['data'] as $key => $data) {
        $stat_id = $data['id'];
        $post_id = explode("_", $stat_id);
        $data_id = $data['id']; // data id
        $data_name = $data['from']['name']; // pemilik status
        $data_time = $data['created_time']; // waktu status
        $data_pesan = $data['message'];
/* mulai like */
        $url = "https://graph.facebook.com/v2.1/{$data_id}/likes";
        $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT,20);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko)  Chrome/26.0.1410.64 Safari/537.31');
    curl_setopt($curl, CURLOPT_COOKIE,'cookie.txt');
    curl_setopt($curl, CURLOPT_COOKIEFILE,'cookie.txt');
    curl_setopt($curl, CURLOPT_COOKIEJAR,'cookie.txt');
    curl_setopt($curl, CURLOPT_POSTFIELDS,"access_token={$token}&method=post");
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 3);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
    $result = curl_exec($curl);
    $results = json_decode($result,true);
    curl_close($curl);
    if($results['success']){
    echo "$H Status >$P ".$data_pesan."\r\n";
    echo "$H Postingan >$G " .$data_name."\r\n";
    echo "$H ID Postingan >$P ".$data_id."\r\n";
    echo "$G======== SUKSES =======\r\n";
    } else {
        return true;
        }
}
?>
