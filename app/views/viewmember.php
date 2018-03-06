<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <?php include'userheader.php' ?>
  <h1 align="center">Personal Details</h1>
  <table class="table table-hover table-bordered " width="2" id="printTable">

    <tbody>
      <tr>
        <td>

              <div class="panel panel-info">
                <div class="panel-heading"> <h3>Personal Information</h3> </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <tbody>
                  <tr>
                  <td>id</td>
                  <td><?php echo $data['pdetails']['id'];?></td>
                  </tr>
                  <tr>
                  <td>Aadhar No</td>
                  <td><?php echo $data['pdetails']['aadhar_no'];?></td>
                  </tr>
                  <tr>
                  <td>Name</td>
                  <td><?php echo $data['pdetails']['name'];?></td>
                  </tr>
                  <tr>
                  <td>Age</td>
                  <td><?php echo $data['pdetails']['age'];?></td>
                  </tr>
                  <tr>
                  <td>Date of birthday</td>
                  <td><?php echo $data['pdetails']['dob'];?></td>
                  </tr>
                  <tr>
                  <td>Gender</td>
                  <td><?php echo $data['pdetails']['gender'];?></td>
                  </tr>
                  <tr>
                  <td>Relationship With Head of Family </td>
                  <td><?php echo $data['pdetails']['relationship_head_family'];?></td>
                  </tr>
                  <tr>
                  <td>Marital Status</td>
                  <td><?php if($data['pdetails']['marital_status']==1) echo "Yes"; else echo "No";?></td>
                  </tr>
                  <tr>
                  <td>Education qualification</td>
                  <td><?php echo $data['pdetails']['education_qualification'];?></td>
                  </tr>
                  <tr>
                  <td>Occupation</td>
                  <td><?php echo $data['pdetails']['occupation'];?></td>
                  </tr>
                  <tr>
                  <td>Smoking Usage</td>
                  <td><?php if($data['pdetails']['h_smoking']==1) echo "Yes"; else echo "No"; ?></td>
                  </tr>
                  <tr>
                  <td>Betel quid Usage</td>
                  <td><?php if($data['pdetails']['h_betel_quid']==1) echo "Yes"; else echo "No"; ?></td>
                  </tr>
                  <tr>
                  <td>Pan parag Usage</td>
                  <td><?php if($data['pdetails']['h_pan_parag']==1) echo "Yes"; else echo "No"; ?></td>
                  </tr>
                  <tr>
                  <td>Alcohol Usage</td>
                  <td><?php if($data['pdetails']['h_alcohol']==1) echo "Yes"; else echo "No"; ?></td>
                  </tr>

                </tbody>
              </table>

                </div>
              </div>
        </td>
      </tr>

<?php if($data['pdetails']['marital_status']==1) { ?>
      <tr>
        <td>

              <div class="panel panel-info">
                <div class="panel-heading"><h3>Marriage Details</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
		                    <th>Age When Married</th>
		                    <th>Blood Relationship</th>
		                </thead>
		                <tbody>

		                    <tr>
		                        <td><?php echo $data['md']['age_when_married'];?></td>
		                        <td><?php echo $data['md']['blood_relationship'];?></td>
                        </tr>
		                </tbody>
                  </table>
                </div>
              </div>

        </td>
      </tr>
<?php } ?>
<?php if($data['pdetails']['h_smoking']==1) { ?>
      <tr>
        <td>
              <div class="panel panel-info">
                <div class="panel-heading"><h3>Smoking Habit Details</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
		                      <th>Started Age</th>
		                      <th>Usage Duration</th>
		                        <th>Usage per Day</th>
                    </thead>
		                  <tbody>
                        <tr>
                          <td>  <?php echo $data['smk']['started_age'];?></td>
                          <td><?php echo $data['smk']['usage_duration'];?></td>
                          <td><?php echo $data['smk']['usage_per_day'];?></td>
                        </tr>
                      </tdody>
                  </table>
                </div>
              </div>
        </td>
      </tr>
<?php } ?>
<?php if($data['pdetails']['h_betel_quid']==1) { ?>
      <tr>
        <td>

              <div class="panel panel-info">
                <div class="panel-heading"><h3>Betel with Tobacoo Habit Details </h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <th>Started Age</th>
                      <th>Usage Duration</th>
                      <th>Usage per Day</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $data['bl']['started_age'];?></td>
                        <td><?php echo $data['bl']['usage_duration'];?></td>
                        <td><?php echo $data['bl']['usage_per_day'];?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </td>
      </tr>
      <?php } ?>
      <?php if($data['pdetails']['h_pan_parag']==1) { ?>
      <tr>
        <td>

              <div class="panel panel-info">
                <div class="panel-heading"><h3>Pan Parag Habit Details</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
		                    <th>Started Age</th>
		                      <th>Usage Duration</th>
		                        <th>Drug Usage</th>
		                        </thead>
		                          <tbody>
		                              <tr>
		 	                                <td> <?php echo $data['pan']['started_age'];?></td>
			                                <td> <?php echo $data['pan']['usage_duration'];?></td>
		  	                               <td><?php if($data['pan']['drug_usage']==1) echo "Yes"; else echo "No";?></td>

		                                </tr>
		                            </tbody>
                  </table>
                </div>
              </div>
        </td>
      </tr>
<?php } ?>
<?php if($data['pdetails']['h_alcohol']==1) { ?>
      <tr>
        <td>

              <div class="panel panel-info">
                <div class="panel-heading"><h3>Alcohol Usage Habit Details </h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <th>Category</th>
                      <th>Started Age</th>
                      <th>Usage Duration</th>
		                    <tbody>
		                        <tr>
		                            <td> <?php echo $data['au']['category'];?></td>
		                            <td><?php echo $data['au']['started_age'];?></td>
		                              <td><?php echo $data['au']['usage_duration'];?></td>
		                            </tr>
		                              </tbody>
                  </table>
                </div>
              </div>
        </td>
      </tr>

<?php } ?>
      <tr>
        <td>

              <div class="panel panel-info">
                <div class="panel-heading"><h3>Food Habit</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
		                    <th>Vegetarian</th>
		                      <th>Non Vegetarian</th>
			                       <th>Fruits Usage</th>
			                          <th>Fried/Roasted Usage</th>
			                             <th>dried Fish</th>
              		  </thead>
		                <tbody>
		                  <tr>
		                      <td><?php if($data['fdh']['vegetarian']==1) echo "Yes"; else echo "No"; ?></td>
		                      <td><?php if($data['fdh']['non_vegetarian']==1) echo "yes"; else echo "No";?></td>
		                      <td><?php if($data['fdh']['fruits_usage']==1) echo "Yes"; else echo "No"; ?></td>
		                      <td><?php if($data['fdh']['fried_roasted_usage']==1) echo "Yes"; else echo "No"; ?></td>
                          <td><?php if($data['fdh']['dried_fish']==1) echo "Yes"; else echo "No"; ?></td>
		                      </tr>
		                </tbody>
                  </table>
                </div>
              </div>
        </td>
      </tr>


      <tr>
        <td>

              <div class="panel panel-info">
                <div class="panel-heading"><h3>Health Condition (Year in Suffering the diseases)</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <th>Diabetes</th>
			                <th>Blood Pressure</th>
			                <th>Paralysis CVA</th>
			  	            <th>Asthma</th>
				               <th>Cough</th>
				              <th>Acidity</th>
				              <th>Heart Disease</th>
				              <th>Cholestrol</th>
				              <th>Tuberculosis</th>
				              <th>thyroid</th>
                      <th> Arthritis</th>
                      <th>Liver Diseases</th>
                      <th>Other Disease</th>
	                   </thead>
		                   <tbody>
                         <tr>
	                          <td> <?php echo $data['hc']['diabetes']; ?> </td>
                            <td> <?php echo $data['hc']['blood_pressure']; ?> </td>
                            <td> <?php echo $data['hc']['paralysis_cva']; ?> </td>
                            <td> <?php echo $data['hc']['asthma']; ?> </td>
                            <td> <?php echo $data['hc']['cough']; ?> </td>
                            <td> <?php echo $data['hc']['acidity']; ?> </td>
                            <td> <?php echo $data['hc']['heart_ disease']; ?> </td>
                            <td> <?php echo $data['hc']['cholestrol']; ?> </td>
                            <td> <?php echo $data['hc']['tuberculosis']; ?> </td>
                            <td> <?php echo $data['hc']['thyroid']; ?> </td>
                            <td> <?php echo $data['hc']['arthritis']; ?> </td>
                            <td> <?php echo $data['hc']['liver_diseases']; ?> </td>
                            <td> <?php echo $data['hc']['other_disease']; ?> </td>
                          </tr>
                        </tbody>
                  </table>
                </div>
              </div>
        </td>
      </tr>
<?php if($data['hc']['common_disease']==1) { ?>
      <tr>
        <td>

              <div class="panel panel-info">
                <div class="panel-heading"><h3>Other Common Diseases Details</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                            <tr>
                      <th>Mouth Ulcers</th>
                      <th>Oral Treatment History</th>
                      <th>Tooth Pain</th>
                      <th>Bleeding in Mouth</th>
                      <th>Neck Tumor</th>
                      <th>Tonsil Inflammation</th>
                    </tr>
                    </thead>
                <tbody>
                        <tr>
                  <td><?php
                  $mc=explode('/',$data['cd']['mouth_ulcers']);
                  if($mc['1']==1) echo "Don't Know";
                  else {
                    if($mc['0']==1)
                      {
                          if($mc['2']=='1') echo "Yes (White)";
                          else echo "Yes (Red)";
                      }
                    else
                      echo "No";
                    }
                     ?></td>
                  <td><?php if($data['cd']['oral_treatment_history']==1) echo "Yes"; else echo "No"; ?></td>
                  <td><?php if($data['cd']['tooth_pain']==1) echo "Yes"; else echo "No"; ?></td>
                  <td><?php if($data['cd']['bleeding_in_mouth']==1) echo "Yes"; else echo "No"; ?></td>
                  <td><?php if($data['cd']['neck_tumor']==1) echo "Yes"; else echo "No"; ?></td>
                  <td><?php if($data['cd']['tonsil_inflammation']==1) echo "Yes"; else echo "No"; ?></td>
                      </tr>
                </tbody>
            </table>
            <table class="table table-striped table-bordered">
              <thead>
                      <tr>
                <th>Mouth widen Difficult</th>
                <th>Dysphagia</th>
                <th>Regular Abdominal Pain</th>
                <th>Haematochezia</th>
                <th>Dysuria</th>
                <th>Haematuria</th>
                  </tr>
              </thead>
              <tbody>
                      <tr>
                <td><?php if($data['cd']['mouth_widen_difficult']==1) echo "Yes"; else echo "No"; ?></td>
                <td><?php if($data['cd']['dysphagia']==1) echo "Yes"; else echo "No"; ?></td>
                <td><?php if($data['cd']['regular_abdominal_pain']==1) echo "Yes"; else echo "No"; ?></td>
                <td><?php if($data['cd']['haematochezia']==1) echo "Yes"; else echo "No"; ?></td>
                <td><?php if($data['cd']['dysuria']==1) echo "Yes"; else echo "No"; ?></td>
                <td><?php if($data['cd']['haematuria']==1) echo "Yes"; else echo "No"; ?></td>
                    </tr>
              </tbody>
          </table>
          <table class="table table-striped table-bordered">
            <thead>
                    <tr>
              <th>Doctor Consultancy</th>
              <th>Biopsy Date</th>
              <th>Dome/Lump</th>
              <th>Non Healing Wounds</th>
              <th>Quick Growing Moles</th>
                </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $data['cd']['doctor_consultancy']; ?></td>
              <td><?php  echo $data['cd']['biopsy_date']; ?></td>
              <td><?php if($data['cd']['dome_lump']==1) echo "Yes"; else echo "No"; ?></td>
              <td><?php if($data['cd']['nonhealing_wounds']==1) echo "Yes"; else echo "No"; ?></td>
              <td><?php if($data['cd']['quick_growing_moles']==1) echo "Yes"; else echo "No"; ?></td>
                  </tr>
              </tbody>
            </table>

            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                <th>Operation History</th>
                <th>Chemotherapy Xray Radiation Mammography</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                <td><?php if($data['cd']['operation_history']==1) echo "Yes <br><hr> Description : ".$data['oph']['disease']; else echo "No"; ?></td>
                <td><?php if($data['cd']['chemotherapy_xray_radiation_mammography']==1) echo "Yes <br><hr> Description : ".$data['che']['disease']; else echo "No"; ?></td>
                </tr>
              </tbody>
            </table>
                </div>
              </div>
        </td>
      </tr>

<?php }
if($data['pdetails']['gender']=='f')
{
?>

      <tr>
        <td>
              <div class="panel panel-info">
                <div class="panel-heading"><h3>Female Related Fields</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                            <tr>
                              <th>Menstruation Started Age</th>
                          		  <th>Regular Menstruation</th>
                          		  <th>Menupause Age</th>
                          		  <th>Age of First Delivery</th>
                          		  <th>No of Children</th>
                          		  <th>No of Pregnancies Undertaken</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><?php echo $data['fem']['menstruation_started_age'];?></td>
                      		 <td> <?php if($data['fem']['regular_menstruation']==1) echo "Yes"; else echo "No";?></td>
                      		 <td> <?php echo $data['fem']['menupause_age'];?></td>
                      		  <td><?php echo $data['fem']['age_first_delivery'];?></td>
                      		  <td><?php echo $data['fem']['no_child'];?></td>
                      		   <td><?php echo $data['fem']['no_pregnancies'];?></td>
                          </tr>
                      </tbody>
                    </table>
                    <table class="table table-striped table-bordered">
                      <thead>
                              <tr>
                                <th>Use of Contraceptives</th>
                                		  <th>Abortion History</th>
                                		  <th>Uterus Removed</th>
                                		  <th>Uterus Disease</th>
                                		  <th>Retracted Nipple</th>
                                		  <th>Leucorrhoea</th>
                          </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td> <?php if($data['fem']['use_of_contraceptives']==1) echo "Yes"; else echo "No";?></td>
                        <td> <?php if($data['fem']['abortion_history']==1) echo "Yes<br><hr>Count &nbsp: &nbsp". $data['ah']['count']; else echo "No";?></td>
                        <td> <?php if($data['fem']['whether_uterus_removed']==1) echo "Yes<br><hr>Reason &nbsp: &nbsp".$data['utrem']['reason']; else echo "No";?></td>
                        <td><?php echo $data['fem']['uterus_disease'];?></td>
                        <td> <?php if($data['fem']['retracted_nipple']==1) echo "Yes"; else echo "No";?></td>
                        <td> <?php if($data['fem']['leucorrhoea']==1) echo "Yes"; else echo "No";?></td>

                            </tr>
                        </tbody>
                      </table>
                      <table class="table table-striped table-bordered">
                        <thead>
                                <tr>
                                  <th>Irregular Blood Bleeding</th>
		                                <th>Blood Bleeding after Intercourse</th>
		                                  <th>Blood Bleeding after Menopause</th>
		                                    <th>Other Diseases in Pubic Place</th>
		                                      <th>Uterus Cancer Tested</th>
		                                        <th>Consumption of Medicine for Venereal diseases</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td> <?php if($data['fem']['irregular_blood_bleeding']==1) echo "Yes"; else echo "No";?></td>
                          <td> <?php if($data['fem']['blood_bleeding_after_intercourse']==1) echo "Yes"; else echo "No";?></td>
                          <td> <?php if($data['fem']['blood_bleeding_after_menupause']==1) echo "Yes"; else echo "No";?></td>
                          <td> <?php if($data['fem']['other_diseases_pubic_place']==1) echo "Yes"; else echo "No";?></td>
                          <td> <?php if($data['fem']['uterus_cancer_tested']==1) echo "Yes"; else echo "No";?></td>
                          <td> <?php if($data['fem']['consumption_medicine_venereal_diseases']==1) echo "Yes"; else echo "No";?></td>

                              </tr>
                          </tbody>
                        </table>
                        <table class="table table-striped table-bordered">
                          <thead>
                                  <tr>
                                    <th>Consumption of Medicine for Infertility</th>
		  <th>Breast Feeding</th>
		  <th>Breast Operation History</th>
		<th>Breast Radiation History</th>
		       <th>Breast Colorchange Lump/Rash</th>
			    <th>Family History of Cancer/Heart/Kidney diseases</th>
                              </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td> <?php if($data['fem']['consumption_medicine_infertility']==1) echo "Yes"; else echo "No";?></td>
                             <td> <?php if($data['fem']['breast_feeding']==1) echo "Yes<br><hr>Duration &nbsp:&nbsp".$data['bf']['duration']; else echo "No";?></td>
                             <td> <?php if($data['fem']['breast_operation_history']==1) echo "Yes"; else echo "No";?></td>
                             <td> <?php if($data['fem']['breast_radiation_history']==1) echo "Yes"; else echo "No";?></td>
                             <td> <?php if($data['fem']['breast_colorchange_lump_rash']==1) echo "Yes<br><hr>Time &nbsp : &nbsp".$data['bcc']['time_occured']; else echo "No";?></td>
                            <td> <?php if($data['fem']['family_history_cancer_heart_kidney_diseases']==1) echo "Yes<br><hr>Description &nbsp:&nbsp".$data['fahi']['description']; else echo "No";?></td>
                                </tr>
                            </tbody>
                          </table>
                </div>
              </div>
        </td>
      </tr>

      <?php } ?>

          <?php if($data['pdetails']['age']<16) { ?>
      <tr>
        <td>
              <div class="panel panel-info">
                <div class="panel-heading"><h3>Children Related Details</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                    		  <th>Regular Fever </th>
                    		  <th>Anemia</th>
                          <th>Hepatitis</th>
                    		  <th>Heart Disease</th>
                    		  <th>Other Diseases</th>
                    		  </thead>
                    		  <tbody>
                    		  <tr>
                     <td> <?php if($data['chd']['regular_fever']==1) echo "Yes"; else echo "No";?></td>
                     <td> <?php if($data['chd']['anemia']==1) echo "Yes"; else echo "No";?></td>
                     <td> <?php if($data['chd']['hepatitis']==1) echo "Yes"; else echo "No";?></td>
                     <td> <?php if($data['chd']['heart_disease']==1) echo "Yes<br><hr>".$data['htd']['description']; else echo "No";?></td>
                     <td> <?php if($data['chd']['other_disease']==1) echo "Yes"; else echo "No";?></td>
                    </tr>
                    		  </tbody>
                  </table>
                </div>
              </div>
        </td>
      </tr>
      <?php if($data['chd']['hepatitis']==1) { ?>
        <tr>
          <td>
                <div class="panel panel-info">
                  <div class="panel-heading"><h3>Hepatitis</h3></div>
                  <div class="panel-body">
                    <table class="table table-striped table-bordered">
                      <thead>
                          <th>Type</th>
                            <th>Times</th>
                            </thead>
                              <tbody>
                                  <tr>
                                      <td> <?php echo $data['hep']['type'];?></td>
                                        <td> <?php echo $data['hep']['times'];?></td>
                                       </tr>
                                       </tbody>
                    </table>
                  </div>
                </div>
          </td>
        </tr>
      <?php } ?>
      <tr>
        <td>
            <?php } ?>
              <div class="panel panel-info">
                <div class="panel-heading"><h3>Screening Details</h3></div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Screening Camp Place</th>
                        <th>Date</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>BMI</th>
                        <th>BP</th>
                        <th>RBS</th>
                        <th>FBS</th>
                        <th>Cholestrol</th>
                      </tr>
                      <tbody>
                        <tr>
                          <td><?php echo $data['sd']['screening_camp_place'];?></td>
                          <td><?php echo $data['sd']['date'];?></td>
                          <td><?php echo $data['sd']['height'];?></td>
                          <td><?php echo $data['sd']['weight'];?></td>
                          <td><?php echo $data['sd']['BMI'];?></td>
                          <td><?php echo $data['sd']['BP'];?></td>
                          <td><?php echo $data['sd']['RBS'];?></td>
                          <td><?php echo $data['sd']['FBS'];?></td>
                          <td><?php echo $data['sd']['cholestrol'];?></td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>
        </td>
      </tr>



    </tbody>
  </table>

  <button class="btn btn-primary" id="print">Print</button>
</div>
<script>


function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$("#print").on('click',function(){
printData();
})
</script>
</body>
</html>
