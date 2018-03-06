<?php
if(isset($data['message']))
echo "<script type='text/javascript'>alert('".$data['message']."')</script>" ;
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Remove Panchayat</title>
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
  <form class = "form-horizontal" role = "form" action="<?php $_PHP_SELF ?>" method="POST" >

                <div class="form-group">
                  <label for = "key" class = "col-sm-2 control-label">Panchayat</label>
                  <div class = "col-sm-6">
                  <input type="text"  class="form-control" name="panchayatname" required="true" placeholder="Panchayat">
                </div>
              </div>

              <div class = "form-group">
                 <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-default" name="subpn" value="delete">Remove Panchayat</button>
                 </div>
              </div
            </form>
</body>
</html>
