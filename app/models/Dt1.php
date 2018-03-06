<?php
class Dt1
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbcreatestructure ($dtc,$phc,$panct,$ward,$bl,$ul)
  {

  	$sql = "INSERT INTO `dt1`(`dstcode`,`phc`, `panchayat`, `wards`, `pbhl`, `pbhu`) VALUES ($dtc,'$phc','$panct',$ward,$bl,$ul);";
    $result = mysqli_query($this->conn,$sql);
    return $result;
  }

  function dbdisplayall()
  {
    $sql = "SELECT * FROM `dt1` WHERE 1";
    $result = mysqli_query($this->conn,$sql);
    return $result;
  }

  function dbdeleteselected($pancht)
  {
    $sql1= "SELECT panchayat FROM dt1 WHERE `dt1`.`panchayat` = '$pancht';";
    $result1 = mysqli_query($this->conn,$sql1);
    $count = mysqli_num_rows($result1);
    if($count == 1)
      {
        $sql = "DELETE FROM `dt1` WHERE `dt1`.`panchayat` = '$pancht';";
        $result = mysqli_query($this->conn,$sql);
        return "Panchayat Deleted";
      }
    else
      return "Operation Failed";
  }
}
?>
