<?

    // require common code
    require_once("helper/common.php");
    
    //make a shorter variable for the session id
    $id = $_SESSION["id"];
    
    //load GET data into variables
    
    $order = $_GET["order"];

    //TODO: Record the user's order in the database
    print_r($order);

    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<link rel="stylesheet" type="text/css" href="/share/yui/build/reset-fonts/reset-fonts.css">
	<link href="/css/styles.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://www.buddy-icons.info/img/icon/22824.gif" type="image/x-icon" />
	<style type="text/css">
	body
	{
	background-color:#c0c0c0;
	} </style>
	<meta name="keywords" content="Harvard grills grilleboy gboy computer science cs50 david j. malan" />
	<meta name="description" content="Grilleboy by Morgan Paull, David Su, and Chris Walleck lets you order from the house grill online." />
	
	<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = confirm("Leave Grilleboy?")
	if (answer){
	alert("Bye bye!")
	window.location = "http://www.google.com/";
	}
	else{
	alert("Thanks for sticking around!")
	}
	}
	//-->
	</script>
	
	<title>Grilleboy</title>
	</head>
	
	<body class="gboy_orders">
	
	<div id="apps" style="border-bottom: 3px #ccc solid; margin-bottom: 10px; padding-bottom: 0px; padding-left: 5px; padding-top: 5px;">
	<table width="100%">
	<tr>
	<td align="left" style="height: 35px; padding-left: 10px;" valign="middle">
	<a href="http://www.facebook.com"><img src="http://aux4.iconpedia.net/uploads/99893345.png" width=25 height=25>
	<fb:like href="http://grilleboy.cs50.net/" layout="standard" show_faces="false" send="false" action="like" colorscheme="light"></fb:like>
	</td>
	<td align="right" style="padding-right: 10px;" valign="middle">
	<a href="http://bon-app.com" style="color: #600;">Bon-App</a>
	|
	<select onchange="_go(this)">
	<option>CS50 Apps</option>
	<option value="http://courses.cs50.net/">HarvardCourses</option>
	<option value="http://energy.cs50.net/">HarvardEnergy</option>
	<option value="http://events.cs50.net/">HarvardEvents</option>
	<option value="http://ideas.cs50.net/">HarvardIdeas</option>
	<option value="http://maps.cs50.net/">HarvardMaps</option>
	<option value="http://news.cs50.net/">HarvardNews</option>
	<option value="http://tweets.cs50.net/">HarvardTweets</option>
	<option value="http://shuttleboy.cs50.net/">Shuttleboy</option>
	<option value="192.168.56.50/~jharvard/finalproject/">Grilleboy</option>
	</select>
	
	|
	<a href="http://www.cs50.net/" style="color: #000;"><span style="color: #000; font-weight: bold;">CS50</span><span>.net</span></a>
	|
	<a href="http://cs50.tv/" style="color: #000;"><span style="color: #000; font-weight: bold;">CS50</span><span>.tv</span></a>
	|
	<input type="button" onclick="confirmation()" value="Leave Grilleboy">
	</td>
	</tr>
	
	</table>
	</div>
	
	<meta property="og:title" content="Grilleboy"/>
	<div id="fb-root"></div>
	
	<script type="text/javascript">
	
	// <![CDATA[
	
	window.fbAsyncInit = function() {
	FB.init({xfbml: true});
	};
	(function() {
	var e = document.createElement("script");
	e.src = document.location.protocol + "//connect.facebook.net/en_US/all.js";
	e.async = true;
	document.getElementById("fb-root").appendChild(e);
	}());
	// ]]>
	</script>
	
	<div id="logo" ALIGN=center>
	<tr>
	<td><a class="undecorated" href="/" style="color: #600; font-size: 200%; font-weight: bold;">GrilleBoy</a></td>
	</tr>
	</div>
	
	<div id="announcement" ALIGN=center style="color: #001234; font-weight: bold; font-size: 2"><div>
	<br>
	Thanks for using Grilleboy!<br />
	Your order should be ready in about 15 minutes.
	<br>
	</div></div>
	
	<div style="padding-bottom: 2em;" ALIGN=center>
	<table>
	
	
	</table>
	</div>
	
	<br>
	<div id="copyright" ALIGN=center>
	<p>
	Copyright © 2011 -Property of Su, Walleck, and Paull, inc.
	</p>
	</div>
	
	</body>
</html>
