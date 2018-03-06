<?php
class T_alcohol_usage
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid, $category, $started_age, $usage_duration)
  {
    $iq="INSERT INTO `t_alcohol_usage`(`fid`, `category`, `started_age`, `usage_duration`) VALUES ('$fid', '$category', $started_age, $usage_duration);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_alcohol_usage` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid, $category, $started_age, $usage_duration)
  {
    $uq="UPDATE `t_alcohol_usage` SET `category`='$category',`started_age`=$started_age,`usage_duration`=$usage_duration WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_alcohol_usage` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
