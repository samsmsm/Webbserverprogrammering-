	<?php


	$dbc = mysqli_connect("localhost","root","","php");

	 $Anvandarnamn = $_POST['Anvandarnamn'];
	 $Losenord = $_POST['Losenord'];

	$query = "select * from register where Losenord='$Losenord' and Anvandarnamn='$Anvandarnamn';";
	
    $res = mysqli_query($dbc,$query);
	
    if(mysqli_fetch_array($res)){
        echo "You logged in! (͡°͜ʖ͡°)";
    }
		else{
			echo "Something went wrong ¯\_(ツ)_/¯ ... Please try submit the form again.";
	//		echo mysqli_error($dbc);
		}

	?>
	