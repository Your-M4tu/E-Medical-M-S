<?php
class T_phone_no
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($id, $phone_no)
  {
    $iq="INSERT INTO `t_phone_no`(`id`, `phone_no`) VALUES ('$id', $phone_no);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($id)
  {
    $sq="SELECT * FROM `t_phone_no` WHERE  `id`='$id';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($id, $phone_no)
  {
    $uq="UPDATE `t_phone_no` SET `phone_no`=$phone_no WHERE   `id`='$id';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($id)
  {
    $dq="DELETE FROM `t_phone_no` WHERE `id`='$id';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
