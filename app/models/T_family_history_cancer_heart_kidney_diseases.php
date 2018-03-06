<?php
class T_family_history_cancer_heart_kidney_diseases
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$description)
  {
    $iq="INSERT INTO `t_family_history_cancer_heart_kidney_diseases`(`fid`, `description`) VALUES ('$fid','$description');";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_family_history_cancer_heart_kidney_diseases` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$description)
  {
    $uq="UPDATE `t_family_history_cancer_heart_kidney_diseases` SET `description`='$description' WHERE   `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_family_history_cancer_heart_kidney_diseases` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
