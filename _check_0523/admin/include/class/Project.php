<?php

	class Project{
	
		
		 
		public function __construct(){
			
			
		} 

		function pair_first($pid){
			global $g_db;
			//案件資料
			$sqlstr = "select * from ".Table_Project." where serno='".intval($pid)."'";
			$PData  = $g_db->getRow($sqlstr);
			
			$projdate = substr($PData['workstart'],0,10);
			//專員資料統計
			$sqlstr = "select count(*) num,jobtype_id from ".Table_ProjectItem." where projectserno='".intval($pid)."' group by jobtype_id";
			$NData  = $g_db->getAll($sqlstr);
			
			//Step1 團體分
			$sqlstr = "select * from doctor_group where 1=1";
			$Team   = $g_db->getAll($sqlstr);
			$PairStatus = false;
			foreach($Team as $key => $val){
				
				foreach($NData as $skey => $sval){
					$sqlstr = "select count(*) num  from ".Table_Doctor." where group_id='".$val['group_id']."' and doctortype='".$sval['jobtype_id']."'";
					$NTData = $g_db->getRow($sqlstr);
					
					//一樣不符合就跳下一個team
					if($NTData['num'] < $sval['num']){
						$PairStatus = false;
						break;
					}else{
						$PairStatus = true;
					}
					//找到符合的team
					if($PairStatus){
						$Team_ID = $val['group_id'];
						break;
					}
					
				}
				
			}
			//分配
			if($PairStatus){
				foreach($NData as $key => $val){
					//專案人員資料
					$sqlstr = "select * from ".Table_ProjectItem." where projectserno='".intval($pid)."' and doctorid=0 and jobtype_id='".$val['jobtype_id']."' order by serno";
					$Item   = $g_db->getAll($sqlstr);
					//團隊人員資料
					$sqlstr = "select * from ".Table_Doctor." where group_id='".$Team_ID."' and  doctortype='".$val['jobtype_id']."'";
					$Doctor = $g_db->getAll($sqlstr);
					
					for($i = 0 ;$i<count($Item);$i++){
						if($Doctor[$i]['serno']!=""){
							$upddata = array();  
							$upddata["doctortype"] = "group";
							$upddata["group_id"]   = $Team_ID;
							$upddata["doctorid"]   = $Doctor[$i]["serno"];
							$upddata["idnumber"]   = $Doctor[$i]["idnumber"];
							$upddata["status"]     = "verifing";
							$upddata["sendcount"]  = 1;
							$g_db->update( "projectitem", $upddata, "serno", $Item[$i]['serno'] );
						}
					}
				
				}
			}
			//--------------------------------------------------------------------//
			//Step 2我的最愛 & 隨機
			//專案人員資料
			$sqlstr = "select * from ".Table_ProjectItem." where projectserno='".intval($pid)."' and doctorid=0 order by serno";
			$Item   = $g_db->getAll($sqlstr);
			
			foreach($Item as $key => $val){
				$sqlstr = "select f.*,d.serno doctorid from ".Table_Hosfavor." f inner join ".Table_Doctor." d on f.idnumber = d.idnumber where f.hospitalid='".$PData['hospitalid']."' and d.doctortype='".$val['jobtype_id']."' limit 0,1";
				$Doctor = $g_db->getRow($sqlstr);
				
				if(!empty($Doctor['serno'])){
					$upddata = array();  
					$upddata["doctortype"] = "personal";
					$upddata["doctorid"]   = $Doctor[$i]["serno"];
					$upddata["group_id"]   = "";
					$upddata["idnumber"]   = $Doctor[$i]["idnumber"];
					$upddata["status"]     = "verifing";
					$upddata["sendcount"]  = 1;
					$g_db->update( "projectitem", $upddata, "serno", $val['serno'] );
					
				}else{
					$sqlstr = " select * from goodjoblist where 
                         (idnumber not in (select idnumber from projectitem where projectdate like '%".$projdate."%')) and
                         doctortype='".$val['jobtype_id']."' and
                         workfrom <= '".$projdate."' and workto >= '".$projdate."' order by rand() limit 0,1";  
				    $Doctor = $g_db->getRow($sqlstr);
					
					if(!empty($Doctor['serno'])){
						$upddata = array();  
						$upddata["doctortype"] = "personal";
						$upddata["doctorid"]   = $Doctor[$i]["serno"];
						$upddata["group_id"]   = "";
						$upddata["idnumber"]   = $Doctor[$i]["idnumber"];
						$upddata["status"]     = "verifing";
						$upddata["sendcount"]  = 1;
						$g_db->update( "projectitem", $upddata, "serno", $val['serno'] );
					}
					 
				}
			}
			
		}
	}

?>