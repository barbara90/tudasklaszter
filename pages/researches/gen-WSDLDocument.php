<?php
	//error_reporting(0);
	require 'soapServer.php';
	require './WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('Szolgaltatas', "http://localhost/tudasklaszter/researches/soapServer.php",
		"http://localhost/tudasklaszter/researches/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("webSzolgaltatas.wsdl" , $wsdlfile);
?>
