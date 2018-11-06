<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOUN e-Counselling</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <?php include 'connection.php'; ?>
</head>


<body>
<form method="post" action="">
<?php
	if(isset($_REQUEST['send']))
	{
		if(trim($_REQUEST['inputmsg'])<>'')
		{
			$sqlins='insert into conversation set ctext="'.$_REQUEST['inputmsg'].'",id="'.$_REQUEST['id'].'",vdate=now(),status="'.$_REQUEST['status'].'",coun="1"';
			mysql_query($sqlins) or die(mysql_error()."Unable to insert");
		}
	}
?>

<div class="col-sm-12 input-group input-group-sm" style="width:70%" >
<input name="inputmsg" type="text" style="float:right" placeholder="Type your message....." class="form-control "  >
<span class="input-group-btn">
  <button class="btn btn-primary btn-flat" type="submit" name="send">Send!</button>
</span>
</div>
<div class="col-sm-12 " style="width:70%" >
<a href="log.php?id=<?php echo $_REQUEST['id'] ?>" target="_blank" class=" text-warning" style="float:right">View Log</a>
</div>
</form>
</body>
</html>