<?php
	class KutatasokSzolgaltatas {
		public function oldalCim()  {
			return "Tudásklaszter Kutatások";
		}
		public function uzenet(){
			return "Hello".$_SESSION['username'];
		}
		public function ido()  {
			return date("Y-m-d H:i:s",time());
		}
	}
	$options = array(
	"uri" => "http://localhost/tudasklaszter/researches/soapSzerver.php");
	$server = new SoapServer(null, $options);
	$server->setClass('KutatasokSzolgaltatas');
	$server->handle();
?>
