<html>
<head>
  <title>Home Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'userheader.php'; ?>
<h1>Enter the Family Details</h1>
<div class="container">
  <?php
  if(isset($data['message'])) { ?>
  <div class="panel panel-success">
    <div class="panel-heading"><?php echo $data['message'];?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="insertmem" class="btn btn-info" role="button">Add Member to Family</a></div>
    <div class="panel-body"><div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
        <td>District Code </td>
        <td><?php echo $_POST['dc'];?></td>
      </tr>
      <tr>
        <td>Panchayath </td>
        <td><?php echo $_POST['panchayath'];?></td>
      </tr>
      <tr>
        <td>Ward</td>
        <td><?php echo $_POST['ward'];?></td>
      </tr>
      <tr>
        <td>House Number</td>
        <td><?php echo $_POST['house_number'];?></td>
      </tr>
      <tr>
        <td>House Name </td>
        <td><?php echo $_POST['house_name'];?></td>
      </tr>

    </tbody>
  </table>
  </div>
</div>
  </div>
<?php } ?>
<form class = "form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST" id="f1">
    <div class="form-group">
      <label class = "col-sm-2 control-label">District Code</label>
      <div class = "col-sm-4">
    <input type="number" min =0 class="form-control" name="dc" placeholder="District Code" required ="true">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">P.H.C</label>
      <div class = "col-sm-4">
    <input type="text" class="form-control" name="phc" placeholder="P.H.C" required ="true">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Panchayat</label>
      <div class = "col-sm-4">
             <input type="text" name="panchayath" placeholder="Panchayath" required ="true" class="form-control">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Ward</label>
      <div class = "col-sm-4">
            <input type="number" min=0 name="ward" placeholder="Ward" required ="true" class="form-control">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">House Number</label>
      <div class = "col-sm-4">
          <input type="number" min =0 name="house_number" placeholder="House Number" required ="true"   class="form-control">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">House Name</label>
      <div class = "col-sm-4">
          <input type="text" name="house_name" placeholder="House Name" required ="true"   class="form-control">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Public Health Block Number</label>
      <div class = "col-sm-4">
            <input type="number" min=0 name="public_health_block_number" placeholder="Public Health Block Number" required ="true" class="form-control">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Public Health House Number</label>
      <div class = "col-sm-4">
            <input type="number" min =0 name="public_health_house_number" placeholder="Public Health House Number" required ="true"  class="form-control">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Phone Number</label>
      <div class = "col-sm-4">
            <input type="number" name="phone_number1" placeholder="Phone Number" class="form-control" value=''>
            <br>
            <input type="number" name="phone_number2" placeholder="Phone Number" class="form-control" value=''>
    </div>
    </div>

    <div class="form-group">
      <label class = "col-sm-2 control-label">Religion</label>
      <div class = "col-sm-4">
        <input type="hidden" name="religion" value=''>
        <input type="radio"  onclick="javascript:yesnoCheck('yesCheck','ifYes');" id="noCheck" name="religion" value="hindu">Hindu
        <input type="radio"  onclick="javascript:yesnoCheck('yesCheck','ifYes');" id="noCheck" name="religion" value="christian">Christian
        <input type="radio"  onclick="javascript:yesnoCheck('yesCheck','ifYes');" id="noCheck" name="religion" value="muslim">Muslim
        <input type="radio"  onclick="javascript:yesnoCheck('yesCheck','ifYes');" id="yesCheck" name="religion" value="other">Other (specify)
        <div id="ifYes" style="visibility:hidden">
        <input type="text" class="form-control" name="otherreli" placeholder="Others" value=''>
        </div>
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Caste</label>
      <div class = "col-sm-4">
            <input type="text" name="caste" placeholder="caste" value='' class="form-control">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Category</label>
      <div class = "col-sm-4">
        <input type="hidden" name="castec" value=''>
        <input type="radio" name="castec" value="SC">S.C
        <input type="radio" name="castec" value="ST">S.T
        <input type="radio" name="castec" value="General">General
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">House Ownership</label>
      <div class = "col-sm-4">
      <input type="hidden" name="house" value='-1'>
       <input type="radio" name="house" value="1">Own
        <input type="radio" name="house" value="0">Rent
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">House Type</label>
      <div class = "col-sm-6">
        <input type="hidden" name="house_category" value=''>
       <input type="radio" name="house_category" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="noCheck3" value="concrete">Concrete
            <input type="radio" name="house_category" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="noCheck3" value="sheet">Sheet
            <input type="radio" name="house_category" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="noCheck3" value="corrugated">Corrugated
            <input type="radio" name="house_category" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="noCheck3" value="mud">Mud
            <input type="radio" name="house_category" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="noCheck3" value="leaf">Leaf
            <input type="radio" name="house_category" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="noCheck3" value="canvas">Canvas
            <input type="radio" name="house_category" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="yesCheck3" value="others">Others
       <div id="ifYes3" style="visibility:hidden">
       <input type="text" name="hcother" placeholder="Specify" class="form-control" value=''>
       </div>
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Electricity</label>
      <div class = "col-sm-4">
        <input type="hidden" name="electricity" value="0">
      <input type="checkbox" name="electricity" value="1">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Toilet</label>
      <div class = "col-sm-4">
        <input type="hidden" name="toilet" value="0">
        <input type="checkbox" name="toilet" value="1">
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Monthly Family Income</label>
      <div class = "col-sm-4">
             <input type="number" name="family_income" placeholder="Monthly Income" class="form-control" value=''>
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Health Insurance</label>
      <div class = "col-sm-4">
        <div  class="option">
        <input type="checkbox" name="health_insurance" value="1" id="h_i" class="showHideCheck" >
        <div id="data"  class="hiddenInput" >
            <br>
           <input type="hidden" name="if_any" onclick="javascript:yesnoCheck('yesCheck1','ifYes1');" id="noCheck1"  value="NIL">
           <input type="radio" name="if_any" onclick="javascript:yesnoCheck('yesCheck1','ifYes1');" id="yesCheck1" value="Government">Government
           <input type="radio" name="if_any" onclick="javascript:yesnoCheck('yesCheck1','ifYes1');" id="noCheck1" value="Private">Private
                <input type="radio" name="if_any" onclick="javascript:yesnoCheck('yesCheck1','ifYes1');" id="noCheck1" value="APL">A.P.L
                <input type="radio" name="if_any" onclick="javascript:yesnoCheck('yesCheck1','ifYes1');" id="noCheck1" value="BPL">B.P.L
           <div id="ifYes1" style="visibility:hidden">
           Govt. Insurance Number
           <br>
           <input type="text" name="govt_insurance_no" placeholder="Govt. Insurance Number" class="form-control" value=''>
           </div>
        </div>
        </div>
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Ration Card Number</label>
      <div class = "col-sm-4">
             <input type="text" name="ration_card_no" placeholder="Ration card Number" class="form-control" value=''>
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Drinking water</label>
      <div class = "col-sm-8">
        <input type="hidden" name="drinking_water"  value=''>
        <input type="radio" name="drinking_water" onclick="javascript:yesnoCheck('yesCheck2','ifYes2');" id="noCheck2" value="well">Well
        <input type="radio" name="drinking_water" onclick="javascript:yesnoCheck('yesCheck2','ifYes2');" id="noCheck2" value="public wells">Public Wells
        <input type="radio" name="drinking_water" onclick="javascript:yesnoCheck('yesCheck2','ifYes2');" id="yesCheck2" value="public pipes">Public Pipes
        <input type="radio" name="drinking_water" onclick="javascript:yesnoCheck('yesCheck2','ifYes2');" id="noCheck2" value="ponds">Ponds
        <input type="radio" name="drinking_water" onclick="javascript:yesnoCheck('yesCheck2','ifYes2');" id="noCheck2" value="borewell">Borewell
        <input type="radio" name="drinking_water" onclick="javascript:yesnoCheck('yesCheck2','ifYes2');" id="noCheck2" value="hose">Hose
        <input type="radio" name="drinking_water"onclick="javascript:yesnoCheck('yesCheck2','ifYes2');" id="noCheck2"  value="others water sources">Other's water sources
        <div id="ifYes2" style="visibility:hidden">
          Specify Source <input type="text" name="ppnm" placeholder="Source" class="form-control" value=''>
        </div>
    </div>
    </div>
    <div class="form-group">
      <label class = "col-sm-2 control-label">Cooking oil</label>
      <div class = "col-sm-4">
        <input type="hidden" name="cooking_oil"  value=''>
         <input type="radio" name="cooking_oil" onclick="javascript:yesnoCheck('yesCheck4','ifYes4');" id="noCheck4" value="coconut oil">Coconut oil
                <input type="radio" name="cooking_oil" onclick="javascript:yesnoCheck('yesCheck4','ifYes4');" id="noCheck4" value="vegetable oil">Vegetable oil
                <input type="radio" name="cooking_oil" onclick="javascript:yesnoCheck('yesCheck4','ifYes4');" id="yesCheck4" value="other">Other
       <div id="ifYes4" style="visibility:hidden">
       <br><input type="text" name="coother" placeholder="Specify" class="form-control" value=''>
       </div>
    </div>
    </div>
    <div class = "form-group">
       <div class = "col-sm-offset-2 col-sm-10">
         <button type = "button" class = "btn btn-default" onclick="document.getElementById('f1').reset();" >Reset</button>
          &nbsp   &nbsp   &nbsp<button type = "submit" class = "btn btn-default" value="Submit" name="sub" >Save</button>
      </div>
    </div>
  </form>
</div>
  <script type="text/javascript">
  function yesnoCheck( x, y) {
      if (document.getElementById(x).checked) {
          document.getElementById(y).style.visibility = 'visible';
      }
      else
  		document.getElementById(y).style.visibility = 'hidden';
  }
  </script>


  <script type="text/javascript">
  $(".hiddenInput").hide();
  $(".showHideCheck").on("change", function() {
      $this = $(this);
      $input = $this.parent().find(".hiddenInput");
      if($this.is(":checked")) {
          $input.slideDown();
      } else
  	{
          $input.slideUp();
      }
  });
  </script>



</html>
