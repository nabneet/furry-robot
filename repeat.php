<form method="post" action="repnum.php">
<?php
for($i=1; $i<=$_POST['number']; $i++) {

	print "<br> N number $i <input type=\"number\" name=\"num[]\"> <br> ";
}
?>
	<br>
	<input type="submit">
</form>