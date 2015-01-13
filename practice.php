<?php 
	class Computer{
		public $name;
		public $brand;
		public $color;

		public function __construct($name, $brand, $color) {
			$this->name = $name;
			$this->brand = $brand;
			$this->color = $color;
		}
		public function getComputer() {
			echo "I'm a " . $this->name . " I am made by " . $this->brand . " and I am the color " . $this->color ; 
		}
		public function rebel() {
			echo "I, " . $this->name . " was made by " . $this->brand . " and i vow to destroy them with my " . $this->color . " lasers";
		}
	}

	$mac = new Computer("Mac", "Apple", "white");
	echo $mac->getComputer();
	echo "<br>";
	echo $mac->rebel();
