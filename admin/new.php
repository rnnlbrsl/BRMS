<!DOCTYPE html>
<html>
<head>
	<title>Print</title>

	<script type="text/javascript">
		
		function printlayer(layer)
		{
			var generator=window.open(",'name,'");
			var layertext = document.getElementById(layer);
			generator.document.write(layertext.innerHTML.replace("Print Me!"));
			generator.document.close();
			generator.print();
			generator.close();
		}
	</script>
</head>
<body>
	<div class="container">
		<table>

		</table>
	</div>
</body>
</html>