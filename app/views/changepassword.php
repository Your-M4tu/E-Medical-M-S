<?php
if(isset($data['message']))
echo "<script type='text/javascript'>alert('".$data['message']."')</script>" ;
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Change Password</title>
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
            <form class = "form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST">
                <div class="form-group">
				          <label for = "username" class = "col-sm-2 control-label">Username</label>
                  <div class = "col-sm-4">
                <input type="text"  class="form-control" id="username" name="username" required="true" placeholder="Username">
                </div>
                </div>

                <div class="form-group">
                  <label for = "password" class = "col-sm-2 control-label">Password</label>
                  <div class = "col-sm-4">
                  <input type="password" class="form-control" name="password" required="true" placeholder=" Current Password">
                </div>
                </div>

                <div class="form-group">
                <label for = "new" class = "col-sm-2 control-label">New Password</label>
                <div class = "col-sm-4">
                  <input type="password" class="form-control" name="new" required="true" placeholder="New Password" id="password">
                </div>
                </div>

                <div class="form-group">
                <label for = "newpass" class = "col-sm-2 control-label">Confirm New Password</label>
                <div class = "col-sm-4">
                  <input type="password" class="form-control" name="newpass" required ="true" id ="newpass" oninput="check(this)" placeholder="Confirm New Password">
                </div>
                </div>


                  <script language='javascript' type='text/javascript'>

					             function check(input) {
			             if (input.value != document.getElementById('password').value) {
                            input.setCustomValidity('Password Must be Matching.');
                            }
		                      else {
                                    // input is valid -- reset the error message
                                    input.setCustomValidity('');
                                }
                            }
                  </script>
              <div class = "form-group">
                 <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-default" value="Submit" name="sub" >Change Password</button>
                </div>
              </div>
            </form>



</body>
</html>
