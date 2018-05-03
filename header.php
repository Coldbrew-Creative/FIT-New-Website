<?php

	echo "
	
	<!doctype html>
<html>
<head>


	

  <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
  <meta charset='UTF-8'/>
  <!-- Favicon and Title-->
	";

	if($title) {
		echo "<title>" . $title . "</title>";
	} else {
		echo "<title>FIT — First Impression Transportation</title>";
	}
	
	if($mdesc) {
		echo "
		<meta name=\"description\" content=\"" . $mdesc . "\"/>";
	} else {
		echo '
		<meta name="description" content="Providing the Best Limo Service in the Bay!"/>';
	}
	
	if($mkeywords) {
		echo "
		<meta name=\"keywords\" content=\"" . $mkeywords . "\"/>";
	} else {
		echo '
		<meta name="keywords" content=""/>';
	}
	
	echo "
	
  <link rel='shortcut icon' href='#'/>
  <!-- META TAGS-->
  <meta property='og:title' content='First Impression Transportation'/>
  <meta property='og:description' content='Providing the Best Limo Service in the Bay!'/>
  <!-- CSS CDNs-->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
  <!-- MY CSS FILE-->
  <link rel='stylesheet' href='/public/css/design.css' media='all'/>
	


</head>
	</html>
	"


?>
