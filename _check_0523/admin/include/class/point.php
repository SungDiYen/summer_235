<?php

	class Point{
	
		public $TimeLimit;
		 
		public function __construct(){
			
			$this->TimeLimit   = false ;
		} 

		//新增點數
		function add_point($_member_id, $_get_point, $_startdate, $_enddate, $_type , $_orderno, $_creator = 0, $_note = ''){

			global $g_db;

			if($_member_id == "" || ($_get_point * 1) <= 0)
				return false;

			$data_history['member_id']   = $_member_id;
			$data_history['history_ids'] = "";
			$data_history['order_no']    = $_orderno;
			$data_history['point']       = $_get_point * 1;
			$data_history['type']        = $_type;
			$data_history['creator']     = $_creator;
			$data_history['note']        = $_note;
			$data_history['bdate']       = date("Y-m-d H:i:s");

			$PointHistoryID = $g_db->create(Table_Point_History, $data_history);

			$data_pointlist['member_id']   = $_member_id;
			$data_pointlist['history_id']  = $PointHistoryID;
			$data_pointlist['point_ori']   = $_get_point;
			$data_pointlist['point_last']  = $_get_point;
			$data_pointlist['start_date']  = $_startdate;
			$data_pointlist['end_date']    = $_enddate;
			$data_pointlist['useable']     = "Y";
			$data_pointlist['bdate']       = date("Y-m-d H:i:s");

			$g_db->create(Table_Point_List, $data_pointlist);

			return true;

		}
		//修改點數
		function upd_point($_member_id, $_get_point, $_startdate, $_enddate, $_type , $_orderno, $_creator = 0){
			
			global $g_db;
			
			$sqlstr  = "select * from ".Table_Point_History." where order_no='".$_orderno."' and member_id='".$_member_id."' and type ='".$_type."'";
			$OriData = $g_db->getRow($sqlstr);
			
			if($OriData['serno'] != ""){
				$data_history['point']       = $_get_point * 1;
				$data_history['upd_time']    =date('Y-m-d H:i:s');
				$data_history['upd_man']     = $_creator;
				
				$g_db->update(Table_Point_History,$data_history,'serno',$OriData['serno']);
				
				$data_pointlist['point_ori']   = $_get_point;
				$data_pointlist['point_last']  = $_get_point;
				$data_pointlist['upd_time']    = date('Y-m-d H:i:s');
				$data_pointlist['upd_man']     = $_creator;
				
				$g_db->update(Table_Point_List,$data_pointlist,'history_id',$OriData['serno']);
				
			}
			return true;
		}
		//使用點數
		function use_point($_member_id, $_use_point, $_type, $_orderno = "", $_creator = 0, $_note = ""){

			global $g_db;

			if($_member_id == "" || $_use_point <= 0)
				return false;

			//檢查A幣是否足夠
			$sqlstr = "SELECT sum(`point_last`) FROM `".Table_Point_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' ";
			if($this->TimeLimit) $sqlstr.=" and `start_date` <= '".date("Y-m-d H:i:s")."' and `end_date` > '".date("Y-m-d H:i:s")."'";
			$sqlstr .= " ORDER BY `serno`";
			$PointSum = $g_db->getOne($sqlstr);
			if($PointSum < $_use_point)
				return false;

			//取得AP列表
			$sqlstr = "SELECT `serno`,`point_last` FROM `".Table_Point_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y'  ";
			if($this->TimeLimit) $sqlstr.=" and `start_date` <= '".date("Y-m-d H:i:s")."' and `end_date` > '".date("Y-m-d H:i:s")."'";
			$sqlstr .= " ORDER BY `end_date`,`serno`";
			$PointDataList = $g_db->getAll($sqlstr);

			$PointList = "";
			foreach($PointDataList as $value){
				$PointList[ ($value['serno']) ]['point']     = $value['point_last'];
				$PointList[ ($value['serno']) ]['point_use'] = 0;
			}

			//計算扣除AP
			$PointLast = $_use_point;
			foreach($PointList as $PointID => $value){
				if($PointLast > 0){
					if($PointLast > $PointList[$PointID]['point']){
						$PointList[$PointID]['point_use'] = $PointList[$PointID]['point'];
						$PointLast -= $PointList[$PointID]['point'];
					}else{
						$PointList[$PointID]['point_use'] = $PointLast;
						$PointLast = 0;
						break;
					}
				}
			}

			$PointUseList = array();
			foreach($PointList as $PointID => $value){

				if($value['point_use'] > 0){

					$data_last = "";
					$data_last['point_last'] = $value['point'] - $value['point_use'];
					$data_last['use_date']   = date("Y-m-d H:i:s");

					$g_db->update(Table_Point_List,$data_last,"serno",$PointID);

					array_push($PointUseList,$PointID);

				}

			}

			$data_pointuse = "";
			$data_pointuse['member_id']   = $_member_id;
			$data_pointuse['history_ids'] = json_encode($PointUseList);
			$data_pointuse['point']       = $_use_point * -1;
			$data_pointuse['type']        = $_type;
			$data_pointuse['creator']     = $_creator;
			$data_pointuse['note']        = $_note;
			if($_orderno != "") $data_pointuse['order_no']    = $_orderno;
			$data_pointuse['bdate']       = date("Y-m-d H:i:s");

			$g_db->create(Table_Point_History,$data_pointuse);

			return true;

		}

		//搜尋現有點數
		function search_point($_member_id){

			global $g_db;

			if($_member_id == "")
				return 0;

			$sqlstr = "SELECT sum(`point_last`) FROM `".Table_Point_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' ";
			
			if($this->TimeLimit) $sqlstr.=" and `start_date` <= '".date("Y-m-d H:i:s")."' and `end_date` > '".date("Y-m-d H:i:s")."'";
			
			$PointSum = $g_db->getOne($sqlstr);

			return $PointSum * 1;

		}

		//搜尋未進帳點數
		function search_point_wait($_member_id){

			global $g_db;

			if($_member_id == "")
				return 0;

			$sqlstr = "SELECT sum(`point_last`) FROM `".Table_Point_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `start_date` > '".date("Y-m-d H:i:s")."'";
			$PointSum = $g_db->getOne($sqlstr);

			return $PointSum * 1;

		}
		
		//搜尋點數歷史記錄筆數
		function search_pont_history_num($_member_id){
			global $g_db;

			if($_member_id == "")
				return 0;
			
			$sqlstr = "SELECT count(serno) FROM `".Table_Point_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' ";
			$DataSum = $g_db->getOne($sqlstr);
			
			return $DataSum * 1;
			
		}
		
		//搜尋點數歷史記錄
		function search_pont_history($_member_id,$_startNO,$_limitNum){
			global $g_db;

			if($_member_id == "")
				return 0;
				
			$sqlstr   = "SELECT * FROM `".Table_Point_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' order by serno limit ".$_startNO.",".$_limitNum."";
			$DataList = $g_db->getAll($sqlstr);
			
			return $DataList;
			
			
		}
		
		//搜尋天數內即將過期的點數
		function search_expire_in_day($_member_id, $_day){

			global $g_db;

			if($_member_id == "" || $_member_id <= 0)
				return 0;

			$sqlstr = "SELECT `end_date`,`point_last` FROM `".Table_Point_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `point_last` > 0 and `end_date` < '".date("Y-m-d H:i:s",mktime(0,0,0,date("m"),date("d")+$_day,date("Y")))."' ORDER BY `end_date`";
			if($g_db->numRows($g_db->query($sqlstr)) > 0){

				$PointDataTemp = $g_db->getRow($sqlstr);

				$sqlstr = "SELECT SUM(`point_last`) FROM `".Table_Point_List."` WHERE `member_id` = '".$_member_id."' and `useable` = 'Y' and `point_last` > 0 and `end_date` like '".substr($PointDataTemp['end_date'],0,10)."%'";
				$PointLast = $g_db->getOne($sqlstr);

				$PointData['point']  = $PointLast * 1;
				$PointData['date']   = $PointDataTemp['end_date'];

				return $PointData;

			}else{

				return false;

			}

		}

	}

?>