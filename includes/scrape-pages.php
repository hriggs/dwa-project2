<?php 

	// array to hold list of words
  	$word_list = [];
	
	// URL starting values
	$first = 1;
	$second = 2; 
	
	// to hold regex matches
	$matches = [];
	
	// loop through pages of words
	for ($i = 0; $i < 1; $i++) {
		
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
			$word_list[] = '"' . trim($matches[0][$j]) . '"'; 
		}
		
		// increment URL values by 2
		$first+=2;
		$second+=2;
	}
	
	$comma_list = "<?php $" . "words = Array(";
	// create comma-separated list of words in array
	for ($k = 0; $k < count($word_list); $k++) {
		$comma_list .= $word_list[$k];
		
		// add commas only if not at end of list		
		if ($k != count($word_list) - 1) {
			$comma_list .= ",";
		} else {
			$comma_list .= "); ?>";
		}
	}
	
	// put file content into file
	file_put_contents("includes/words.php", $comma_list);

?>