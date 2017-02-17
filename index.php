<!DOCTYPE html>
<html>
<head>
	<title>Friend-Finder</title>
	<link rel="stylesheet" type="text/css" href="indexfile.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>
	<div id=head>
		Friend-Finder
	</div>
	<div id="left" onmouseenter="expand()" onmouseleave="restore()">
		<button class="box" id="leftbox" onclick="location.href='find.php';">
			FIND
		</button>
	</div>
	<div id="right"  onmouseenter="expand1()" onmouseleave="restore1()">
		<button class="box" id="rightbox" onclick="location.href='upload.php';">
			UPLOAD 
		</button>
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