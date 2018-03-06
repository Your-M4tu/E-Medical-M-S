<?php
class T_breast_feeding
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$duration)
  {
    $iq="INSERT INTO `t_breast_feeding`(`fid`, `duration`) VALUES ('$fid',$duration);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_breast_feeding` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$duration)
  {
    $uq="UPDATE `t_breast_feeding` SET `duration`= $duration WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_breast_feeding` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
