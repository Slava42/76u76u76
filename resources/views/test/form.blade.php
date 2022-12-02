<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
<link rel="stylesheet" type="text/css" href="/public/111.css">
</head> 
<body> 












	
	<form action="/public/test/result" method="post">
		{{ csrf_field() }}
	<input type="text" name="text1">
	<p><input type="text" name="text"></p>
	<input type="submit" name="gg" value="send">

</form>











</body> 
</html>
