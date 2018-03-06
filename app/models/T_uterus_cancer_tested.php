<?php
class T_uterus_cancer_tested
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$tested_date, $test_result)
  {
    $iq="INSERT INTO `t_uterus_cancer_tested`(`fid`, `tested_date`, `test_result`) VALUES ('$fid','$tested_date', '$test_result');";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_uterus_cancer_tested` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$tested_date, $test_result)
  {
    $uq="UPDATE `t_uterus_cancer_tested` SET `tested_date`='$tested_date',`test_result`='$test_result' WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_uterus_cancer_tested` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
