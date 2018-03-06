<?php
class Details_family_member
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($id, $fid, $aadhar_no, $name, $age, $dob, $gender, $relationship_head_family, $marital_status, $education_qualification, $occupation, $h_smoking, $h_betel_quid, $h_pan_parag, $h_alcohol, $disability)
  {
    $iq="INSERT INTO `details_family_member`(`id`, `fid`, `aadhar_no`, `name`, `age`, `dob`, `gender`, `relationship_head_family`, `marital_status`, `education_qualification`, `occupation`, `h_smoking`, `h_betel_quid`, `h_pan_parag`, `h_alcohol`, `disability`) VALUES ('$id', '$fid', $aadhar_no, '$name', $age, '$dob', '$gender', '$relationship_head_family', '$marital_status', '$education_qualification','$occupation', $h_smoking, $h_betel_quid, $h_pan_parag, $h_alcohol, $disability);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselectedfid($fid)
  {
    $sq="SELECT * FROM `details_family_member` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }

  function dbgetid($fid)
  {
    $sq="SELECT `id` FROM `details_family_member` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    $row=mysqli_fetch_assoc($result);
    return $row['id'];
  }

  function dbviewselectedid($id)
  {
    $sq="SELECT * FROM `details_family_member` WHERE `id`='$id';";
    $result = mysqli_query($this->conn,$sq);
    return $result;
  }

  function dbupdate($fid,$aadhar_no, $name, $age, $dob, $gender, $relationship_head_family, $marital_status, $education_qualification, $occupation, $h_smoking, $h_betel_quid, $h_pan_parag, $h_alcohol, $disability)
  {
    $uq="UPDATE `details_family_member` SET `aadhar_no`=$aadhar_no,`name`='$name',`age`=$age,`dob`='$dob',`gender`='$gender',`relationship_head_family`='$relationship_head_family',`marital_status`='$marital_status',`education_qualification`='$education_qualification',`occupation`='$occupation',`h_smoking`=$h_smoking,`h_betel_quid`= $h_betel_quid,`h_pan_parag`= $h_pan_parag,`h_alcohol`= $h_alcohol,`disability`= $disability WHERE `fid` ='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function getallfid($id)
  {
    $sq="SELECT `fid` FROM `details_family_member` WHERE `id`='$id';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `details_family_member` WHERE `fid` ='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }

  function searchid($name,$DC,$Panchayath,$Ward,$Houseno)
  {
    if ($DC!='' && $Panchayath!='' && $Ward!='' && $Houseno!='')
    	$sql="SELECT `fid`,`id`,`house_name` from `details_family_member` JOIN  `house_table_name` USING (`id`)  where `id`= '$DC/$Panchayath/$Ward/$Houseno' and `name`='$name'";

    else if ($DC!='' && $Panchayath!='' && $Ward!='')
    	$sql="SELECT `fid`,`id`,`house_name` from `details_family_member`  JOIN  `house_table_name` USING (`id`) where `id` like '$DC/$Panchayath/$Ward/%'  and `name`='$name'";

    else if($DC!='' && $Panchayath!='' )
    	$sql="SELECT `fid`,`id`,`house_name` from `details_family_member`  JOIN  `house_table_name` USING (`id`) where `id` like  '$DC/$Panchayath/%'  and `name`='$name'";

    else if($DC!='')
    	$sql="SELECT `fid`,`id`,`house_name`from `details_family_member`  JOIN  `house_table_name` USING (`id`) where `id` like  '$DC/%' and `name`='$name'";

    else
      $sql="SELECT `fid`,`id`,`house_name`from `details_family_member`  JOIN  `house_table_name` USING (`id`) where `id` like  '%' and `name`='$name'";

    $retval = mysqli_query( $this->conn ,$sql );
    return mysqli_fetch_all($retval,MYSQLI_ASSOC);

  }


  function searchfid($name1,$Houseno,$PHBN,$Panchayath,$PHC)
  {

    if ($PHC!='' && $Panchayath!='' && $PHBN!='' && $Houseno!='' )
    	$sql="SELECT `fid`,`id`,`house_name` from `details_family_member` JOIN  `house_table_name` USING (`id`) where `fid` like '$PHC/$Panchayath/$PHBN/$Houseno/%' and name='$name1' ";

    else if ($PHC!='' && $Panchayath!='' && $PHBN!='')
    	$sql="SELECT `fid`,`id` ,`house_name`from `details_family_member` JOIN  `house_table_name` USING (`id`)  where `fid` like '$PHC/$Panchayath/$PHBN/%'  and name = '$name1'";

    else if ($PHC!='' && $Panchayath!='' )
    	$sql="SELECT `fid`,`id` ,`house_name` from `details_family_member` JOIN  `house_table_name` USING (`id`) where `fid` like '$PHC/$Panchayath/%' and name='$name1'";

    else if ($PHC!='')
      $sql="SELECT `fid`,`id` ,`house_name` from `details_family_member` JOIN  `house_table_name` USING (`id`) where `fid` like '$PHC/%' and name ='$name1'";

      else
        $sql="SELECT `fid`,`id` ,`house_name` from `details_family_member` JOIN  `house_table_name` USING (`id`) where `fid` like '%' and name ='$name1'";
    	$retval = mysqli_query( $this->conn ,$sql );
    return mysqli_fetch_all($retval,MYSQLI_ASSOC);
  }

}
  ?>
