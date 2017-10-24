<?php
class motor{
 	public $merk = 'honda';
 	public $cc = 180;

 	public function merknya()
 	{
 		echo 'merknya '.$this-> merk;
 	}
 	public function cc()
 	{
 		echo 'cc'.$this->cc;
 	}
 }
 $motor = new motor;
 $motor->merknya();
 echo "<br>";
 $motor->cc();
?>