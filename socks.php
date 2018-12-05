<?php    
	function ngegas(){
	$url = 'https://api.getproxylist.com/proxy?protocol[]=socks5';
    $hh = curl_init();
    curl_setopt($hh, CURLOPT_URL, $url);
    curl_setopt($hh, CURLOPT_RETURNTRANSFER, true);
    $resp = curl_exec($hh);
    curl_close($hh);
    $resp = array(json_decode($resp));
   	$helmy =  $resp[0]->ip.':'.$resp[0]->port;
   	$speed = $resp[0]->downloadSpeed;
    $gas= print "\nProxy nya : ". $helmy."\nDownload Speed : ".$resp[0]->downloadSpeed."\n";
}
ngegas()
		
//  $print_r($resp);
?>