<?php
/*
Hannah Riggs
Project #2
CSCI E-15: Dynamic Web Applications
*/ 

	// initialize empty array of words
  	$word_list = [];
   	 
	// array of symbols
	$symbols_list = Array(
		"~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "_", "+", "="
	);
	
	// URL starting values
	$first = 1;
	$second = 2; 
	
	// to hold regex matches
	$matches = [];
	
	// loop through pages of words
	for ($i = 0; $i < 2; $i++) {
		
		// add 0 to beginning of numbers less than 1
		$first = prepend_one($first);
		$second = prepend_one($second);
	
		// store content of website
		$content = file_get_contents("http://www.paulnoll.com/Books/Clear-English/words-" . $first . "-" . $second."-hundred.html");
		
		// add words between <li> </li> tags to list		
		preg_match_all("/(?<=<li>)(.*?)(?=<\/li>)/s", $content, $matches);
	
		// loop through matches
		for ($j = 0; $j < count($matches[0]); $j++) {
			
			// add matches to word list
			$word_list[] = trim($matches[0][$j]); 
		}
		
		// increment URL values by 2
		$first+=2;
		$second+=2;
	}
   	 
  	/*
 	 * Generates a password based on form data.
 	 *
 	 * @param $words words array to use
 	 * @param $symbols symbols array to use
	 * @return password, message about password or nothing if page just loaded.
	 */
    function get_password($words, $symbols) {
    	
    	// if user has not tried to generate a password yet, show nothing
    	if (count($_POST) == 0) {
    		return;
    	}
    	
    	// password can only be generated with valid number input
    	if ((!is_numeric($_POST["word_num"]) && strlen($_POST["word_num"]) >=1) ||
    		(!is_numeric($_POST["number_num"]) && strlen($_POST["number_num"]) >=1) ||
    		(!is_numeric($_POST["symbol_num"]) && strlen($_POST["symbol_num"]) >=1)) {
    		return "Password can only be generated if text fields contain numbers or are left blank.";
    	}
    	
    	// store initial values
    	$password = ""; 
    	$num_count = $_POST["number_num"];
    	$symbol_count = $_POST["symbol_num"];
    	$separator = "";
    	
    	// set up how words are separated
    	if ($_POST["separator"] == "hyphens") { 
    		$separator = "-";
    	} elseif($_POST["separator"] == "spaces") { 
    		$separator = " ";
    	}
    	
    	// generate number of words that user requested 
    	for ($i = 0; $i < $_POST['word_num']; $i++) {
    		
    		// if numbers to be added randomly and still numbers to be added
    		if ($_POST["number_loc"] == "random" && $num_count > 0) {
    			
    			// 50% chance of adding number
    			if (rand(0, 1) == 1) {
    				// add random number
    				$password .= rand(0, 9);
    				$num_count--; 
    			}
    		}
    		
    		// if symbols to be added randomly and still symbols to be added
    		if ($_POST["symbol_loc"] == "random" && $symbol_count > 0) {
    			
    			// 50% chance of adding symbol
    			if (rand(0, 1) == 1) {
    				
    				// add random symbol to password
    				$password .= $symbols[rand(0, count($symbols) - 1)];
    				$symbol_count--; 
    			}
    		}
    		
    		// set case of words
    		if ($_POST["cases"] == "lower") {
    			
    			// add random lower case word
    			$password .= strtolower($words[rand(0, count($words) - 1)]);

    		} elseif ($_POST["cases"] == "upper"){
    			
    			// add random upper case word 
    			$password .= strtoupper($words[rand(0, count($words) - 1)]);
    		} else {
    			
    			// add random word with only 1st letter upper case
    			$password .= ucfirst($words[rand(0, count($words) - 1)]);
    		}

    		// do not add separator to end of password
    		if ($i != $_POST['word_num'] - 1) {
    			
    			// add separator to password
    			$password .= $separator; 
    			
    		} else {
    			
    			// if numbers to be added at end or not all randomly placed numbers used up, add numbers to end
    			for($j = 0; $j < $num_count; $j++) {
    					
    				// add random number to password
    				$password .= rand(0, 9);
    			}

    			// if symbols to be added at end or not all randomly placed symbols used up, add symbols to end
    			for($j = 0; $j < $symbol_count; $j++) { 
    				
    				// add random symbol to password
    				$password .= $symbols[rand(0, count($symbols) - 1)]; 
    			}
    		}
    	}
    	
    	return $password; 
    }
    
   /*
 	 * Return a number with a leading zero if the given number is less than one. 
 	 *
 	 * @param $num number to possibly prepend
	 * @return a number
	 */
    function prepend_one($num) {

		if ($num < 10) {
			$num = "0" . $num;
		}
		
		return $num;
    }
?>