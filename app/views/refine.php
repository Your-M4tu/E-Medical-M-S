<?php
include("config.php");

?>

<html>
<head>

    <title>Refinement</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <?php include 'userheader.php'; ?>
  	<h1>REFINEMENT </h1>
  <?php if(isset($data['row'])) { ?>
  <div class="panel panel-info">
    <div class="panel-heading">Refinement Result</div>
    <div class="panel-body">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>PHC</th>
            <th>Panchayat</th>
            <th>Public Health Block No</th>
            <th>Public Health House No</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th></th>
            </tr>
          </thead>
          <form action="<?php $_PHP_SELF ?>" method="POST">
        <tbody>
        <?php while($row=mysqli_fetch_assoc($data['row'])) { ?>
          <?php  $y=explode('/',$row['fid']);?>
     <tr>
       <td><?php echo $y[0]; ?> </td>
       <td><?php echo $y[1]; ?> </td>
       <td><?php echo $y[2]; ?> </td>
       <td><?php echo $y[3]; ?> </td>
       <td><?php echo $y[4]; ?> </td>
       <td><?php echo $y[5]; ?> </td>
       <td><button type = "submit" class = "btn btn-info" name="viewall" value="<?php echo $row['fid'] ?>" >Click me</button></td>
     </tr>
  <?php } ?>
  </tbody>
  </form>
      </table>
    </div>
  </div>

  <?php } ?>
  <form class = "form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST">
    <div class="col-sm-10">
      <div class="form-group">
				<label for = "age" class = "col-sm-2 control-label">Age</label>
          <div class = "col-sm-5">
            <input type="number"  class="form-control"  name="l1"  placeholder="age" min="0" value= "<?php if(isset($_POST['l1'])) echo $_POST['l1']; ?>">
          </div>
          <div class = "col-sm-5">
            <input type="number"  class="form-control"  name="l2"  placeholder="age"  min="0" value= "<?php if(isset($_POST['l2'])) echo $_POST['l2']; ?>">
          </div>
      </div>
      <div class="form-group">
        <label for = "dob" class = "col-sm-2 control-label">DOB</label>
          <div class="col-sm-5">
        		<input type="date" class="form-control" name="dob1" value= "<?php if(isset($_POST['dob1'])) echo $_POST['dob1']; ?>">
        	</div>
          <div class="col-sm-5">
            <input type="date" class="form-control" name="dob2" value= "<?php if(isset($_POST['dob2'])) echo $_POST['dob2']; ?>">
          </div>
      </div>
      <div class="form-group">
        <label for = "gender" class = "col-sm-3 control-label">Gender</label>
      </div>
      <div class="form-group">
    			<label for = "dob" class = "col-sm-3 control-label">Male</label>
    				<div class="col-sm-9">
              <input type="checkbox"  name="gender" value="1" <?php if(isset($_POST['gender'])) echo "checked"; ?> >
            </div>
      </div>
      <div class="form-group">
    		<label for = "female" class = "col-sm-3 control-label">Female</label>
          <div class="col-sm-9">
          	<div  class="option">
              <input type="checkbox" name="gender1" value="1" <?php if(isset($_POST['gender1'])) echo "checked" ?> class="showHideCheck">
        				<div id="data"  class="hiddenInput">
           				<div class="form-group">
        						<label class = "col-sm-6 control-label">Menstruation Started Age</label>
      								<div class="col-sm-3">
        		            <input type="number"  min="0" class="form-control" name="ms1" value= "<?php if(isset($_POST['ms1'])) echo $_POST['ms1']; ?>">
        							</div>
        				      <div class="col-sm-3 ">
                        <input type="number"  min="0" class="form-control" name="ms2" value= "<?php if(isset($_POST['ms2'])) echo $_POST['ms2']; ?>">
											</div>
    							</div>
                  <div class="form-group">
                    <label  class= "col-sm-6 control-label">regular menstruation</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="rm" value="1" <?php if(isset($_POST['rm'])) echo "checked" ?>>
                      </div>
                  </div>
        				  <div class="form-group">
    		            <label for = "meopause_age" class= "col-sm-6 control-label">menopause age</label>
   									  <div class="col-sm-3">
                        <input type="number"  min="0" class="form-control" name="ma1" value= "<?php if(isset($_POST['ma1'])) echo $_POST['ma1']; ?>">
                      </div>
                      <div class="col-sm-3">
    								    <input type="number"  min="0" class="form-control" name="ma2" value= "<?php if(isset($_POST['ma2'])) echo $_POST['ma2']; ?>">
    								  </div>
    						  </div>
    						  <div class="form-group">
                    <label for="age_first_delivery" class="col-sm-6 control-label">age of first delivery</label>
    								  <div class="col-sm-3">
    				            <input type="number"  min="0" class="form-control" name="ag1" value= "<?php if(isset($_POST['ag1'])) echo $_POST['ag1']; ?>">
                      </div>
                      <div class="col-sm-3">
                        <input type="number"  min="0" class="form-control" name="ag2" value= "<?php if(isset($_POST['ag2'])) echo $_POST['ag2']; ?>">
    								  </div>
    						  </div>
    						  <div class="form-group">
    							 <label class="col-sm-6 control-label">No of child</label>
    								  <div class="col-sm-3">
    							   		<input type="number"  min="0" class="form-control" name="n1" value= "<?php if(isset($_POST['n1'])) echo $_POST['n1']; ?>">
                      </div>
                        <div class="col-sm-3">
                          <input type="number"  min="0" class="form-control" name="n2" value= "<?php if(isset($_POST['n2'])) echo $_POST['n2']; ?>">
    								    </div>
    						  </div>
    						  <div class="form-group">
    				        <label class="col-sm-6 control-label">No of pregnancies</label>
                      <div class="col-sm-3">
    								    <input type="number"  min="0" class="form-control" name="no1" value= "<?php if(isset($_POST['no1'])) echo $_POST['no1']; ?>">
                      </div>
                      <div class="col-sm-3">
    						        <input type="number"  min="0" class="form-control" name="no2" value= "<?php if(isset($_POST['no2'])) echo $_POST['no2']; ?>" >
    								  </div>
    						  </div>
    						  <div class="form-group">
                    <label class="col-sm-6 control-label">use of contraceptives</label>
    								  <div class="col-sm-6">
                        <input type="checkbox" name="ct" value="1" <?php if(isset($_POST['ct'])) echo "checked" ?>>
    								  </div>
    						  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">abortion history</label>
    								  <div class="col-sm-9">
    						        <div  class="option">
                				  <input type="checkbox" name="ah" value="1" <?php if(isset($_POST['ah'])) echo "checked" ?> class="showHideCheck1">
        				            <div id="data"  class="hiddenInput1">
          								    <div class="form-group">
     					                  <label class="col-sm-4 control-label">No.of abortion:</label>
    								              <div class="col-sm-4">
        												    <input type="number"  min="0" class="form-control" name="ah1" value= "<?php if(isset($_POST['ah1'])) echo $_POST['ah1']; ?>">
                                  </div>
                                  <div class="col-sm-4">
        												    <input type="number"  min="0" class="form-control" name="ah2" value= "<?php if(isset($_POST['ah2'])) echo $_POST['ah2']; ?>">
        												  </div>
        										  </div>
        								    </div>
                          </div>
        						  </div>
                  </div>
                  <div class="form-group">
	   							  <label class="col-sm-6 control-label">whether uterus removed</label>
      								<div class="col-sm-6">
     	  								<input type="checkbox" name="ur" value="1" <?php if(isset($_POST['ur'])) echo "checked" ?>>
     		       						</div>
                  </div>
                  <div class="form-group">
     						    <label class="col-sm-4 control-label">uterus disease</label>
    							    <div class="col-sm-8"><select name="ud" class="form-control">
                        <option></option>
                          <?php
                            mysqli_select_db($conn,'jeevanam');
                            $result=mysqli_query($conn,"SELECT `t_female`.`uterus_disease` FROM `t_female`");
                            while ($datas = mysqli_fetch_assoc($result))
                            echo '<option value="'.$datas['uterus_disease'].'">'.$datas['uterus_disease'].'</option>';
                          ?>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
      							<label class="col-sm-6 control-label">retracted nipple</label>
    								  <div class="col-sm-6">
    									 <input type="checkbox" name="rn" value="1" <?php if(isset($_POST['rn'])) echo "checked" ?>>
    								  </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 control-label">leucorrhoea</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="lc" value="1" <?php if(isset($_POST['lc'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 control-label">irregular blood bleeding</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="ib" value="1" <?php if(isset($_POST['ib'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 control-label">blood bleeding after intercourse</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="bi" value="1" <?php if(isset($_POST['bi'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 control-label">blood bleeding after menupause</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="bm" value="1" <?php if(isset($_POST['bm'])) echo "checked" ?>>
                    </div>
                  </div>
                  <div class="form-group">
    				        <label class="col-sm-6 control-label">other diseases in pubic place</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="odp" value="1" <?php if(isset($_POST['odp'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">uterus cancer tested</label>
                      <div class="col-sm-9">
                        <div  class="option">
                          <input type="checkbox" name="uct" value="1" <?php if(isset($_POST['uct'])) echo "checked" ?> class="showHideCheck1">
                            <div id="data"  class="hiddenInput1">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">tested date</label>
                                  <div class="col-sm-10">
                                    <input type="date" class="form-control" name="agu1" value= "<?php if(isset($_POST['agu1'])) echo $_POST['agu1']; ?>">
                                  </div>
                                  <div class="col-sm-10">
                                    <input type="date" class="form-control" name="agu2" value= "<?php if(isset($_POST['agu2'])) echo $_POST['agu2']; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">test result</label>
                                    <div class="col-sm-8"><select name="tr" class="form-control">
                                    <option></option>
                                      <?php
                                        mysqli_select_db($conn,'jeevanam');
                                        $result=mysqli_query($conn,"SELECT `t_uterus_cancer_tested`.`test_result` FROM `t_uterus_cancer_tested`");
                                         while ($datas = mysqli_fetch_assoc($result))
                                        echo '<option value="'.$datas['test_result'].'">'.$datas['test_result'].'</option>';
                                      ?>
                                      </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 form-label">consumption medicine venereal diseases</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="vd" value="1" <?php if(isset($_POST['vd'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 form-label">consumption medicine infertility</label>
                      <div class="col-sm-4">
                        <input type="checkbox" name="cmi" value="1" <?php if(isset($_POST['cmi'])) echo "checked" ?>>
                      </div>
                  </div>
     						  <div class="form-group">
                    <label class="col-sm-2 form-label">breast feeding</label>
                      <div class="col-sm-10">
                        <div class="option">
                          <input type="checkbox" name="bf" value="1" <?php if(isset($_POST['bf'])) echo "checked" ?> class="showHideCheck1">
                            <div id="data"  class="hiddenInput1">
                              <div class="form-group">
                                <label class="col-sm-4 control-label">duration</label>
                                  <div class="col-sm-4">
                                    <input type="number"  min="0" class="form-control" name="bf1" value= "<?php if(isset($_POST['bf1'])) echo $_POST['bf1']; ?>">
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number"  min="0" class="form-control" name="bf2" value= "<?php if(isset($_POST['bf2'])) echo $_POST['bf2']; ?>">
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 form-label">breast operation history</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="boh" value="1" <?php if(isset($_POST['boh'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 form-label">breast radiation history</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="brh" value="1" <?php if(isset($_POST['brh'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3">breast colorchange lump rash</label>
                      <div class="col-sm-9">
                        <div class="option">
                          <input type="checkbox" name="bclr" value="1" <?php if(isset($_POST['bclr'])) echo "checked" ?> class="showHideCheck1">
                            <div id="data"  class="hiddenInput1">
                              <div class="form-group">
                                <label class="col-sm-4 control-label">time occured</label>
                                  <div class="col-sm-8">
                                    <input type="date" class="form-control" name="bclr1" value= "<?php if(isset($_POST['bclr1'])) echo $_POST['bclr1']; ?>">
                                  </div>
                                  <div class="col-sm-8">
                                    <input type="date" class="form-control" name="bclr2" value= "<?php if(isset($_POST['bclr2'])) echo $_POST['bclr2']; ?>">
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
    							<div class="form-group">
                    <label class="col-sm-6 control-label">family history cancer heart kidney diseases</label>
    								  <div class="col-sm-6">
        								<input type="checkbox" name="fhc" value="1" <?php if(isset($_POST['fhc'])) echo "checked" ?>>
    								  </div>
                  </div>
    						</div>
            </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">Marital status</label>
        	<div class="col-sm-9">
        		<div  class="option">
      				<input type="checkbox" name="ms" value="1" <?php if(isset($_POST['ms'])) echo "checked" ?>  class="showHideCheck">
        				<div id="data"  class="hiddenInput">
       						<div class="form-group">
          					<label class="col-sm-4 control-label">Age when married</label>
          						<div class="col-sm-4">
          							<input type="number"  min="0" class="form-control" placeholder="Age limit" name="mstarted_age" value= "<?php if(isset($_POST['mstarted_age'])) echo $_POST['mstarted_age']; ?>">
                      </div>
                      <div class="col-sm-4">
          							<input type="number"  min="0" class="form-control" placeholder="Age limit" name="mstopped_age" value= "<?php if(isset($_POST['mstopped_age'])) echo $_POST['mstopped_age']; ?>">
          						</div>
       						</div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Blood relation</label>
                      <div class="col-sm-8"><select name="br" class="form-control">
                      <option></option>
                        <?php
                          mysqli_select_db($conn,'jeevanam');
                          $result=mysqli_query($conn,"SELECT `t_marital status`.`blood_relationship` FROM `t_marital status`");
                          while ($datas = mysqli_fetch_assoc($result))
                          echo '<option value="'.$datas['blood_relationship'].'">'.$datas['blood_relationship'].'</option>';
                        ?>
                        </select>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-5 control-label">Education Qualification</label>
          <div class="col-sm-6"><select name="edu" class="form-control">
            <option></option>
            <?php
              mysqli_select_db($conn,'jeevanam');
              $result=mysqli_query($conn,"SELECT distinct details_family_member.`education_qualification` FROM `details_family_member`");
              while ($datas = mysqli_fetch_assoc($result))
              echo '<option value="'.$datas['education_qualification'].'">'.$datas['education_qualification'].'</option>';
            ?>
            </select>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-5 control-label">Occupation</label>
          <div class="col-sm-6"><select name="occ" class="form-control">
            <option></option>
            <?php
              mysqli_select_db($conn,'jeevanam');
              $result=mysqli_query($conn,"SELECT distinct details_family_member.`occupation` FROM `details_family_member`");
              while ($datas = mysqli_fetch_assoc($result))
              echo '<option value="'.$datas['occupation'].'">'.$datas['occupation'].'</option>';
            ?>
            </select>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">Smoking</label>
          <div class="col-sm-9">
            <div  class="option">
              <input type="checkbox" name="smoke"  value="1" <?php if(isset($_POST['smoke'])) echo "checked" ?>   class="showHideCheck">
                <div id="data"  class="hiddenInput" >
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Age Smoking Started</label>
                        <div class="col-sm-4">
                          <input type="number"  min="0" class="form-control" placeholder="Age limit" name="sstarted_age" value= "<?php if(isset($_POST['sstarted_age'])) echo $_POST['sstarted_age']; ?>">
                        </div>
                        <div class="col-sm-4 ">
                          <input type="number"  min="0" class="form-control" placeholder="Age limit" name="sstopped_age" value= "<?php if(isset($_POST['sstopped_age'])) echo $_POST['sstopped_age']; ?>">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-form">Usage duration</label>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" name="susage_duration1" value= "<?php if(isset($_POST['susage_duration1'])) echo $_POST['susage_duration1']; ?>">
                      </div>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" name="susage_duration2" value= "<?php if(isset($_POST['susage_duration2'])) echo $_POST['susage_duration2']; ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Usage per day</label>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" name="susage_per_day1" value= "<?php if(isset($_POST['susage_per_day1'])) echo $_POST['susage_per_day1']; ?>">
                      </div>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" name="susage_per_day2" value= "<?php if(isset($_POST['susage_per_day2'])) echo $_POST['susage_per_day2']; ?>">
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">Betel with tobacco</label>
          <div class="col-sm-9">
            <div  class="option">
              <input type="checkbox" name="bet" value="1" <?php if(isset($_POST['bet'])) echo "checked" ?> class="showHideCheck">
                <div id="data" class="hiddenInput" >
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Age Started</label>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" placeholder="Age limit" name="bstarted_age" value= "<?php if(isset($_POST['bstarted_age'])) echo $_POST['bstarted_age']; ?>">
                      </div>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" placeholder="Age limit" name="bstopped_age" value= "<?php if(isset($_POST['bstopped_age'])) echo $_POST['bstopped_age']; ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Usage duration</label>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control"  name="busage_duration1" value= "<?php if(isset($_POST['busage_duration1'])) echo $_POST['busage_duration1']; ?>">
                      </div>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control"  name="busage_duration2" value= "<?php if(isset($_POST['busage_duration2'])) echo $_POST['busage_duration2']; ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Usage per day</label>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control"  name="busage_per_day1" value= "<?php if(isset($_POST['busage_per_day1'])) echo $_POST['busage_per_day1']; ?>">
                      </div>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control"  name="busage_per_day2" value= "<?php if(isset($_POST['busage_per_day2'])) echo $_POST['busage_per_day2']; ?>">
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">Panparag</label>
          <div class="col-sm-9">
            <div  class="option">
              <input type="checkbox" name="pan" value="1" <?php if(isset($_POST['pan'])) echo "checked" ?> class="showHideCheck">
                <div id="data" class="hiddenInput" >
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Age Started</label>
                        <div class="col-sm-4">
                          <input type="number"  min="0" class="form-control" placeholder="Age limit" name="pstarted_age" value= "<?php if(isset($_POST['pstarted_age'])) echo $_POST['pstarted_age']; ?>">
                        </div>
                        <div class="col-sm-4">
                          <input type="number"  min="0" class="form-control" placeholder="Age limit" name="pstopped_age" value= "<?php if(isset($_POST['pstopped_age'])) echo $_POST['pstopped_age']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Usage duration</label>
                        <div class="col-sm-4">
                          <input type="number"  min="0" class="form-control" name="pusage_duration1" value= "<?php if(isset($_POST['pusage_duration1'])) echo $_POST['pusage_duration1']; ?>">
                        </div>
                        <div class="col-sm-4">
                          <input type="number"  min="0" class="form-control" name="pusage_duration2" value= "<?php if(isset($_POST['pusage_duration2'])) echo $_POST['pusage_duration2']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 control-label">Drugs usage</label>
                        <div class="col-sm-6">
                          <input type="checkbox" name="pusage" value="1" <?php if(isset($_POST['pusage'])) echo "checked" ?>>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">Alcohol</label>
          <div class="col-sm-9">
            <div  class="option">
              <input type="checkbox" name="alcohol" value="1" <?php if(isset($_POST['alcohol'])) echo "checked" ?> class="showHideCheck"/>
                <div id="data" class="hiddenInput" >
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Category</label>
                      <div class="col-sm-8"><select name="cat" class="form-control">
                      <option></option>
                        <?php
                          mysqli_select_db($conn,'jeevanam');
                          $result=mysqli_query($conn,"SELECT distinct t_alcohol_usage .`category` FROM `t_alcohol_usage`");
                          while ($datas = mysqli_fetch_assoc($result))
                          echo '<option value="'.$datas['category'].'">'.$datas['category'].'</option>';
                        ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Age Started</label>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" placeholder="Age limit" name="astarted_age" value= "<?php if(isset($_POST['astarted_age'])) echo $_POST['astarted_age']; ?>">
                      </div>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" placeholder="Age limit" name="astopped_age" value= "<?php if(isset($_POST['astopped_age'])) echo $_POST['astopped_age']; ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Usage duration</label>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" name="ausage_duration1" value= "<?php if(isset($_POST['ausage_duration1'])) echo $_POST['ausage_duration1']; ?>">
                      </div>
                      <div class="col-sm-4">
                        <input type="number"  min="0" class="form-control" name="ausage_duration2" value= "<?php if(isset($_POST['ausage_duration2'])) echo $_POST['ausage_duration2']; ?>">
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">Disability</label>
          <div class="col-sm-9">
            <div  class="option">
              <input type="checkbox" name="dis" value="1" <?php if(isset($_POST['dis'])) echo "checked" ?> class="showHideCheck"/>
                <div id="data" class="hiddenInput" >
                  <div class="form-group">
                    <label class="col-sm-4 control-label">disabilities</label>
                      <div class="col-sm-8"><select name="disa" class="form-control">
                      <option></option>
                        <?php
                          mysqli_select_db($conn,'jeevanam');
                          $result=mysqli_query($conn,"SELECT distinct t_disability .`disabilities` FROM `t_disability`");
                          while ($datas = mysqli_fetch_assoc($result))
                          echo '<option value="'.$datas['disabilities'].'">'.$datas['disabilities'].'</option>';
                        ?>
                        </select>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">Food Habits</label>
          <div class="col-sm-9">
            <div  class="option">
              <input type="checkbox" name="fh" value="1"  <?php if(isset($_POST['fh'])) echo "checked" ?> class="showHideCheck"/>
                <div id="data"  class="hiddenInput" >
                  <div class="form-group">
                    <label class="col-sm-6 control-label">Vegetarian</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="veg" <?php if(isset($_POST['veg'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 control-label">Non Vegetarian</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="non" <?php if(isset($_POST['non'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 control-label">Fruits Usage</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="fu" <?php if(isset($_POST['fu'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 control-label"> Fried Rosted Usage</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="fru" <?php if(isset($_POST['fru'])) echo "checked" ?>>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 control-label">Dried Fish Usage</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="dfu" <?php if(isset($_POST['dfu'])) echo "checked" ?>>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>


     <div class="form-group">
      <label class="col-sm-3 control-label">Health Condition</label>
        <div class="col-sm-9">
          <div  class="option">
            <input type="checkbox" name="hc" value="1" <?php if(isset($_POST['hc'])) echo "checked" ?> class="showHideCheck">
              <div id="data" class="hiddenInput" >
                <div class="form-group">
                  <label class="col-sm-4 control-label">Diabetes</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="diab1" value= "<?php if(isset($_POST['diab1'])) echo $_POST['diab1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="diab2" value= "<?php if(isset($_POST['diab2'])) echo $_POST['diab2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">BP</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="bp1" value= "<?php if(isset($_POST['bp1'])) echo $_POST['bp1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="bp2" value= "<?php if(isset($_POST['bp2'])) echo $_POST['bp2']; ?>" >
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Paralysis_cva</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="pcv1" value= "<?php if(isset($_POST['pcv1'])) echo $_POST['pcv1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="pcv2" value= "<?php if(isset($_POST['pcv2'])) echo $_POST['pcv2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Asthma</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="asthma1" value= "<?php if(isset($_POST['asthma1'])) echo $_POST['asthma1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="asthma2" value= "<?php if(isset($_POST['asthma2'])) echo $_POST['asthma2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">cough</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="cough1" value= "<?php if(isset($_POST['cough1'])) echo $_POST['cough1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="cough2" value= "<?php if(isset($_POST['cough2'])) echo $_POST['cough2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Acidiy</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="acidity1" value= "<?php if(isset($_POST['acidity1'])) echo $_POST['acidity1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="acidity2" value= "<?php if(isset($_POST['acidity2'])) echo $_POST['acidity2']; ?>">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-4 control-label">heart disease</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="hd1" value= "<?php if(isset($_POST['hd1'])) echo $_POST['hd1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="hd2" value= "<?php if(isset($_POST['hd2'])) echo $_POST['hd2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">cholestrol</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="cholestrol1" value= "<?php if(isset($_POST['cholestrol1'])) echo $_POST['cholestrol1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="cholestrol2" value= "<?php if(isset($_POST['cholestrol2'])) echo $_POST['cholestrol2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tuberculosis</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="tb1" value= "<?php if(isset($_POST['tb1'])) echo $_POST['tb1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="tb2" value= "<?php if(isset($_POST['tb2'])) echo $_POST['tb2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Thyroid</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="ty1" value= "<?php if(isset($_POST['ty1'])) echo $_POST['ty1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="ty2" value= "<?php if(isset($_POST['ty2'])) echo $_POST['ty2']; ?>">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-4 control-label">Arthritis</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="art1" value= "<?php if(isset($_POST['art1'])) echo $_POST['art1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="art2" value= "<?php if(isset($_POST['art2'])) echo $_POST['art2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Liver Diseases</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="lid1" value= "<?php if(isset($_POST['lid1'])) echo $_POST['lid1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="lid2" value= "<?php if(isset($_POST['lid2'])) echo $_POST['lid2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Other Diseases</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="ods1" value= "<?php if(isset($_POST['ods1'])) echo $_POST['ods1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" class="form-control" name="ods2" value= "<?php if(isset($_POST['ods2'])) echo $_POST['ods2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Medicines intaking</label>
                    <div class="col-sm-9">
                      <div  class="option">
                        <input type="checkbox" name="mi" value="1" <?php if(isset($_POST['mi'])) echo "checked" ?> class="showHideCheck1">
                          <div id="data" class="hiddenInput1" >
                            <div class="form-group">
                              <label class="col-sm-4 control-label">Diseases</label>
                                <div class="col-sm-8"><select name="mid" class="form-control">
                                <option></option>
                                  <?php
                                    mysqli_select_db($conn,'jeevanam');
                                    $result=mysqli_query($conn,"SELECT distinct t_medicines_intaking.`diseases` FROM `t_medicines_intaking`");
                                    while ($datas = mysqli_fetch_assoc($result))
                                    echo '<option value="'.$datas['diseases'].'">'.$datas['diseases'].'</option>';
                                  ?>
                                  </select>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Common disease</label>
                    <div class="col-sm-9">
                      <div  class="option">
                        <input type="checkbox" name="cd" value="1" <?php if(isset($_POST['cd'])) echo "checked" ?> class="showHideCheck1">
                          <div id="data" class="hiddenInput1" >
                            <div class="form-group">
                              <label class="col-sm-9 control-label">mouth ulcers</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="mou" value="1" <?php if(isset($_POST['mou'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Oral treatment history</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="oth" value="1" <?php if(isset($_POST['oth'])) echo "checked" ?>>
                                </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-9 control-label">Tooth pain</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="tp" value="1" <?php if(isset($_POST['tp'])) echo "checked" ?>>
                                </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-9 control-label">Bleeding in mouth</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="bim" value="1" <?php if(isset($_POST['bim'])) echo "checked" ?>>
                                </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-9 control-label">Neck tumor</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="nt" value="1" <?php if(isset($_POST['nt'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Tonsil inflammation</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="tim" value="1" <?php if(isset($_POST['tim'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Mouth widen difficult</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="mwd" value="1" <?php if(isset($_POST['mwd'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Dysphagia</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="dpg" value="1" <?php if(isset($_POST['dpg'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Disphonia</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="dpn" value="1" <?php if(isset($_POST['dpn'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Regular abdominal pain</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="rap" value="1" <?php if(isset($_POST['rap'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Haematochezia</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="hmtc" value="1" <?php if(isset($_POST['hmtc'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Haematuria</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="hmtr" value="1" <?php if(isset($_POST['hmtr'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">Dysuria</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="dys" value="1" <?php if(isset($_POST['dys'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-4 control-label">Doctor consultancy</label>
                                <div class="col-sm-8"><select name="dcy" class="form-control">
                                <option></option>
                                  <?php
                                    mysqli_select_db($conn,'jeevanam');
                                    $result=mysqli_query($conn,"SELECT distinct t_common_disease.`doctor_consultancy` FROM `t_common_disease`");
                                    while ($datas = mysqli_fetch_assoc($result))
                                    echo '<option value="'.$datas['doctor_consultancy'].'">'.$datas['doctor_consultancy'].'</option>';
                                  ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for = "biod" class = "col-sm-3 control-label">Biopsy date</label>
                                <div class="col-sm-9">
                                  <input type="date" class="form-control" name="biod1" value= "<?php if(isset($_POST['biod1'])) echo $_POST['biod1']; ?>">
                              </div>
                              <div class="col-sm-9">
                                <input type="date" class="form-control" name="biod2" value= "<?php if(isset($_POST['biod2'])) echo $_POST['biod2']; ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-5 control-label">operation history</label>
                                <div class="col-sm-7">
                                  <div  class="option">
                                    <input type="checkbox" name="oph" value="1" <?php if(isset($_POST['oph'])) echo "checked" ?> class="showHideCheck2">
                                      <div id="data" class="hiddenInput2" >
                                        <div class="form-group">
                                          <label class="col-sm-4 control-label">disease</label>
                                            <div class="col-sm-8"><select name="opd" class="form-control">
                                            <option></option>
                                              <?php
                                                mysqli_select_db($conn,'jeevanam');
                                                $result=mysqli_query($conn,"SELECT distinct t_operation_history.`disease` FROM `t_operation_history`");
                                                while ($datas = mysqli_fetch_assoc($result))
                                                echo '<option value="'.$datas['disease'].'">'.$datas['disease'].'</option>';
                                              ?>
                                              </select>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-5 control-label">chemotherapy xray radition mammography</label>
                                <div class="col-sm-7">
                                  <div  class="option">
                                    <input type="checkbox" name="cx" value="1" <?php if(isset($_POST['cx'])) echo "checked" ?> class="showHideCheck2">
                                      <div id="data" class="hiddenInput2" >
                                        <div class="form-group">
                                          <label class="col-sm-4 control-label">disease</label>
                                            <div class="col-sm-8"><select name="cxd" class="form-control">
                                            <option></option>
                                              <?php
                                                mysqli_select_db($conn,'jeevanam');
                                                $result=mysqli_query($conn,"SELECT distinct t_chemotherapy_xray_radiation_mammography.`disease` FROM `t_chemotherapy_xray_radiation_mammography`");
                                                while ($datas = mysqli_fetch_assoc($result))
                                                echo '<option value="'.$datas['disease'].'">'.$datas['disease'].'</option>';
                                              ?>
                                              </select>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">dome lump</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="dmlp" value="1" <?php if(isset($_POST['dmlp'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">non healing wounds</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="nhw" value="1" <?php if(isset($_POST['nhw'])) echo "checked" ?>>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-9 control-label">quick growing moles</label>
                                <div class="col-sm-1">
                                  <input type="checkbox" name="qgm" value="1" <?php if(isset($_POST['qgm'])) echo "checked" ?>>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label">House table</label>
        <div class="col-sm-9">
          <div class="option">
          <input type="checkbox" name="ht" value="1" <?php if(isset($_POST['ht'])) echo "checked" ?> class="showHideCheck">
            <div id="data" class="hiddenInput">
              <div class="form-group">
                <label class="col-sm-4 control-label">Block number</label>
                  <div class="col-sm-4">
                    <input type="number" min="0" class="form-control" name="phbn1" value= "<?php if(isset($_POST['phbn1'])) echo $_POST['phbn1']; ?>">
                  </div>
                   <div class="col-sm-4">
                    <input type="number" min="0" class="form-control" name="phbn2" value= "<?php if(isset($_POST['phbn2'])) echo $_POST['phbn2']; ?>">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Religion</label>
                  <div class="col-sm-8"><select name="re" class="form-control">
                    <option></option>
                    <?php
                      mysqli_select_db($conn,'jeevanam');
                      $result=mysqli_query($conn,"SELECT distinct house_table_name.`religion` FROM `house_table_name`");
                      while ($datas = mysqli_fetch_assoc($result))
                      echo '<option value="'.$datas['religion'].'">'.$datas['religion'].'</option>';
                    ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Caste</label>
                  <div class="col-sm-8"><select name="ca" class="form-control">
                    <option></option>
                      <?php
                        mysqli_select_db($conn,'jeevanam');
                        $result=mysqli_query($conn,"SELECT distinct house_table_name.`caste` FROM `house_table_name`");
                        while ($datas = mysqli_fetch_assoc($result))
                        echo '<option value="'.$datas['caste'].'">'.$datas['caste'].'</option>';
                      ?>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Caste category</label>
                  <div class="col-sm-8"><select name="cas" class="form-control">
                    <option></option>
                      <?php
                        mysqli_select_db($conn,'jeevanam');
                        $result=mysqli_query($conn,"SELECT distinct house_table_name.`caste_category` FROM `house_table_name`");
                        while ($datas = mysqli_fetch_assoc($result))
                        echo '<option value="'.$datas['caste_category'].'">'.$datas['caste_category'].'</option>';
                      ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">House type</label>
                  <div class="col-sm-8"><select name="hty" class="form-control">
                    <option></option>
                      <?php
                        mysqli_select_db($conn,'jeevanam');
                        $result=mysqli_query($conn,"SELECT distinct house_table_name.`house_type` FROM `house_table_name`");
                        while ($datas = mysqli_fetch_assoc($result))
                        echo '<option value="'.$datas['house_type'].'">'.$datas['house_type'].'</option>';
                      ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label">house ownership</label>
                  <div class="col-sm-6">
                    <input type="checkbox" name="hos" value="1" <?php if(isset($_POST['hos'])) echo "checked" ?>>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label">Electricity</label>
                  <div class="col-sm-6">
                    <input type="checkbox" name="el" <?php if(isset($_POST['el'])) echo "checked" ?>>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label">Toilet</label>
                  <div class="col-sm-1">
                    <input type="checkbox" name="to" <?php if(isset($_POST['to'])) echo "checked" ?>>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Family-income</label>
                   <div class="col-sm-4">
                    <input type="number" min="0" class="form-control" name="fi1" value= "<?php if(isset($_POST['fi1'])) echo $_POST['fi1']; ?>">
                  </div>
                   <div class="col-sm-4">
                    <input type="number" min="0" class="form-control" name="fi2" value= "<?php if(isset($_POST['fi2'])) echo $_POST['fi2']; ?>">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Health insurance</label>
                  <div class="col-sm-8"><select name="hi" class="form-control">
                    <option></option>
                      <?php
                        mysqli_select_db($conn,'jeevanam');
                        $result=mysqli_query($conn,"SELECT distinct house_table_name.`health_insurance` FROM `house_table_name`");
                        while ($datas = mysqli_fetch_assoc($result))
                        echo '<option value="'.$datas['health_insurance'].'">'.$datas['health_insurance'].'</option>';
                      ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Drinking water</label>
                  <div class="col-sm-8"><select name="dw" class="form-control">
                    <option></option>
                      <?php
                        mysqli_select_db($conn,'jeevanam');
                        $result=mysqli_query($conn,"SELECT distinct house_table_name.`drinking_water` FROM `house_table_name`");
                        while ($datas = mysqli_fetch_assoc($result))
                        echo '<option value="'.$datas['drinking_water'].'">'.$datas['drinking_water'].'</option>';
                      ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Cooking oil</label>
                  <div class="col-sm-8"><select name="co" class="form-control">
                    <option></option>
                      <?php
                        mysqli_select_db($conn,'jeevanam');
                        $result=mysqli_query($conn,"SELECT distinct house_table_name.`cooking_oil` FROM `house_table_name`");
                        while ($datas = mysqli_fetch_assoc($result))
                        echo '<option value="'.$datas['cooking_oil'].'">'.$datas['cooking_oil'].'</option>';
                      ?>
                    </select>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Screening details</label>
        <div class="col-sm-9">
          <div  class="option">
            <input type="checkbox" name="scrd" value="1" <?php if(isset($_POST['scrd'])) echo "checked" ?> class="showHideCheck">
              <div id="data"  class="hiddenInput" >
                <div class="form-group">
                  <label class="col-sm-4">screening camp place</label>
                    <div class="col-sm-8"><select name="scp" class="form-control">
                      <option></option>
                        <?php
                          mysqli_select_db($conn,'jeevanam');
                          $result=mysqli_query($conn,"SELECT distinct screening_details.`screening_camp_place` FROM `screening_details`");
                          while ($datas = mysqli_fetch_assoc($result))
                          echo '<option value="'.$datas['screening_camp_place'].'">'.$datas['screening_camp_place'].'</option>';
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label class = "col-sm-2 control-label">date</label>
                    <div class="col-sm-11">
                      <input type="date" class="form-control" name="date1" value= "<?php if(isset($_POST['date1'])) echo $_POST['date1']; ?>">
                    </div>
                    <div class="col-sm-11">
                      <input type="date" class="form-control" name="date2" value= "<?php if(isset($_POST['date2'])) echo $_POST['date2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class = "col-sm-4 control-label">Height</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="high1" value= "<?php if(isset($_POST['high1'])) echo $_POST['high1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="high2" value= "<?php if(isset($_POST['high2'])) echo $_POST['high2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class = "col-sm-4 control-label">Weight</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="wigh1" value= "<?php if(isset($_POST['wigh1'])) echo $_POST['wigh1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="wigh2" value= "<?php if(isset($_POST['wigh2'])) echo $_POST['wigh2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class = "col-sm-4 control-label">BMI</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="bmi1" value= "<?php if(isset($_POST['bmi1'])) echo $_POST['bmi1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="bmi2" value= "<?php if(isset($_POST['bmi2'])) echo $_POST['bmi2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class = "col-sm-4 control-label">BP</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="blp1" value= "<?php if(isset($_POST['blp1'])) echo $_POST['blp1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="blp2" value= "<?php if(isset($_POST['blp2'])) echo $_POST['blp2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class = "col-sm-4 control-label">FBS</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="fbs1" value= "<?php if(isset($_POST['fbs1'])) echo $_POST['fbs1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="fbs2" value= "<?php if(isset($_POST['fbs2'])) echo $_POST['fbs2']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class = "col-sm-4 control-label">Cholestrol</label>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="csl1" value= "<?php if(isset($_POST['csl1'])) echo $_POST['csl1']; ?>">
                    </div>
                    <div class="col-sm-4">
                      <input type="number" min="0" step="0.01" class="form-control" name="csl2" value= "<?php if(isset($_POST['csl2'])) echo $_POST['csl2']; ?>">
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label">Children</label>
        <div class="col-sm-9">
          <div  class="option">
            <input type="checkbox" name="ch" value="1" <?php if(isset($_POST['ch'])) echo "checked" ?> class="showHideCheck">
              <div id="data" class="hiddenInput">
                <div class="form-group">
                  <label class="col-sm-6 control-label">Regular Fever</label>
                    <div class="col-sm-6">
                      <input type="checkbox" name="rf" value="1" <?php if(isset($_POST['rf'])) echo "checked" ?> class="showHideCheck">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-6 control-label">Anemia</label>
                    <div class="col-sm-6">
                      <input type="checkbox" name="an" value="1" <?php if(isset($_POST['an'])) echo "checked" ?> class="showHideCheck">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-6 control-label">Heart disease</label>
                    <div class="col-sm-6">
                      <input type="checkbox" name="hrd" value="1" <?php if(isset($_POST['hrd'])) echo "checked" ?> class="showHideCheck">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Hepatitis</label>
                    <div class="col-sm-9">
                      <div  class="option">
                        <input type="checkbox" name="he" value="1"  <?php if(isset($_POST['he'])) echo "checked" ?> class="showHideCheck1">
                          <div id="data"  class="hiddenInput1">
                            <div class="form-group">
                              <label class="col-sm-4 control-label">Type</label>
                                <div class="col-sm-8"><select name="t" class="form-control">
                                  <option></option>
                                    <?php
                                      mysqli_select_db($conn,'jeevanam');
                                      $result=mysqli_query($conn,"SELECT distinct t_hepatitis.`type` FROM `t_hepatitis`");
                                      while ($datas = mysqli_fetch_assoc($result))
                                      echo '<option value="'.$datas['type'].'">'.$datas['type'].'</option>';
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class = "col-sm-4 control-label">no of times</label>
                                <div class="col-sm-4">
                                  <input type="number" min="0" class="form-control" name="not1" value= "<?php if(isset($_POST['not1'])) echo $_POST['not1']; ?>">
                                </div>
                                <div class="col-sm-4">
                                  <input type="number" min="0" class="form-control" name="not2" value= "<?php if(isset($_POST['not2'])) echo $_POST['not2']; ?>">
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Other disease</label>
                    <div class="col-sm-9">
                        <div  class="option">
                          <input type="checkbox" name="od" value="1" <?php if(isset($_POST['od'])) echo "checked" ?> class="showHideCheck1">
                            <div id="data"  class="hiddenInput1">
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Disease</label>
                                  <div class="col-sm-8"><select name="odd" class="form-control">
                                    <option></option>
                                      <?php
                                        mysqli_select_db($conn,'jeevanam');
                                        $result=mysqli_query($conn,"SELECT distinct t_other_disease.`disease` FROM `t_other_disease`");
                                        while ($datas = mysqli_fetch_assoc($result))
                                        echo '<option value="'.$datas['disease'].'">'.$datas['disease'].'</option>';
                                      ?>
                                    </select>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>

<div class="form-group">
  <label class="col-sm-4"></label>
    <input type="submit" class="btn btn-info" name="sr" value = "Refine">
  </div>
</div>
</form>
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
$(".hiddenInput1").hide();
$(".showHideCheck1").on("change", function() {
    $this = $(this);
    $input = $this.parent().find(".hiddenInput1");
    if($this.is(":checked")) {
        $input.slideDown();
    } else
    {
        $input.slideUp();
    }
});
</script>

<script type="text/javascript">
$(".hiddenInput2").hide();
$(".showHideCheck2").on("change", function() {
    $this = $(this);
    $input = $this.parent().find(".hiddenInput2");
    if($this.is(":checked")) {
        $input.slideDown();
    } else
    {
        $input.slideUp();
    }
});
</script>
