<?php
//----------------------------------- Lecture 3 ---------------------------------------->
//<---------- Example 1 ---------->
	$carrot = "carrot";

	if(!is_bool($carrot)){ /*if carrot isnt a boolean variable then it will echo that it isnt*/
		echo "carrot is not a boolean variable"; /*this will be echoed*/
	}
	else{
		echo "something is wrong, carrot is not supposed to be a boolean"; /*if carrot is a boolean then it will echo this*/
	}

	echo "<br>";	
//<---------- Example 2 ----------->
	$lemons = NULL;

	if(is_null($lemons)){ /*checks if lemon variable is anything */
		echo "nothing is stored inside the lemon variable"; /*this will be echoed*/
	}

	else{
		echo "lemons stores information";
	}

	echo "<br>";
//<---------- Example 3 ----------->	
	$twentyone = 9 + 10;

	if(is_integer($twentyone)) { /*if 9 + 10 is an integer that it'll echo that it is*/
		echo "9 + 10 is an integer";/*this should run*/
	}

	else{
		echo "9 + 10 isn't an integer";
	}
