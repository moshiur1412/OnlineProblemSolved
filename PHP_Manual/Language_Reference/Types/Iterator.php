<?php

class hillstations implements Iterator{
	
	private $places = [];
	private $count = 0;
	private $index = 0;

	public function current(){
		echo "Current called---<br>";
		return $this->places[$this->index];
	}

	public function next(){
		echo "Next called---<br>";
		$this->index++;
	}

	public function rewind(){
		echo "Rewind called---<br>";
		$this->index = 0;
	}

	public function key(){
		echo "Key called---<br>";
		return $this->index;
	}

	public function valid(){
		return isset($this->places[$this->key()]);
	}

	public function reverse(){
		$this->places = array_reverse($this->places);
		$this->rewind();
	}

	public function addPlace(String $place){
		array_push($this->places, $place);
		$this->count++;
	}

	public function removePlace($place){
		$index = array_serach($place, $this->places);
		if(isset($this->places[$index])){
			unset($this->places[$index]);
			$this->count--;
		}
	}

	public function totalCount(){
		return $this->count;
	}
}

$hillstation = new hillstations();
$hillstation->addPlace("USA");
$hillstation->addPlace("London");
$hillstation->addPlace("Berlin");
$hillstation->addPlace("Paris");
$hillstation->addPlace("Russia");
$hillstation->addPlace("Morroco");


foreach($hillstation as $key => $value){
	echo "key: ".$key. " => ";
	echo "value: ".$value."<br>";
}


$hillstation->reverse();
echo "<hr>";

foreach($hillstation as $key => $value){
	echo "key: ".$key." => ";
	echo "value: ".$value. "<br>";
}



