<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="refresh" content="15">
    <title>NOUN e-Counselling</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
   <?php include 'connection.php'; ?>
</head>


<body>
<script>
	function clicks(a)
	{
		parent.window.location="chat.php?id="+a;	
	}
</script>
    
    
      
                <div class="list-group">
                	<?php 
						$sql='select * from profile ';
                        $rsql=mysql_query($sql)or die('Unable to select'.mysql_error());
						while($tab=mysql_fetch_array($rsql))
						{?>
							<a href="javascript: clicks(<?php echo $tab['id'] ?>);" class="list-group-item"><?php echo $tab['username'] ?></a><?php
						}
					?>
                   
                 
                </div>
            
          </body>
          </html>
          