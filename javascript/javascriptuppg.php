<!DOCTYPE HTML>
<HTML>
<head>
<style>
#clear{
	width: 100px;
	
}
</style>
<script type="text/javascript">
function displynum(n1)
{
calcform.txt1.value=calcform.txt1.value+n1;
}
</script>
</head>
<body>
<form name=calcform>
<input type=text name=txt1  style="text-align:right"><br>
<input type=button name=btn9 value=1 onclick="displynum(btn9.value)">
<input type=button name=btn8 value=10 onclick="displynum(btn8.value)">
<input type=button name=btn7 value=100 onclick="displynum(btn7.value)">
<input type=button name=addbtn value=+ onclick="displynum(addbtn.value)"><br>
<input type=button name=eqlbtn value== onclick="txt1.value=eval(txt1.value)">



</form>
</body>
</html>﻿