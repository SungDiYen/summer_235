<?php
require_once '../config.php';

$vote_id = intval($_GET["id"]);

$start_time = strtotime(date("2016-06-01"));
$check_time = strtotime(date("2016-07-10"));
$now = strtotime(date("Y-m-d"));

$BackUrl = "voting.php";

$NowTime = date("Y-m-d");
$result = array();

if($now < $start_time){
	$result['status'] = false;
	$result['msg'] = urlencode("投票活動尚未開始");
}elseif($now > $check_time){
	$result['status'] = false;
	$result['msg'] = urlencode("投票活動已結束");
}else{

	require './php_sdk3/src/facebook.php';
	$facebook = new Facebook(array(
	  'appId'  => '779494118753287',
	  'secret' => 'd4e3aeee41be8934118b7d666e658c0f',
	  'cookie' => true,
	));
	//$session = $facebook->getSession();
	$login_url = $facebook->getLoginUrl(array(
	    'fbconnect' => 0,
	    'canvas' => 1,
	    'req_perms' => 'email',
	    'scope' => 'email',
	    'next' => 'http://taipei2015postevent.com.tw/vote_action.php?id='.$vote_id,
	    'redirect_uri' => 'http://taipei2015postevent.com.tw/vote_action.php?id='.$vote_id,
	));
	$uid = $facebook->getUser();
	
	if(!empty($uid)){
		$user_profile = $facebook->api('/me?fields=email,name','GET');
		$user_id = $user_profile['id'];
		$user_name = $user_profile['name'];
		$user_email = $user_profile['email'];
		$sqlstr = "select * from ".Table_VoteLog." where user_id = '".$user_id."' and DATE_FORMAT(vote_date,'%Y-%m-%d')='".$NowTime."'";
		if($g_db->numRows($g_db->query($sqlstr)) <5){
			$sqlstr = "select * from ".Table_VoteLog." where user_id = '".$user_id."' and DATE_FORMAT(vote_date,'%Y-%m-%d')='".$NowTime."' and vote_id='".$vote_id."'";
			if($g_db->numRows($g_db->query($sqlstr)) == 0){
				
				$updSql = "update ".Table_Movie." set votes = votes +1 where movie_list_id='".$vote_id."'";
				$g_db->query($updSql);
				
				$data = array();
				$data['vote_id'] = mysql_real_escape_string($vote_id);
				$data['vote_date'] = date("Y-m-d H:i:s");
				$data['user_id'] = mysql_real_escape_string($user_id);
				$data['user_name'] = mysql_real_escape_string($user_name);
				$data['user_email'] = mysql_real_escape_string($user_email);
				$data['vote_ip']    = get_client_ip();
				
				$g_db->create(Table_VoteLog,$data);
				
				
				$result['status'] = true;
				$result['msg'] = urlencode("投票成功");
				
			}else{
				$result['status'] = false;
				$result['msg'] = urlencode("今日已完成本項目投票");
			}
		}else{
			$result['status'] = false;
			$result['msg'] = urlencode("今日已完成五次投票");
		}
		
	}else{
		$result['status'] = false;
		$result['msg'] = "login";
	}
}
?>