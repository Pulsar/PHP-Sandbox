<!doctype>
<html>
<head>
<meta charset="utf-8"></meta>
</head>
<body>
<?php
	echo "What do you think about C programming language?<br>";
?>
	<!-- We need to define the variable before using it -->
	<!-- Therefore we use post to set the variable -->
	<form method="post" action="">
		<input type="radio" name="value" value="C_know" checked> I already know C<br>
		<input type="radio" name="value" value="C_learn"> I want to learn C<br>
		<input type="radio" name="value" value="no_C"> No, I'm not interested in C<br>
		<input type="submit" value="Send">
	</form>
?>
</body>
</html>
