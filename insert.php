<!DOCTYPE html>
<html>
  <body>
	  
	<form method="post" action="process.php">
		Item id:<br>
		<input type="int" name="item-id">
		<br>
		Title:<br>
		<input type="text" name="item-title">
		<br>
		Description:<br>
		<input type="text" name="item-description">
		<br>
		Price :<br>
		<input type="float" name="item-price">
		<br>
		Image:<br>
		<input type="text" name="item-image">
		<br><br>
		<input type="submit" name="save" action="menu.php" value="save new item">
	</form>
	

  </body>
</html>