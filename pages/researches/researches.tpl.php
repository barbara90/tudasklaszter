<?php
   $options = array(
   "location" => "http://localhost/tudasklaszter/researches/soapServer.php",
   "uri" => "http://localhost/tudasklaszter/researches/soapServer.php",
   'keep_alive' => false,
   );		
   try {
	$kliens = new SoapClient("http://localhost/tudasklaszter/researches/webSzolgaltatas.wsdl", $options);
	echo $kliens->oldalCim()."<br>"; 
	echo $kliens->uzenet()."<br>";
	echo $kliens->ido()."<br>"; 
   } catch (SoapFault $e) {
		var_dump($e);
   }
?>
