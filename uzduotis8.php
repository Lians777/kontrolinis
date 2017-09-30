<?php 



 class person {

 	public $name;
 	public $surname;
 	public $age;

 	

 	public function asmen_duomenys {

 	echo $this->name .,. $this->surname ., . $this->age . ;
 	}

 	


 	public function contruction ($a, $s, $d) {
 		$this->$name = $a;
 		$this->$surname =$s;
 		$this->$age = $d;


 	}

class staff {
	public $name;
 	public $surname;
 	public $darbuotojas;

public function asmen_duomenys {

	echo $this->name .,. $this->surname ., . $this->darbuotojas . ;
}
}
class client {

}

 

}


$stff = new staff ();

$client = new client ();