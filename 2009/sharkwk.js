// JavaScript Document
var now = new Date(2010,07,01);
// remember that JS months are 0-11, silly girl
var s = new Date(2010,07,01);
var e = new Date(2010,07,06);

var current = now.getTime();
var startSW = s.getTime();
var endSW = e.getTime();

if ((current < startSW)) {
    document.write('<div id="wrapper" class="early"> \n');
    document.write('<div id="header" class="center"> \n');
		document.write('<h1>Not yet</h1> \n');
		document.write('<p><a href="#content">Can&rsquo;t wait &amp; need sharks now? &darr;</a></p>');
}
else if ((current > endSW)) {
    document.write('<div id="wrapper" class="late"> \n');
    document.write('<div id="header" class="center"> \n');
		document.write('<h1>Too late</h1> \n');
		document.write('<p><a href="#content">Can&rsquo;t make it to next year &amp; need sharks now? &darr;</a></p>');
}
else {
    document.write('<div id="wrapper" class="sharkweek"> \n');
    document.write('<div id="header" class="center"> \n');
		document.write('<h1>Yes!</h1> \n');
		document.write('<p><a href="#content">What&rsquo;s playing during Shark Week? &darr;</a></p>');
}