<html>
<head>
  <title>Home Page</title>
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
          <li><a href="idcreation">Create  Secret ID for Users</a></li>
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
<div class = "center-block" style = "width:200px; background-color:#F0FFFF;">
<h2 >Welcome</h2>
</div>
</body>
</html>
