
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Alert</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>




<body>
<?php include 'userheader.php' ?>
<h1> Notify Members </h1>
  <br>
  <br>
  <br>
  <br>
  <br>
  <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

  <?php
  if(isset($data['message'])){
   ?>
  <script>
  alertify.confirm("All Members of Locality Alerted"  , function (e) {
                 if (e) {
                    alertify.success("You've clicked OK");
                 } else {
                    alertify.error("You've clicked Cancel");
                 }
              });
</script>
<?php } ?>

            <form class = "form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST">
                <div class="form-group">
				          <label for = "username" class = "col-sm-2 control-label">Alert For : </label>
                  <div class = "col-sm-4">
                    <select class="form-control" name ="category" id="category" required="true">
                      <option value="null">Vaccination</option>
                      <option value="volunteer">Disease 1</option>
                      <option value="hospital">Disease 2</option>
                      <option value="accommodation" >Disease 3</option>
                      <option value="pronearea" >Disease 4</option>
                      <option value="controlunit" >Disease 5</option>
          </select>
                </div>
                </div>
                <div class="form-group">
                    <label for = "username" class = "col-sm-2 control-label">Message : </label>
                    <div class = "col-sm-4">
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                  </div>
                  </div>
              <div class = "form-group">
                 <div class = "col-sm-offset-2 col-sm-10">
                    <button type = "submit" class = "btn btn-default" value="Submit" name="sub" >Send</button>
                </div>
              </div>
            </form>



</body>
</html>
