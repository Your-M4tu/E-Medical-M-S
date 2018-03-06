<html>
<head>
  <title>Search a Family </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'userheader.php'; ?>
	<h1>SEARCH A FAMILY </h1>
	<hr>
  <div class="table-responsive">
    <table class="table">
    <tbody>
<tr>
<th><input type="radio" name="checkbox1" class="form-control" id="checkboxOne" onclick="activate1(this.checked);"></th>
<th><input type="radio" name="checkbox1" class="form-control" id="checkboxtwo" onclick="activate2(this.checked);"></th>
</tr>
    <tr>

       <th><form class = "form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST" id="f1">

         <div class="table-responsive">
           <table class="table">
            <tbody>
                <tr>
                    <td>District Code</td>
                    <td><input type="text" id="a1" class="form-control" name="District_code" value="" disabled /></td>
                </tr>


                <tr>
                    <td>Panchayath</td>
                    <td><input type="text" id="a2" class="form-control" name="Panchayath" value="" disabled  /></td>
                </tr>
                <tr>
                    <td>Ward</td>
                    <td><input type="number" id="a3" class="form-control" name="Ward" value="" disabled /></td>
                </tr>
                <tr>
                    <td>House No</td>
                    <td><input type="number" id="a4" class="form-control" name="Houseno" value="" disabled /></td>
                </tr>
		<tr>
                    <td>House Name</td>
                    <td><input type="text" id="a5" class="form-control" name="name" value="" required="true" disabled /></td>
                </tr>

                <tr>
                    <th><input  type="submit" id="a6" class="btn btn-success" name="svid" value="Search" disabled /></th>
                </tr>
 </tbody>
</table>
</div>
            </form>
            </th>






<th><form class = "form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST" id="f1">


    <div class="table-responsive">
      <table class="table">
            <tbody>


                <tr>
                    <td>PHC</td>
                    <td><input type="text" id="b1" name="PHC" value="" class="form-control" disabled/></td>
                </tr>


                <tr>
                    <td>Panchayath</td>
                    <td><input type="text" id="b2"name="Panchayath" class="form-control" value="" disabled/></td>
                </tr>
                <tr>
                    <td>Public Health Block No:</td>
                    <td><input type="number" id="b3" name="Public_Health_blockno" class="form-control" value="" disabled/></td>
                </tr>
                <tr>
                    <td>Public Health House No </td>
                    <td><input type="number" id="b4" name="hHouseno" class="form-control" value="" disabled/></td>
                </tr>

		<tr>
                    <td>House Name</td>
                    <td><input type="text" id="b5" name="name1" class="form-control" value="" required="true" disabled/></td>
                </tr>

           <tr>
               <th><input type="submit" id="b6" value="Search" class="btn btn-success" name="svfid" disabled/></th>
           </tr>
     </tbody>
   </table>
</div>

 </form>
</th>
</tr></tbody>
</table>

<?php if(isset($data['row'])) { ?>
<div class="panel panel-info">
  <div class="panel-heading">Search Result</div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>District Code</th>
          <th>PHC</th>
          <th>Panchayat</th>
          <th>Ward</th>
          <th>House No</th>
          <th>Public Health Block No</th>
          <th>Public Health House No</th>
          <th>House Name </th>
          <th></th>
          </tr>
        </thead>
        <form action="<?php $_PHP_SELF ?>" method="POST">
      <tbody>
      <?php foreach( $data['row'] as $data['row'] ): ?>
        <?php $x=explode('/',$data['row']['id'] ); ?>
   <tr>
     <td><?php echo $x[0]; ?> </td>
     <td><?php echo $data['row']['phc'] ; ?> </td>
     <td><?php echo $x[1]; ?> </td>
     <td><?php echo $x[2]; ?> </td>
     <td><?php echo $x[3]; ?> </td>
     <td><?php echo $data['row']['public_health_block_number'] ; ?> </td>
     <td><?php echo $data['row']['public_health_house_number'] ; ?> </td>
     <td><?php echo $data['row']['house_name']; ?> </td>
     <td><button type = "submit" class = "btn btn-info" name="addm" value="<?php echo $data['row']['id'] ?>" >Click me</button></td>
   </tr>
<?php endforeach; ?>
</tbody>
</form>
    </table>
  </div>
</div>

<?php } ?>
  </div>
    </body>
</html>

<script type="text/javascript">
function activate1(isEnabled)
{
    document.getElementById('a1').disabled = !isEnabled;
	document.getElementById('a2').disabled = !isEnabled;
	document.getElementById('a3').disabled = !isEnabled;
	document.getElementById('a4').disabled = !isEnabled;
	document.getElementById('a5').disabled = !isEnabled;
	document.getElementById('a6').disabled = !isEnabled;

	document.getElementById('b1').disabled = isEnabled;
	document.getElementById('b2').disabled = isEnabled;
	document.getElementById('b3').disabled = isEnabled;
	document.getElementById('b4').disabled = isEnabled;
	document.getElementById('b5').disabled = isEnabled;
	document.getElementById('b6').disabled = isEnabled;

}

function activate2(isEnabled)
{
    document.getElementById('b1').disabled = !isEnabled;
	document.getElementById('b2').disabled = !isEnabled;
	document.getElementById('b3').disabled = !isEnabled;
	document.getElementById('b4').disabled = !isEnabled;
	document.getElementById('b5').disabled = !isEnabled;
	document.getElementById('b6').disabled = !isEnabled;

	document.getElementById('a1').disabled = isEnabled;
	document.getElementById('a2').disabled = isEnabled;
	document.getElementById('a3').disabled = isEnabled;
	document.getElementById('a4').disabled = isEnabled;
	document.getElementById('a5').disabled = isEnabled;
	document.getElementById('a6').disabled = isEnabled;
}

</script>
