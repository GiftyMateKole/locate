<?php
include_once("http://52.89.116.249/~gifty.mate-kole/locate/adb.php");

class func extends adb{
	function func(){
	}
	
	
	function reg($name,$pword,$email,$phone,$org){
		
		$strQuery="insert into reg set Name='$name',
										Password='$pword',
										   Organisation='$org', 
										   Phone='$phone', 
										   Email='$email'";
		
	    $result=$this->query($strQuery);
		return $result;
		
		
	}
	
	function getreq($id){
		$strQuery="select * from req where member='$id'";
		return $this->query($strQuery);
	}
	
	function getres($id){
		$strQuery="select * from book where member='$id'";
		return $this->query($strQuery);
	}
	
	function getroo($id){
		$strQuery="select * from hotel where member='$id'";
		return $this->query($strQuery);
	}
}

	
?>