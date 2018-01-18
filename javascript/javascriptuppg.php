<!DOCTYPE HTML>
<HTML>
<head>
<style>
#background{
	height: 50px;
	width: 50px;
	border: solid 2px black;
	
}
</style>
<script type="text/javascript">
window.onload=start;

function start(){
			document.getElementById("background").style.backgroundColor = "green";
}
function background() {
	if(document.getElementById("background").style.backgroundColor == "green") {
		document.getElementById("background").style.backgroundColor = "yellow";
		return;	
	}
	if(document.getElementById("background").style.backgroundColor == "yellow") {
		document.getElementById("background").style.backgroundColor = "red";
		return;		
	}
	if(document.getElementById("background").style.backgroundColor == "red") {
		document.getElementById("background").style.backgroundColor = "green";
		return;	
	}
}
</script>
</head>
<body>



<div id="background" onclick="background()"></div>
</body>
</html>﻿