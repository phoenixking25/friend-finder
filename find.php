<DOCTYPE HTML>
<html>
<head>
	<title>Friend-Finder</title>
	<link rel="stylesheet" type="text/css" href="indexfile.css">
</head>
<body>
	<div id=head>
		Friend-Finder
	</div>
	<div id="left" onmouseenter="expand()" onmouseleave="restore()">
		<form id="find" action="" method="POST">
				<div id="" class="textfield">
				<input type="text" name="name" class="findobjects" placeholder="Name"><br>

				<b><input type="submit" name="submit" value="Find" class="findobjects"></b>
			</div>
		</form>
	</div>
	<div id="right"  onmouseenter="expand1()" onmouseleave="restore1()">
			<p id="infor">
			<?php
			include("config.php");
			if($_SERVER["REQUEST_METHOD"]=="POST"){
			$name = $_POST["name"];
			$query = "SELECT Name,RoomNo,HostelNo FROM find WHERE Name='$name'";
			$ans = mysqli_query($conn,$query);
			if(mysqli_num_rows($ans) > 0 ) {
				 while($row = mysqli_fetch_assoc($ans)) {
				echo "Name: " . $row["Name"]. "<br>RoomNo: " . $row["RoomNo"]."<br>HostelNo: ".$row["HostelNo"]. "<br>";
						}
					}
				}
			?>
			</p>
	</div>
	<script type="text/javascript">
		var left = document.getElementById('left');
		function expand(){
			left.style.height = "80%";
			left.style.top = "15%";
			left.style.left = "20%";
			left.style.width = "33%";
		}
		function restore(){
			left.style.height = "70%";
			left.style.top = "20%";
			left.style.left = "20%";
			left.style.width = "28%";
						
		}
		var right = document.getElementById('right');
		function expand1(){
			right.style.height = "80%";
			right.style.top = "15%";
			right.style.left = "43%";
			right.style.width = "33%";
		
			
		}
		function restore1(){
			right.style.height = "70%";
			right.style.top = "20%";
			right.style.left = "48%";
			right.style.width = "28%";		
		}		
	</script>
</body>
</html>