<?php
class Food_habit
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid, $vegetarian, $non_vegetarian, $fruits_usage, $fried_roasted_usage, $dried_fish)
  {
    $iq="INSERT INTO `food_habit`(`fid`, `vegetarian`, `non_vegetarian`, `fruits_usage`, `fried_roasted_usage`, `dried_fish`) VALUES ('$fid', $vegetarian, $non_vegetarian, $fruits_usage, $fried_roasted_usage, $dried_fish);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `food_habit` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid, $vegetarian, $non_vegetarian, $fruits_usage, $fried_roasted_usage, $dried_fish)
  {
    $uq="UPDATE `food_habit` SET vegetarian`=$vegetarian,`non_vegetarian`=$non_vegetarian,`fruits_usage`=$fruits_usage,`fried_roasted_usage`=$fried_roasted_usage,`dried_fish`=$dried_fish WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `food_habit` WHERE `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
