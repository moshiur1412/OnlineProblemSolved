<form action="VariableFromExternalSource.php" method="post">
	Name: <input type="text" name="username">
	Email: <input type="text" name="email">
	<input type="submit" name="submit" value="Sumit me!">
</form>


<?php

echo "Username: " .$_POST['username']. "<br>";
echo "Email: " . $_POST['email']. "<br>";
echo "<hr>";
echo "htmlspecialchars(string)::". htmlspecialchars(print_r($_POST['username'], true));