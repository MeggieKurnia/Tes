<?php
class Test{

	private $a;
	private $b;
	
	public function __construct(){
		
	}
	
	public function pertukaran($a,$b){
		$a=$a+$b;
		$b=$a-$b;
		$a=$a-$b;
		$this->a = $a;
		$this->b = $b;
		return array(
		"a"=>$this->a,
		"b"=>$this->b
		);
	}
}
?>