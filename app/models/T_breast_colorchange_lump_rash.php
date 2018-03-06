<?php
class T_breast_colorchange_lump_rash
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid, $time_occured)
  {
    $iq="INSERT INTO `t_breast_colorchange_lump_rash`(`fid`, `time_occured`) VALUES ('$fid', '$time_occured');";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_breast_colorchange_lump_rash` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid, $time_occured)
  {
    $uq="UPDATE `t_breast_colorchange_lump_rash` SET `time_occured`='$time_occured' WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_breast_colorchange_lump_rash` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
