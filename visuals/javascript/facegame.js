
<!-- TWO STEPS TO INSTALL FACE MEMORY:

  1.  Copy the coding into the HEAD of your HTML document
  2.  Add the last code into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the HEAD of your HTML document  -->

<HEAD>

<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Kien Caoxuan (kcaoxuan@caoxuan.com) -->
<!-- Web Site:  http://www.caoxuan.com -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
hairL1 = new Image;
hairL1.src = "hairL1.gif";
hairR1 = new Image;
hairR1.src = "hairR1.gif";
hairM1 = new Image;
hairM1.src = "hairM1.gif";
eyeL1 = new Image;
eyeL1.src = "eyeL1.gif";
eyeR1 = new Image;
eyeR1.src = "eyeR1.gif";
cheekL1 = new Image;
cheekL1.src = "cheekL1.gif";
cheekR1 = new Image;
cheekR1.src = "cheekR1.gif";
nose1 = new Image;
nose1.src = "nose1.gif";
mouth1 = new Image;
mouth1.src = "mouth1.gif";
chin1 = new Image;
chin1.src = "chin1.gif";
hairL2 = new Image;
hairL2.src = "hairL2.gif";
hairR2 = new Image;
hairR2.src = "hairR2.gif";
hairM2 = new Image;
hairM2.src = "hairM2.gif";
eyeL2 = new Image;
eyeL2.src = "eyeL2.gif";
eyeR2 = new Image;
eyeR2.src = "eyeR2.gif";
cheekL2 = new Image;
cheekL2.src = "cheekL2.gif";
cheekR2 = new Image;
cheekR2.src = "cheekR2.gif";
nose2 = new Image;
nose2.src = "nose2.gif";
mouth2 = new Image;
mouth2.src = "mouth2.gif";
chin2 = new Image;
chin2.src = "chin2.gif";
hairL3 = new Image;
hairL3.src = "hairL3.gif";
hairR3 = new Image;
hairR3.src = "hairR3.gif";
hairM3 = new Image;
hairM3.src = "hairM3.gif";
eyeL3 = new Image;
eyeL3.src = "eyeL3.gif";
eyeR3 = new Image;
eyeR3.src = "eyeR3.gif";
cheekL3 = new Image;
cheekL3.src = "cheekL3.gif";
cheekR3 = new Image;
cheekR3.src = "cheekR3.gif";
nose3 = new Image;
nose3.src = "nose3.gif";
mouth3 = new Image;
mouth3.src = "mouth3.gif";
chin3 = new Image;
chin3.src = "chin3.gif";
blank = new Image;
blank.src = "blank.gif";
function Chosen(prt,num) {
if (document.forms[0].gamebutton.value != "OKAY") return;
document[prt].src = prt + num + ".gif";
}
function RanFace() {
document.hairL.src = eval("hairL" + parseInt(1 + Math.floor(3 * Math.random())) + ".src");
document.hairM.src = eval("hairM" + parseInt(1 + Math.floor(3 * Math.random())) + ".src");
document.hairR.src = eval("hairR" + parseInt(1 + Math.floor(3 * Math.random())) + ".src");
document.eyeL.src = eval("eyeL" + parseInt(1 + Math.floor(3 * Math.random())) + ".src");
document.eyeR.src = eval("eyeR" + parseInt(1 + Math.floor(3 * Math.random())) + ".src");
document.cheekL.src = eval("cheekL" + parseInt(1 + Math.floor(3 * Math.random())) + ".src");
document.cheekR.src = eval("cheekR" + parseInt(1 + Math.floor(3 * Math.random())) + ".src");
document.nose.src = eval("nose" + parseInt(1 + Math.floor(3 * Math.random())) + ".src")
document.chin.src = eval("chin" + parseInt(1 + Math.floor(3 * Math.random())) + ".src")
document.mouth.src = eval("mouth" + parseInt(1 + Math.floor(3 * Math.random())) + ".src")
}
function NewGame() {
document.forms[0].reset();
location.reload();
}
function stopRandom() {
clearInterval(cont);
document.forms[0].gamebutton.value = "DONE";
document.forms[0].inst.value = "Memorize this face and click DONE when finished.";
}
function StartGame(x) {
if (x == "START GAME") {
document.forms[0].inst.value = "Randomizing face . . . Please Wait.";
document.forms[0].gamebutton.value = "WAIT";
cont = setInterval('RanFace()', 150);
window.setTimeout("stopRandom();", 5000);
return;
}
if (x == "DONE") {
for (i = 0; i < 10; i++) {
document.forms[0].elements["Prt" + i].selectedIndex = 0;
}
RealOne[0] = document.hairL.src;
RealOne[1] = document.hairM.src;
RealOne[2] = document.hairR.src;
RealOne[3] = document.eyeL.src;
RealOne[4] = document.eyeR.src;
RealOne[5] = document.cheekL.src;
RealOne[6] = document.cheekR.src;
RealOne[7] = document.nose.src;
RealOne[8] = document.chin.src;
RealOne[9] = document.mouth.src;
document.hairL.src = blank.src;
document.hairM.src = blank.src;
document.hairR.src = blank.src;
document.eyeL.src = blank.src;
document.eyeR.src = blank.src;
document.cheekL.src = blank.src;
document.cheekR.src = blank.src;
document.nose.src = blank.src;
document.chin.src = blank.src;
document.mouth.src = blank.src;
document.forms[0].inst.value = "Now try to rebuild the face using the pieces below.";
document.forms[0].gamebutton.value = "OKAY";
return
}
if (x == "OKAY") {
score = 0;
for (i = 0; i < 10; i++) {
YourOne[i] = document[Parts[i]].src;
if (document[Parts[i]].src == RealOne[i]) score++;
}
message = "poor.";
if (score > 3) message = "average.";
if (score > 6) message = "good.";
if (score > 8) message = "great!!!";
document.forms[0].gamebutton.value = "SEE ORIGINAL";
document.forms[0].inst.value = "You got " + score + " out of 10 pieces correct.  That's " + message;
return;
}
if (x == "SEE ORIGINAL") {
for (i = 0; i < 10; i++) {
document[Parts[i]].src = RealOne[i];
}
document.forms[0].gamebutton.value = "SEE YOURS";
return;
}
if (x == "SEE YOURS") {
for (i = 0;i<10;i++) {
document[Parts[i]].src = YourOne[i];
}
document.forms[0].gamebutton.value = "SEE ORIGINAL";
return;
   }
}
//  End -->
</script>
</HEAD>

<!-- STEP TWO: Copy this code into the BODY of your HTML document  -->

<BODY>

<center>
<table width=241 height=241 cols=7 cellspacing=0 cellpadding=0 border=0>
<tr>
<td width=1 height=1>
<td width=40 height=1>
<td width=40 height=1>
<td width=40 height=1>
<td width=40 height=1>
<td width=40 height=1>
<td width=40 height=1>
<tr>
<td width=1 height=40>
<td rowspan=3 width=40 height=120> 
<img name=hairL src="hairL1.gif" width=40 height=120 border=0>
<td colspan=4 width=160 height=40>
<img name=hairM src="hairM1.gif" width=160 height=40 border=0>
<td rowspan=3 width=40 height=120>
<img name=hairR src="hairR1.gif" width=40 height=120 border=0>
<tr>
<td width=1 height=40>
<td colspan=2 width=80 height=40>
<img name=eyeL src="eyeL1.gif" width=80 height=40 border=0>
<td colspan=2 width=80 height=40>
<img name=eyeR src="eyeR1.gif" width=80 height=40 border=0>
<tr>
<td width=1 height=40>
<td rowspan=3 width=40 height=120>
<img name=cheekL src="cheekL1.gif" width=40 height=120 border=0>
<td colspan=2 rowspan=2 width=80 height=80>
<img name=nose src="nose1.gif" width=80 height=80 border=0>
<td rowspan=3 width=40 height=120>
<img name=cheekR src="cheekR1.gif" width=40 height=120 border=0>
<tr>
<td width=1 height=40>
<td width=40 height=40>
<td width=40 height=40>
<tr>
<td width=1 height=40>
<td width=40 height=40>
<td colspan=2 width=80 height=40>
<img name=mouth src="mouth1.gif" width=80 height=40 border=0>
<td width=40 height=40>
<tr>
<td width=1 height=40>
<td colspan=2 width=80 height=40>
<td colspan=2 width=80 height=40>
<img name=chin src="chin1.gif" width=80 height=40 border=0>
<td colspan=2 width=80 height=40>
</table>
<form onSubmit="return false;">
<br>
<input type=text name=inst value="Click START GAME to begin the Face Memory game." size="55">
<br><br>
<input type=button name=gamebutton value="START GAME" onClick="StartGame(this.value);">
<br><br>
<script language="JavaScript">
<!-- Begin
RealOne = new Array();
YourOne = new Array();
Parts = new Array("hairL", "hairM", "hairR", "eyeL", "eyeR", "cheekL", "cheekR", "nose", "chin", "mouth");
for (x = 0; x < Parts.length; x++) {
document.write("<select name=Prt",x," size=4 onChange=Chosen('",Parts[x],"',this.options[this.selectedIndex].value);>");
document.write("<option selected>",Parts[x],"</option>");
document.write("<option value='1'>1");
document.write("<option value='2'>2");
document.write("<option value='3'>3");
document.write("</select>");
}
// End -->
</script>
<br><br><br>
<input type=button name=newgamebutton value="NEW GAME" onClick="NewGame();">
</form>
</center>

<p><center>
<font face="arial, helvetica" size="-2">Free JavaScripts provided<br>
by <a href="http://javascriptsource.com">The JavaScript Source</a></font>
</center><p>

<!-- Script Size:  7.83 KB -->