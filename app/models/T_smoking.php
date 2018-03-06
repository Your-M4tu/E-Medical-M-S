<?php
class T_smoking
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$started_age, $usage_duration, $usage_per_day )
  {
    $iq="INSERT INTO `t_smoking`(`fid`, `started_age`, `usage_duration`, `usage_per_day`) VALUES ('$fid',$started_age, $usage_duration, $usage_per_day);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_smoking` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid,$started_age, $usage_duration, $usage_per_day)
  {
    $uq="UPDATE `t_smoking` SET `started_age`=$started_age,`usage_duration`=$usage_duration,`usage_per_day`=$usage_per_day WHERE   `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_smoking` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
