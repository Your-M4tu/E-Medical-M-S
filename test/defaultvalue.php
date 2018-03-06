<!DOCTYPE html>
<html lang="en">
<head>
     <title>Personal Details</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/jeevanam/style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php if(isset($_POST['blood_pressure']))
  echo $_POST['blood_pressure'];
  echo $_POST['sex'];
  $WF=0;

  ?>
  <br>
<form class="form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST" id="fr">
<div class="row">
  <div class="col-sm-2">Blood Pressure</div>
  <div class="col-sm-8">
  <input type="date" value='2016-10-28' class="form-control"  name="blood_pressure" ></div>
  <input type="hidden" name="sex" value="female" >
  <input type="checkbox" name="sex" value="Male" <?php if ($WF == '1') {echo ' checked ';} ?>>Male
</div>
<input type ="submit">
</form>

</body>
</html>
