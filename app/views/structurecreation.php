<html>
<head>
	<title>Structure creation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	  <nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">JEEVANAM</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="manage">Home</a></li>
	      <li><a href="loginasuser">Login as User</a></li>
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="idcreation">Create Secret ID for Users</a></li>
	          <li><a href="viewusers">View all Users details</a></li>
	          <li><a href="removeuser">Remove a User</a></li>
	        </ul>
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Structure
	          <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="structcreation">Create Structure for Panchayat</a></li>
	            <li><a href="viewpanchayat">View all Panchayat details</a></li>
	            <li><a href="removepanchayat">Remove an Entry</a></li>
	          </ul>
	        </li>
	      </li>
	      <li><a href="changepassword">Change password</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp ADMIN</a></li>
	      <li><a href="logout"><span class ="glyphicon glyphicon-log-out"></span>&nbsp Logout</a></li>
	    </ul>
	  </div>
	</nav>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form class = "form-horizontal" role = "form" action="<?php $_PHP_SELF ?>" method="POST" >
	   <div class = "form-group">
	      <label for = "District code" class = "col-sm-2 control-label">District code</label>
	      <div class = "col-sm-6">
	         <input type = "text" class = "form-control" name="dis" required="true" placeholder="00">
	      </div>
	   </div>

	   <div class = "form-group">
	      <label for = "PHC" class = "col-sm-2 control-label">PHC</label>
	      <div class = "col-sm-6">
	         <input type = "text" class = "form-control" name="phc" placeholder="PHC code" required ="true">
	      </div>
	   </div>
		 <div class = "form-group">
	      <label for = "number of panchayat" class = "col-sm-2 control-label">Number of panchayat</label>
	      <div class = "col-sm-6">
	         <input type = "number" class = "form-control" name="n" value="1" >
	      </div>
	   </div>

	   <div class = "form-group">
	      <div class = "col-sm-offset-2 col-sm-10">
	         <button type = "submit" class = "btn btn-default" name="sub" value="next" >Next Step</button>
	      </div>
	   </div>
	</form>


	<form class = "form-inline" role = "form" action="<?php $_PHP_SELF ?>" method="POST" >
        <?php
         if(isset($_POST['sub']))
         {
         $_SESSION['phc'] = $_POST['phc'];
        $_SESSION['n'] = $_POST['n'];
        $_SESSION['d']=$_POST['dis'];
         $i=1;
         while($i <= $_POST['n'])
          {
         ?>
				 <div class = "form-group">
			      <label for = "Panchayat">Panchayat:</label>
			         <input type = "text" class = "form-control" name="<?php echo "panchayat".$i; ?>" required="true"  >
		   </div>
				 <div class = "form-group">
			      <label for = "Wards" >Wards:</label>
			         <input type = "number" class = "form-control" name="<?php echo "ward".$i; ?>" required="true" >
			   </div>
				 <div class = "form-group">
			      <label for = "Public Health Block Lower Number">Public Health Block Lower Number:</label>
			         <input type = "number" class = "form-control" name="<?php echo "pa".$i; ?>"  required="true"  >
			   </div>
				 <div class = "form-group">
			      <label for = "Public Health Block Upper Number " >Public Health Block Upper Number: </label>
			         <input type = "number" class = "form-control" name="<?php echo "pb".$i; ?>" required="true" >
			   </div>
				 <br>
				 <br>
   <?php
     $i++;
    }
   ?>
	 <div class = "form-group">
			<div class = "col-sm-offset-2 col-sm-10">
				 <button type = "submit" class = "btn btn-default" name="subs" value="next" >Save</button>
			</div>
	 </div>
<?php
}
?>
</form>

<?php
if(isset($data['scm']))
{
?>
<div class = "row">
   <div class = "center-block" style = "width:200px; background-color:	#F8F8FF;">
		 <table class="table table-bordered" id="printTable">
	 <thead>
		<tr>
		<th>SL NO</th>
    <th>Panchayath</th>
		<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$j=1;
		while($j<=  $_SESSION['n'] )
		{
		?>
		<tr >
		<td><?php echo $j; ?></td>
    <td><?php echo $_POST["panchayat".$j]; ?></td>
		<td><?php $k= $data['scm'][$j]==1? "Success" : "Failed"; echo $k;?></td>
	</tr>
	<?php $j++; } ?>
	</tbody>
	</table>
   <button class="btn btn-primary" id="print">Print</button>
   </div>
</div>

<marquee behavior="scroll" direction="left">Kindly Note down the Created Structure , Pass these structure to Insert Datas for Normal Users</marquee>
<?php } ?>

<script>
    function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$("#print").on('click',function(){
printData();
})
</script>

</body>
</html>
