<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>NODOI</title>
	<meta name="description" content="The Land, Life, and Language of Fatties" />
	<meta name="keywords" content="fatty, the range, NODOI, foofa, nijah, lara schenck, proquorn, TWH, LNF/NMO, nere, e, thingsingeneral" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" href="basic.css" type="text/css" />
	
<!--watermark script*******************-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="javascript/staticlogo.js">

/***********************************************
* Site Logo script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Project Page at http://www.dynamicdrive.com for full source code
***********************************************/

</script>

<script type="text/javascript">
//<![CDATA[

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
 var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
 if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
 var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
 var p,i,x; if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
 d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
 if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
 for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
 if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
 var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
 if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

//]]>
</script>

<script type="text/javascript">
//<![CDATA[

/***********************************************
* DHTML slideshow script-  � Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice must stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var photos=new Array()
var photoslink=new Array()
var which=0

//define images. You can have as many as you want:
photos[0]="images/lifeimgs/therange/bluefattyrange1.png"
photos[1]="images/lifeimgs/therange/bluefattyrange2.png"
photos[2]="images/lifeimgs/therange/bluefattyrange3.png"
photos[3]="images/lifeimgs/therange/bluefattyrange4.png"
photos[4]="images/lifeimgs/therange/bluefattyrange5.png"
photos[5]="images/lifeimgs/therange/bluefattyrange6.png"
photos[6]="images/lifeimgs/therange/bluefattyrange7.png"
photos[7]="images/lifeimgs/therange/bluefattyrange8.png"

//Specify whether images should be linked or not (1=linked)
var linkornot=0

//Set corresponding URLs for above images. Define ONLY if variable linkornot equals "1"
photoslink[0]=""
photoslink[1]=""
photoslink[2]=""

//do NOT edit pass this line

var preloadedimages=new Array()
for (i=0;i<photos.length;i++){
preloadedimages[i]=new Image()
preloadedimages[i].src=photos[i]
}


function applyeffect(){
if (document.all && photoslider.filters){
photoslider.filters.revealTrans.Transition=Math.floor(Math.random()*23)
photoslider.filters.revealTrans.stop()
photoslider.filters.revealTrans.apply()
}
}



function playeffect(){
if (document.all && photoslider.filters)
photoslider.filters.revealTrans.play()
}

function keeptrack(){
window.status="Image "+(which+1)+" of "+photos.length
}


function backward(){
if (which>0){
which--
applyeffect()
document.images.photoslider.src=photos[which]
playeffect()
keeptrack()
}
}

function forward(){
if (which<photos.length-1){
which++
applyeffect()
document.images.photoslider.src=photos[which]
playeffect()
keeptrack()
}
}

function transport(){
window.location=photoslink[which]
}

//]]>
</script>

<style type="text/css">

#snapshot {
	position:relative;
	height:700px;
	width:500px;
	left:200px;
	bottom:304px;
	z-index:1;
	
	}
	
.proquorn {
	position:relative;
	height:700px;
	width:500px;
	left:0px;
	bottom:700px;
	z-index:2;
	
	}
	
#homelink {
	z-index:3;
	position:relative;
	bottom:540px;
	padding:0em 0em 0em 1.3em;
	
	}

#pointer {
	height:120px;
	width:50px;
	left:570px;
	position:relative;
	z-index:3;
	bottom:820px;
	padding:0em 1em;
	
}


</style>

</head>

<body>

<div id="landglobal">

	<div class="menudiv">
	
			<a href="hats.php" onmouseover="MM_swapImage('hats','','images/text/english/hateng.png',1)" onmouseout="MM_swapImgRestore()">
			<img src="images/text/nodoinese/hatglyph.png" name="hats" alt="hats" /> 
			</a>
	
			<a href="horn.php" onmouseover="MM_swapImage('horn','','images/text/english/horneng.png',1)" onmouseout="MM_swapImgRestore()">
			<img src="images/text/nodoinese/hornglyph.png" name="horn" alt="horn" /> 
			</a>
	
			<a href="proquorns.php" onmouseover="MM_swapImage('proquorns','','images/text/english/proquornseng.png',1)" onmouseout="MM_swapImgRestore()">
			<img src="images/text/nodoinese/proquornglyph.png" name="proquorns" alt="proquorns" /> 
			</a>
			
			<div id="currentland">
			<img src="images/text/english/therangeeng.png" name="therange" alt="the range" /> 
			</div>
			
	</div>
	
	<div id="snapshot">
		
		<img src="images/fatties/bluefatty.png" height="700px" width="500px" alt="redishpink Fatty" />
	
	</div>
	
	<div id="homelink">
		<a href="life.php" onmouseover="MM_swapImage('homelink','','images/home/arrow.png',1)" onmouseout="MM_swapImgRestore()">
		<img src="images/home/arrow2.png" name="homelink" alt="pointer left" /> </a>
	</div>
	
	<div id="slideshow">
		
		<script type="text/javascript">
		//<![CDATA[

			if (linkornot==1)
			document.write('<a href="javascript:transport()">')
			document.write('<img src="'+photos[0]+'" name="photoslider" height="700px" width="500px" style="filter:revealTrans(duration=2,transition=23)" border=0>')
			if (linkornot==1)
			document.write('</a>')
		
		//]]>
		</script>
		
	</div>
	
	<div id="pointers">
	
		<div class="pointer_r">
		<a href="#" onclick="forward();return false" onmouseover="MM_swapImage('pointerright','','images/home/pointer_r.png',1)" onmouseout="MM_swapImgRestore()">
				<img src="images/home/pointer_r2.png" name="pointerright" alt="pointer right" /></a>
		</div>
	
		<div class="pointer_l">
		<a href="#" onclick="backward();return false" onmouseover="MM_swapImage('pointerleft','','images/home/pointer_l.png',1)" onmouseout="MM_swapImgRestore()">
				<img src="images/home/pointer_l2.png" name="pointerleft" alt="pointer right" /></a>
		</div>	
		
	</div>
		
</div>

	
</body>

</html>