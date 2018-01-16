<!DOCTYPE HTML>
<html>
<head>
<title> Untitled </title>
<script type="text/javascript">
function changeImg(who,flag) {
  if (flag) {
    who.style.height='125px';  who.style.width='100px';
  } else {
    who.style.height='100px';  who.style.width='75px';
  }
}
</script>

<style type="text/css">

.imgSize {

 height:100px; width:75px;

 vertical-align:bottom;

}

</style>

 

</head>

<body>

<img src="http://www.nova.edu/hpd/otm/pics/4fun/11.jpg" class="imgSize"

 onmouseover="changeImg(this,true)" onmouseout="changeImg(this,false)">

</body>

</html>
