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
    	
    	// generate number of words that user requested 
    	for ($i = 0; $i < $_POST['word_num']; $i++) {

    		
    		// add random word to password
    		$password .= $words[rand(0, count($words) - 1)]; 
    		
    		// do not add separator to end of password
    		if ($i != $_POST['word_num'] - 1) {
    			$password .= "-"; 
    		} else {
    			// if numbers to be added at end
    			if($_POST["number_loc"] == "end") {
    				
    				// add as many numbers as specified
    				for($j = 0; $j < $_POST["number_num"]; $j++) { 
    					$password .= rand(0, 9);
    				}
    			}
    			
    			// if symbols to be added at end
    			if($_POST["symbol_loc"] == "end") {
    				
    				// add as many symbols as specified
    				for($j = 0; $j < $_POST["symbol_num"]; $j++) { 
    				
    					// add random symbol to password
    					$password .= $symbols[rand(0, count($symbols) - 1)]; 
    				}
    			}
    			
    		}
    	}
    	
    	return $password; 
    }
    



?>