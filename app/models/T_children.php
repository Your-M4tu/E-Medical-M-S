<?php
class T_children
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid, $regular_fever, $anemia,$heart_disease, $hepatitis, $other_disease)
  {
    $iq="INSERT INTO `t_children`(`fid`, `regular_fever`, `anemia`,`heart_disease`, `hepatitis`, `other_disease`) VALUES ('$fid',$regular_fever,$anemia,$heart_disease,$hepatitis, $other_disease);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_children` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid, $regular_fever, $anemia,$heart_disease, $hepatitis, $other_disease)
  {
    $uq="UPDATE `t_children` SET `regular_fever`=$regular_fever,`anemia`=$anemia,`heart_disease`=$heart_disease,`hepatitis`=$hepatitis,`other_disease`=$other_disease WHERE   `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_children` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
