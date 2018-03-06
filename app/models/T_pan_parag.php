<?php
class T_pan_parag
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$started_age, $usage_duration, $drug_usage )
  {
    $iq="INSERT INTO `t_pan_parag/gutka`(`fid`, `started_age`, `usage_duration`, `drug_usage`) VALUES ('$fid',$started_age, $usage_duration, $drug_usage);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_pan_parag/gutka` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$started_age, $usage_duration, $drug_usage)
  {
    $uq="UPDATE `t_pan_parag/gutka` SET `started_age`=$started_age,`usage_duration`=$usage_duration,`drug_usage`= $drug_usage WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_pan_parag/gutka` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
