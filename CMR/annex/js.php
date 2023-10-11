<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>real time</title>
</head>
<body>
	<script type="text/javascript">
	function table(){
		const xhttp= new XMLHttpRequest();
		xhttp.onload=function(){
			document.getElementById("table").innerHTML = this.responseText ;
		}
		xhttp.open("Get","hist.php");
		xhttp.send();
	}


	</script>
<div>
	
</div>

</body>
</html>