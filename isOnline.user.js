// ==UserScript==
// @name         isOnline
// @namespace    http://isonline.cf/
// @version      0.1.1
// @description  Know who is online on Scratch!
// @author       @World_Languages with help from @JuegOStrower and alpha testers
// @match        https://scratch.mit.edu/*
// @icon         https://raw.githubusercontent.com/WorldLanguages/isOnline/master/green%20cat.png
// @downloadURL  https://github.com/WorldLanguages/isOnline/raw/master/isOnline.user.js
// @updateURL    https://github.com/WorldLanguages/isOnline/raw/master/isOnline.user.js
// ==/UserScript==

var a = localStorage.getItem("iOalert");

if (a == null) {
document.write("<h2>Sadly, the Scratch Team decided to remove projects announcing isOnline for ''breaching the privacy of other Scratch users''.  <br><br> I won't try to get isOnline still working for you guys in respect of the Scratch Team. <br> <br> The Scratchers like me and you cannot decide what is allowed and what is not, so sadly isOnline will stop working forever. <br> <br> <br> I will try my best to bring it back but for now I want to disable it for everybody so I do not get in trouble with the ST. <br><br>  <br><br>  <br> World_Languages <br><br>  <br><br>  <br> <br> Note: you will only receive this message once and Scratch will work normally after you refresh the page.</h2>");
    localStorage.setItem("iOalert", "1");}
