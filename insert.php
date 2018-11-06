<?php
	include ('connection.php');
	?>
<?php //include ('heada.php'); ?>
<link rel="SHORTCUT ICON" href="images/NOUNLOG.jpg">
<div class="content">
  <table width="150" border="0">
    <tr>
      <td width="26" rowspan="11">&nbsp;</td>
      <td width="65" rowspan="11">
        <div class="row2">
          <body>
          <p>ENTER PROGRAMME CRITERIA</p>
          <p>&nbsp;</p>
          <p>&nbsp; </p>
         <form action="" method="post" name="frm">
    <?php
		if(isset($_REQUEST['sub']))
		{
			$sqlchk='select * from criteria where critdesc = "'.$_REQUEST['critdesc'].'" ';
			$rsqlchk=mysql_query($sqlchk)or die("Unable to query ".mysql_error());
			if(mysql_num_rows($rsqlchk)==0)
			{
				$arr=array();
				for($i=1;$i<=9;$i++)
				{
					if($_REQUEST['subj_'.$i]<>''&&$_REQUEST['grad_'.$i]<>''&&$_REQUEST['mandate_'.$i]<>'')
					{
						$arr[]=$i;	
					}
				}
				if(count($arr)>0)
				{
					$sqlin='insert into criteria set critdesc ="'.$_REQUEST['critdesc'].'",progid="'.$_REQUEST['progid'].'"  ';
					mysql_query($sqlin)or die("Unable to insert1 ".mysql_error());
					
					$sql='select * from criteria where critdesc ="'.$_REQUEST['critdesc'].'" and progid="'.$_REQUEST['progid'].'"  ';
					$rsql=mysql_query($sql)or die("Unable to query ".mysql_error());
					$tab=mysql_fetch_array($rsql);
					
					for($i=0;$i<count($arr);$i++)
					{
						$sqlin='insert into criteriasubject set critid = "'.$tab['critid'].'",subjid="'.$_REQUEST['subj_'.$arr[$i]].'",gradeid="'.$_REQUEST['grad_'.$arr[$i]].'",mandate="'.$_REQUEST['mandate_'.$arr[$i]].'";  ';
						mysql_query($sqlin)or die("Unable to insert2 ".mysql_error());
					}
					echo '<font color="blue"> Successful </font>';
				}else
				{
					echo '<font color="red"> No Criteria Subject </font>';
				}
				
			}else
			{
				echo '<font color="red"> Criteria  Already Exist </font>';
			}
		}
	?>
    <table width="403" border="1" cellpadding="0" cellspacing="2">
      <tr>
        <td width="395">
        	<p>Programme:
        	  <select name="progid">
        	    <option value=""></option>
        	    <?php
							$sql='select * from programme order by progdesc ';
							$rsql=mysql_query($sql)or die("unable to query".mysql_error());
							while($tab=mysql_fetch_array($rsql))
							{?>
        	    <option value="<?php echo $tab['progid'] ?>" <?php if($_REQUEST['progid']==$tab['progid']){echo 'selected';}?>><?php echo $tab['progdesc'] ?></option>
        	    <?php
							}
						?>
      	    </select>
        	<p>&nbsp;</p>
         
         
        	  Criteria Description:    
        	  <input name="critdesc" type="text" value="" />
      	  </p>
        </td>
      </tr>
      <tr>
      	<td align="center">
        	<table border="0" cellspacing="0" cellpadding="0">
       <?php
			for($i=1;$i<=9;$i++)
			{
		?>
			  <tr>
				<td><?php echo $i?></td>
				<td>
					<select name="subj_<?php echo $i ?>">
						<option value=""></option>
						<?php
							$sql='select * from subject order by subjdesc';
							$rsql=mysql_query($sql)or die("unable to query".mysql_error());
							while($tab=mysql_fetch_array($rsql))
							{?>
								<option value="<?php echo $tab['subjid'] ?>" <?php if($_REQUEST['subj_'.$i]==$tab['subjid']){echo 'selected';}?>><?php echo $tab['subjdesc'] ?></option>
							<?php
							}
						?>
					</select>
				</td>
				<td>
					<select name="grad_<?php echo $i ?>">
						<option value=""></option>
						<?php
							$sql='select * from grade order by gradedesc';
							$rsql=mysql_query($sql)or die("unable to query".mysql_error());
							while($tab=mysql_fetch_array($rsql))
							{?>
								<option value="<?php echo $tab['gradeid'] ?>" <?php if($_REQUEST['grad_'.$i]==$tab['gradeid']){echo 'selected';}?> ><?php echo $tab['gradedesc'] ?></option>
							<?php
							}
						?>
					</select>
				</td>
                <td>
					<select name="mandate_<?php echo $i ?>">
						<option value=""></option>
						<option value="C" <?php if($_REQUEST['mandate_'.$i]=='C'){echo 'selected';}?> >C</option>
                        <option value="E" <?php if($_REQUEST['mandate_'.$i]=='E'){echo 'selected';}?> >E</option>
					</select>
				</td>
			  </tr>
		 <?php
			}
			?>
            </table>
          </td>
         </tr>
         <tr>
         	<td align="center" ><input name="sub" type="submit" value="Save" /></td>
         </tr>
     
    </table>
</form>

</div></td>
</table>
 

</div>
<div class="footer">

<p>&copy; Copyright 2014. Designed by NOUN ICT 
</p>

</div>
</div>
</div>
</div>
</div>
</body>
</html>
