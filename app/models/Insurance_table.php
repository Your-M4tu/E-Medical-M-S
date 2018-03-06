<?php
class Insurance_table
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($id, $govt_insurance_no)
  {
    $iq="INSERT INTO `insurance_table`(`id`, `govt_insurance_no`) VALUES ('$id', $govt_insurance_no);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($id)
  {
    $sq="SELECT * FROM `insurance_table` WHERE  `id`='$id';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($id, $govt_insurance_no)
  {
    $uq="UPDATE `insurance_table` SET govt_insurance_no`=$govt_insurance_no WHERE `id`='$id';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($id)
  {
    $dq="DELETE FROM `insurance_table` WHERE `id`='$id';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
