<?php
class House_table_name
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($id, $phc, $public_health_block_number, $public_health_house_number, $house_name, $religion, $caste, $caste_category, $house_type, $house_ownership, $electricity, $toilet, $family_income, $health_insurance, $rationcard_no, $drinking_water, $cooking_oil)
  {
    $iq="INSERT INTO `house_table_name`(`id`, `phc`, `public_health_block_number`, `public_health_house_number`, `house_name`, `religion`, `caste`, `caste_category`, `house_type`, `house_ownership`, `electricity`, `toilet`, `family_income`, `health_insurance`, `rationcard_no`, `drinking_water`, `cooking_oil`, `last_update`) VALUES ('$id', '$phc', $public_health_block_number, $public_health_house_number, '$house_name', '$religion', '$caste', '$caste_category', '$house_type', $house_ownership, $electricity, $toilet, $family_income, '$health_insurance', '$rationcard_no','$drinking_water', '$cooking_oil',CURRENT_TIMESTAMP);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($id)
  {
    $sq="SELECT * FROM `house_table_name` WHERE `id`='$id';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }

  function dbviewselectfid($id)
  {
    $sq="SELECT  `phc`, `public_health_block_number`, `public_health_house_number` FROM `house_table_name` WHERE  `id` = '$id';";
    $result = mysqli_query($this->conn,$sq);
    $pfid='';
    if($row = mysqli_fetch_assoc($result))
    {
    $panchayat=explode('/',$id);
    $pfid=$row['phc']."/".$panchayat['1']."/".$row['public_health_block_number']."/".$row['public_health_house_number']."/";
    }
    return $pfid;
  }

  function dbupdate($id,$house_name, $religion, $caste, $caste_category, $house_type, $house_ownership, $electricity, $toilet, $family_income, $health_insurance, $rationcard_no, $drinking_water, $cooking_oil)
  {
    $uq="UPDATE `house_table_name` SET `house_name`='$house_name',`religion`='$religion',`caste`='$caste',`caste_category`='$caste_category',`house_type`='$house_type',`house_ownership`=$house_ownership,`electricity`=$electricity,`toilet`=$toilet,`family_income`=$family_income,`health_insurance`='$health_insurance',`rationcard_no`='$rationcard_no',`drinking_water`='$drinking_water',`cooking_oil`='$cooking_oil',`last_update`=CURRENT_TIMESTAMP WHERE `id`='$id';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($id)
  {
    $dq="DELETE FROM `house_table_name` WHERE `id`='$id';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
  function searchidfamily($name,$DC,$Panchayath,$Ward,$Houseno)
  {
    if ($DC!='' && $Panchayath!='' && $Ward!='' && $Houseno!='')
    	$sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from   `house_table_name` where `id`= '$DC/$Panchayath/$Ward/$Houseno' and `house_name`='$name'";

    else if ($DC!='' && $Panchayath!='' && $Ward!='')
    	$sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from `house_table_name`  where `id` like '$DC/$Panchayath/$Ward/%'  and `house_name`='$name'";

    else if($DC!='' && $Panchayath!='' )
    	$sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from `house_table_name`  where `id` like  '$DC/$Panchayath/%'  and `house_name`='$name'";

    else if($DC!='')
    	$sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from `house_table_name`  where `id` like  '$DC/%' and `house_name`='$name'";

    else
      $sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name`  from  `house_table_name`  where `id` like  '%' and `house_name`='$name'";

    $retval = mysqli_query( $this->conn ,$sql );
    return mysqli_fetch_all($retval,MYSQLI_ASSOC);

  }

  function searchfidfamily($name1,$Houseno,$PHBN,$Panchayath,$PHC)
  {

    if ($PHC!='' && $Panchayath!='' && $PHBN!='' && $Houseno!='' )
    	$sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from   `house_table_name`  where `id` like '%/$Panchayath/%' and `house_name`='$name1' and `phc`='$PHC' and `public_health_block_number`=$PHBN  and `public_health_house_number`=$Houseno";

    else if ($PHC!='' && $Panchayath!='' && $PHBN!='')
    	$sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from   `house_table_name`   where `id` like '%/$Panchayath/%'  and `house_name`= '$name1' and `phc`='$PHC' and `public_health_block_number`=$PHBN";

    else if ($PHC!='' && $Panchayath!='' )
    	$sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from  `house_table_name`  where `id` like '%/$Panchayath/%' and `house_name`='$name1' and `phc` ='$PHC'";

    else if ($PHC!='')
      $sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from   `house_table_name` where `phc`='$PHC' and `house_name` ='$name1'";

      else
        $sql="SELECT `id`,`phc`,`public_health_block_number`,`public_health_house_number`,`house_name` from   `house_table_name`  where `house_name` ='$name1'";
    	$retval = mysqli_query( $this->conn ,$sql );
    return mysqli_fetch_all($retval,MYSQLI_ASSOC);
  }

}
  ?>
