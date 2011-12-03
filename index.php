<?

    // require common code
    require_once("helper/common.php");
    
    //make a shorter variable for the session id
    $id = $_SESSION["id"];
    
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
	Grilleboy is now open for online service.<br />
	Developers: Morgan Paull, David Su, Christopher Walleck
	<br>
	</div></div>
	
	<div style="padding-bottom: 2em;" ALIGN=center>
	<table>
	
	<tr>
	<img src="http://www.grilling.com/img/bucket_food.png" alt="food"/>
	</tr>
	
	<tr>
	<td style="padding-left: 1.5em;" valign="top">
	<br>
	<div style="color: #800; font-weight: bold; padding-bottom: .2em; text-align: left;">House</div>
	
	<td align="right" valign="bottom">
	<form action="index2.php" method="get" name="order_info">
	<select name = "house" onchange="go(this)">
	<option>Adams</option>
	<option>Cabot</option>
	<option>Currier</option>
	<option>Dunster</option>
	<option>Eliot</option>
	<option>Kirkland</option>
	<option>Leverett</option>
	<option>Lowell</option>
	<option>Mather</option>
	<option>Pforzheimer</option>
	<option>Quincy</option>
	<option>Winthrop</option>
	</select>
	<?//</form>?>
	
	</td>
	</tr>
	
	<table width="500" border="0" style="background-color:#FFFFFF; text-align:top;">
	<tr>
	<td colspan="2" style="color: #600; font-weight: bold; text-align: center; background-color:#FFFFFF"></td>
	<h1>Lunch & Dinner</h1>
	<h2 style="font-weight: bold; font-size: 100%">GRILL ORDER FORM</h2>
	</td>
	</tr>
	
	<tr valign="top">
	<td style="width:150px; text-align:top;">
	<font face=Times_New_Roman size=2>
	<input type="checkbox" name="order[]" value="hamburger" onclick="">
	Hamburger<br />
	<input type="checkbox" name="order[]" value="cheeseburger" onclick="">
	Cheeseburger<br />
	<input type="checkbox" name="order[]" value="turkeyburger" onclick="">
	Turkeyburger<br />
	<input type="checkbox" name="order[]" value="grilled_chicken" onclick="">
	Grilled Chicken<br />
	<input type="checkbox" name="order[]" value="chickwich" onclick="">
	Chickwich<br />
	<input type="checkbox" name="order[]" value="garden_burger" onclick="">
	Garden Burger <img src="http://www.dining.harvard.edu/images/menus_nutrition/icon_veg.gif"><br />
	<input type="checkbox" name="order[]" value="crispy_fish_sandwich" onclick="">
	Crispy Fish Sandwich<br />
	<input type="checkbox" name="order[]" value="hot_dog" onclick="">
	Hot Dog<br />
	<input type="checkbox" name="order[]" value="grilled_cheese" onclick="">
	Grilled Cheese<br />
	<input type="checkbox" name="order[]" value="grilled_ham_and_cheese" onclick="">
	Grilled Ham and Cheese<br />
	<input type="checkbox" name="order[]" value="halal_hot_dog" onclick="">
	Halal Hot Dog<br />
	<input type="checkbox" name="order[]" value="halal_hamburger" onclick="">
	Halal Hamburger<br />
	</td>
	
	<td style="width:125px; text-align:top;">
	<font face=Times_New_Roman size=2>
	<input type="checkbox" name="order[]" value="bean_burrito" onclick="">
	Bean Burrito <img src="http://www.dining.harvard.edu/images/menus_nutrition/icon_vgn.gif"><br />
	<input type="checkbox" name="order[]" value="tofu_dog" onclick="">
	Tofu Dog <img src="http://www.dining.harvard.edu/images/menus_nutrition/icon_vgn.gif"><br />
	<input type="checkbox" name="order[]" value="boca_burger" onclick="">
	Boca Burger <img src="http://www.dining.harvard.edu/images/menus_nutrition/icon_vgn.gif"><br />
	<input type="checkbox" name="order[]" value="chik'n_patty" onclick="">
	Chik'n Patty <img src="http://www.dining.harvard.edu/images/menus_nutrition/icon_vgn.gif"><br /><br>
	<input type="text" name="eggs_number" size="1" maxlength="1" onclick="">
	Cage-free Eggs<br />
	style? <input type="text" name="eggs_style" size="12" maxlength="15" onclick=""><br />
	<input type="checkbox" name="order[]" value="egg_beaters" onclick="">
	Egg Beaters<br />
	<input type="checkbox" name="order[]" value="egg_whites" onclick="">
	Egg Whites Only<br />
	<input type="checkbox" name="order[]" value="scrambled_eggs" onclick="">
	Scrambled Eggs<br/>
	</td>
	</tr>
	
	<tr style="text-align:left;">
	<td colspan="2" style="background-color:#FFFFFF; text-align:center;">
	<input type="checkbox" name="cheese" onclick="">
	Please add <b>cheese</b> to my grill order
	</td>
	</tr>
	
	<tr style="text-align:left;">
	<td colspan="2" style="background-color:#FFFFFF; text-align:center;">
	<input type="text" name="comments" cols="40" rows="2">Comments!</textarea>
	</td>
	</tr>
	</table>
	
	
	<div id="identity" ALIGN=center>
	<br>
	<tr>
	<td>Name:</td>
	<td><input name="name" type="text" size="13" value="" maxlength="15"></td>
	</tr>
	<br>
	<tr>
	<td>Harvard ID#:</td>
	<td><input name="id" type="text" size="7" maxlength="8"></td>
	</tr>
	<tr>
	<br>
	<td><input type="submit" value="Order" action="index2.php"></td>
	</form>
	</tr>
	</div>
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

