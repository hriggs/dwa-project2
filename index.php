<!DOCTYPE html>
<!-- 
Hannah Riggs
Project #2
CSCI E-15: Dynamic Web Applications
-->
<html>
<head>
	<meta charset="utf-8" />
	<title>DWA15 - xkcd Password Generator</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	
	<?php require "includes/logic.php"; ?>
	
	<!--
	In order to increase loading time, only include if a words.php file of scraped words not generated yet
	<?php require "includes/scrape-pages.php"; ?>
	-->
	
	<?php require "includes/words.php"; ?>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 content">
				<h1><span class="xkcd">xkcd</span> Password Generator</h1>
				<p class="description">A xkcd password is a password that includes a collection of random words. The idea is that this type of password is easy for humans to remember (unlike the type of passwords we are often told to use that consist of a random assortment of letters, numbers, and symbols), but difficult for a hacker's computer program to guess. See the <a href="#comic">comic strip</a> below to learn more! </p>
				<p class="directions">This web app allows you to generate your own unique xkcd password!<br>Customize your password with the form below or use the default values (four letters with one number and one symbol at the end).<br><span class="bold">Nine is the highest number</span> that can be entered in a text field.</p>
				<form method="POST" action="index.php">
					<label>Number of Words:</label>
					<div class="br">
						<br>
					</div>
					<input maxlength=1 type="text" name="word_num" value="4" class="form-box">
					<br>
					<label>Number of Numbers:</label>
					<div class="br">
						<br>
					</div>
					<input maxlength=1 type="text" name="number_num" value="1" class="form-box">
					<br>
					<label>Number Location:</label>
					<div class="br">
						<br>
					</div>
					<input type="radio" name="number_loc" value="end" checked>At End 
					<input type="radio" name="number_loc" value="random">Random
					<br>
					<label>Number of Symbols:</label>
					<div class="br">
						<br>
					</div>
					<input maxlength=1 type="text" name="symbol_num" value="1" class="form-box">
					<br>
					<label>Symbol Location:</label>
					<div class="br">
						<br>
					</div>
					<input type="radio" name="symbol_loc" value="end" checked>At End 
					<input type="radio" name="symbol_loc" value="random">Random
					<br>
					<label>Separate Words with:</label>
					<div class="br">
						<br>
					</div>
					<select name="separator" class="form-box">
						<option value="hyphens">Hyphens</option>
  						<option value="spaces">Spaces</option>
  						<option value="nospace">No Characters</option>
					</select> 
					<br>
					<label>Word Cases:</label>
					<div class="br">
						<br>
					</div>
					<select name="cases" class="form-box">
						<option value="start">First Letter Capitalized</option>
  						<option value="upper">All Upper Case</option>
  						<option value="lower">All Lower Case</option>
					</select> 
					<br>
					<input type="submit" class="btn btn-primary" value="Generate Password">
				</form>
				<div class="password">
					<p><?php echo get_password($words, $symbols_list); ?></p>
				</div>
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-0 col-xs-0"></div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<a href="http://xkcd.com/936/" target="_blank" id="comic"><img src="images/password_comic.png" alt="Password comic." class="img-responsive img-border"></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-0 col-xs-0"></div>
				</div>
				<footer>Copyright &copy; 2015 Hannah Riggs</footer>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		</div> <!-- end main row -->
	</div> <!-- end container-fluid -->
</body>
</html>