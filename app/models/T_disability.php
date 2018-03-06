<?php
class T_disability
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$disabilities)
  {
    $iq="INSERT INTO `t_disability`(`fid`, `disabilities`) VALUES ('$fid','$disabilities');";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_disability` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
  return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$disabilities)
  {
    $uq="UPDATE `t_disability` SET `disabilities`='$disabilities' WHERE   `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_disability` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
