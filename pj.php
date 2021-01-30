<?php

$link = "https://smkpj-yakapi.sch.id/public/post_comments";
$header = array(
"Host: smkpj-yakapi.sch.id",
"Connection: keep-alive",
"Content-Length: ",
"Accept: */*",
"Origin: https://smkpj-yakapi.sch.id",
"X-Requested-With: XMLHttpRequest",
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-J500G Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36",
"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"Referer:https://smkpj-yakapi.sch.id/read/12/pendaftaran-tahun-pelajaran-20202021",
"Cookie: _sessions=uf3npiujmbfmtfgm18999fvnjtd1kocf",
);
function http_get($url){
    global $header;
$ch = curl_init();
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);  
return curl_exec($ch);
    
}
function http_post($url, $data){
$header = array(
"Host: smkpj-yakapi.sch.id",
"Connection: keep-alive",
"Accept: */*",
"Origin: https://smkpj-yakapi.sch.id",
"X-Requested-With: XMLHttpRequest",
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-J500G Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36",
"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"Referer:https://smkpj-yakapi.sch.id/read/12/pendaftaran-tahun-pelajaran-20202021",
"Cookie: _sessions=uf3npiujmbfmtfgm18999fvnjtd1kocf", 
"Content-Length: " .strlen($data)
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);  
return curl_exec($ch);
}

echo "
╭━━━╮╱╱╭╮╱╱╱╱╱╱╱╱╭╮╱╭┳━━━┳╮╱╭╮
┃╭━╮┃╱╱┃┃╱╱╱╱╱╱╱╱┃┃╱┃┃╭━╮┃┃╱┃┃
┃╰━╯┣━━┫┃╭┳┳━╮╭━━┫╰━╯┃┃┃┃┃╰━╯┃
┃╭━━┫┃━┫╰╯╋┫╭╮┫╭╮┣━━╮┃┃┃┃┣━━╮┃
┃┃╱╱┃┃━┫╭╮┫┃┃┃┃╰╯┃╱╱┃┃╰━╯┃╱╱┃┃
╰╯╱╱╰━━┻╯╰┻┻╯╰┻━╮┃╱╱╰┻━━━╯╱╱╰╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╭━╯┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰━━╯Auto Komen";
echo "\n\n\n\33[31;1mPESAN: \033[0m";
$psn = trim(fgets(STDIN));
echo "\033[0m\33[31;1mBERAPA: \033[0m";
$brp = trim(fgets(STDIN));
echo "\nRESULT:\n";
for ($i = 0; $i < $brp; $i++){
$ang = rand(1,12);
$data = "comment_author=BOT&comment_email=BOT404%40gmail.com&comment_url=&comment_content=$psn&comment_post_id=$ang";
$send = http_post($link, $data);
echo "\33[32;1m";
print_r($send);
echo "\033[0m\n";
}
?>
