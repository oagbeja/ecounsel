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
               <a class="navbar-brand" href="index.html" style="font-size:24px;color:#000" >e-Conselling</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                   
                        <a href="#" style="font-size:20px;color:white">Counsellor</a>
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

        <div class="row">
        <BR>&nbsp;
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <iframe src="sidebar.php" height="900px" width="100%" scrolling="auto" frameborder="0"></iframe>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
            <form method="post" action="">
            	<?php
					if($_REQUEST['id']=='')
					{
						?>
						<h2 class="text-info">STUDENT COUNSELLOR'S PAGE</h2>
                        <h3 class=" text-primary">Welcome !</h3>
						<p>You can click on any of the underlisted log to start interaction.</p><?php
					}else
					{
						
						
						?>
						<iframe src="chatpg.php?id=<?php echo $_REQUEST['id'] ?>&status=C #end"  width="70%" height="300"></iframe>
                        <iframe src="inputpg.php?id=<?php echo $_REQUEST['id'] ?>&status=C" align="top"  width="100%" height="90" scrolling="no" frameborder="0"></iframe>
                                
                           	<?php
						
						
					}?>
            </div></form>
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
