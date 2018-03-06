<?php
class T_marital_status
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$age_when_married, $blood_relationship)
  {
    $iq="INSERT INTO `t_marital status`(`fid`, `age_when_married`, `blood_relationship`) VALUES ('$fid',$age_when_married, '$blood_relationship');";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_marital status` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$age_when_married, $blood_relationship)
  {
    $uq="UPDATE `t_marital status` SET `age_when_married`=$age_when_married,`blood_relationship`='$blood_relationship' WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_marital status` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
