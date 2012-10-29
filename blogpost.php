<?php
	//initialize the db source.
	$conn=mysql_connect("127.0.0.1","root","tiger");
	mysql_select_db("homepage",$conn);
	//get the argument.
	
	if(!mysql_query("INSERT INTO g_homepage_article values(null,'$_POST[title]','甘工','2012','10','21',null,'$_POST[content]',null,null)")){
		die('Error:'.mysql_error());
	}
	
	echo '{"success":true}';
	
	mysql_close($conn);
?>
