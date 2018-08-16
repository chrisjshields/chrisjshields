<!doctype html>
<html>
<head>
<title>chrisJshields.com</title>
<style>
p {
	font-family: Verdana, Geneva, sans-serif;
	text-align: center;
	
}
div {
	height: 100%;
	width: 100%;
	display: flex;
	position: fixed;
	align-items: center;
	justify-content: center;
}
</style>
<script>

</script>
</head>
<body onload="setInterval(update, 1000)">
<div>
	<p>There have been <?=number_format(time());?> seconds since midnight on Thursday the 1st of January 1970 UTC.
</div>
</body>
</html>
