<?php
//<------------------------------------------- Lesson 2 ------------------------------------------------------>
//<------ Example 1------>
	class zebra {
		public $firstName;
		public $lastName;
		public $color;

		function __construct($title, $firstName, $lastName, $color) {
			$this­>firstName = $firstName;
			$this­>lastName = $lastName;
			$this­>color = $color;
		}
		function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
}		

	class hippo {
		public $firstName;
		public $lastName;
		public $color;

		function __construct($title, $firstName, $lastName, $color) {
			$this­>firstName = $firstName;
			$this­>lastName = $lastName;
			$this­>color = $color;
		}
		function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
	}
	class tiger {
		public $firstName;
		public $lastName;
		public $color;

		function __construct($title, $firstName, $lastName, $color) {
			$this­>firstName = $firstName;
			$this­>lastName = $lastName;
			$this­>color = $color;
		}
		function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
		}
	}
//<------ Example 2------>
	$zebra1 = new zebra("zeke", "Mendel", "black and white");
	print "zebra 1: {$zebra1­>getName()}";

	$hippo1 = new hippo("Hairy", "Wright", "purple");
	print "hippo 1: {$hippo1­>getName()}";

	$tiger1 = new tiger("Terrance", "Trueman", "orange and black");
	print "tiger 1: {$tiger1­>getName()}";






//<-------------------------------------- Lesson 1 ----------------------------------------------------------->
	class hair {
		//class body
	}
	class clothes{
		//class body
	}
	class shoes {
		//class body
	}

	$hair1 = new hair();
	$hair2 = new hair();

	$clothes1 = new clothes();
	$clothes2 = new clothes();

	$shoes1 = new shoes();
	$shoes2 = new shoes();

	class hair {
		public $color = "brunette";
		public $style = "buzz";
		public $length = "short";
		public $gender = "boy";
	}
	class clothes {
		public $color = "red";
		public $article = "shirt";
		public $size = "medium";
		public $gender = "boy";
	}
	class shoes {
		public $color = "white";
		public $brand = "vans";
		public $size = "10";
		public $type = "shoes";
	}

	public function method1( $argument1, $another1) {
		// stuff
	}

	public function method2( $argument2, $another2) {
		// other stuff
	}
	public function method3( $argument3, $another3) {
		// some other stuff
	}




	class hair{
		public $color = "brunette";
		public $length = "long";
		public $style = "nobody knows";
		public $nature = "curly";

		function getcolor(){
			return "{$this->color}" . "{$this->length}";
		}
	}

	$hair1 = new hair();
	$hair1->color = "brunette";
	$hair1->length = "long";

	print "the hairs color is {$hair1­>getcolor()}."


	class shoe{
		public $color = "white";
		public $brand = "vans";
		public $size = "10";
		public $type = "shoes";

		function getcolor(){
			return "{$this->color}" . "{$this->brand}";
		}
	}

	$shoe1 = new shoe();
	$shoe1->color = "white";
	$shoe1->brand = "vans";

	print "the shoes color is {$shoe1­>getcolor()}."

	class clothes{
		public $color = "red";
		public $article = "shirt";
		public $size = "medium";
		public $gender = "boy";

		function getcolor(){
			return "{$this->color}" . "{$this->article}";
		}
	}

	$clothes1 = new clothes();
	$clothes1->color = "red";
	$clothes1->article = "shirt";

	print "the clothes color is {$clothes1­>getcolor()}."
?>