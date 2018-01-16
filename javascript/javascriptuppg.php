<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

}
</style>
</head>
<body>

<img src="http://www.nova.edu/hpd/otm/pics/4fun/11.jpg" id="imgSize"

<p>Click the "Try it" button to toggle between hiding and showing the DIV element:</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    var x = document.getElementById("imgSize");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

</body>
</html>