<?php 
//-------------------------------------------Lecture 4----------------------------------------------------------
	//<----------------Example 1----------------------->	
	class Food {
		public $name;
		public $color;
		public $size;
		public $taste;
		//public $vegetable;
		//public $meat;

		function __construct($name, $color, $size, $taste/*$vegetable, $meat*/) {
			$this->name =$name;
			$this->color = $color;
			$this->size = $size;
			$this->taste = $taste;
			//$this->vegetable = $vegetable;
			//$this->meat = $meat;
		}

		function getName() {
			echo "I'm a food. I am a " . $this->name ; 
		}
	}

	class Vegetable extends Food {
		function __construct($name, $color, $size, $taste, $vegetable) {
			parent::__construct($name, $color, $size, $taste);
			$this->vegetable = $vegetable;
		}
		function greet() {
			echo $this->vegetable;
		}
	}

	class Meat extends Food {
		function __construct($name, $color, $size, $taste, $meat) {
			parent::__construct($name, $color, $size, $taste);
			$this->meat = $meat;
		}
		function hello() {
			echo $this->meat;
		}
	}

	$veggie = new Vegetable("cucumber", "green", "a'ight", "doesnt", "cucumber", "aiufbhkal");
	echo $veggie->getName();
	echo "<br>";
//<--------Example 2--------->
	class Computer {
		public $processor;
		public $graphicsCards;
		public $motherboard;
		public $fans;
		public $powersupply;
		public $ram;
	
		function __construct($processor, $graphicsCards, $motherboard, $fans, $powersupply, $ram) {
			$this->processor = $processor;
			$this->graphicsCards = $graphicsCards;
			$this->motherboard = $motherboard;
			$this->fans = $fans;
			$this->powersupply = $powersupply;
			$this->ram = $ram;		
		}

		function braggingRights() {
			echo "i have a " . $this->processor . " " . $this->graphicsCards . " and " . $this->ram . "gigs of ram";  
		}
	}

	class Gaming extends Computer {
		function __construct($processor, $graphicsCards, $motherboard, $fans, $powersupply, $ram, $gamingMouse) {
			parent::__construct($processor, $graphicsCards, $motherboard, $fans, $powersupply, $ram);
			$this->gamingMouse = $gamingMouse;
		}
		function masterRace() {
			echo "PC is the master race because of my " . $this->processor . " and to help with aiming i have a " . $this->gamingMouse;
		}  
	}
	class School extends Computer {
		function __construct($processor, $graphicsCards, $motherboard, $fans, $powersupply, $ram, $Potato) {
			parent::__construct($processor, $graphicsCards, $motherboard, $fans, $powersupply, $ram);
			$this->Potato = $Potato;
		}
		function trash() {
			echo "the school laptops are trash cause they have " . $this->processor . "so they are a " . $this->Potato;
			}
	}
	$thing = new Gaming("I5 processor", "doesnt", "matter", "filler", "text", "book", "SteelSeries Sensei");
	echo $thing->masterRace();
	echo "<br>"; 
	$IMO = new School("I3 processors", "doesnt", "matter", "filler", "text", "book", "Potato");
	echo $IMO->trash();
	echo "<br>";
//<-----Example 3---->
	class Clothes {
		public $material;
		public $madeIn;
		public $color;
		public $size;
		public $length;
		public $pattern;
	
		function __construct($material, $madeIn, $color, $size/*$length, $pattern*/) {
			$this->material = $material;
			$this->madeIn = $madeIn;	
			$this->color = $color;
			$this->size = $size;
			//$this->length = $length;
			//$this->pattern = $pattern;	
		}

		function aboutClothes() {
			echo "ayyyyyye I'm made out of " . $this->material . ", I was made in " . $this->madeIn . " and I am " . $this->color;
		}
	}

	class Shirt extends Clothes {
		function __construct($material, $madeIn, $color, $size, $length) {
			parent::__construct($material, $madeIn, $color, $size);
			$this->length = $length;
		}
		function bestShirt() {
			echo "Since I am a shirt i have " . $this->length . " sleeves";
		}  
	}
	class Socks extends Clothes {
		function __construct($material, $madeIn, $color, $size, $pattern) {
			parent::__construct($material, $madeIn, $color, $size);
		}
		function bestSocks() {
			echo "I am a pair of socks with a " . $this->pattern . " pattern";
		}
	}

	$beep = new Clothes("cotton", "china", "grey", "filler", "text", "book");
	echo $beep->aboutClothes();
		
