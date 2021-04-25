<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>NODOI</title>
	<meta name="description" content="Fashion a Fatty!" />
	<meta name="keywords" content="fatty, NODOI, facets, function, fasion, titties, penis, face, foofa, nijah, lara schenck, proquorn, TWH, LNF/NMO, nere, e, thingsingeneral" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" href="fashionafatty.css" type="text/css" />
	
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

/***********************************************
* Drag and Drop Script: © Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var dragobject={
z: 0, x: 0, y: 0, offsetx : null, offsety : null, targetobj : null, dragapproved : 0,
initialize:function(){
document.onmousedown=this.drag
document.onmouseup=function(){this.dragapproved=0}
},
drag:function(e){
var evtobj=window.event? window.event : e
this.targetobj=window.event? event.srcElement : e.target
if (this.targetobj.className=="drag"){
this.dragapproved=1
if (isNaN(parseInt(this.targetobj.style.left))){this.targetobj.style.left=0}
if (isNaN(parseInt(this.targetobj.style.top))){this.targetobj.style.top=0}
this.offsetx=parseInt(this.targetobj.style.left)
this.offsety=parseInt(this.targetobj.style.top)
this.x=evtobj.clientX
this.y=evtobj.clientY
if (evtobj.preventDefault)
evtobj.preventDefault()
document.onmousemove=dragobject.moveit
}
},
moveit:function(e){
var evtobj=window.event? window.event : e
if (this.dragapproved==1){
this.targetobj.style.left=this.offsetx+evtobj.clientX-this.x+"px"
this.targetobj.style.top=this.offsety+evtobj.clientY-this.y+"px"
return false
}
}
}

dragobject.initialize()

</script>

<script type="text/javascript">
//<![CDATA[

/***********************************************
* script for onmouseover
***********************************************/

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
photos[0]="images/fashionafatty/greenfill.png"
photos[1]="images/fashionafatty/darkblufill.png"
photos[2]="images/fashionafatty/liteblufill.png"
photos[3]="images/fashionafatty/yellowfill.png"
photos[4]="images/fashionafatty/orangefill.png"
photos[5]="images/fashionafatty/purplufill.png"

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

</head>

<body>

<div id="directions">
	<img onmouseover="MM_swapImage('directions','','images/text/directionsdetail.png',1)" onmouseout="MM_swapImgRestore()" src="images/text/fashionafattytxt.png" name="directions" alt="Fashion a Fatty" /> 
</div>

<div id="fashionfattyglobal">
	
	<div id="snapshot">
		<img src="images/fashionafatty/foutline.png" height="600px" width="400px" alt="redishpink Fatty" />
	</div>
	
	<div id="homelink">
		<a href="home.php" onmouseover="MM_swapImage('homelink','','images/home/arrow.png',1)" onmouseout="MM_swapImgRestore()">
		<img src="images/home/arrow2.png" name="homelink" alt="homelink" /> </a>
	</div>
	
	<div id="slideshow">
		
		<script type="text/javascript">
		//<![CDATA[

			if (linkornot==1)
			document.write('<a href="javascript:transport()">')
			document.write('<img src="'+photos[0]+'" name="photoslider" height="600px" width="400px" style="filter:revealTrans(duration=2,transition=23)" border=0>')
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

<!--****************************
begin draggable Facets code
****************************-->

<div id="dragglobal">
	
	<div class="facesglobal">
		<img src="images/fashionafatty/face1.png" alt="face1" class="drag" />	
		<img src="images/fashionafatty/face2.png" alt="face2" class="drag" />	
		<img src="images/fashionafatty/face3.png" alt="face3" class="drag" />	
		<img src="images/fashionafatty/face4.png" alt="face4" class="drag" />	
	</div>
	
	<div class="mouthsglobal">
		<img src="images/fashionafatty/mouth1.png" alt="mouth1" class="drag" />	
		<img src="images/fashionafatty/mouth2.png" alt="mouth2" class="drag" />	
		<img src="images/fashionafatty/mouth3.png" alt="mouth3" class="drag" />	
		<img src="images/fashionafatty/mouth4.png" alt="mouth4" class="drag" />	
	</div>
	
	<div class="titsglobal">
		<img src="images/fashionafatty/tits5.png" alt="tits5" class="drag" />		
		<img src="images/fashionafatty/tits4.png" alt="tits4" class="drag" />		
		<img src="images/fashionafatty/tits3.png" alt="tits3" class="drag" />		
		<img src="images/fashionafatty/tits2.png" alt="tits2" class="drag" />
		<img src="images/fashionafatty/tits1.png" alt="tits1" class="drag" />	
	</div>
	
	<div class="belliesglobal">
		<img src="images/fashionafatty/belly1.png" alt="belly1" class="drag" />	
		<img src="images/fashionafatty/belly2.png" alt="belly2" class="drag" />	
		<img src="images/fashionafatty/belly3.png" alt="belly3" class="drag" />	
		<img src="images/fashionafatty/belly4.png" alt="belly4" class="drag" />	
	</div>

	<div class="penisesglobal">
		<img src="images/fashionafatty/penis1.png" alt="penis1" class="drag" />	
		<img src="images/fashionafatty/penis2.png" alt="penis2" class="drag" />	
		<img src="images/fashionafatty/penis3.png" alt="penis3" class="drag" />	
		<img src="images/fashionafatty/penis4.png" alt="penis4" class="drag" />	
	</div>
	
</div>

</body>

</html>