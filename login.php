<?php 
session_start();
if($_POST['pass']=="duckduckduck"){
	$_SESSION['login']=1;
	header("Location: admin.php");
}
 ?>
 <form method="post">
<label for="pass">Password:</label><input id="pass" type="password" name="pass" />
<button type="submit">Login</button>
</form>