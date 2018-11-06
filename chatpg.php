<?php
	include ('connection.php');
	$sql='select count(*) as "cnt" from conversation where id = "'.trim($_REQUEST['id']).'" and status <> "'.$_REQUEST['status'].'"';
	$rsql=mysql_query($sql)or die("cannot query".mysql_error());
	$tab=mysql_fetch_array($rsql);
	if($_REQUEST['soundcnt']==''){setcookie(soundcnt,$tab['cnt']);}				
	elseif($_REQUEST['soundcnt']<$tab['cnt'])
	{
		setcookie(soundcnt,$tab['cnt']);
		?>
        <audio controls autoplay="true" hidden="true">
          <source src="1.mp3" type="audio/mpeg" >
          <source src="1.ogg" type="audio/ogg" >
          <embed height="0" width="0" src="1.mp3" >
        </audio>
        <?php
	}
	//pick $_REQUEST['']

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOUN e-Counselling</title>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<meta http-equiv="refresh" content="5">
<title>Untitled Document</title>

</head>
<?php
	
	/*function div($a)
	{
		$str='';
		$arr=explode(' ',$a);
		for($i=0;$i<count($arr);$i++)
		{
			if($i>0&&$i%5==0){$str.=$arr[$i].' <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';}else{$str.=$arr[$i].' ';}
		}
		return $str;
	}*/
?>
<body>
	<form action="" method="post">
        
                  <?php
				  	$sql='select * from conversation where id ="'.trim($_REQUEST['id']).'"  order by cid';
					
					$rsql=mysql_query($sql)or die("cannot query".mysql_error());$i=0;
					while($tab=mysql_fetch_array($rsql))
					{ ++$i;
						?>
                    	
                          	<div  title="<?php // echo month($arr[1]).' '.$arr[2].','.$arr[0].'  '.tim($arr1[1]) ?>"  style="border:thin; border-style:groove; width:50%;  <?php if(trim($tab['status'])=='C'){echo 'float:right; ';}else {echo 'float:left; ';} ?>  border-radius:20px" <?php if(trim($tab['status'])=='C'){echo 'align="right" class="bg-success text-default" ';}else {echo 'align="left" class="bg-warning text-danger"';} ?> >
							 
                              
                              	<?php
									
									if($i==mysql_num_rows($rsql)-5){echo '<a href="#" id="end" name="end">'.$tab['ctext'].'</a>';}else
									echo $tab['ctext'];
								 ?>
                                </div>
                                <div style="width:50%" >&nbsp;</div><div style="width:50%" >&nbsp;</div>
                                
                                

					<?php
                    
                    }
					
				  ?>
                  
    </form>
    

</body>
</html>