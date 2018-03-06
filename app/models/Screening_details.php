<?php
class Screening_details
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$screening_camp_place,$date, $height, $weight, $BMI, $BP, $RBS, $FBS, $cholestrol )
  {
    $iq="INSERT INTO `screening_details`(`fid`, `screening_camp_place`, `date`, `height`, `weight`, `BMI`, `BP`, `RBS`, `FBS`, `cholestrol`) VALUES ('$fid','$screening_camp_place','$date', $height, $weight, $BMI, $BP, $RBS, $FBS, $cholestrol);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `screening_details` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$screening_camp_place,$date, $height, $weight, $BMI, $BP, $RBS, $FBS, $cholestrol)
  {
    $uq="UPDATE `screening_details` SET `screening_camp_place`='$screening_camp_place',`date`='$date',`height`=$height,`weight`=$weight,`BMI`=$BMI,`BP`=$BP,`RBS`= $RBS,`FBS`=$FBS,`cholestrol`=$cholestrol WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `screening_details` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
