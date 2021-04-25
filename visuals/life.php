<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>NODOI</title>
	<meta name="description" content="The Land, Life, and Language of Fatties" />
	<meta name="keywords" content="fatty, nodoi, fatties, hats, horns, proquorns, WICWOs, foofa, nijah, lara schenck, proquorn, TWH, LNF/NMO, nere, e, thingsingeneral" />
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

<style type="text/css">
/*<![CDATA[*/

#Carousel {
        left:150px;
        top:50px;
        }
        
#snapshot {
        visibility:hidden;
        }
/*]]>*/
</style>

<!--*********carousel slideshow script**********-->

<script type="text/javascript">
//<![CDATA[

/***********************************************
* Carousel Slideshow script- � Ger Versluis 2003
* Permission granted to DynamicDrive.com to feature script
* This notice must stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

/********************************************************
        Create a div with transparent place holder in your html 
        <div id="Carousel" style="position:relative">
                <img src="placeholder.gif" width="404" height="202">
        <\/div>
        placeholder width:
                 4 sided: 1.42 * carousel image width + 3
                 6 sided: 2 * carousel image width +4
                 8 sided: 2.62 * carousel image width + 5
                12 sided: 3.87 * carousel image width + 7
        placeholder height: 
                carousel image height+2

        Insert onload in body tag
                <body onload="Carousel()">      
*********************************************************/

// 7 variables to control behavior
        var Car_Image_Width=400;
        var Car_Image_Height=600;
        var Car_Border=true;            // true or false
        var Car_Border_Color="white";
        var Car_Speed=4;
        var Car_Direction=true;         // true or false
        var Car_NoOfSides=6;            // must be 4, 6, 8 or 12

/* array to specify images and optional links. 
        For 4 sided carousel specify at least 2 images
        For 6 sided carousel specify at least 3
        For 8 sided carousel specify at least 4
        For 12 sided carousel specify at least 6
 If Link is not needed keep it ""
*/
        Car_Image_Sources=new Array(
                "images/lifeimgs/hatty4front.png","",
                "images/lifeimgs/hatsoff4front.png","",
                "images/lifeimgs/pinpoint4front.png","", //this slide isn't linked
                "images/lifeimgs/hps4front.png","", // NOTE No comma after last line
                "images/lifeimgs/horns/hornlevel2.png",""
                );

/***************** DO NOT EDIT BELOW **********************************/
        CW_I=new Array(Car_NoOfSides/2+1);C_ClcW=new Array(Car_NoOfSides/2);
        C_Coef=new Array(
                3*Math.PI/2,0,3*Math.PI/2,11*Math.PI/6,Math.PI/6,3*Math.PI/2,7*Math.PI/4,       0,
                Math.PI/4,3*Math.PI/2,5*Math.PI/3,11*Math.PI/6,0,Math.PI/6,Math.PI/3);
        var C_CoefOf=Car_NoOfSides==4?0:Car_NoOfSides==6?2:Car_NoOfSides==8?5:9;
        C_Pre_Img=new Array(Car_Image_Sources.length);
        var C_Angle=Car_Direction?Math.PI/(Car_NoOfSides/2):0,C_CrImg=Car_NoOfSides,C_MaxW,C_TotalW,
        C_Stppd=false,i,C_LeftOffset,C_HalfNo=Car_NoOfSides/2;

        function Carousel(){
                if(document.getElementById){
                        for(i=0;i<Car_Image_Sources.length;i+=2){
                                C_Pre_Img[i]=new Image();C_Pre_Img[i].src=Car_Image_Sources[i]}
                        C_MaxW=Car_Image_Width/Math.sin(Math.PI/Car_NoOfSides)+C_HalfNo+1;
                        Car_Div=document.getElementById("Carousel");
                        for(i=0;i<C_HalfNo;i++){
                                CW_I[i]=document.createElement("img");Car_Div.appendChild(CW_I[i]);     
                                CW_I[i].style.position="absolute";
                                CW_I[i].style.top=0+"px";
                                CW_I[i].style.height=Car_Image_Height+"px";
                                if(Car_Border){
                                        CW_I[i].style.borderStyle="solid";
                                        CW_I[i].style.borderWidth=1+"px";
                                        CW_I[i].style.borderColor=Car_Border_Color}
                                CW_I[i].src=Car_Image_Sources[2*i];
                                CW_I[i].lnk=Car_Image_Sources[2*i+1];
                                CW_I[i].onclick=C_LdLnk;
                                CW_I[i].onmouseover=C_Stp;
                                CW_I[i].onmouseout=C_Rstrt}
                        CarImages()}}

        function CarImages(){
                if(!C_Stppd){
                        C_TotalW=0;
                        for(i=0;i<C_HalfNo;i++){
                                C_ClcW[i]=Math.round(Math.cos(Math.abs(C_Coef[C_CoefOf+i]+C_Angle))*Car_Image_Width);
                                C_TotalW+=C_ClcW[i]}
                        C_LeftOffset=(C_MaxW-C_TotalW)/2;
                        for(i=0;i<C_HalfNo;i++){
                                CW_I[i].style.left=C_LeftOffset+"px";
                                CW_I[i].style.width=C_ClcW[i]+"px";
                                C_LeftOffset+=C_ClcW[i]}
                        C_Angle+=Car_Speed/720*Math.PI*(Car_Direction?-1:1);
                        if((Car_Direction&&C_Angle<=0)||(!Car_Direction&&C_Angle>=Math.PI/C_HalfNo)){
                                if(C_CrImg==Car_Image_Sources.length)C_CrImg=0;
                                if(Car_Direction){
                                        CW_I[C_HalfNo]=CW_I[0];
                                        for(i=0;i<C_HalfNo;i++)CW_I[i]=CW_I[i+1];
                                        CW_I[C_HalfNo-1].src=Car_Image_Sources[C_CrImg];
                                        CW_I[C_HalfNo-1].lnk=Car_Image_Sources[C_CrImg+1]}
                                else{   for(i=C_HalfNo;i>0;i--)CW_I[i]=CW_I[i-1];
                                        CW_I[0]=CW_I[C_HalfNo];
                                        CW_I[0].src=Car_Image_Sources[C_CrImg];
                                        CW_I[0].lnk=Car_Image_Sources[C_CrImg+1]}
                                C_Angle=Car_Direction?Math.PI/C_HalfNo:0;C_CrImg+=2}}
                setTimeout("CarImages()",50)}

        function C_LdLnk(){if(this.lnk)window.location.href=this.lnk}
        function C_Stp(){this.style.cursor=this.lnk?"pointer":"default";C_Stppd=true;}
        function C_Rstrt(){C_Stppd=false}
//]]>
</script>

<style type="text/css">
/*<![CDATA[*/

 div.c1 {position:relative}
 
/*]]>*/
</style>

</head>

<body onload="Carousel()">      




<div id="landglobal">
	
	<div id="Carousel" class="c1"></div>

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
			
			<a href="therange.php" onmouseover="MM_swapImage('therange','','images/text/english/therangeeng.png',1)" onmouseout="MM_swapImgRestore()">
			<img src="images/text/nodoinese/therangeglyph.png" name="therange" alt="the range" /> 
			</a>
			
	</div>
	
	<div id="snapshot">
		<img src="images/nothereyetsnapshot.png" alt="nothereyet" />
	</div>
	
	<div id="homelink">
		<a href="home.php" onmouseover="MM_swapImage('homelink','','images/home/arrow.png',1)" onmouseout="MM_swapImgRestore()">
		<img src="images/home/arrow2.png" name="homelink" alt="homelink" /> </a>
	</div>
		
</div>

	
</body>

</html>