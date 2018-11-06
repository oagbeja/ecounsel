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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.html" style="font-size:24px;color:#000" >e-Counselling</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <?php 
						$sql='select * from profile where id ="'.trim($_REQUEST['id']).'"  ';
                        $rsql=mysql_query($sql)or die('Unable to select'.mysql_error());
						$tab=mysql_fetch_array($rsql);
					?>
                        <a href="#" style="font-size:20px;color:white">Hi <?php echo $tab['username'];?></a>
                    </li>
                    <li>
                        <a href="index.php" style="font-size:20px;color:black">LogOut</a>
                    </li>
                 </ul>
                 
               </div>
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
                <div >
                	&nbsp;
                </div>
            
                <div class="col-sm-12">
                	
                	<a class="accordion-toggle" data-toggle="collapse"  href="#collapse1_" >
                    <button class="btn-block btn-warning">
                    <h4 >
                    	 FAQ
                    	<!--<small>Subheading</small>-->
                	</h4></button></a>
                    
                    <div id="collapse1_" class="panel-collapse collapse">
                    <?php
						$myfile = fopen("content/faq.html", "r") or die("Unable to open file!");
						// Output one line until end-of-file
						$strf='';
						while(!feof($myfile)) {
						  $strf.= fgets($myfile);
						}
						fclose($myfile);
						$arrfaq=explode("Q:",$strf);
						for($i=1;$i<count($arrfaq);$i++)
						{
							$arr=explode("A:",$arrfaq[$i]);
							?>
							<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse1_<?php echo $i ?>">
                                    	<?php echo $arr[0]; ?>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse1_<?php echo $i ?>" class="panel-collapse collapse">
	    						<div class="panel-body">
                                	<?php echo $arr[1]; ?>
                                </div>
                            	</div>
                            </div>
                            <!-- /.panel -->
							<?php	
						}
					?>
                    <!-- /.panel -->
                    </div>
                </div>
                
                
                
                <div class="col-sm-12">
                	
                	<a class="accordion-toggle" data-toggle="collapse"  href="#collapse2_" >
                    
                    <button class="btn-block btn-default" style="color:#286090">
                    <h4 >
                    	 Programme Decision Tab
                    	<!--<small>Subheading</small>-->
                	</h4></button></a>
                    	
                    	
                    
                    <div id="collapse2_" <?php if(!isset($_REQUEST['sub']))echo 'class="panel-collapse collapse"' ;?> >
                    
						<div class="col-sm-6">
                        	<div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    	Choose Subjects with Grades
                                    </h4>
                                </div>
                                
	    						<div class="panel-body" >
                                <form name="frm" id="pbody" method="post" action="#pbody">
                                
                                <?php
									for($i=1;$i<=9;$i++)
									{
								?><div class="col-sm-9">
                                	<select name="subj_<?php echo $i?>"  class="form-control ">
        								<option value="">---Choose Subjects---</option>
                                        <?php
											$sql1='select * from subject order by subjdesc  ';
											$rsql1=mysql_query($sql1)or die('Unable to select'.mysql_error());
											while($tab1=mysql_fetch_array($rsql1))
											{?>
												<option value="<?php echo $tab1['subjid'] ?>" <?php if($tab1['subjid']==$_REQUEST['subj_'.$i]){echo 'selected';} ?> >
                                                	<?php echo $tab1['subjdesc'] ?>
                                                </option><?php
											}
										?>
                                    </select>
                                    </div>
                                    <div class="col-sm-3">
                                     
                                    	<select name="grad_<?php echo $i?>"  class="form-control ">
        								<option value="">Grades</option>
                                        <?php
											$sql1='select * from grade  ';
											$rsql1=mysql_query($sql1)or die('Unable to select'.mysql_error());
											while($tab1=mysql_fetch_array($rsql1))
											{?>
												<option value="<?php echo $tab1['gradeid'] ?>" <?php if($tab1['gradeid']==$_REQUEST['grad_'.$i]){echo 'selected';} ?> >
                                                	<?php echo $tab1['gradedesc'] ?>
                                                </option><?php
											}
										?>
                                    </select>
                                    </div>
                                    <?php
									}?>
                                    
                                    
                                    
                                    
                                   
                                    <div class="col-sm-12">
                                    	<button class="btn btn-success btn-block" name="sub" type="submit">Decide</button>
                                    </div>
                                </form>
                                </div>
                            	
                            </div>
                        	
                        </div>
                        <div class="col-sm-6">
                        	<div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    	Decide Programme
                                    </h4>
                                </div>
                                
	    						<div class="panel-body">
                                	<?php
										if(isset($_REQUEST['sub']))
										{
											$sql='select * from programme ';
											$rsql=mysql_query($sql)or die("unable to query".mysql_error());
											while($tab=mysql_fetch_array($rsql))
											{
												$sql1='select * from criteria where progid = "'.$tab['progid'].'" ';//echo $sql1;
												$rsql1=mysql_query($sql1)or die("unable to query".mysql_error());
												while($tab1=mysql_fetch_array($rsql1))//criteria loop
												{
													$sql3='select count(*) as cnt from criteriasubject where critid = "'.$tab1['critid'].'" and mandate = "C" ';
													$rsql3=mysql_query($sql3)or die("unable to query".mysql_error());
													$tab3=mysql_fetch_array($rsql3);//echo $tab3['cnt'];
													
													$sql4='select count(*) as cnt from criteriasubject where critid = "'.$tab1['critid'].'" and mandate = "E" ';
													$rsql4=mysql_query($sql4)or die("unable to query".mysql_error());
													$tab4=mysql_fetch_array($rsql4);
													
													$ccount=0;$ecount=0;
													
													$sql2='select * from criteriasubject where critid = "'.$tab1['critid'].'" ';
													$rsql2=mysql_query($sql2)or die("unable to query".mysql_error());
													while($tab2=mysql_fetch_array($rsql2))
													{
														
														for($i=1;$i<=9;$i++)
														{
															if($_REQUEST['subj_'.$i]==$tab2['subjid'])
															{
																//echo 'yes';
																if($tab2['gradeid']>=$_REQUEST['grad_'.$i] )
																{
																	
																	if($tab2['mandate']=='C')++$ccount; 
																	elseif($tab2['mandate']=='E')++$ecount;//echo $ccount;
																	break;	
																}
															}
														}
														
														
													}//after checking a criteria
													
													
													if($ccount==$tab3['cnt'])
													{
														if($ecount>=1||$tab3['cnt']==0)
														{
															if(($ccount+$ecount)>=$tab['minsubjects'])
															{
																$stm.= $tab['progdesc'].'@@';break;
																//$flag=1;
															}else
															{
																$sql2='select * from criteriasubject where critid = "'.$tab1['critid'].'" ';
																$rsql2=mysql_query($sql2)or die("unable to query".mysql_error());
																while($tab2=mysql_fetch_array($rsql2))
																{
																	
																	for($i=1;$i<=9;$i++)
																	{
																		if($_REQUEST['subj_'.$i]<>$tab2['subjid'])
																		{
																			if(6>=$_REQUEST['grad_'.$i] )
																			{
																				++$ecount;
																				break;	
																			}
																		}
																	}
																}
																if(($ccount+$ecount)>=$tab['minsubjects'])
																{
																	$stm.= $tab['progdesc'].'@@';break;
																	//$flag=1;
																}
															}
														}
													}
													//
												}
											}
											
											$arr=explode('@@',$stm);
											for($i=0;$i<count($arr)-1;$i++)
											{
												$statment.=$arr[$i].'<br>&nbsp;&nbsp;';
											}
											if($statment==''){echo '<strong style="color:red">No programme available</strong>';}else echo '<b>You can study </b><br>&nbsp;&nbsp;'.$statment;
										}
									?>
                                	
                                </div>
                            	
                            </div>
                        </div>
							
                    </div>
                            <!-- /.panel -->
							
                    <!-- /.panel -->
                    </div>
               
                
                
                <div class="col-sm-12">
                	
                	<a class="accordion-toggle" data-toggle="collapse"  href="#collapse3_" >
                     <button class="btn-block btn-primary">
                    <h4 >
                    	 Chat with Counsellor
                    	<!--<small>Subheading</small>-->
                	</h4></button></a>
                    <form name="frm1" id="cbody" method="post" action="#cbody">
                    <div id="collapse3_" <?php if(!isset($_REQUEST['send']))echo 'class="panel-collapse collapse"' ;?> >
                    <div class="panel panel-default" align="center">
                    
                    
                            <iframe src="chatpg.php?id=<?php echo trim($_REQUEST['id']);?>&status=S" width="70%" height="300"></iframe>
                            <iframe src="inputpg.php?id=<?php echo $_REQUEST['id'] ?>&status=S"   width="70%" height="90" scrolling="no" frameborder="0"></iframe>
                   </div>
                    <!-- /.panel -->
                    </div></form>
                </div>
                
               
                   
                
                
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2015</p>
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
