<!DOCTYPE HTML>
<html lang="en">
<head>
<title>View User</title>
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
<div class = "row">
 <div class = "center-block" style = "width:1000px; background-color:	#F8F8FF;">
		 <table class="table table-bordered" id="printTable">
<thead>
<th>ID</th>
<th>User name</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Designation</th>
<th>Mail id</th>
<th>Mobile no</th>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($data['result']))
{
?>
<tr>
<th> <?php echo"{$row['id']} ";?> </th>
<th> <?php echo" {$row['user_name']} ";?>   </th>
<th> <?php echo"{$row['name']} ";?> </th>
<th> <?php echo" {$row['sex']} ";?>   </th>
<th> <?php echo" {$row['age']} ";?>  </th>
<th> <?php echo" {$row['designation']} ";?>  </th>
<th> <?php echo" {$row['mail_id']} ";?>  </th>
<th> <?php echo" {$row['mobile_number']} ";?>  </th>
</tr>
<?php
}
?>
</tbody>
</table>
<button class="btn btn-primary" id="print">Print</button>
</div>
</div>

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
