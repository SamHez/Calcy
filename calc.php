<?php include('init.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Calcy A Simple &amp; Intuitive Calculator </title>
</head>
<body>
	<form action="init.php" method="GET">
		<input type="" name="c_1">
		<select name="type">
		<option>+</option>	
		<option>-</option>	
		<option>x</option>
		<option>/</option>		
		</select>
		<input type="" name="c_2">

		<input type="submit" name="calc_submit">
	</form>
	<?php if (isset($_SESSION['result'])): ?>
		<?php echo $_SESSION['result']; session_destroy();?>
	<?php endif ?>

</body>
</html>