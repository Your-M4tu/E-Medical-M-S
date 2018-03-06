<?php
class Users
{
  protected $conn;
  function __construct()
  {
    require_once '../app/configs/config.php';
    $this->conn=$con;
  }

  function validation($myusername,$mypassword )
  {
    $sql = "SELECT `id` FROM users WHERE user_name = '$myusername' and password ='$mypassword'";
    $result = mysqli_query($this->conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  }

  function dbusercheck($username)
  {
    $ses_sql = mysqli_query($this->conn,"SELECT `user_name` FROM users  where user_name = '$username'");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    return $row;
  }

  function dbchangepassword($user,$password,$new)
  {
    $sql1 = "SELECT password FROM users where user_name = '$user' and password = '$password'";
    $result1 = mysqli_query($this->conn,$sql1);
    $count = mysqli_num_rows($result1);
    if($count == 1)
    {
    	$sql ="UPDATE `users` SET `password`='$new' WHERE user_name='$user'";
    	$result = mysqli_query($this->conn,$sql);
    	if($result)
    	return "Password Changed";
    }
    else
     return "Password Changed Failed";
  }

function dbidcreation($sk,$kc)
  {
    for($i=1;$i<=$kc;$i++)
    {
      $ret=0;
      for($j=$i;$ret!=1;$j++)
      {
        $sql = "INSERT INTO `users` (`id`, `name`, `sex`, `age`, `designation`, `mail_id`, `mobile_number`, `user_name`, `password`, `active`) VALUES ('$sk$j',NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
        $ret = mysqli_query($this->conn,$sql);
        if($ret==1)
        $key[$i]=$sk.$j;
      }
    }
    return $key;
  }

  function dbremoveuser($user)
  {
  $sql1= "SELECT user_name FROM users WHERE `users`.`user_name` = '$user';";
  $result1 = mysqli_query($this->conn,$sql1);
  $count = mysqli_num_rows($result1);
  if($count == 1)
    {
      $sql = "DELETE FROM `users` WHERE `users`.`user_name` = '$user';";
      $result = mysqli_query($this->conn,$sql);
      return "User Deleted";
    }
  else
    return "Operation Failed";
  }

  function dbremoveid($id)
  {
  $sql1= "SELECT `id` FROM `users` WHERE `id` = '$id';";
  $result1 = mysqli_query($this->conn,$sql1);
  $count = mysqli_num_rows($result1);
  if($count == 1)
    {
      $sql = "DELETE FROM `users` WHERE `users`.`id` = '$id';";
      $result = mysqli_query($this->conn,$sql);
      return "ID Deleted";
    }
  else
    return "Operation Failed";
  }
  function dbviewall()
    {
      $sql = "SELECT * FROM `jeevanam`.users WHERE 1";
      $retval=mysqli_query($this->conn, $sql);
      return $retval;
    }

  function dbregister($designation,$id,$name,$sex,$age,$mail_id,$mob,$user_name,$password)
  {
    $ret=mysqli_query($this->conn,"SELECT * FROM jeevanam.`users` WHERE `id`= '$id'");
    $r=mysqli_fetch_assoc($ret);
    if($r['user_name']==NULL)
    {
    $sql ="UPDATE `jeevanam`.`users` SET `name` = '$name',`sex` = '$sex',`age` = $age,`designation` = '$designation', `mail_id` = '$mail_id',`mobile_number` = $mob,`user_name` = '$user_name',`password` = '$password' WHERE users.id = '$id';";
    $retval = mysqli_query( $this->conn ,$sql );
    if(!$retval)
    return "Possible reason:Wrong ID inputed ";
    else
    return "Account Created Successfully";
    }
    else
    	return "Account Cannot be created. (ID already Used ,Contact Admin)";
    }
  }

?>
