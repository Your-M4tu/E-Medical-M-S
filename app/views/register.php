<?php
if(isset($data['message']))
echo "<script type='text/javascript'>alert('".$data['message']."')</script>" ;
 ?>
 <html>
 <head>
   <title>Account Creation </title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
   <div class="container">
     <div class="panel panel-success">
     <div class="panel-heading">  <h1>Registration</h1></div>
     <div class="panel-body">

  <form action="<?php $_PHP_SELF ?>" method="post" id ="f1" class="form-horizontal">
      <hr>
      <div class="form-group">
      <label class="control-label col-sm-2">Secret ID :</label>
      <div class="col-sm-8">
      <input type="text" name="id" value="" class="form-control" required="true"  placeholder="Secret ID Provided" />
      </div>
      </div>

<div class="form-group">
      <label class="control-label col-sm-2">Name :</label>
    <div class="col-sm-8">
      <input type="text" name="name" value="" class="form-control" required="true"  placeholder="Name" />
    </div>
  </div>
<div class="form-group">
  <label class="control-label col-sm-2" >Gender:</label>
    <div class="col-sm-8">
      <input type="text" name="sex" value=""  class="form-control" placeholder="male/female" />
    </div>
  </div>
<div class="form-group">
  <label class="control-label col-sm-2">Age :</label>
    <div class="col-sm-8">
      <input type="number" name="age" value=""class="form-control"  placeholder="Age"/>
    </div>
  </div>
<div class="form-group">
  <label class="control-label col-sm-2">Designation :</label>
    <div class="col-sm-8">
      <input type="text" name="designation" class="form-control" value="" required="true"  placeholder="Designation"/>
    </div>
  </div>
<div class="form-group">
  <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-8">
      <input type="email" name="mail_id" class="form-control" value="" required="true"  placeholder="E-mail"/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Phone:</label>
      <div class="col-sm-8">
        <input type="number" name="mob" class="form-control" value="" required="true"  placeholder="Phone"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Username :</label>
        <div class="col-sm-8">
          <input type="text" name="username" class="form-control" value="" required="true"  placeholder="Username" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" >Password :</label>
          <div class="col-sm-8">
            <input type="password" name="password" class="form-control"  value="" required="true"  placeholder="Password" id ="password"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Confirm Password:</label>
            <div class="col-sm-8">
                <input type="password" name="re_password" class="form-control"  value="" required="true"  placeholder="Confirm Password" id="password_confirm" oninput="check(this)"/><br>
            </div>
          </div>

<div class="form-group">
<div class ="col-sm-4">
<button type = "button" class = "btn btn-warning btn-lg" onclick="document.getElementById('f1').reset();" >Reset</button>
</div>
<div class ="col-sm-6">
<button type = "submit" class = "btn btn-info btn-lg" value="Submit" name="sr" >Save</button>
</div>
<div class="col-sm-2">
  <a href="index" class="btn btn-link" role="button">Home Page</a>
</div>
</div>

</form>
</div>
</div>
</div>
    </body>
</html>

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
