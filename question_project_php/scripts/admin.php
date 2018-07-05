<?php
	require('connect.php');
	include ('scripts/easy-lock.php');
	lock("1234");

	$sub =  R::getAll("SELECT * FROM `view`");
	$i = 0;
	$t = 0;
	$g = 0;
	foreach ($sub as $select)
	{
		if ($select['check'] == "1")
			++$i;
		elseif($select['check'] == "2")
			++$t;
		else
			++$g;
	}
	
	print_r($i."<br />");
	print_r($t."<br />");
	print_r($g);
?>