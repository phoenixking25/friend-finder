<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if (empty($_POST["name"])) {
    	$nameErr = "Name is required";
  	} else {
    	$name = $_POST["name"];
    	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      		$nameErr = "Only letters and white space allowed";
    	}
    }	
	$roomno = $_POST["roomno"];
	$hostelno = $_POST["hostelno"];
	$sql = "INSERT INTO find VALUES ('$name',$roomno,'$hostelno')";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_fetch_rows($result);
	if(count==1){
		header("location: thanks.php");
	}

}
?>
<html>
<head>
	<title>Friend-Finder</title>
	<link rel="stylesheet" type="text/css" href="thankscss.css">
</head>
<body>
	<div id=head>
		Friend-Finder
	</div>
	
	<div id="left"  onmouseenter="expand1()" onmouseleave="restore1()">
		<form action="thanks.php" method="post" id="info" >
			<div id="" class="textfield">
				<input type="text" name="name" id="nameinput" placeholder="Name"><br>
				<input type="text" name="roomno" id="roomno" placeholder="Room No"><br>
				<select id="hostel"  name="hostelno">
					<option value="1">H1</option>
					<option value="2">H2</option>
					<option value="3">H3</option>
					<option value="4">H4</option>
					<option value="5">H5</option>
					<option value="6">H6</option>
					<option value="7">H7</option>
					<option value="8">H8</option>
					<option value="9">H9</option>
					<option value="10">H10</option>
					<option value="1(G)">H1(G)</option>
					<option value="2(G)">H3(G)</option>
					<option value="3(G)">H3(G)</option>
				</select><br>
				<input type="submit" name="submit" value="Upload">
			</div>
		</form>
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