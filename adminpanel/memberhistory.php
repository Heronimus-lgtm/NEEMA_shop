<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include ('buyhistory.php'); ?>
</body>
</html>
<?php if (isset($_SESSION['membername'])) {

 unset($_SESSION['membername']);

} ?>