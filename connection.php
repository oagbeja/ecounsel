<?php
	$cnx = mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db('ecounsel', $cnx);//nounoun2013
	function remaintxt($val)
	{
		return eval('if(isset($_REQUEST[$val])){echo trim($_REQUEST[$val]);}');
	}
?>