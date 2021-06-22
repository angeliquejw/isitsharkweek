// JavaScript Document
var now = new Date();
// remember that JS months are 0-11, silly girl
var s = new Date(2010,07,01);
var e = new Date(2010,07,08);

var current = now.getTime();
var startSW = s.getTime();
var endSW = e.getTime();
var target = Math.floor(((startSW - current) / (60*60*24)) / 1000);
var daysLeft = target+1;

if ((current < startSW)) {
    document.write('<div id="wrapper" class="early"> \n');
    document.write('<div id="header" class="center"> \n');
		document.write('<h1>Not yet</h1> \n');
		document.write('<p><b>');
		document.write(daysLeft);
		document.write (' more day until Shark Week begins on August 1</b><br /> \n');
//add back in S after day
		document.write('<a href="#content">Can&rsquo;t wait &amp; need sharks now? &darr;</a></p>');
}
else if ((current > endSW)) {
    document.write('<div id="wrapper" class="late"> \n');
    document.write('<div id="header" class="center"> \n');
		document.write('<h1>Not Yet</h1> \n');
		document.write('<p><a href="#content">Need sharks now? &darr;</a></p>');
}
else {
    document.write('<div id="wrapper" class="sharkweek"> \n');
    document.write('<div id="header" class="center"> \n');
		document.write('<h1>Yes!</h1> \n');
		document.write('<p><a href="#tv">What&rsquo;s playing during Shark Week? &darr;</a></p>');
}