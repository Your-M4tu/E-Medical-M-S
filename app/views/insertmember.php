<!DOCTYPE html>
<html lang="en">
<head>
     <title>Personal Details</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/jeevanam/style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  .affix {
top: 100px;
right: 0px;
  }
</style>
</head>
<body>

<div class="container-fluid">
  <?php include 'userheader.php' ?>
  <?php
  if(isset($data['family'][0])) { ?>
  <div class="panel panel-success">
    <div class="panel-heading">Family</div>
    <div class="panel-body"><div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
        <td>District Code </td>
        <td><?php echo $data['family'][0];?></td>
      </tr>
      <tr>
        <td>Panchayath </td>
        <td><?php echo $data['family'][1];?></td>
      </tr>
      <tr>
        <td>Ward</td>
        <td><?php echo $data['family'][2];?></td>
      </tr>
      <tr>
        <td>House Number</td>
        <td><?php echo $data['family'][3];?></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
  </div>
<?php } ?>

<h1>Enter the Personal Details  </h1>
<form class="form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST" id="fr">
<div class="form-group">
  <nav class="affix">
    <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="100">
      <div class = "col-sm-offset-2 col-sm-10">
        <button type = "submit" class = "btn btn-info" value="Submit" name="sub" >Save</button>
        <br>
        <br>
        <button type = "button" class = "btn btn-warning" onclick="document.getElementById('fr').reset();" >Reset</button>
      </div>
    </ul>
  </nav>
<label>Personal Information</label>
	<div class="row">
		<div class="col-sm-2">Name</div>
		<div class="col-sm-8"><input class="form-control" type="text" name="name" placeholder="Name" required="true"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Age</div>
		<div class="col-sm-8"><input type="number" class="form-control" name="age" placeholder="Age" required ="true"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Date of Birth</div>
		<div class="col-sm-8"><input type="date" class="form-control" name="dob" placeholder="Date of birth" value=''></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Gender</div>
		<div class="col-sm-8">
		<input type="hidden" name="gender" class="form-control" value=''>
		<input type="radio" name="gender" value="m" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="noCheck3">Male &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp
    <input type="radio" name="gender" value="f" onclick="javascript:yesnoCheck('yesCheck3','ifYes3');" id="yesCheck3">Female
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Relation with Head of Family</div>
		<div class="col-sm-8"><input type="text" class="form-control" name="relationship_head_family" placeholder="Relation with Head of Family" value=''></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Educational Status</div>
		<div class="col-sm-8"><input type="text" class="form-control" name="education_qualification" placeholder="Educational Status" value=''></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Occupation</div>
		<div class="col-sm-8"><input type="text" value='' class="form-control" placeholder="Occupation" name="occupation"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Aadhar Number</div>
		<div class="col-sm-8"><input type="text" value='' class="form-control" name="aadhar_no" placeholder="Aadhar Number"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Disabilities</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" name="disability" value="0">
		<input type="checkbox" name="disability"  value="1" class="showHideCheck">
		<div id="data"  class="hiddenInput">
		<br>
		<div class="row">
		<div class="col-sm-4">Disabilities</div>
		<div class="col-sm-4"><input type="text" value='' class="form-control" placeholder="Disabilities" name="disabilities"></div>
		</div>
		</div>
		</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Maritial Status</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" name="martial_status" value="0">
        <input type="checkbox" name="martial_status" value="1"class="showHideCheck" />
		<div id="data"  class="hiddenInput" >
		<label>Marriage Details</label>
			<br>
			<div class="row">
			<div class="col-sm-4">Marriage Age</div>
			<div class="col-sm-4"><input type="number" value='' class="form-control"  placeholder="Marriage age" name="age_when_married"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Blood relation between couples</div>
			<div class="col-sm-4"><input type="text" value='' class="form-control" placeholder="Relation" name="blood_relationship"></div>
			</div>

		</div>
		</div>
	</div>
	</div>

	<br>
	<label>Habits</label>
	<div class="row">
		<div class="col-sm-2">Smoking</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" name="h_smoking" value="0">
		<input type="checkbox" name="h_smoking" value="1" class="showHideCheck" />
		<div id="data"  class="hiddenInput" >
		<label>Smoking Details</label>
			<br>
			<div class="row">
			<div class="col-sm-4">Age Smoking Started</div>
			<div class="col-sm-4"><input type="number" value='' class="form-control" placeholder="Age of Starting" name="sstarted_age"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Usage duration</div>
			<div class="col-sm-4"><input type="number" value='' class="form-control" placeholder="year" name="susage_duration"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Usage per day</div>
			<div class="col-sm-4"><input type="number" value ='' class="form-control" placeholder="Number" name="susage_per_day"></div>
			</div>

		</div>
		</div>
	</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Betel with Tobacco</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" name="h_betle_quid" value="0">
		<input type="checkbox" name="h_betle_quid" value="1" class="showHideCheck" />
		<div id="data"  class="hiddenInput" >
		<label>Betel with Tobacco Details</label>
			<br>
			<div class="row">
			<div class="col-sm-4">Age Started</div>
			<div class="col-sm-4"><input type="number" value= '' class="form-control" placeholder="Age of Starting" name="bstarted_age"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Usage duration</div>
			<div class="col-sm-4"><input type="number" value='' class="form-control" placeholder="year" name="busage_duration"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Usage per day</div>
			<div class="col-sm-4"> <input type="number" value='' class="form-control" placeholder="Number" name="busage_per_day"></div>
			</div>

		</div>
		</div>
	</div>
	</div>

	<br>
	<div class="row">
		<div class="col-sm-2">Pan Parag</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" name="h_pan_parag" value="0">
		<input type="checkbox" name="h_pan_parag" value="1" class="showHideCheck" />
		<div id="data"  class="hiddenInput" >
		<label>Pan Parag and Gudka Details</label>
			<br>
			<div class="row">
			<div class="col-sm-4">Age Started</div>
			<div class="col-sm-4"><input type="number" value='' class="form-control" placeholder="Age" name="pstarted_age"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Usage duration</div>
			<div class="col-sm-4"><input type="number" value='' class="form-control" placeholder="Year" name="pusage_duration"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Use of drugs</div>
			<div class="col-sm-4">
			<input type="hidden" value="0" name="drug_usage">
			<input type="checkbox" value="1" name="drug_usage"></div>
			</div>

		</div>
		</div>
	</div>
	</div>

	<br>
	<div class="row">
		<div class="col-sm-2">Alcohol</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" name="h_alcohol" value="0">
		<input type="checkbox" name="h_alcohol" value="1" class="showHideCheck" />
		<div id="data"  class="hiddenInput" >
		<label>Alcohol Details</label>
			<div class="row">
			<div class="col-sm-4">Category</div>
			<div class="col-sm-4">
				<input type="hidden" name="alctype" value=''>
				<input type="radio" name="alctype" value="local">Local
				<input type="radio" name="alctype" value="foreign">Foreign
				<input type="radio" name="alctype" value="both">Both
			</div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Age Started</div>
			<div class="col-sm-4"><input type="number" value='' class="form-control" placeholder="Age" name="aage_started"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-4">Usage duration</div>
			<div class="col-sm-4"><input type="number" value='' class="form-control" placeholder="Years" name="ausage_duration"></div>
			</div>
		</div>
		</div>
	</div>
	</div>

	<label>FOOD HABIT</label>

	<br>
	<div class="row">
		<div class="col-sm-2">Vegetables Only</div>
		<div class="col-sm-8">
		<input type="hidden" name="vegetarian" value="0">
		<input type="checkbox" name="vegetarian" value="1"></div>
	</div>

	<br>
	<div class="row">
		<div class="col-sm-2">Fish</div>
		<div class="col-sm-8">
		<input type="hidden" name="non_vegetarian" value="0">
		<input type="checkbox" name="non_vegetarian" value="1"></div>
	</div>

	<br>
	<div class="row">
		<div class="col-sm-2">Fruits</div>
		<div class="col-sm-8">
		<input type="hidden" name="fruits_usage" value="0">
		<input type="checkbox" name="fruits_usage" value="1">
		</div>
	</div>

	<br>
	<div class="row">
		<div class="col-sm-2">Fried Foods</div>
		<div class="col-sm-8"><input type="hidden" name="fried_roasted_usage" value="0">
		<input type="checkbox" name="fried_roasted_usage" value="1">
		</div>
	</div>

	<br>
	<div class="row">
		<div class="col-sm-2">Dry Fish</div>
		<div class="col-sm-8"><input type="hidden" name="dried_fish" value="0">
		<input type="checkbox" name="dried_fish" value="1">
		</div>
	</div>

	<br><br>
    <label>Health Condition</label>

	<br>
	<div class="row">
		<div class="col-sm-2">Diabetes</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control" name="diabetes" required="true"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Blood Pressure</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control"  name="blood_pressure" required="true" ></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Paralysis</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control"  name="paralysis_cva" required="true"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Asthma</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control" name="asthma" required="true" ></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Cough</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control"  name="cough" required="true" >
		</div>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2">Acidity</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control"  name="acidity" required="true" ></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Heart Disease</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control"  name="heart_diseasey" required="true" >
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Cholestrol</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control" name="cholestrol" required="true">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Tuberculosis</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control" name="tuberculosis" required="true">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Thyroid</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control"  name="thyroid" required="true" >
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Arthiritis</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control"  name="arthiritis" required="true" >
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Liver Diseases</div>
		<div class="col-sm-6"><input type="hidden" value="0" name="liver_diseases">
		<input type="number" min=0 value="0"  class="form-control"  name="liver_diseases" required="true" >
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Other Diseases</div>
		<div class="col-sm-6">
		<input type="number" min=0 value="0"  class="form-control"  name="other_diseasey" required="true">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2">Other medicines taking</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0"  name="medicines_intaking">
		<input type="checkbox" value="1"  name="medicines_intaking"  class="showHideCheck" >
		<div id="data"  class="hiddenInput" >
			<div class="row">
				<div class="col-sm-4">For Diseases </div>
				<div class="col-sm-4"><textarea placeholder="ALL Diseases Description" value='' class="form-control" name="medicine_description"></textarea></div>
			</div>
		</div>
		</div>
		</div>
	</div>


  <br>
	<div class="row">
		<div class="col-sm-2">Common Disease</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0"  name="common_disease">
		<input type="checkbox" value="1"  name="common_disease" class="showHideCheck">

		<div id="data"  class="hiddenInput" >
		<label>Common Diseases </label>
		<br>
		<div class="row">
			<div class="col-sm-6">Mouth Ulcer</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="mouth_ulcers">
			<input type="checkbox" value="1" name="mouth_ulcers"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Don't Know</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="mouth_ulcers1">
			<input type="checkbox" value="1" name="mouth_ulcers1"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
			If yes white(check) or Red(uncheck) <br><input type="hidden" value="0" name="mouth_ulcers2">
			<input type="radio" value="1" name="mouth_ulcers2"></div>
			<div class="col-sm-6">
			Don't Know <br><input type="radio" value="0" name="mouth_ulcers2"> </div>
		</div>

		<br>
		<div class="row">
			<div class="col-sm-6">Oral Treatment History</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="oral_treatment_history">
			<input type="checkbox" value="1" name="oral_treatment_history"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Tooth Pain</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="tooth_pain">
			<input type="checkbox" value="1" name="tooth_pain">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Bleeding in the mouth</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="bleeding_in_the_mouth">
			<input type="checkbox" value="1" name="bleeding_in_the_mouth">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Neck Tumour</div>
			<div class="col-sm-6">
			<input type="hidden" value="1" name="neck_tumour">
			<input type="checkbox" value="1" name="neck_tumour">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Tonsil Inflamation</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="tonsil_inflamation">
			<input type="checkbox" value="1" name="tonsil_inflamation">
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-sm-6">Mouth Widen Difficult</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="mouth_widen_difficult">
			<input type="checkbox" value="1" name="mouth_widen_difficult">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Dysphagia</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="dysphagia">
			<input type="checkbox" value="1" name="dysphagia">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Dysphonia</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="dysphonia">
			<input type="checkbox" value="1" name="dysphonia"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Regular Abdominal Pain</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="regular_abdominal_pain">
			<input type="checkbox" value="1" name="regular_abdominal_pain">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Haematochezia</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="haematochezia">
			<input type="checkbox" value="1" name="haematochezia">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Haematuria</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="haematuria">
			<input type="checkbox" value="1" name="haematuria">
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-sm-6">Dysuria</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="dysuria">
			<input type="checkbox" value="1" name="dysuria">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Doctor Consultancy</div>
			<div class="col-sm-6">
			<textarea class="form-control" value='' name="doctor_consultancy"></textarea>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Biopsy Date</div>
			<div class="col-sm-6"><input type="date" value='' class="form-control" name="biopsy_date"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Operation History</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="operation_history">
			Y<input type="radio" value="1" name="operation_history" onclick="javascript:yesnoCheck('yesCheck','ifYes');" id="yesCheck" >
			N<input type="radio" value="0" name="operation_history" onclick="javascript:yesnoCheck('yesCheck','ifYes');" id="noCheck">
			<div id="ifYes" style="visibility:hidden">
				<div class="row">
					<div class="col-sm-12"><input type="text" value='' class="form-control" placeholder="Disease" name="details"></div>
			</div>
			</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Chemotherapy Xray Radiation Mammography</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="chemotherapy_xray_radiation_mammography">
			Y<input type="radio" value="1" name="chemotherapy_xray_radiation_mammography" onclick="javascript:yesnoCheck('yesCheck7','ifYes7');" id="yesCheck7">
			N<input type="radio" value="0" name="chemotherapy_xray_radiation_mammography" onclick="javascript:yesnoCheck('yesCheck7','ifYes7');" id="noCheck7">
			<div id="ifYes7" style="visibility:hidden">
				<div class="row">
					<div class="col-sm-12"><input type="text" value='' class="form-control" placeholder="Disease" name="details1"></div>
			</div>
			</div>

			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Dome Lump</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="dome_lump">
			<input type="checkbox" value="1" name="dome_lump">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Non Healing Wounds</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="non_healing_wounds">
			<input type="checkbox" value="1" name="non_healing_wounds"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">Quick Growing Moles</div>
			<div class="col-sm-6">
			<input type="hidden" value="0" name="quick_growing_moles">
			<input type="checkbox" value="1" name="quick_growing_moles"></div>
		</div>


		</div>
		</div>
		</div>
		</div>


  <br>

<h1>ONLY FOR KIDS</h1>

    <br>
	<div class="row">
		<div class="col-sm-2">Regular Fever</div>
		<div class="col-sm-8">
		<input type="hidden" value="0" name="regular_fever">
		<input type="checkbox" value="1" name="regular_fever"></div>
	</div>
<br>
	<div class="row">
		<div class="col-sm-2">Anemia</div>
		<div class="col-sm-8">
		<input type="hidden" value="0" name="anemia">
		<input type="checkbox" value="1" name="anemia"></div>
	</div>
  <br>
  <div class="row">
    <div class="col-sm-2">Heart Disease</div>
    <div class="col-sm-8">
    <div  class="option">
    <input type="hidden" value="0" name="heart_disease">
    <input type="checkbox" value="1" name="heart_disease" class="showHideCheck" >
    <div id="data"  class="hiddenInput" >
      <br>
      <div class="row">

      <div class="col-sm-6">Heart Disease Description</div>

            <div class="col-sm-6"><textarea placeholder="Disease Description" value='' class="form-control" name="h_description"></textarea>
      </div>
      </div>
    </div>
    </div>
    </div>
  </div>
    <br>
    <div class="row">
  		<div class="col-sm-2">Other Diseases</div>
  		<div class="col-sm-8">
  		<div  class="option">
  		<input type="hidden" value="0" name="other_disease">
  		<input type="checkbox" value="1" name="other_disease" class="showHideCheck">
  		<div id="data"  class="hiddenInput" >
  			 <label>Other Diseases</label>
  			<br>
  			<div class="row">
  			<div class="col-sm-6">Disease</div>
  			<div class="col-sm-6"><input type="text" value='' class="form-control" placeholder="Disease" name="odisease"></div>
  		</div>
  			<br>
  		<div class="row">
  			<div class="col-sm-6">Description</div>
  			<div class="col-sm-6"><input type="text" value='' class="form-control" placeholder="Description" name="od_description"></div>
  		</div>
  		</div>
  		</div>
  		</div>
  	</div>
  	<br>
	<div class="row">
		<div class="col-sm-2">Hepatitis</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0" name="hepatitis">
		<input type="checkbox" value="1" name="hepatitis" class="showHideCheck">
		<div id="data"  class="hiddenInput">

		<br>
	<div class="row">
		<div class="col-sm-4">Type</div>
		<div class="col-sm-8"><input type="text" value='' class="form-control" placeholder="Type" name="htype"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Times</div>
		<div class="col-sm-8"><input type="number" value='' class="form-control" placeholder="Times" name="htimes"></div>
	</div>
		</div>
		</div>
		</div>
	</div>
	<br>

<h1>SCREENING DETAILS</h1>

    <br>
	<div class="row">
		<div class="col-sm-2">Screening Camp Place</div>
		<div class="col-sm-8"><input type="text" class="form-control" value='' placeholder="Screening Camp Place" name="screening_camp_place"></div>
	</div>

    <br>
	<div class="row">
		<div class="col-sm-2">Date</div>
		<div class="col-sm-8"><input type="date" value='' class="form-control" placeholder="Date" name="date"></div>
	</div>

    <br>
	<div class="row">
		<div class="col-sm-2">Height</div>
		<div class="col-sm-8"><input type="number" value='0' step="0.01" required="true" class="form-control" placeholder="Height" name="height"></div>
	</div>
 <br>
	<div class="row">
		<div class="col-sm-2">Weight</div>
		<div class="col-sm-8"><input type="number"  value='0' step="0.01" required="true" class="form-control" placeholder="Weight" name="weight"></div>
	</div>

    <br>
	<div class="row">
		<div class="col-sm-2">BMI</div>
		<div class="col-sm-8"><input type="number"  value='0' step="0.01" required="true" class="form-control" placeholder="BMI" name="bmi"></div>
	</div>

    <br>
	<div class="row">
		<div class="col-sm-2">BP</div>
		<div class="col-sm-8"><input type="number"  value='0' step="0.01" required="true" class="form-control" placeholder="BP" name="bp"></div>
	</div>

    <br>
	<div class="row">
		<div class="col-sm-2">RBS</div>
		<div class="col-sm-8"><input type="number"  value='0' step="0.01" required="true" class="form-control" placeholder="RBS" name="rbs"></div>
	</div>

    <br>
	<div class="row">
		<div class="col-sm-2">FBS</div>
		<div class="col-sm-8"><input type="number"  value='0' step="0.01" required="true" class="form-control" placeholder="FBS" name="fbs"></div>
	</div>

    <br>
	<div class="row">
		<div class="col-sm-2">Cholestrol</div>
		<div class="col-sm-8"><input type="number"  value='0' step="0.01" required="true" class="form-control" placeholder="Cholestrol" name="cholestrol"></div>
	</div>


<div id="ifYes3" style="visibility:hidden">
<!-----------ONLY FOR LADIES STARTS-------------------------------------------------------------->
 <h1>ONLY FOR LADIES</h1>
 <div class="row">
		<div class="col-sm-2">Menstruation Started Age</div>
		<div class="col-sm-8"><input type="number" value ='0' min='0' required="true" class="form-control" placeholder="Menstruation Started Age" name="menstruation_started_age"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Regular Menstruation</div>
		<div class="col-sm-8"><input type="hidden" value="0" name="regular_menstruation">
			<input type="checkbox" value="1" name="regular_menstruation"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">MenoPause Age</div>
		<div class="col-sm-8"> <input type="number" value='0' required="true" min='0' class="form-control" placeholder="Age" name="menupause_age"></div>
	</div>
<br>

<div class="row">
		<div class="col-sm-2">Age of First delivery</div>
		<div class="col-sm-8"> <input type="number" value='0' required="true" min='0' class="form-control" placeholder="Age" name="age_first_delivery"></div>
	</div>
<br>

<div class="row">
		<div class="col-sm-2">Number of Children</div>
		<div class="col-sm-8"><input type="number" value='0' required="true" min='0'  class="form-control" name="no_children"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Number of Pregnancy </div>
		<div class="col-sm-8"> <input type="number" value='0' required="true" min='0'  class="form-control" name="no_pregnancy"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Use of Contraceptives</div>
		<div class="col-sm-8"> <input type="hidden" value="0" name="use_of_contraceptives">
				<input type="checkbox" value="1" name="use_of_contraceptives"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Abortion History</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0" name="abortion_history">
		<input type="checkbox" value="1" name="abortion_history" class="showHideCheck">

	<div id="data"  class="hiddenInput" >
	<div class="row">
		<div class="col-sm-6">Count</div>
		<div class="col-sm-6"><input type="number" value='0' required="true" min='0' name="abcount" class="form-control" placeholder="Count"></div>
	</div>
	</div>
	</div>
	</div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Utreus Removed</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0" name="whether_uterus_removed">
			<input type="checkbox" value="1" name="whether_uterus_removed" class="showHideCheck">
			<div id="data"  class="hiddenInput" >
			<div class="row">
			<div class="col-sm-6">Reason</div>
			<div class="col-sm-6"> <input type="text" value='' name="utrereason" class="form-control" placeholder="Reason"></div>
			</div>
			<br>
			</div>
			</div>
			</div>
	</div>
<br>

<div class="row">
		<div class="col-sm-2">Utreus Disease</div>
		<div class="col-sm-8"><input type="text" value='' class="form-control" placeholder="Uterus Disease" name="uterus_disease"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Retracted Nipple</div>
		<div class="col-sm-8"><input type="hidden" value="0" name="retracted_nipple">
		<input type="checkbox" value="1" name="retracted_nipple"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Leucorrhoea</div>
		<div class="col-sm-8"> <input type="hidden" value="0" name="leucorrhoea">
 <input type="checkbox" value="1" name="leucorrhoea"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Irregular Blood Bleeding</div>
		<div class="col-sm-8"><input type="hidden" value="0" name="irregular_blood_bleeding">
<input type="checkbox" value="1" name="irregular_blood_bleeding"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Blood Bleeding After Intercourse</div>
		<div class="col-sm-8"><input type="hidden" value="0" name="blood_bleeding_after_intercourse">
		<input type="checkbox" value="1" name="blood_bleeding_after_intercourse"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Blood Bleeding After Menopause</div>
		<div class="col-sm-8"><input type="hidden" value="0" name="blood_bleeding_after_menupause">
<input type="checkbox" value="1" name="blood_bleeding_after_menupause"></div>
	</div>
<br>

<div class="row">
		<div class="col-sm-2">Other Diseases Pubic Place</div>
		<div class="col-sm-8">
			<input type="hidden" value="0" name="other_diseases_pubic_place">
			<input type="checkbox" value="1" name="other_diseases_pubic_place" class="showHideCheck">
	</div>
	</div>

<br>

<div class="row">
		<div class="col-sm-2">Utreus Cancer Tested</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0" name="utreus_cancer_tested">
		<input type="checkbox" value="1" name="utreus_cancer_tested" class="showHideCheck" >
		<div id="data"  class="hiddenInput">
		<div class="row">
		<div class="col-sm-6">Tested Date</div>
		<div class="col-sm-6"><input type="date" name="uctdate" class="form-control" value='' placeholder="Date"><br><br></div>
		</div>
		<br>
		<div class="row">
		<div class="col-sm-6">Result</div>
		<div class="col-sm-6"><input type="text" value='' class="form-control" name="uctresult" placeholder="Result"></div>
		</div>

		</div>
		</div>
		</div>
	</div>
<br>


<div class="row">
		<div class="col-sm-2">Consumption Medicine Veneral Disease</div>
		<div class="col-sm-8"><input type="hidden" value="0" name="consuption_medicine_veneral_disease">
<input type="checkbox" value="1" name="consuption_medicine_veneral_disease"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Consumption Medicine Infertility</div>
		<div class="col-sm-8"> <input type="hidden" value="0" name="consuption_medicine_infertility">
			<input type="checkbox" value="1" name="consuption_medicine_infertility"></div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Breast Feeding</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0" name="breast_feeding">
		<input type="checkbox" value="1" name="breast_feeding" class="showHideCheck">
		<div id="data"  class="hiddenInput">

		<div class="row">
		<div class="col-sm-6">Duration</div>
		<div class="col-sm-6"> <input type="number" value='0' required="true" min='0' class="form-control" name="bfduration" placeholder="Duration in year"></div>
		</div>
		</div>
		</div>

</div>
</div>
<br>

<div class="row">
		<div class="col-sm-2">Breast Operation History</div>
		<div class="col-sm-8"><input type="hidden" value="0" name="breast_operation_history">
 <input type="checkbox" value="1" name="breast_operation_history"></div>
	</div>
<br>

<div class="row">
		<div class="col-sm-2">Breast Radiation History</div>
		<div class="col-sm-8"><input type="hidden" value="0" name="breast_radiation_history">
<input type="checkbox" value="1" name="breast_radiation_history"></div>
	</div>
<br>

<div class="row">
		<div class="col-sm-2">Breast Color Change, Lumps or Rashes</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0" name="breast_color_change_lumps_or_rashes">
		<input type="checkbox" value="1" name="breast_color_change_lumps_or_rashes" class="showHideCheck">
		<div id="data"  class="hiddenInput">
	<div class="row">
		<div class="col-sm-4">Time occured</div>
		<div class="col-sm-4"><input type="date" value='' name="bcclrdate" class="form-control" placeholder="Date Occured"></div>
	</div>
	</div>
	</div>
 </div>
	</div>
<br>
<div class="row">
		<div class="col-sm-2">Family history related to Cancer , Heart , Kidney Diseases</div>
		<div class="col-sm-8">
		<div  class="option">
		<input type="hidden" value="0" name="family_hist">
		<input type="checkbox" value="1" name="family_hist" class="showHideCheck">
		<div id="data"  class="hiddenInput">
	<div class="row">
		<div class="col-sm-4">Description</div>
		<div class="col-sm-4"><input type="textarea" name="fhdesc" value='' class="form-control" placeholder="Detail Description"></div>
	</div>
	</div>
	</div>
 </div>
	</div>
</div>

</form>
</div>
</div>
</body>
</html>


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

<script type="text/javascript">
function yesnoCheck( x, y) {
    if (document.getElementById(x).checked) {
        document.getElementById(y).style.visibility = 'visible';
    }
    else
		document.getElementById(y).style.visibility = 'hidden';
}
</script>
