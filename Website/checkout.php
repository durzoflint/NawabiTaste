<?php
	if(isset($_POST['finalcart']))
	{
		$cartData=$_POST['finalcart'];
		echo $cartData;
	}
	else
	{
		echo "not here";
	}
?>