<?php
/*
Hannah Riggs
Project #2
CSCI E-15: Dynamic Web Applications
*/ 

	// create array of words
	$word_list = Array(
    	"Figs",
    	"Bananas",
    	"Milk",
    	"Cats",
    	"Fair",
    	"Sun",
   	 "Moon",
   	 "Stars",
   	 "Thrones"
   	 );
   	 
	// array of symbols
	$symbols_list = Array(
		"~",
		"!",
		"@",
		"#",
		"$",
		"%",
		"^",
		"&",
		"*",
		"(",
		")",
		"-",
		"_",
		"+",
		"="
	);
   	 
    
    // function to generate password based on user input
    function get_password($words, $symbols) {
    	
    	// if user has not tried to generate a password yet, show nothing
    	if (count($_POST) == 0) {
    		return;
    	}
    	
    	// store initial values
    	$password = ""; 
    	$num_count = $_POST["number_num"];
    	$symbol_count = $_POST["symbol_num"];
    	
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

    		// add random word to password
    		$password .= $words[rand(0, count($words) - 1)]; 
    		
    		// do not add separator to end of password
    		if ($i != $_POST['word_num'] - 1) {
    			
    			// add separator to password
    			$password .= "-"; 
    			
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
?>