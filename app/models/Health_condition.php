<?php
class Health_condition
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid, $diabetes, $blood_pressure, $paralysis_cva, $asthma, $cough, $acidity, $heart_disease, $cholestrol, $tuberculosis, $thyroid, $arthritis, $liver_diseases, $common_disease, $other_disease, $medicines_intaking)
  {
    $iq="INSERT INTO `health_condition`(`fid`, `diabetes`, `blood_pressure`, `paralysis_cva`, `asthma`, `cough`, `acidity`, `heart_ disease`, `cholestrol`, `tuberculosis`, `thyroid`, `arthritis`, `liver_diseases`, `other_disease`, `medicines_intaking`,`common_disease`) VALUES ('$fid', $diabetes, $blood_pressure, $paralysis_cva, $asthma, $cough, $acidity , $heart_disease, $cholestrol , $tuberculosis, $thyroid, $arthritis, $liver_diseases,  $other_disease , $medicines_intaking,$common_disease);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `health_condition` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid, $diabetes, $blood_pressure, $paralysis_cva, $asthma, $cough, $acidity, $heart_disease, $cholestrol, $tuberculosis, $thyroid, $arthritis, $liver_diseases, $common_disease, $other_disease, $medicines_intaking)
  {
    $uq="UPDATE `health_condition` SET `diabetes`=$diabetes,`blood_pressure`=$blood_pressure,`paralysis_cva`=$paralysis_cva,`asthma`=$asthma,`cough`=$cough,`acidity`=$acidity,`heart_ disease`=$heart_disease,`cholestrol`=$cholestrol,`tuberculosis`=$tuberculosis,`thyroid`=$thyroid,`arthritis`=$arthritis,`liver_diseases`=$liver_diseases,`common_disease`=$common_disease,`other_disease`=$other_disease,`medicines_intaking`=$medicines_intaking WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `health_condition` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
