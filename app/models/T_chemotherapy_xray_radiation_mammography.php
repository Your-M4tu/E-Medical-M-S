<?php
class T_chemotherapy_xray_radiation_mammography
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$disease)
  {
    $iq="INSERT INTO `t_chemotherapy_xray_radiation_mammography`(`fid`, `disease`) VALUES ('$fid','$disease');";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_chemotherapy_xray_radiation_mammography` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$disease)
  {
    $uq="UPDATE `t_chemotherapy_xray_radiation_mammography` SET `disease`='$disease' WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_chemotherapy_xray_radiation_mammography` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
