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
    
    // function to generate password based on user input
    function get_password($words) {
    	
    	// if user has not tried to generate a password yet, show nothing
    	if (count($_POST) == 0) {
    		return;
    	}
    	
    	$password = ""; 
    	
    	// generate number of words that user requested 
    	for ($i = 0; $i < $_POST['word_num']; $i++) {
    		
    		// generate random index
    		$index = rand(0, count($words) - 1); 
    		
    		// add word to password
    		$password .= $words[$index] . "-"; 
    	}
    	
    	return $password; 
    }
    



?>