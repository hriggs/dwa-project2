<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

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
	
	<?php require 'includes/logic.php'; ?>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 content">
				<h1>xkcd Password Generator</h1>
				<p class="description">Description: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<form method="POST" action="index.php">
					<label for='word_num'>Number of Words:</label>
					<input maxlength=1 type="text" name="word_num">  (Max 9)
					<br>
					<label for="number_num">Number of Numbers:</label>
					<input maxlength=1 type="text" name="number_num"> (Max 9)
					<br>
					<label for="symbol_num">Number of Symbols:</label>
					<input maxlength=1 type="text" name="symbol_num">  (Max 9)
					<br>
					<label for="separator">Separate Words by:</label>
					<select name="separator">
  						<option value="spaces">Spaces</option>
  						<option value="camel">CamelCase</option>
  						<option value="hyphens">Hyphens</option>
					</select> 
					<br>
					<label for="cases">Word Cases:</label>
					<select name="cases">
  						<option value="upper">All Upper Case</option>
  						<option value="lower">All Lower Case</option>
  						<option value="start">First Letter of Each Capitalized </option>
					</select> 
					<br>
					<input type="submit" class="btn btn-primary" value="Generate Password">
				</form>
				<p><?php echo get_password($word_list); print_r($_POST); ?></p>
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-0 col-xs-0"></div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<a href="http://xkcd.com/936/" target="_blank"><img src="images/password_comic.png" alt="Password comic." class="img-responsive img-thumbnail"></a>
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