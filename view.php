<?php 
require('config.php');

	$q="select * from cse";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>