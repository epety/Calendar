<?php
# make the connection
	@ $connect = mysql_connect("clawhammer.uww.edu", "kagant15", "tk8144");
	if (!$connect)
	{
		echo "Could not make the connection!<br/>\n";
		exit();
	}

# select the database
 $db = mysql_select_db("cs482-2121_kagant15", $connect);
 if (!$db)
 {
	echo "Could not select the database!\n";
	exit();
 }

?>
