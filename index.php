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
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 content">
				<h1>xkcd Password Generator</h1>
				<p class="description">Description: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<form>
					<label for='word_num'>Number of Words</label>
					<input maxlength=1 type='text' name='word_num'>  (Max 9)
					<br>
					<input type='checkbox' name='include_number'> 
					<label for='include_number'>Include a number</label>
					<br>
					<input type='checkbox' name='include_symbol'> 
					<label for='include_symbol'>Include a symbol</label>
					<br>
					<input type='submit' class='btn btn-primary' value='Generate Password'>
				</form>
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-0 col-xs-0"></div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<img src="images/password_comic.png" alt="Password comic." class="img-responsive">
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