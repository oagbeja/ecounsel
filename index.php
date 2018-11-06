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
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <?php include 'connection.php'; ?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#00a641" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                
               <a class="navbar-brand" href="index.html" style="font-size:24px;color:#000" >e-Counselling</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    
    <div class="container">
		
        <!-- Page Heading/Breadcrumbs -->
       
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
                <div >&nbsp;
                    <?php
                            if(isset($_REQUEST['sub1']))
                            {
                                if(trim($_REQUEST['username'])=='')
                                {
                                    $errormsg.='<br>Enter Username';	
                                }
                                if(trim($_REQUEST['pwd'])=='')
                                {
                                    $errormsg.='<br>Enter password';	
                                }
                                
                                if($errormsg=='')
                                {
                                    $sql='select * from profile where username ="'.trim($_REQUEST['username']).'" and pwd= "'.trim($_REQUEST['pwd']).'" ';
                                    $rsql=mysql_query($sql)or die('Unable to select'.mysql_error());
                                    if(mysql_num_rows($rsql)==0)
                                    {
                                        echo '<font color="red"><br>Invalid password</font>';
                                        
                                    }else
                                    {
										$tab=mysql_fetch_array($rsql);
										?>
                                        <script>window.location='mypg.php?id=<?php echo $tab['id'] ?>';</script>
                                        <?php	
                                    }
                                }
                                
                            }
                        ?>
                        
                </div>
            
                <div class="col-sm-3">
                	
                	<form method="post" action="" name="frm1">
                    	
                        <input type="text" required name="username" class="form-control" title="Type Username" value="<?php remaintxt("username");?>" placeholder="Type Username">
                        <input type="password" name="pwd" required class="form-control" title="Type Password" placeholder="Type Password">
                        <button name="sub1" type="submit" class="btn btn-success" style="float:right">Login</button>
                    </form>
                </div>
                <div class="col-md-9">
                	<?php
						$myfile = fopen("content/info1.html", "r") or die("Unable to open file!");
						// Output one line until end-of-file
						$strf='';
						while(!feof($myfile)) {
						  $strf.= fgets($myfile);
						}
						fclose($myfile);
						echo $strf;
					?>
                 
                </div>
            <div class="col-md-3">
                <div class="list-group">
                    <a class="accordion-toggle list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >Create profile</a>
                    <?php
						if(isset($_REQUEST['sub2']))
						{
							if(trim($_REQUEST['username1'])=='')
							{
								$errormsg.='Enter Username<br>';	
							}
							if(trim($_REQUEST['pwd1'])==''||trim($_REQUEST['pwd2'])=='')
							{
								$errormsg.='Enter password<br>';	
							}
							if($_REQUEST['pwd1']<>$_REQUEST['pwd2'])
							{
								$errormsg.='Inconsistent password<br>';	
							}
							if($errormsg=='')
							{
								$sql='select * from profile where username ="'.trim($_REQUEST['username1']).'"';
								$rsql=mysql_query($sql)or die('Unable to select'.mysql_error());
								if(mysql_num_rows($rsql)==0)
								{
									$sqlins='insert into profile set username= "'.trim($_REQUEST['username1']).'" , pwd="'.$_REQUEST['pwd1'].'"';
									mysql_query($sqlins)or die('Unable to insert'.mysql_error());
									echo '<font color="blue">Successful. Try to Login</font>';
								}else
								{
									$errormsg.='Username already exist<br>';	
								}
							}
							echo '<font color="red">'.$errormsg.'</font>';
						}
					?>
                    <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                               <form method="post" action="" name="frm2">
                                    <input type="text" required value="<?php remaintxt("username1");?>" name="username1" class="form-control" title="Type Username" placeholder="Type Username">
                                    <input type="password" name="pwd1" required class="form-control" title="Type Password" placeholder="Type Password">
                                    <input type="password" name="pwd2" required class="form-control" title="Confirm Password" placeholder="Confirm Password">
                                    <button  name="sub2" type="submit" class="btn btn-success" style="float:right">Create</button>
                               </form>
                            </div>
                        </div>
                    
                   
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <?php
						$myfile = fopen("content/info2.html", "r") or die("Unable to open file!");
						// Output one line until end-of-file
						$strf='';
						while(!feof($myfile)) {
						  $strf.= fgets($myfile);
						}
						fclose($myfile);
						echo $strf;
					?>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
	
    </div>
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
