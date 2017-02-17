<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = $_POST["name"];
	$roomno = $_POST["roomno"];
	$hostelno = $_POST["hostelno"];
	$sql = "INSERT INTO find VALUES ('$name',$roomno,'$hostelno')";
	$result = mysqli_query($conn,$sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Friend-Finder</title>
	<link rel="stylesheet" type="text/css" href="thankscss.css">
	
</head>
<body>
	<div id=head>
		Friend-Finder
	</div>
	<div id="left" onmouseenter="expand()" onmouseleave="restore()" >
		<h1>THANKS</h1><br>
		<h3>Spread about Friend-Finder more and more.</h3>
		<button class="box" id="more" onclick="location.href='index.php';">
			FIND/UPLOAD
		</button>
	</div>

	<script type="text/javascript">
		var left = document.getElementById('left');
		function expand(){
			left.style.height = "80%";
			left.style.top = "15%";
			left.style.left = "20%";
			left.style.width = "63%";
		}
		function restore(){
			left.style.height = "70%";
			left.style.top = "20%";
			left.style.left = "20%";
			left.style.width = "58%";
						
		}
		
	</script>
</body>
</html>