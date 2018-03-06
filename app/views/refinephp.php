<?php
if(isset($_POST['sr']))
{
	$s ="SELECT details_family_member.`fid`  FROM `details_family_member`";
	if($_POST['l1'] && $_POST['l2'])
    $s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `age` BETWEEN ". $_POST['l1'] . " AND ". $_POST['l2'] ." and `fid` IN ($s)";
	if($_POST['dob1'] && $_POST['dob2'])
	{
    	$d1=date("Y-m-d", strtotime($_POST['dob1']));
    	$d2=date("Y-m-d", strtotime($_POST['dob2']));
    	$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `dob` BETWEEN '$d1' AND '$d2' and `fid` IN ($s)";
	}

	if(!empty($_POST['gender']) && !empty($_POST['gender1']))

		$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE gender='m'||'f' and `fid` IN ($s)";

	elseif(!empty($_POST['gender']))
		$s= "SELECT details_family_member.`fid`  FROM `details_family_member` WHERE details_family_member.`gender`= 'm' and `fid` IN ($s)";

	elseif (!empty($_POST['gender1']))
	{
		$s= "SELECT details_family_member.`fid`  FROM `details_family_member` WHERE details_family_member.`gender`= 'f' and `fid` IN ($s)";

		if($_POST['ms1']&&$_POST['ms2'])
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `menstruation_started_age` BETWEEN ".$_POST['ms1']." and " .$_POST['ms2']. " and `fid` IN ($s)";

		if(!empty($_POST['rm']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `regular_menstruation` = 1 and `fid` IN ($s)";

		if ($_POST['ma1']&&$_POST['ma2'])
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `menupause_age` BETWEEN ".$_POST['ma1']." and " .$_POST['ma2']. " and `fid` IN ($s)";

		if ($_POST['ag1']&&$_POST['ag2'])
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `age_first_delivery` BETWEEN ".$_POST['ag1']." and " .$_POST['ag2']. " and `fid` IN ($s)";

		if ($_POST['n1']&&$_POST['n2'])
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `no_child` BETWEEN ".$_POST['n1']." and " .$_POST['n2']. " and `fid` IN ($s)";

 		if ($_POST['no1']&&$_POST['no2'])
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `no_pregnancies` BETWEEN ".$_POST['no1']." and " .$_POST['no2']. " and `fid` IN ($s)";

		if(!empty($_POST['ct']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `use_of_contraceptives` = 1 and `fid` IN ($s)";

		if(!empty($_POST['ah']))
		{
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `abortion_history` = 1 and `fid` IN ($s)";

  			if ($_POST['ah1']&&$_POST['ah2'])
				$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_abortion_history` USING (`fid`) WHERE `count` BETWEEN ".$_POST['ah1']." and " .$_POST['ah2']. " and `fid` IN ($s)";
		}

		if(!empty($_POST['ur']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `whether_uterus_removed` = 1 and `fid` IN ($s)";

		if($_POST['ud'])
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `uterus_disease` = '".$_POST['ud']."' and `fid` IN ($s)";

		if(!empty($_POST['rn']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `retracted_nipple` = 1 and `fid` IN ($s)";

		if(!empty($_POST['lc']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `leucorrhoea` = 1 and `fid` IN ($s)";

		if(!empty($_POST['ib']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `irregular_blood_bleeding` = 1 and `fid` IN ($s)";

		if(!empty($_POST['bi']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `blood_bleeding_after_intercourse` = 1 and `fid` IN ($s)";

		if(!empty($_POST['bm']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `blood_bleeding_after_menupause` = 1 and `fid` IN ($s)";

		if(!empty($_POST['odp']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `other_diseases_pubic_place` = 1 and `fid` IN ($s)";

		if(!empty($_POST['uct']))
		{
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `uterus_cancer_tested` = 1 and `fid` IN ($s)";

			if ($_POST['agu1']&&$_POST['agu2'])
			{
				$dd1=date("Y-m-d", strtotime($_POST['agu1']));
    			$dd2=date("Y-m-d", strtotime($_POST['agu2']));
				$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_uterus_cancer_tested` USING (`fid`) WHERE `tested_date` BETWEEN '$dd1' AND '$dd2' and `fid` IN ($s)";
			}

			if(($_POST['tr']))
				$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_uterus_cancer_tested` USING (`fid`) WHERE `test_result` = '".$_POST['tr']."' and `fid` IN ($s)";
		}

		if(!empty($_POST['vd']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `consumption_medicine_venereal_diseases` = 1 and `fid` IN ($s)";

		if(!empty($_POST['cmi']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `consumption_medicine_infertility` = 1 and `fid` IN ($s)";

		if(!empty($_POST['bf']))
		{
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `breast_feeding` = 1 and `fid` IN ($s)";
			if($_POST['bf1']&&$_POST['bf2'])
				$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_breast_feeding` USING (`fid`) WHERE `duration` BETWEEN ".$_POST['bf1']." and " .$_POST['bf2']. " and `fid` IN ($s)";
		}

		if(!empty($_POST['boh']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `breast_operation_history` = 1 and `fid` IN ($s)";

		if(!empty($_POST['brh']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `breast_radiation_history` = 1 and `fid` IN ($s)";

		if(!empty($_POST['bclr']))
		{
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `breast_colorchange_lump_rash` = 1 and `fid` IN ($s)";
			if($_POST['bclr1']&&$_POST['bclr2'])
			{
				$ddd1=date("Y-m-d", strtotime($_POST['bclr1']));
    			$ddd2=date("Y-m-d", strtotime($_POST['bclr2']));
				$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_breast_colorchange_lump_rash` USING (`fid`) WHERE `time_occured` BETWEEN '$ddd1' AND '$ddd2' and `fid` IN ($s)";
			}
		}
		if(!empty($_POST['fhc']))
			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_female` USING (`fid`) WHERE `family_history_cancer_heart_kidney_diseases` = 1 and `fid` IN ($s)";
	}

	if(!empty($_POST['ms']))
	{
    	$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `marital_status` = 1 and `fid` IN ($s)";

  		if($_POST['mstarted_age']&&$_POST['mstopped_age'])
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `t_marital status` USING (`fid`) WHERE `age_when_married` BETWEEN ".$_POST['mstarted_age']." and ".$_POST['mstopped_age']."  and `fid` IN ($s)";

		if($_POST['br'])
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `t_marital status` USING (`fid`) WHERE `blood_relationship`='".$_POST['br']."' and `fid` IN ($s)";
	}
	if($_POST['edu'])
    	$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `education_qualification`='".$_POST['edu']."' and `fid` IN ($s)";

	if($_POST['occ'])
    	$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `occupation`='".$_POST['occ']."' and `fid` IN ($s)";

	if(!empty($_POST['smoke']))
	{
   		$s= "SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `h_smoking`='". $_POST['smoke'] ."' and `fid` IN    ($s)";

		if($_POST['sstarted_age']&&$_POST['sstopped_age'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_smoking` USING (`fid`) WHERE `started_age` BETWEEN ".$_POST['sstarted_age']." and ".$_POST['sstopped_age']." and `fid` IN ($s)";

		if($_POST['susage_duration1']&&$_POST['susage_duration2'])
    		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_smoking` USING (`fid`) WHERE `usage_duration` BETWEEN ".$_POST['susage_duration1']." and ".$_POST['susage_duration2']." and `fid` IN ($s)";

		if($_POST['susage_per_day1']&&$_POST['susage_per_day2'])
    		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_smoking` USING (`fid`) WHERE `usage_per_day` BETWEEN ".$_POST['susage_per_day1']." and ".$_POST['susage_per_day2']." and `fid` IN ($s)";
	}

	if(!empty($_POST['bet']))
	{
		$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `h_betel_quid`='1' and `fid` IN ($s)";

		if($_POST['bstarted_age']&&$_POST['bstopped_age'])
    		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_betel_quid_with_tobacco` USING (`fid`) WHERE `started_age` BETWEEN ".$_POST['bstarted_age']." and ".$_POST['bstopped_age']." and `fid` IN ($s)";

		if($_POST['busage_duration1']&&$_POST['busage_duration2'])
   			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_betel_quid_with_tobacco` USING (`fid`) WHERE `usage_duration` BETWEEN ".$_POST['busage_duration1']." and ".$_POST['busage_duration2']." and `fid` IN ($s)";

		if($_POST['busage_per_day1']&&$_POST['busage_per_day2'])
		    $s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_betel_quid_with_tobacco` USING (`fid`) WHERE `usage_per_day` BETWEEN ".$_POST['busage_per_day1']." and ".$_POST['busage_per_day2']." and `fid` IN ($s)";
	}

	if(!empty($_POST['pan']))
	{
    	$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE  `h_pan_parag`= 1 and `fid` IN ($s)";

		if($_POST['pstarted_age']&&$_POST['pstopped_age'])
    		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_pan_parag/gutka` USING (`fid`) WHERE `started_age` BETWEEN ".$_POST['pstarted_age']." and ".$_POST['pstopped_age']." and `fid` IN ($s)";

		if($_POST['pusage_duration1']&&$_POST['pusage_duration2'])
   			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_pan_parag/gutka` USING (`fid`) WHERE `usage_duration` BETWEEN ".$_POST['pusage_duration1']." and ".$_POST['pusage_duration2']." and `fid` IN ($s)";
		if(!empty($_POST['pusage']))
    		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_pan_parag/gutka` USING (`fid`) WHERE `drug_usage`=1 and `fid` IN ($s)";
	}

	if(!empty($_POST['alcohol']))
	{
    	$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `h_alcohol`= 1 and `fid` IN ($s)";

    	if($_POST['cat'])
        	$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_alcohol_usage` USING (`fid`) WHERE `category`='".$_POST['cat']."' and `fid` IN ($s)";

		if($_POST['astarted_age']&&$_POST['astopped_age'])
    		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_alcohol_usage` USING (`fid`) WHERE `started_age` BETWEEN ".$_POST['astarted_age']." and ".$_POST['astopped_age']." and `fid` IN ($s)";

		if($_POST['ausage_duration1']&&$_POST['ausage_duration2'])
    		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_alcohol_usage` USING (`fid`) WHERE `usage_duration` BETWEEN ".$_POST['ausage_duration1']." and ".$_POST['ausage_duration2']." and `fid` IN ($s)";
	}

	if(!empty($_POST['dis']))
	{
    	$s="SELECT details_family_member.`fid`  FROM `details_family_member` WHERE `disability`= 1 and `fid` IN ($s)";

    	if($_POST['disa'])
        	$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_disability` USING (`fid`) WHERE `disabilities`='".$_POST['disa']."' and `fid` IN ($s)";
	}

	if(!empty($_POST['fh']))
	{
    	if(!empty($_POST['veg']))
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `food_habit` USING (`fid`) WHERE vegetarian= 1 and `fid` IN ($s)";

		if(!empty($_POST['non']))
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `food_habit` USING (`fid`) WHERE non_vegetarian= 1 and `fid` IN ($s)";

		if(!empty($_POST['fu']))
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `food_habit` USING (`fid`) WHERE fruits_usage= 1 and `fid` IN ($s)";

		if(!empty($_POST['fru']))
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `food_habit` USING (`fid`) WHERE fried_roasted_usage= 1 and `fid` IN ($s)";
		if(!empty($_POST['dfu']))
   	 		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `food_habit` USING (`fid`) WHERE dried_fish= 1 and `fid` IN ($s)";
	}

	if(!empty($_POST['hc']))
	{

		if($_POST['diab1']&&$_POST['diab2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `diabetes` BETWEEN ".$_POST['diab1']." and ".$_POST['diab2']." and `fid` IN ($s)";

		if($_POST['bp1']&&$_POST['bp2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `blood_pressure` BETWEEN ".$_POST['bp1']." and ".$_POST['bp2']." and `fid` IN ($s)";

		if($_POST['pcv1']&&$_POST['pcv2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `paralysis_cva` BETWEEN ".$_POST['pcv1']." and ".$_POST['pcv2']." and `fid` IN ($s)";

		if($_POST['asthma1']&&$_POST['asthma2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `asthma` BETWEEN ".$_POST['asthma1']." and ".$_POST['asthma2']." and `fid` IN ($s)";

		if($_POST['cough1']&&$_POST['cough2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `cough` BETWEEN ".$_POST['cough1']." and ".$_POST['cough2']." and `fid` IN ($s)";

		if($_POST['acidity1']&&$_POST['acidity2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `acidity` BETWEEN ".$_POST['acidity1']." and ".$_POST['acidity2']." and `fid` IN ($s)";

		if($_POST['hd1']&&$_POST['hd2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `heart_disease` BETWEEN ".$_POST['hd1']." and ".$_POST['hd2']." and `fid` IN ($s)";

		if($_POST['cholestrol1']&&$_POST['cholestrol2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `cholestrol` BETWEEN ".$_POST['cholestrol1']." and ".$_POST['cholestrol2']." and `fid` IN ($s)";

		if($_POST['tb1']&&$_POST['tb2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `tuberculosis` BETWEEN ".$_POST['tb1']." and ".$_POST['tb2']." and `fid` IN ($s)";

		if($_POST['ty1']&&$_POST['ty2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `thyroid` BETWEEN ".$_POST['ty1']." and ".$_POST['ty2']." and `fid` IN ($s)";

		if($_POST['art1']&&$_POST['art2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `arthritis` BETWEEN ".$_POST['art1']." and ".$_POST['art2']." and `fid` IN ($s)";

		if($_POST['lid1']&&$_POST['lid2'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `liver_diseases` BETWEEN ".$_POST['lid1']." and ".$_POST['lid2']." and `fid` IN ($s)";

		if($_POST['ods1']&&$_POST['ods2'])
		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `other_disease` BETWEEN ".$_POST['ods1']." and ".$_POST['ods2']." and `fid` IN ($s)";

		if(!empty($_POST['mi']))
		{
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `medicines_intaking`= 1 and `fid` IN ($s)";

			if($_POST['mid'])
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_medicines_intaking` USING (`fid`) WHERE `diseases` = '".$_POST['mid']."' and `fid` IN ($s)";
		}

		if(!empty($_POST['cd']))
		{
			$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `health_condition` USING (`fid`) WHERE `common_disease`= 1 and `fid` IN ($s)";

			if(!empty($_POST['mou']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `mouth_ulcers` LIKE  '1%' and `fid` IN ($s)";

			if(!empty($_POST['oth']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `oral_treatment_history`= 1 and `fid` IN ($s)";

			if(!empty($_POST['tp']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `tooth_pain`= 1 and `fid` IN ($s)";

			if(!empty($_POST['bim']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `bleeding_in_mouth`= 1 and `fid` IN ($s)";

			if(!empty($_POST['nt']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `neck_tumor`= 1 and `fid` IN ($s)";

			if(!empty($_POST['tim']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `tonsil_inflammation`= 1 and `fid` IN ($s)";

			if(!empty($_POST['mwd']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `mouth_widen_difficult`= 1 and `fid` IN ($s)";

			if(!empty($_POST['dpg']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `dysphagia`= 1 and `fid` IN ($s)";

			if(!empty($_POST['dpn']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `dysphonia`= 1 and `fid` IN ($s)";

			if(!empty($_POST['rap']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `regular_abdominal_pain`= 1 and `fid` IN ($s)";

			if(!empty($_POST['hmtc']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `haematochezia`= 1 and `fid` IN ($s)";

			if(!empty($_POST['hmtr']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `haematuria`= 1 and `fid` IN ($s)";

			if(!empty($_POST['dys']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `dysuria`= 1 and `fid` IN ($s)";

			if($_POST['dcy'])
    			$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `doctor_consultancy`='".$_POST['dcy']."' and `fid` IN ($s)";

    		if ($_POST['biod1']&&$_POST['biod2'])
			{
				$bddd1=date("Y-m-d", strtotime($_POST['biod1']));
    			$bddd2=date("Y-m-d", strtotime($_POST['biod2']));
				$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_common_disease` USING (`fid`) WHERE `biopsy_date` BETWEEN '$bddd1' AND '$bddd2' and `fid` IN ($s)";
			}

			if(!empty($_POST['oph']))
			{
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `operation_history`= 1 and `fid` IN ($s)";

				if($_POST['opd'])
    				$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `t_operation_history` USING (`fid`) WHERE `disease`='".$_POST['opd']."' and `fid` IN ($s)";
			}

			if(!empty($_POST['cx']))
			{
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `chemotherapy_xray_radiation_mammography`= 1 and `fid` IN ($s)";

				if($_POST['cxd'])
    				$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN `t_chemotherapy_xray_radiation_mammography` USING (`fid`) WHERE `disease`='".$_POST['cxd']."' and `fid` IN ($s)";
			}

			if(!empty($_POST['dmlp']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `dome_lump`= 1 and `fid` IN ($s)";

			if(!empty($_POST['nhw']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `nonhealing_wounds`= 1 and `fid` IN ($s)";

			if(!empty($_POST['qgm']))
				$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN `t_common_disease` USING (`fid`) WHERE `quick_growing_moles`= 1 and `fid` IN ($s)";
		}
	}

	if(!empty($_POST['ht']))
	{
		if($_POST['phbn1']&&$_POST['phbn2'])
    		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `public_health_block_number`  BETWEEN ".$_POST['phbn1']." and ".$_POST['phbn2']." and `fid` IN ($s)";

		if ($_POST['re'])
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `religion`='".$_POST['re'] ."' and `fid` IN ($s)";

 		if ($_POST['ca'])
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `caste` = '".$_POST['ca'] ."' and `fid` IN ($s)";

     	if (!empty($_POST['cas']))
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `caste_category` = '".$_POST['cas'] ."' and `fid` IN ($s)";

 		if ($_POST['hty'])
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `house_type` = '".$_POST['hty'] ."' and `fid` IN ($s)";

     	if (!empty($_POST['hos']))
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `house_ownership` = 1 and `fid` IN ($s)";

 		if (!empty($_POST['el']))
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `electricity` = 1 and `fid` IN ($s)";

 		if (!empty($_POST['to']))
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `toilet` = 1 IN ($s)";

 		if ($_POST['fi1']&&$_POST['fi2'])
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `family_income` BETWEEN '".$_POST['fi1'] ."' and '".$_POST['fi2']."' and `fid` IN ($s)";

 		if ($_POST['hi'])
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `health_insurance` = '".$_POST['hi'] ."' and `fid` IN ($s)";

 		if ($_POST['dw'])
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `drinking_water` = '".$_POST['dw'] ."' and `fid` IN ($s)";
 		if ($_POST['co'])
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `house_table_name`  USING (`id`)  WHERE `cooking_oil` = '".$_POST['co'] ."' and `fid` IN ($s)";
	}

	if(!empty($_POST['scrd']))
	{
		if ($_POST['scp'])
     		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `screening_details`  USING (`fid`)  WHERE `screening_camp_place` = '".$_POST['scp'] ."' and `fid` IN ($s)";

     	if($_POST['date1'] && $_POST['date2'])
		{
    		$da1=date("Y-m-d", strtotime($_POST['date1']));
    		$da2=date("Y-m-d", strtotime($_POST['date2']));
    		$s="SELECT details_family_member.`fid`  FROM `details_family_member` JOIN  `screening_details`  USING (`fid`) WHERE `date` BETWEEN '$da1' AND '$da2' and `fid` IN ($s)";
		}

		if($_POST['high1']&&$_POST['high2'])
    		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `screening_details`  USING (`fid`)  WHERE `height`  BETWEEN ".$_POST['high1']." and ".$_POST['high2']." and `fid` IN ($s)";

    	if($_POST['wigh1']&&$_POST['wigh2'])
    		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `screening_details`  USING (`fid`)  WHERE `weight`  BETWEEN ".$_POST['wigh1']." and ".$_POST['wigh2']." and `fid` IN ($s)";

    	if($_POST['bmi1']&&$_POST['bmi2'])
    		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `screening_details`  USING (`fid`)  WHERE `BMI`  BETWEEN ".$_POST['bmi1']." and ".$_POST['bmi2']." and `fid` IN ($s)";

    	if($_POST['blp1']&&$_POST['blp2'])
    		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `screening_details`  USING (`fid`)  WHERE `BP`  BETWEEN ".$_POST['blp1']." and ".$_POST['blp2']." and `fid` IN ($s)";

    	if($_POST['fbs1']&&$_POST['fbs2'])
    		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `screening_details`  USING (`fid`)  WHERE `FBS`  BETWEEN ".$_POST['fbs1']." and ".$_POST['fbs2']." and `fid` IN ($s)";

    	if($_POST['csl1']&&$_POST['csl2'])
    		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `screening_details`  USING (`fid`)  WHERE `cholestrol`  BETWEEN ".$_POST['csl1']." and ".$_POST['csl2']." and `fid` IN ($s)";
    }

    if(!empty($_POST['ch']))
	{
		if(!empty($_POST['rf']))
     		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_children` USING (`fid`) WHERE `regular_fever` = '".$_POST['rf'] ."' and `fid` IN ($s)";

    	if(!empty($_POST['an']))
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_children` USING (`fid`) WHERE `anemia` = 1 and `fid` IN ($s)";

    	if(!empty($_POST['hrd']))
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_children` USING (`fid`) WHERE `heart_disease` = 1 and `fid` IN ($s)";

    	if(!empty($_POST['he']))
    	{
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_children` USING (`fid`) WHERE `hepatitis` = 1 and `fid` IN ($s)";

    		if ($_POST['t'])
     		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_hepatitis` USING (`fid`) WHERE `type` = '".$_POST['t'] ."' and `fid` IN ($s)";

     		if($_POST['not1']&&$_POST['not2'])
    		$s="SELECT details_family_member.`fid` FROM  `details_family_member` JOIN  `t_hepatitis`  USING (`fid`)  WHERE `times`  BETWEEN ".$_POST['not1']." and ".$_POST['not2']." and `fid` IN ($s)";
    	}

    	if(!empty($_POST['od']))
    	{
    		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_children` USING (`fid`) WHERE `other_disease` = 1 and `fid` IN ($s)";

    		if ($_POST['odd'])
     		$s="SELECT details_family_member.`fid` FROM `details_family_member` JOIN  `t_other_disease` USING (`fid`) WHERE `disease` = '".$_POST['odd'] ."' and `fid` IN ($s)";
     	}
	}




mysqli_select_db($conn,'jeevanam');
		echo $s
    $res=mysqli_query($conn,$s);
    $row=mysqli_fetch_assoc($res);
    echo "{$row['fid']}";
    echo $s;
}
?>
