<?php

function orderMail($id){
			global $g_db; 
			global $prod_size;
			global $prod_color;
			
			$sqlstr = "select * from ordermain where serno='".$id."'";
			$OData  = $g_db->getRow($sqlstr);
			
			/*$sqlstr = "select * from order_paytype where serno='".$OData['paytype']."'";
			$payData= $g_db->getRow($sqlstr);
			$paytype= $payData['name'];*/
			
			$paytype = $OData['paytype'];
			
			$TotalPrice = $OData['total'];
			$name       = $OData['receiver_name'];
			$mail       = $OData['receiver_email'];
			$ShipFee    = $OData['shipfee'];
			$bonus_sum  = $OData['bonus_get'];
			$use_bonus  = $OData['bonus_use'];
			$orderno    = $OData['order_no'];
			
			//訂單明細
			$sqlstr = "select * from orderlist where order_no='".$OData['order_no']."'";
			$ODlist = $g_db->getAll($sqlstr);
			$disct=0;
			for($i=0;$i<count($ODlist);$i++){
				$prodname = $ODlist[$i]['prodname'];
				$prodname.=($ODlist[$i]['color']!="" && $ODlist[$i]['color']!="單一顏色")?" 顏色：".$prod_color[$ODlist[$i]['color']]['name']."":"";
				$prodname.=($ODlist[$i]['size']!="" && $ODlist[$i]['size']!="單一尺寸")?" 尺寸：".$prod_size[$ODlist[$i]['size']]['name']."":"";
				$qty=$ODlist[$i]['qty'];
				$price=$ODlist[$i]['price'];
				
				$money=$ODlist[$i]['qty']*$ODlist[$i]['price'];
				if($ODlist[$i]['disct_vip']=="Y"){
					$vip=($money)-intval($ODlist[$i]['disct_coupon']);
					$vip=number_format($vip-round($vip*0.95));
					$disct+=$vip;
					$money-=$vip;
				}else{
					$money-=($ODlist[$i]['disct_birth']=='Y')?300:0;
					$money-=$ODlist[$i]['disct_coupon'];
					$money-=$ODlist[$i]['disct_other'];
					$disct+=$ODlist[$i]['disct_coupon']+$ODlist[$i]['disct_other'];
					$disct+=($ODlist[$i]['disct_birth']=='Y')?300:0;
				}
				
				if($ODlist[$i]['ordertype']=="MAIN"){
					$email_list .= "<tr><td align=\"left\">".$prodname."</td><td align=\"center\">".$qty."</td><td align=\"center\">".$price."</td><td align=\"center\">".round($price * $qty)."</td></tr>";
				}else{
					$email_list .= "<tr><td align=\"left\">&nbsp;&nbsp;-".$prodname."</td><td align=\"center\">".$qty."</td><td align=\"center\">".$price."</td><td align=\"center\">".round($price * $qty)."</td></tr>";
				}
			}
		
			/////寄信給會員	  
			$message = "<html><head><title>HAIR 美髮網</title></head><meta http-equiv=Content-Type content='text/html; charset=utf-8'><body>";
		
			$message .= "親愛的 ".$name."︰<br>";
			$message .= "<br>";
			$message .= "感謝您完成【hair美髮網】訂購程序，您的訂單已完成！ <br>";
			$message .= "訂單編號：".$orderno."<br>";
			$message .= "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">";
			$message .= "<tr><th align=\"center\">商品名稱</th><th align=\"center\" width=\"50\">數量</th><th align=\"center\" width=\"50\">單價</th><th align=\"center\" width=\"50\">合計</th></tr>";
			$message .= $email_list;
			$message .= $GiftTR;
			$message .= "<tr><td colspan=\"3\" align=\"right\">折扣：</td><td align=\"center\">-".$disct."元</td></tr>";
			$message .= "<tr><td colspan=\"3\" align=\"right\">運費：</td><td align=\"center\">".$ShipFee."元</td></tr>";
			$message .= "<tr><td colspan=\"3\" align=\"right\">總計：</td><td align=\"center\">".$TotalPrice."元</td></tr>";
			//$message .= "<tr><td colspan=\"3\" align=\"right\">本次獲得紅利：</td><td align=\"center\">".$bonus_sum."點</td></tr>";
			$message .= "</table>";
			$message .= "<br>";
		
			$message .= "交易流程：<br />";
			$message .= "付款方式：<br />";
			$message .= "１.貨到付款：訂單完成請留意宅配人員抵達，貨到付款即可收取商品。<br />";
			$message .= "２.<span style=\"color: #ff0000\">ＡＴＭ轉帳</span>：銀行代碼：<strong>【822】</strong>。（中國信託）轉帳帳號：<strong>【4175 4027 0543】</strong>。<br />";
			$message .= "※<span style=\"color: #ff0000\">會員轉帳完成後請進入<a href=\"http://www.hair.com.tw/sign3.php\">會員中心</a>回填帳號末五碼，即可完成資料核對程序。</span><br />";
			$message .= "※<span style=\"color: #ff0000\">非會員選擇ATM轉帳付款完成後，請來電客服告知帳號資訊。</span><br />";
			$message .= "３.貨到刷卡：商品將由<span style=\"color: #0000ff\">黑貓宅急便專員</span>於送貨抵達同使進行實體刷卡付款服務。<br />";
			$message .= "<span style=\"color: #808080\">「貨到刷卡黑貓宅急便將另收取手續費用3.5% (未達45元以45元計)」</span><br />";
			$message .= "<span style=\"color: #ff0000\">（此部分金額為黑貓宅急便收取並無法納入訂單計算）</span><br /><br />";
			$message .= "<br /><br />";
			$message .= "任何付款、配送、產品問題等，歡迎您直接來電客服專線（０２）２２７２－１０００<br />";
			$message .= "感謝您的選購【hair美髮網】祝福您購物愉快！<br /><br />";
			$message .= "<center><a href=\"http://www.hair.com.tw/payment.php\">付款機制</a> <a href=\"http://www.hair.com.tw/logisticst.php\">物流機制</a> <a href=\"http://www.hair.com.tw/sign3.php\">會員中心</a> <a href=\"http://www.hair.com.tw/warranty.php\">保固系統</a> <a href=\"http://www.hair.com.tw/recantation.php\">線上報修</a> <a href=\"http://www.hair.com.tw/faq.php\">常見問題</a> <a href=\"http://www.hair.com.tw/sar.php\">退換貨說明</a></center><br>";
			$message .= "<center>Copyright © 2009~".date("Y")." HAIR 美髮網 All rights reserved. 訂購專線：（02）2272-1000</center>";
		
			$subject = "美髮網購物成功通知";
		
			/* To send HTML mail, you can set the Content-type header. */
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=UTF-8\r\n";
		
			/* additional headers */
			$headers .= "From: HAIR<hair@hair.com.tw>\r\n";
			$to = $mail;
		
			// 寄出信
			$ch = curl_init();
		
			$urlstr = "http://project.y5works.com/mailto.phtml";
			$curlPost = "message=".$message."&subject=".$subject."&headers=".$headers."&to=".$to;
		
			curl_setopt($ch, CURLOPT_URL, $urlstr);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			$returncode = curl_exec($ch);
			curl_close($ch);
			/////end
}

function OrderSMS($id){
	global $g_db; 
	
	
	$sqlstr = "select * from ordermain where serno='".$id."'";
	$OData  = $g_db->getRow($sqlstr);
	
	$TotalPrice = $OData['total'];
	$paytype    = $OData['payment_type'];
	// 發送簡訊
	$SMSmobile  = SysDataDecode('phone',$OData['receiver_mobile'],4,mb_strlen($OData['receiver_mobile']));  // 手機號碼
	$SMSsubject = "訂購完成通知";    // 發送主旨
	
	switch($paytype){
		case "線上刷卡":
			$SMScontent = "感謝您完成線上刷卡付款，您的付款金額為:{".$TotalPrice."}元，我們將立即處理您的訂單，<hair美髮網>感謝您的選購！";
		break;
		case "ATM":
		case "ATM轉帳":
			$SMScontent = "感謝您選擇ATM轉帳付款，您的訂單金額為:{".$TotalPrice."}元，轉帳銀行代號:822匯款帳號:4175-4027-0543轉帳完成請上網回填末五碼或電話通知客服02-29642000，<hair美髮網>感謝您的選購！";    	
		break;
		case "貨到付款":
		case "貨到刷卡":
			$SMScontent = "美髮網感謝您的選購，您的訂單金額為:{".$TotalPrice."}元，我們將盡速為您出貨，<hair美髮網>感謝您！";    	 
		break;
		default:
			$SMScontent = "美髮網感謝您的選購，您的訂單金額為:{".$TotalPrice."}元，我們將盡速為您出貨，<hair美髮網>感謝您！";    	 
	}

	$login_wsdl = "http://tw.every8d.com/API20/Security.asmx?wsdl";
    $sms_wsdl = "http://tw.every8d.com/API20/Message.asmx?wsdl";
	
	$custID ="av8d20";   //請勿更改
    $userID="25196332";  //您的EVERY8D帳號 
    $password="K9Q76W"; //您的EVERY8D密碼
    $client = new SoapClient($login_wsdl);
    // login
    $params = array("custID"=>$custID,"userID"=>$userID,"password"=>$password,"APIType"=>"","version"=>""); 
    $objResult =$client->Login($params);
    $xmlstr= $objResult->LoginResult;

    $xml = new SimpleXMLElement($xmlstr);

	if ($xml->ERROR_CODE !="0000"){    
    	  return false;
    }
    
	// send sms
    $UserNo = $xml->USER_NO;      //從登入結果取得UserNo
    $CompanyNo = $xml->COMPANY_NO; //從登入結果取得Company_No
    $Credit = $xml->CREDIT;        //從登入結果取得目前剩餘額度
    $SMSsubject = $SMSsubject;   //發送主旨
    $SMScontent = $SMScontent;  //發送內容

    $SMSmobile = $SMSmobile;
    $SMSemail = "nsspao1@yahoo.com.tw";  //發送email位置
    $sendTime= "";  //發送時間
    
    $sms_xml =	'<REPS>';
    $sms_xml .=		'<IP></IP>';
    $sms_xml .=		'<CARD_NO/>';
    $sms_xml .=		'<USER NAME="" MOBILE="'.$SMSmobile.'" EMAIL="'.$SMSemail.'" SENDTIME="'.$sendTime.'" PARAM=""/>';
    $sms_xml .=	'</REPS>';



    $params_sms = array("custID"=>$custID,
    			"CompanyNo"=>$CompanyNo,
    			"userNo"=>$UserNo,
    			"sendtype"=>"110",
    			"msgCategory"=>"10",
    			"subject"=>$SMSsubject,
    			"content"=>$SMScontent,
    			"image"=>"",
    			"Audio"=>"",
    			"xml"=>$sms_xml,
    			"batchID"=>"",
    			"certified"=>"");

    $sms_Service = new SoapClient($sms_wsdl);		
    $sendResult = $sms_Service->QueueIn($params_sms);
    $sendResultStr = $sendResult->QueueInResult;

}
//隨機密碼
function gen_passw($len = 5) {

	$ranges = array
	
	(       
			1 => array(97, 122), // a-z (lowercase)
			2 => array(65, 90), // A-Z (uppercase)
			3 => array(48, 57) // 0-9 (numeral)
	
	);

	$passw = "";

	for ($i=0; $i<$len; $i++)
	{
			$r = mt_rand(1,count($ranges));
			$passw .= chr(mt_rand($ranges[$r][0], $ranges[$r][1]));
	}

	return $passw;
}

?>