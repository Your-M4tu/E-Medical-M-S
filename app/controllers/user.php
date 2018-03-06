<?php
class user extends Controller
{
  protected $message;
  protected $users;
  protected $member;
  protected $food;
  protected $health;
  protected $house;
  protected $insurance;
  protected $screening;
  protected $abortion;
  protected $alcohol;
  protected $betel;
  protected $breast_colorchange;
  protected $breast_feeding;
  protected $chemotherapy;
  protected $children;
  protected $common;
  protected $disability;
  protected $family_history;
  protected $habits;
  protected $heart;
  protected $hepatitis;
  protected $marital;
  protected $medicines;
  protected $operation;
  protected $other;
  protected $panparag;
  protected $phoneno;
  protected $smoking;
  protected $uteruscancertested;
  protected $uterus_removed;

  function __construct()
  {
    $this->message=null;
    $this->users=$this->model('Users');
    $this->dt1=$this->model('Dt1');
    $this->member=$this->model('Details_family_member');
    $this->food=$this->model('Food_habit');
    $this->health=$this->model('Health_condition');
    $this->house=$this->model('House_table_name');
    $this->insurance=$this->model('Insurance_table');
    $this->screening=$this->model('Screening_details');
    $this->abortion=$this->model('T_abortion_history');
    $this->alcohol=$this->model('T_alcohol_usage');
    $this->betel=$this->model('T_betel_quid_with_tobacco');
    $this->breast_colorchange=$this->model('T_breast_colorchange_lump_rash');
    $this->breast_feeding=$this->model('T_breast_feeding');
    $this->chemotherapy=$this->model('T_chemotherapy_xray_radiation_mammography');
    $this->children=$this->model('T_children');
    $this->common=$this->model('T_common_disease');
    $this->disability=$this->model('T_disability');
    $this->family_history=$this->model('T_family_history_cancer_heart_kidney_diseases');
    $this->female=$this->model('T_female');
    $this->habits=$this->model('T_habits');
    $this->heart=$this->model('T_heart_disease');
    $this->hepatitis=$this->model('T_hepatitis');
    $this->marital=$this->model('T_marital_status');
    $this->medicines=$this->model('T_medicines_intaking');
    $this->operation=$this->model('T_operation_history');
    $this->other=$this->model('T_other_disease');
    $this->panparag=$this->model('T_pan_parag');
    $this->phoneno=$this->model('T_phone_no');
    $this->smoking=$this->model('T_smoking');
    $this->uteruscancertested=$this->model('T_uterus_cancer_tested');
    $this->uterus_removed=$this->model('T_whether_uterus_removed');

    session_start();
  }

  public function alert()
  {
    if(isset($_POST['sub']))
      $this->view(alert,['message'=>"alert"]);
    else
      $this->view(alert);
  }

  public function refine()
  {
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
      $dbhost = 'localhost:3306';
             $dbuser = 'root';
             $dbpass = "";
             $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
               mysqli_select_db($conn,'jeevanam');
        $resultr=mysqli_query($conn,$s);
        $this->view('refine',['row'=>$resultr]);
    }
    if(isset($_POST['viewall']))
    {
      $this->viewperson();
    }
    else
    $this->view('refine');
  }

  public function editfamily()
  {
    if(isset($_POST['addm']))
    {
      $this->view('updatefamily',['house'=>$this->house->dbviewselected($id),
              'id'=>$this->insurance->dbviewselected($id),
              'ph'=>$this->phoneno->dbviewselected($id),]);
    }
    else
      $this->searchfamily();
  }
  public function viewperson()
  {
    if(isset($_POST['viewall']))
    {
    $fid=$_POST['viewall'];
    $id=$this->member->dbgetid($fid);
    $this->view('viewmember',['pdetails'=>$this->member->dbviewselectedfid($fid) ,
    'house'=>$this->house->dbviewselected($id)
  ,'md'=>$this->marital->dbviewselected($fid),
  'fdh'=>$this->food->dbviewselected($fid),
  'hc'=>$this->health->dbviewselected($fid),
  'id'=>$this->insurance->dbviewselected($id),
  'sd'=>$this->screening->dbviewselected($fid),
  'ah'=>$this->abortion->dbviewselected($fid),
  'au'=>$this->alcohol->dbviewselected($fid),
  'bl'=>$this->betel->dbviewselected($fid),
  'bcc'=>$this->breast_colorchange->dbviewselected($fid),
  'bf'=>$this->breast_feeding->dbviewselected($fid),
  'che'=>$this->chemotherapy->dbviewselected($fid),
  'chd'=>$this->children->dbviewselected($fid),
  'cd'=>$this->common->dbviewselected($fid),
  'dity'=>$this->disability->dbviewselected($fid),
  'fahi'=>$this->family_history->dbviewselected($fid),
  'fem'=>$this->female->dbviewselected($fid),
  'hts'=>$this->habits->dbviewselected($fid),
  'htd'=>$this->heart->dbviewselected($fid),
  'hep'=>$this->hepatitis->dbviewselected($fid),
  'mdh'=>$this->medicines->dbviewselected($fid),
  'oph'=>$this->operation->dbviewselected($fid),
  'odis'=>$this->other->dbviewselected($fid),
  'pan'=>$this->panparag->dbviewselected($fid),
  'ph'=>$this->phoneno->dbviewselected($id),
  'smk'=>$this->smoking->dbviewselected($fid),
  'utcan'=>$this->uteruscancertested->dbviewselected($fid),
  'utrem'=>$this->uterus_removed->dbviewselected($fid)]);
  }
  else
      $this->search();
}

  public function search ()
  {
    if(isset($_POST['svid']))
    {
      $this->view('search',['row'=>
      $this->member->searchid($_POST['name'],$_POST['District_code'],$_POST['Panchayath'],$_POST['Ward'],$_POST['Houseno'])]);
    }

    if(isset($_POST['svfid']))
    {
      $this->view('search',['row'=>
      $this->member->searchfid($_POST['name1'],$_POST['hHouseno'],$_POST['Public_Health_blockno'],$_POST['Panchayath'],$_POST['PHC'])]);
    }
    $this->view('search');
  }

  public function searchfamily ()
  {
    if(isset($_POST['svid']))
    {
      $this->view('searchfamily',['row'=>
      $this->house->searchidfamily($_POST['name'],$_POST['District_code'],$_POST['Panchayath'],$_POST['Ward'],$_POST['Houseno'])]);
    }

    if(isset($_POST['svfid']))
    {
      $this->view('searchfamily',['row'=>
      $this->house->searchfidfamily($_POST['name1'],$_POST['hHouseno'],$_POST['Public_Health_blockno'],$_POST['Panchayath'],$_POST['PHC'])]);
    }
    $this->view('searchfamily');
  }
  public function usercheck()
  {
   $user_check = $_SESSION['username'];
   $login_session = $this->users->dbusercheck($user_check);
   if(!isset($_SESSION['username'])||!isset($login_session))
    header("location: /jvn/public/home/index");
  }

  public function userhome()
  {
    $this->usercheck();
    $this->view('userhome',['message'=>$this->message]);
  }

  public function logout()
  {

    if(session_destroy())
      header("location: /jvn/public/home/index");

  }

  public function addmember()
  {
    if(isset($_POST['addm']))
    {
      $_SESSION['in_id']=$_POST['addm'];
      header("location: /jvn/public/user/insertmem");
    }
    else
      $this->searchfamily();
  }

  public function changepassword ()
  {
    $this->usercheck();
    if(isset($_POST['sub']))
    {
    $this->message=$this->users->dbchangepassword($_POST['username'],$_POST['password'],$_POST['new']);
    $this->view('changepasswordu',['message'=>$this->message]);
    }
    else
    $this->view('changepasswordu',['message'=>$this->message]);
  }


  public function insert()
  {
      if(isset($_POST['sub']))
        {
    	     $id=$_POST['dc']."/".$_POST['panchayath']."/".$_POST['ward']."/".$_POST['house_number'];
  	       $_SESSION['in_id']=$id;
    	     if($_POST['phone_number1']!='')
                 $this->phoneno->dbinsert($id,$_POST['phone_number1']);
           if($_POST['phone_number2']!='')
                 $this->phoneno->dbinsert($id,$_POST['phone_number2']);

            if($_POST['family_income']=='')
    		          $family_income=0;
            else
                $family_income=$_POST['family_income'];

           if($_POST['if_any']=="Government")
    		      {
                if($_POST['govt_insurance_no']!='')
                  $this->insurance->dbinsert($id,$_POST['govt_insurance_no']);
              }

            $religion=$_POST['religion'];
            if($_POST['religion']=="other")
              {
                if($_POST['otherreli']!='')
                  $religion=$_POST['otherreli'];
              }

            $house_type=$_POST['house_category'];
            if($_POST['house_category']=="others")
            {
              if($_POST['hcother']!='')
                $house_type=$_POST['hcother'];
            }

            $drinking_water=$_POST['drinking_water'];
            if($drinking_water=="public pipes")
            {
              if($_POST['ppnm']!='')
              $drinking_water="public pipes :".$_POST['ppnm'];
            }


            $cooking_oil=$_POST['cooking_oil'];
            if($cooking_oil=="other")
            {
              if($_POST['coother']!='')
              $cooking_oil=$_POST['coother'];
            }

            $result=$this->house->dbinsert($id,$_POST['phc'], $_POST['public_health_block_number'],$_POST['public_health_house_number'],$_POST['house_name'],$religion,$_POST['caste'],$_POST['castec'], $house_type, $_POST['house'],$_POST['electricity'],$_POST['toilet'],  $family_income, $_POST['if_any'],$_POST['ration_card_no'], $drinking_water,$cooking_oil);
            if($result)
            $this->view('insert1',['message'=>"Data Successfully Saved"]);
            else
            $this->view('insert1',['message'=>"Data Not Saved(Family Already Exist)"]);
    }
    else
     $this->view('insert1');
  }

public function removefamily()
{
  if(isset($_POST['addm']))
  {
    $row=$this->member->getallfid($_POST['addm']);
    foreach( $row as $row):
      $this->deletemember($row['fid']);
    endforeach;
    $this->house->dbdelete ($_POST['addm']);
    $this->phoneno->dbdelete($_POST['addm']);
    $this->insurance->dbdelete($_POST['addm']);
  }
  else
  $this->searchfamily();
}

public function deletemember($fid)
{
  $row=$this->member->dbviewselectedfid($fid);

   if($row['marital_status']==1)
    $this->marital->dbdelete($fid);

   if($row['h_smoking']==1)
    $this->smoking->dbdelete($fid);

   if($row['h_betel_quid']==1)
    $this->betel->dbdelete($fid);

   if($row['h_pan_parag']==1)
    $this->panparag->dbdelete($fid);

   if($row['h_alcohol']==1)
    $this->alcohol->dbdelete($fid);

   if($row['gender']=='f')
   {
     $frow=$this->female->dbviewselected($fid);

     if($frow['abortion_history']==1)
     $this->abortion->dbdelete($fid);

     if($frow['whether_uterus_removed']==1)
     $this->uterus_removed->dbdelete($fid);

     if($frow['breast_colorchange_lump_rash']==1)
     $this->breast_colorchange->dbdelete($fid);

     if($frow['breast_feeding']==1)
     $this->breast_feeding->dbdelete($fid);

     if($frow['family_history_cancer_heart_kidney_diseases']==1)
     $this->family_history->dbdelete($fid);

     if($frow['uterus_cancer_tested']==1)
     $this->uteruscancertested->dbdelete($fid);

     $this->female->dbdelete($fid);
   }

  $hrow=$this->health->dbviewselected($fid);

  if($hrow['common_disease']==1)
  {
    $crow=$this->common->dbviewselected($fid);
    if($crow['operation_history']==1)
    $this->operation->dbdelete($fid);

    if($crow['chemotherapy_xray_radiation_mammography']==1)
    $this->chemotherapy->dbdelete($fid);

    $this->common->dbdelete($fid);
  }

  if($hrow['medicines_intaking']==1)
    $this->medicines->dbdelete($fid);

  $this->health->dbdelete($fid);

  $chr=$this->children->dbviewselected($fid);

  if($chr['hepatitis']==1)
  $this->hepatitis->dbdelete($fid);
  if($chr['heart_disease']==1)
    $this->heart->dbdelete($fid);
  if($chr['other_disease']==1)
    $this->other->dbdelete($fid);

  $this->children->dbdelete($fid);

  if($row['disability']==1)
    $this->disability->dbdelete($fid);

  $this->member->dbdelete($fid);
  $this->food->dbdelete($fid);
  $this->screening->dbdelete($fid);
}
public function removemember()
{
  if(isset($_POST['viewall']))
  {
    $this->deletemember($_POST['viewall']);
    $this->view('search',['msg'=>"Member Removed"]);
  }
  else
  $this->search();
}

public function insertmem()
{
  $id=$_SESSION['in_id'];
  if(isset($_POST['sub']))
  {

    $fid=$this->house->dbviewselectfid($id);
    $fid=$fid.$_POST['name']."/".$_POST['age'];

    $aadhar_no=$_POST['aadhar_no'];
  	if($_POST['aadhar_no']=='')
  		$aadhar_no=0;

      $this->member->dbinsert($id, $fid, $aadhar_no,$_POST['name'], $_POST['age'],$_POST['dob'], $_POST['gender'], $_POST['relationship_head_family'], $_POST ['martial_status'],$_POST['education_qualification'],$_POST['occupation'], $_POST['h_smoking'],  $_POST['h_betle_quid'],$_POST['h_pan_parag'], $_POST['h_alcohol'],$_POST['disability']);

  	  if($_POST['disability']==1)
      {
          if($_POST['disabilities']!='')
          $this->disability->dbinsert($fid,$_POST['disabilities']);
      }

      if($_POST['martial_status']==1)
      {
            $age_when_married=$_POST['age_when_married'];
          if($age_when_married=='')
            $age_when_married=0;

          $this->marital->dbinsert($fid,$age_when_married,$_POST['blood_relationship']);
      }

      if($_POST['h_smoking']==1)
        {
            $started_age=$_POST['sstarted_age'];
           if($_POST['sstarted_age']=='')
            $started_age=0;

            $usage_duration=$_POST['susage_duration'];
          if($_POST['susage_duration']=='')
            $usage_duration=0;

            $usage_per_day=$_POST['susage_per_day'];
  	      if($_POST['susage_per_day']=='')
            $usage_per_day=0;

          $this->smoking->dbinsert($fid,$started_age, $usage_duration, $usage_per_day );
        }

      if($_POST['h_betle_quid']==1)
      {
          $started_age=$_POST['bstarted_age'];
  	     if($_POST['bstarted_age']=='')
          $started_age=0;

          $usage_duration=$_POST['busage_duration'];
         if($_POST['busage_duration']=='')
           $usage_duration=0;

  		    $usage_per_day=$_POST['busage_per_day'];
  	    if($_POST['busage_per_day']=='')
          $usage_per_day=0;

        $this->betel->dbinsert($fid, $started_age, $usage_duration, $usage_per_day);
      }

      if($_POST['h_alcohol']==1)
      {
            $started_age=$_POST['aage_started'];
          if($_POST['aage_started']=='')
      		  $started_age=0;

            $usage_duration=$_POST['ausage_duration'];
          if($_POST['ausage_duration']=='')
      		  $usage_duration=0;

          $this->alcohol->dbinsert($fid, $_POST['alctype'], $started_age, $usage_duration);
      }

      if($_POST['h_pan_parag']==1)
      {
            $started_age=$_POST['pstarted_age'];
          if($_POST['pstarted_age']=='')
      		  $started_age=0;

            $usage_duration=$_POST['pusage_duration'];
          if($_POST['pusage_duration']=='')
      		  $usage_duration=0;

          $this->panparag->dbinsert($fid,$started_age, $usage_duration,$_POST['drug_usage']);
      }

      $this->food->dbinsert($fid,$_POST['vegetarian'],$_POST['non_vegetarian'],$_POST['fruits_usage'],$_POST['fried_roasted_usage'], $_POST['dried_fish']);
      $this->health->dbinsert($fid, $_POST['diabetes'],$_POST['blood_pressure'],$_POST['paralysis_cva'],$_POST['asthma'],$_POST['cough'],$_POST['acidity'],$_POST['heart_diseasey'],$_POST['cholestrol'],$_POST['tuberculosis'],$_POST['thyroid'],$_POST['arthiritis'],$_POST['liver_diseases'],$_POST['common_disease'],$_POST['other_diseasey'],$_POST['medicines_intaking']);

      if($_POST['medicines_intaking']==1)
      {
        if($_POST['medicine_description']!='')
        $this->medicines->dbinsert($fid,$_POST['medicine_description']);
      }


      if($_POST['common_disease']==1)
      {
         $mouth_ulcers=$_POST['mouth_ulcers'].'/'.$_POST['mouth_ulcers1'].'/'.$_POST['mouth_ulcers2'];

         $this->common->dbinsert($fid, $mouth_ulcers, $_POST['oral_treatment_history'], $_POST['tooth_pain'], $_POST['bleeding_in_the_mouth'],$_POST['neck_tumour'], $_POST['tonsil_inflamation'],$_POST['mouth_widen_difficult'],$_POST['dysphagia'],$_POST['dysphonia'],$_POST['regular_abdominal_pain'],$_POST['haematochezia'],$_POST['haematuria'],$_POST['dysuria'],$_POST['doctor_consultancy'],$_POST['biopsy_date'],$_POST['operation_history'],$_POST['chemotherapy_xray_radiation_mammography'],$_POST['dome_lump'],$_POST['non_healing_wounds'], $_POST['quick_growing_moles']);

         if($_POST['details']!='')
         $this->operation->dbinsert($fid,$_POST['details']);

         if($_POST['details1']!='')
         $this->chemotherapy->dbinsert($fid,$_POST['details1']);
      }

      if($_POST['age']<16)
      {
        $this->children-> dbinsert($fid,$_POST['regular_fever'], $_POST['anemia'],$_POST['heart_disease'], $_POST['hepatitis'],$_POST['other_disease']);

          if($_POST['heart_disease']==1)
          {
            if($_POST['h_description']!='')
            $this->heart->dbinsert($fid,$_POST['h_description']);
          }

          if($_POST['other_disease']==1)
          {
            if($_POST['odisease']!='')
            $this->other->dbinsert($fid,$_POST['odisease'],$_POST['od_description']);
          }

          if($_POST['hepatitis']==1)
          {
            $times=$_POST['htimes'];
            if($times=='')
            $times=-1;
            $this->hepatitis->dbinsert($fid,$_POST['htype'], $times);
          }
      }

      $this->screening-> dbinsert($fid,$_POST['screening_camp_place'],$_POST['date'], $_POST['height'],$_POST['weight'],$_POST['bmi'],$_POST['bp'],$_POST['rbs'],$_POST['fbs'], $_POST['cholestrol']);

      if($_POST['gender']=="f")
      {
      $this->female->dbinsert($fid,$_POST['menstruation_started_age'], $_POST['regular_menstruation'],$_POST['menupause_age'], $_POST['age_first_delivery'],
       $_POST['no_children'],$_POST['no_pregnancy'],$_POST['use_of_contraceptives'],$_POST['abortion_history'], $_POST['whether_uterus_removed'],
       $_POST['uterus_disease'],$_POST['retracted_nipple'], $_POST['leucorrhoea'],$_POST['irregular_blood_bleeding'],
       $_POST['blood_bleeding_after_intercourse'], $_POST['blood_bleeding_after_menupause'],$_POST['other_diseases_pubic_place'],
      $_POST['utreus_cancer_tested'],$_POST['consuption_medicine_veneral_disease'], $_POST['consuption_medicine_infertility'],
      $_POST['breast_feeding'],$_POST['breast_operation_history'],$_POST['breast_radiation_history'],$_POST['breast_color_change_lumps_or_rashes'],
      $_POST['family_hist']);

      if($_POST['abortion_history']==1)
      {
        if($_POST['abcount']!=0)
         $this->abortion->dbinsert($fid,$_POST['abcount']);
      }

      if($_POST['whether_uterus_removed']==1)
      {
        if($_POST['utrereason']!='')
        $this->uterus_removed->dbinsert($fid,$_POST['utrereason']);
      }

      if($_POST['utreus_cancer_tested']==1)
      {
        if($_POST['uctresult']!='')
        $this->uteruscancertested->dbinsert($fid,$_POST['uctdate'],$_POST['uctresult']);

      }

      if($_POST['breast_feeding']==1)
      {
        if($_POST['bfduration']!=0)
        $this->breast_feeding->dbinsert($fid,$_POST['bfduration']);
      }

      if($_POST['breast_color_change_lumps_or_rashes']==1)
      {
        if($_POST['bcclrdate']!='')
        $this->breast_colorchange->dbinsert($fid,$_POST['bcclrdate']);
      }
      if($_POST['family_hist']==1)
      {
        if($_POST['fhdesc']!='')
        $this->family_history->dbinsert($fid,$_POST['fhdesc']);
      }
      }
      $this->view('insertmember');
  }

  $this->view('insertmember',['family'=>explode('/',$id)]);
}


}
  ?>
