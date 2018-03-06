<?php
class T_female
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid, $menstruation_started_age, $regular_menstruation, $menupause_age, $age_first_delivery, $no_child, $no_pregnancies, $use_of_contraceptives, $abortion_history, $whether_uterus_removed, $uterus_disease, $retracted_nipple, $leucorrhoea, $irregular_blood_bleeding, $blood_bleeding_after_intercourse, $blood_bleeding_after_menupause, $other_diseases_pubic_place, $uterus_cancer_tested, $consumption_medicine_venereal_diseases, $consumption_medicine_infertility, $breast_feeding, $breast_operation_history, $breast_radiation_history, $breast_colorchange_lump_rash, $family_history_diseases)
  {
    $iq="INSERT INTO `t_female`(`fid`, `menstruation_started_age`, `regular_menstruation`, `menupause_age`, `age_first_delivery`, `no_child`, `no_pregnancies`, `use_of_contraceptives`, `abortion_history`, `whether_uterus_removed`, `uterus_disease`, `retracted_nipple`, `leucorrhoea`, `irregular_blood_bleeding`, `blood_bleeding_after_intercourse`, `blood_bleeding_after_menupause`, `other_diseases_pubic_place`, `uterus_cancer_tested`, `consumption_medicine_venereal_diseases`, `consumption_medicine_infertility`, `breast_feeding`, `breast_operation_history`, `breast_radiation_history`, `breast_colorchange_lump_rash`, `family_history_cancer_heart_kidney_diseases`) VALUES ('$fid',$menstruation_started_age, $regular_menstruation, $menupause_age, $age_first_delivery, $no_child, $no_pregnancies, $use_of_contraceptives, $abortion_history, $whether_uterus_removed, '$uterus_disease', $retracted_nipple, $leucorrhoea, $irregular_blood_bleeding, $blood_bleeding_after_intercourse, $blood_bleeding_after_menupause, $other_diseases_pubic_place, $uterus_cancer_tested, $consumption_medicine_venereal_diseases, $consumption_medicine_infertility, $breast_feeding, $breast_operation_history, $breast_radiation_history, $breast_colorchange_lump_rash, $family_history_diseases);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_female` WHERE`fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
    return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid, $menstruation_started_age, $regular_menstruation, $menupause_age, $age_first_delivery, $no_child, $no_pregnancies, $use_of_contraceptives, $abortion_history, $whether_uterus_removed, $uterus_disease, $retracted_nipple, $leucorrhoea, $irregular_blood_bleeding, $blood_bleeding_after_intercourse, $blood_bleeding_after_menupause, $other_diseases_pubic_place, $uterus_cancer_tested, $consumption_medicine_venereal_diseases, $consumption_medicine_infertility, $breast_feeding, $breast_operation_history, $breast_radiation_history, $breast_colorchange_lump_rash, $family_history_diseases)
  {
    $uq="UPDATE `t_female` SET `menstruation_started_age`= $menstruation_started_age,`regular_menstruation`=$regular_menstruation,`menupause_age`=$menupause_age,`age_first_delivery`=$age_first_delivery,`no_child`= $no_child,`no_pregnancies`=$no_pregnancies,`use_of_contraceptives`= $use_of_contraceptives,`abortion_history`=$abortion_history,`whether_uterus_removed`=$whether_uterus_removed,`uterus_disease`='$uterus_disease',`retracted_nipple`=$retracted_nipple,`leucorrhoea`=$leucorrhoea,`irregular_blood_bleeding`=$irregular_blood_bleeding,`blood_bleeding_after_intercourse`=$blood_bleeding_after_intercourse,`blood_bleeding_after_menupause`=$blood_bleeding_after_menupause,`other_diseases_pubic_place`=$other_diseases_pubic_place,`uterus_cancer_tested`=$uterus_cancer_tested,`consumption_medicine_venereal_diseases`=$consumption_medicine_venereal_diseases,`consumption_medicine_infertility`=$consumption_medicine_infertility,`breast_feeding`=$breast_feeding,`breast_operation_history`=$breast_operation_history,`breast_radiation_history`=$breast_radiation_history,`breast_colorchange_lump_rash`=$breast_colorchange_lump_rash,`family_history_cancer_heart_kidney_diseases`=$family_history_diseases WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_female` WHERE   `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
