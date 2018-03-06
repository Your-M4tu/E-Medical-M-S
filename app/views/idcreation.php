<!DOCTYPE HTML>
<html lang="en">
<head>
<title>ID Creation</title>
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
          <li><a href="idcreation">Create  Secret ID  for Users</a></li>
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
      <label for = "key" class = "col-sm-2 control-label">Secret Key</label>
      <div class = "col-sm-6">
         <input type = "text" class = "form-control" id="key" name="key" required="true" placeholder="Secret Key">
      </div>
   </div>

   <div class = "form-group">
      <label for = "keycount" class = "col-sm-2 control-label">Number of required ID</label>

      <div class = "col-sm-6">
         <input type = "number" class = "form-control" id = "keycount" name="keycount" required="true" placeholder="No of employees">
      </div>
   </div>


   <div class = "form-group">
      <div class = "col-sm-offset-2 col-sm-10">
         <button type = "submit" class = "btn btn-default" name="sub" value="generate" >Generate</button>
      </div>
   </div>
</form>

<?php
if(isset($data['message']))
{
?>
<div class = "row">
   <div class = "center-block" style = "width:200px; background-color:	#F8F8FF;">
		 <table class="table table-bordered" id="printTable">
	 <thead>
		<tr>
		<th>SL NO</th>
		<th>ID</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$j=1;
		while($j<=$_POST['keycount'])
		{
		?>
		<tr >
		<td><?php echo $j; ?></td>
		<td><?php echo $data['message'][$j]; ?></td>
	</tr>
	<?php $j++; } ?>
	</tbody>
	</table>
   <button class="btn btn-primary" id="print">Print</button>
   </div>
</div>

<marquee behavior="scroll" direction="left">Kindly Note down the Created ID , Pass these ID to Create Account for Normal Users</marquee>
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
