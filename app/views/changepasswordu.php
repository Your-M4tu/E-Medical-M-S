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
<?php include 'userheader.php' ?>
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
