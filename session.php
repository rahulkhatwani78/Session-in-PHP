<?php
	session_start();

	if(!isset($_SESSION['pizza']))
	{
		echo "Session is empty!";
		$_SESSION['pizza'] = 0;
	}
	else if($_SESSION['pizza'] < 3)
	{
		$_SESSION['pizza'] = $_SESSION['pizza'] + 1;
		echo "Added one... Session: ".$_SESSION['pizza'];
	}
	else
	{
		session_destroy();
		session_start();
		echo "Session Restarted!\n";
	}
?>
<br>
<a href="session.php">Click Me!</a>
<p>Our Session Id: <?php echo session_id()?></p>
<pre>
<?php print_r($_SESSION)?>
</pre>