<?php
function curl($url, $ua, $data = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cok.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$result = curl_exec($ch);
	return $result;

}

function getcok($url, $ua = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cok.txt');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	return $result;
}
$ua = array(
"user-agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-J500G Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36",
"content-type: application/json",
"referer: https://web.apg9.com/register?code=aokf",
);
echo "Reff:  ";
$reff = trim(fgets(STDIN));
echo "Brapa: ";
$brp = trim(fgets(STDIN));
for($a=0; $a<$brp; $a++){
$api = file_get_contents("https://api.namefake.com/indonesian-indonesia/");
$j = json_decode($api, true);
$user = $j['username'];
$nmr = rand(00000,99999);
$dat = array("Account" => "$user", "Password" => "akunweb123", "Flag" =>"$reff", "PhoneNo" => "87841174$nmr");
$data = json_encode($dat);
$cok = getcok("https://web.apg9.com/api/AppService/AddUserInfo", $ua);
$send = curl("https://web.apg9.com/api/AppService/AddUserInfo", $ua, $data);
if($send){
    echo "Berhasil Daftar [$send]\n";
}else{
    echo "Gagal\n";
}
}
?>
