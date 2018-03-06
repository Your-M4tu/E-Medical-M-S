<?php
class T_common_disease
{
  protected $conn;
  function __construct()
  {
    require '../app/configs/config.php';
    $this->conn=$con;
  }

  function dbinsert($fid,$mouth_ulcers, $oral_treatment_history, $tooth_pain, $bleeding_in_mouth, $neck_tumor, $tonsil_inflammation, $mouth_widen_difficult, $dysphagia,$dysphonia, $regular_abdominal_pain, $haematochezia, $haematuria, $dysuria, $doctor_consultancy, $biopsy_date, $operation_history, $chemotherapy_xray_radiation_mammography, $dome_lump, $nonhealing_wounds, $quick_growing_moles)
  {
    $iq="INSERT INTO `t_common_disease`(`fid`, `mouth_ulcers`, `oral_treatment_history`, `tooth_pain`, `bleeding_in_mouth`, `neck_tumor`, `tonsil_inflammation`, `mouth_widen_difficult`, `dysphagia`, `dysphonia`, `regular_abdominal_pain`, `haematochezia`, `haematuria`, `dysuria`, `doctor_consultancy`, `biopsy_date`, `operation_history`, `chemotherapy_xray_radiation_mammography`, `dome_lump`, `nonhealing_wounds`, `quick_growing_moles`) VALUES ('$fid', '$mouth_ulcers', $oral_treatment_history, $tooth_pain, $bleeding_in_mouth, $neck_tumor, $tonsil_inflammation, $mouth_widen_difficult, $dysphagia,$dysphonia, $regular_abdominal_pain, $haematochezia, $haematuria, $dysuria, '$doctor_consultancy', '$biopsy_date', $operation_history, $chemotherapy_xray_radiation_mammography, $dome_lump, $nonhealing_wounds, $quick_growing_moles);";
    $result = mysqli_query($this->conn,$iq);
    return $result;
  }

  function dbviewselected($fid)
  {
    $sq="SELECT * FROM `t_common_disease` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$sq);
  return mysqli_fetch_assoc($result);
  }


  function dbupdate($fid, $mouth_ulcers, $oral_treatment_history, $tooth_pain, $bleeding_in_mouth, $neck_tumor, $tonsil_inflammation, $mouth_widen_difficult, $dysphagia,$dysphonia, $regular_abdominal_pain, $haematochezia, $haematuria, $dysuria, $doctor_consultancy, $biopsy_date, $operation_history, $chemotherapy_xray_radiation_mammography, $dome_lump, $nonhealing_wounds, $quick_growing_moles)
  {
    $uq="UPDATE `t_common_disease` SET `mouth_ulcers`='$mouth_ulcers',`oral_treatment_history`=$oral_treatment_history,`tooth_pain`=$tooth_pain,`bleeding_in_mouth`=$bleeding_in_mouth,`neck_tumor`=$neck_tumor,`tonsil_inflammation`=$tonsil_inflammation,`mouth_widen_difficult`=$mouth_widen_difficult,`dysphagia`=$dysphagia,`dysphonia`=$dysphonia,`regular_abdominal_pain`=$regular_abdominal_pain,`haematochezia`=$haematochezia,`haematuria`= $haematuria,`dysuria`=$dysuria,`doctor_consultancy`='$doctor_consultancy',`biopsy_date`='$biopsy_date',`operation_history`=$operation_history,`chemotherapy_xray_radiation_mammography`=$chemotherapy_xray_radiation_mammography,`dome_lump`=$dome_lump,`nonhealing_wounds`= $nonhealing_wounds,`quick_growing_moles`=$quick_growing_moles WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$uq);
    return $result;
  }

  function dbdelete ($fid)
  {
    $dq="DELETE FROM `t_common_disease` WHERE  `fid`='$fid';";
    $result = mysqli_query($this->conn,$dq);
    return $result;
  }
}
  ?>
