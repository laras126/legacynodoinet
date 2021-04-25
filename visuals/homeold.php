<?php

$language=$_GET["language"];

include_once './localsettings.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>No DOi</title>
	<meta name="description" content="The Land, Life, and Language of Fatties" />
	<meta name="keywords" content="fatty, no doi, nodoinet, foofa, nijah, lara schenck, proquorn, TWH, LNF/NMO, nere, e, thingsingeneral" />
	<link rel="icon" type="type/png" href="./images/favicon.png" />
	<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" href="./basic.css" />
	<script language="JavaScript1.2" src="./javascript/jquery-1.3.2.js" type="text/javascript">
	</script>
	
<style type="text/css" >
.menu {
	margin:auto 3% auto 3%;
	}

#landglow-hidden {
	visibility:hidden;
	position:absolute;
	z-index:3;
	}
	
</style>

</head>

<body bgcolor="ffffff" >
<img src="./images/home/landglow.png" style="display:none" alt="Land"/>


<script type="text/javascript">
function makevisible() {
	landglow-hidden.style.visibility='visible';
	}
</script>



<div id="landglow-hidden">
	<img src="./images/home/landglow.png" alt="Land"/>
</div>


<div id="homeglobal">
<div id="menudiv">		
	<div class="menu" id="landtxt">
		<a href="./land.php?language=<?php echo($language); ?>" onmouseover="makevisible()" onmouseout="htm()" > <img src="<?php echo $landtxt; ?>" alt="Land" /> </a>
	</div>
	
	<div class="menu" id="lifetxt">
		<a href="./nothereyet.php?language=<?php echo($language); ?>" onmouseover="stm(Text[1],Style[100])" onmouseout="htm()" > <img src="<?php echo $lifetxt; ?>" alt="Life" /> </a>
	</div>

	<div class="menu" id="languagetxt">
		<a href="./language.php?language=<?php echo($language); ?>" onmouseover="stm(Text[3],Style[100])" onmouseout="htm()" > <img src="<?php echo $languagetxt; ?>" alt="Language" /> </a>
	</div>
		</div>
		
	<div id="LLL">
		<img src="./images/home/homeLLLsky.png" alt="Land, Life, and Language" />
	</div>
	
</div>

</body>

</html>