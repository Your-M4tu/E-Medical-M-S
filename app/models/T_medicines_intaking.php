<?php
class T_medicines_intaking
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$diseases)
  {
    $iq="INSERT INTO `t_medicines_intaking`(`fid`, `diseases`) VALUES ('$fid','$diseases');";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_medicines_intaking` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
  return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$diseases)
  {
    $uq="UPDATE `t_medicines_intaking` SET `diseases`='$diseases' WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_medicines_intaking` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
