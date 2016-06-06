<?

	include("include/class/mysql.php");
	include("include/class/security.php");
	require_once('tcpdf/config/lang/eng.php');
	require_once('tcpdf/tcpdf.php');

  $pdfpasswd = $_POST["ACECPW"];
  
	$billid = $_POST['billid'];
	$m_th = $_POST['m_th'];
	$sqlstr = "select * from Billing_Header_Data where BHIDNO='".$_SESSION["usercid"]."' and serno='".$billid."' and BHBLDT='".$m_th ."'";
	$result = mysql_query($sqlstr);
	$cardinfo = mysql_fetch_array($result);

  // Memo 檔文字查找
	// $sqlstr = "select * from Billing_Header_Data where BHIDNO='".$_SESSION["usercid"]."' and serno='".$billid."' and BHBLDT='".$m_th ."'";
	// $result = mysql_query($sqlstr);
	// $cardinfo = mysql_fetch_array($result);


	class MYPDF extends TCPDF {
		//Page header
		public function Header() {
			// full background image
			// store current auto-page-break status
			$bMargin = $this->getBreakMargin();
			$auto_page_break = $this->AutoPageBreak;
			$this->SetAutoPageBreak(false, 0);
			// restore auto-page-break status
			// $this->SetAutoPageBreak($auto_page_break, $bMargin);
			$this->SetFont('msungstdlight', 'B', 8);
			// Title
			$this->Cell(0, 0, $headerstr, 0, 0, 'L');
		}

		// Page footer
		public function Footer() {
			// Position at 1.5 cm from bottom
			$this->SetY(-8);
			// Set font
			$this->SetFont('msungstdlight', 'B', 8);
			// Page number
			$this->Cell(0, 0, "aeon" , 0, 0, 'C');
		}

	}
	
	// create new PDF document
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// 文件加密
  $pdf->SetProtection($permissions=array(), $user_pass=$pdfpasswd, $owner_pass=null, $mode=0, $pubkeys=null);
  
	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);


	// set header and footer fonts
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	//set margins
	// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetMargins(1, 1, 1);
	$pdf->SetHeaderMargin(0);
	$pdf->SetFooterMargin(0);

	// remove default footer
	$pdf->setPrintFooter(false);

	//set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	//set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

	//set some language-dependent strings
	$pdf->setLanguageArray($l); 

	// add a page
	$pdf->AddPage();

	// Release User's Rights For PDF reader.
	// This is required to display and fill form fields on PDF Readers.
	$pdf->setUserRights();

	//$pdf->Cell(寬, 高 , "內容"	, 框線 , 是否換行 , 對齊位置);

	$pdf->Image('images/logopdf.jpg', 0.5, 0.5, 200, 14, '', '', '', true, 150);
	//$pdf->Image('images/logopdf.jpg');

	$pdf->SetFont('msungstdlight', '', 16);

	$pdf->Cell(100, 70 , "" , 0 , 0 , "C");
	$pdf->Cell(102, 70 , "" , 0 , 1 , "C");

	$pdf->SetFont('arialunicid0','',10);
	

	//左上方 收件人資料
	//判斷是哪種卡 塗滿		■	□
	$pdf->SetXY(5.0, 12.0);
	if ($cardinfo["BHBLND"]=="V") { $pdf->write(10,"■VISA ","","0","L"); }
	else { $pdf->write(10,"□VISA ","","0","L"); }

  if ($cardinfo["BHBLND"]=="M") { $pdf->write(10,"■MC  ","","0","L"); }
	else { $pdf->write(10,"□MC  ","","0","L"); }

  if ($cardinfo["BHBLND"]=="J") { $pdf->write(10,"■JCB ","","0","L"); }
	else { $pdf->write(10,"□JCB ","","0","L"); }

	$pdf->SetXY(45.0, 12.0);

  $str1 = $m_th = $_POST['m_th'];
  $yearstr = (substr($str1,0,4)*1.0 -1911);
  $monthstr = substr($str1,4);
  $billdtravel = " 民國 {$yearstr} 年 {$monthstr} 月份";
  $pdf->SetFont('msungstdlight','',10);
	$pdf->Write(10, $billdtravel." 永旺信用卡","","0","L");

	//收件人框框
	$pdf->SetFont('msungstdlight','',12);
	$pdf->SetXY(2.0, 20.0);
	$pdf->Cell(100, 45, ""	, 0 , 1 , "C");

	$pdf->SetXY(10.0, 23.0);
	$pdf->Cell(75, 7 , $cardinfo["BHPOST"]	, 0 , 1 , "L");

	$pdf->SetXY(10.0, 28.0);
	$pdf->MultiCell(75, 7, $cardinfo["BHADD1"].$cardinfo["BHADD2"], 0, 'L', 0, 1, '', '', true);

	$pdf->SetXY(10.0, 38.0);
	$pdf->Cell(75, 7 , $cardinfo["BHNAME"]." 先生/小姐收"	, 0 , 1 , "L");

	$pdf->SetXY(10.0, 48.0);
	$pdf->write1DBarcode($cardinfo["BHBCDE"], 'C39', '', '', 50, 5, 0.3, $style, 'N');

	$pdf->SetXY(65.0, 43.0);
	$pdf->SetFont('msungstdlight','',7);
	$pdf->Write(10,$cardinfo["BHBCDE"],"","0","L");

	$pdf->SetFont('arialunicid0','',10);
	$pdf->SetFillColor(46,86,255);

	//==================右上方繳費資訊=====================
	$pdf->SetFont('msungstdlight','',10);
	$pdf->SetXY(101.0, 15.0);
	
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(25, 7 , "繳款截止日"	, 1 , 0 , "C" , 1);

	$pdf->SetTextColor(0, 0, 0);
  
     $str1 = $cardinfo['BHDUDT'];
     $billenddate = substr($str1,0,3)."年".substr($str1,3,2)."月".substr($str1,5,2)."日" ;
     if ($cardinfo['BHDUWK']==1) { $weekstr = "一"; }
     if ($cardinfo['BHDUWK']==2) { $weekstr = "二"; }
     if ($cardinfo['BHDUWK']==3) { $weekstr = "三"; }
     if ($cardinfo['BHDUWK']==4) { $weekstr = "四"; }
     if ($cardinfo['BHDUWK']==5) { $weekstr = "五"; }
     if ($cardinfo['BHDUWK']==6) { $weekstr = "六"; }
     if ($cardinfo['BHDUWK']==7) { $weekstr = "日"; }
     $billenddate .= "（星期".$weekstr."）";
  
	$pdf->Cell(75, 7 , $billenddate	, 1 , 1 , "C");

	$pdf->Cell(100, 7 , "" , 0 , 0 , "C");
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(25, 7 , "本期應繳金額"	, 1 , 0 , "C", 1);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(25, 7 , number_format($cardinfo['BHFLAT'])	, 1 , 0 , "R");
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(25, 7 , "最低應繳金額"	, 1 , 0 , "C", 1);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(25, 7 , number_format($cardinfo['BHMNAT'])	, 1 , 1 , "R");
	$pdf->Ln(1);

	//右上角第二區
	$pdf->SetFont('msungstdlight','',10);

	$pdf->Cell(100, 5 , "" , 0 , 0 , "C");
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(25, 5 , "總信用額度", 1 , 0 , "C", 1);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(25, 5 , number_format($cardinfo['BHFLLT']), 1 , 0 , "R");
	$pdf->Cell(25, 5 , "內含預借現金", 1 , 0 , "C");
	$pdf->Cell(25, 5 , number_format($cardinfo['BHCALT']), 1 , 1 , "R");

	//可用餘額
	$pdf->Cell(100, 5 , "" , 0 , 0 , "C");
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(25, 5 , "可用餘額" , 1 , 0 , "C", 1);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(25, 5 , number_format($cardinfo['BHAVCP']) , 1 , 0 , "R");
	$pdf->Cell(25, 5 , "內含預借現金" , 1 , 0 , "C");
	$pdf->Cell(25, 5 , number_format($cardinfo['BHAVCA']) , 1 , 1 , "R");

	//循環利率
	$pdf->Cell(100, 5 , "" , 0 , 0 , "C");
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(25, 5 , "循環利率" , 1 , 0 , "C", 1);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(25, 5 , number_format($cardinfo['BHRVCP']) , 1 , 0 , "R");
	$pdf->Cell(25, 5 , "適用期間" , 1 , 0 , "C");
	$pdf->Cell(25, 5 , number_format($cardinfo['BHRVTM']) , 1 , 1 , "R");

	//總分期未到期金額
	$pdf->Cell(100, 10 , "" , 0 , 0 , "C");
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(50, 10 , "總分期未到期金額" , 1 , 0 , "C", 1);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(25, 5 , "本金" , 1 , 0 , "C");
	$pdf->Cell(25, 5 , number_format($cardinfo['BHPAMT']) , 1 , 0 , "R");

	$pdf->Cell(100, 10 , ""         , 0 , 0 , "C");
	$pdf->Cell(50, 10  , ""         , 0 , 0 , "C");
	$pdf->Cell(20, 5   , "預借現金" , 1 , 0 , "C");
	$pdf->Cell(15, 5   , number_format($cardinfo['BHPVCA'])   , 1 , 1 , "C");

	$pdf->Cell(100, 10 , ""         , 0 , 0 , "C");
	$pdf->Cell(50, 10  , ""         , 0 , 0 , "C");
	$pdf->Cell(25, 5 , "手續費/利息" , 1 , 0 , "C");
	$pdf->Cell(25, 5 , number_format($cardinfo['BHPFEE']) , 1 , 1 , "R");

	$pdf->Ln(1);

	$pdf->SetFont('msungstdlight','',9);
	$pdf->Cell(100, 10 , ""  , 0 , 0 , "C");
	$pdf->SetTextColor(255, 255, 255);
	$pdf->MultiCell(10, 10, "自動\n扣繳", 1, 'C', 1, 0, '', '', true);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(15, 5 , "金融機構"   , 1 , 0 , "C");
	$pdf->Cell(30, 5 , number_format($cardinfo['BHAPBK']) , 1 , 0 , "C");
	$pdf->Cell(15, 5 , "帳戶號碼"  , 1 , 0 , "C");
	$pdf->Cell(30, 5 , number_format($cardinfo['BHAPAC']) , 1 , 1 , "C");

	
	$pdf->Cell(100, 10 , ""  , 0 , 0 , "C");
	$pdf->Cell(10, 10 , ""  , 0 , 0 , "C");
	$pdf->Cell(15, 5 , "轉帳日"   , 1 , 0 , "C");
	$pdf->Cell(30, 5 , $cardinfo['BHAPDT']  , 1 , 0 , "C");
	$pdf->Cell(15, 5 , "扣款金額"  , 1 , 0 , "C");
	$pdf->Cell(30, 5 , number_format($cardinfo['BHAPAT'])  , 1 , 1 , "R");

	//================================重要訊息====================================
	$pdf->SetFont('arialunicid0','',7);
	$pdf->SetXY(5.0, 68.0);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->MultiCell(6, 25, "重　要　訊　息", 1, 'L', 1, 0, '', '', true);
	$pdf->SetTextColor(0, 0, 0);

	$pdf->SetFont('msungstdlight','',6);
	$titleStr1 ="【重要通知】近來詐騙案件頻傳，提醒台端應多加注意，如有任何疑問歡迎撥打165反詐騙諮詢專線，切勿輕信以免受騙上當!\n";
	$titleStr1.="【高鐵升等】自100/1/20~100/4/30止(不包含春節、228、清明疏運期間，疏運期間以台灣高鐵公司公告為準)活動期間內購買標準車廂對號座車票即可以每張1,000點紅利點數限量升等為商務車廂，紅利點數不足每張票扣除270元升等作業手續費，詳細活動內容請洽永旺信用卡客服。\n";
	$titleStr1.="【權益通知】自100/1/21起刷卡分期享有紅你開心紅利積點活動，每20元可累積1點紅利，詳細活動內容請洽永旺信用卡客服。";
	
	$pdf->MultiCell(90, 25, $titleStr1, 1, 'L', 0, 0, '', '', true);
	//$pdf->Cell(105, 20 , "13213" , 1 , 0 , "C");
	$pdf->Cell(2, 25 , "" , 0 , 0 , "C");

	$titleStr2 ="台端依契約得使用循環信用時，如循環信用利率不變(並依此單一利率進行利率試算)且無新增消費或其他費用，每月僅依約繳交最低應繳金額繳清全部帳款所需期間123,456期(按每月為一期，不含本月)及應繳納總金額123,456元(不含本期最低應繳金額)，以上僅提供參考，實際狀況仍視未來各期帳款資料為準。
本年度截至本期帳單結帳日止，台端使用本公司信用卡已產生之循環利息及費用累計金額分別為123,456元及123,456元(包含台端應繳納而尚未繳納部分)。
台端截至本期結帳日止，尚有未繳款之循環信用本金(刷卡消費123,456元及預借現金123,456元)，如未於本期帳單繳款期限內全額繳清本期應繳金額，將計入次期循環信用本金(實際循環信用利息之計算請參考帳單相關之說明)。";
	$pdf->MultiCell(100, 25, $titleStr2, 0, 'L', 0, 0, '', '', true);

	//=================中間信用卡繳費訊息========================
	$pdf->SetXY(5.0, 94.0);

	$pdf->SetFont('msungstdlight','',10);
	$pdf->Cell(30, 9 , "上期應繳款金額" , 1 , 0 , "C");

	$pdf->SetFont('msungstdlight','',7);
	$pdf->Cell(3, 4 , "" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "上期應繳款金額" , 1 , 0 , "C", 1);

	$pdf->Cell(5, 4 , "-" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "上期已繳款金額" , 1 , 0 , "C", 1);

	$pdf->Cell(5, 4 , "=" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "上期應繳款餘額" , 1 , 0 , "C", 1);

	$pdf->Cell(5, 4 , "+" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "本期新增金額" , 1 , 0 , "C", 1);

	$pdf->Cell(5, 4 , "=" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "本期應應繳總額" , 1 , 0 , "C", 1);

	$pdf->Cell(5, 4 , "" , 0 , 0 , "C");
	$pdf->Cell(25, 4 , "最低應繳款金額" , 1 , 1 , "C", 1);
	
	$pdf->SetXY(5.0, 98.0);

	$pdf->Cell(30, 5 , "" , 0 , 0 , "C");
	$pdf->Cell(3, 5 , "" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHPRAT']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "-" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHPRPY']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "=" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHPRBL']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "+" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHNWAT']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "=" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHFLAT']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "" , 0 , 0 , "C");
	$pdf->Cell(25, 5 , number_format($cardinfo['BHMNAT']) , 1 , 1 , "R");

	
	//=================中間紅利訊息========================
	$pdf->SetXY(5.0, 105.0);
	$pdf->SetFont('msungstdlight','',10);
	$pdf->Cell(30, 9 , "您的紅利點數訊息" , 1 , 0 , "C" , 1);

	$pdf->SetFont('arialunicid0','',7);
	$pdf->Cell(3, 4 , "" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "上期累計紅利" , 1 , 0 , "C");

	$pdf->Cell(5, 4 , "-" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "上期已兌換/失效紅利" , 1 , 0 , "C");

	$pdf->Cell(5, 4 , "=" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "上期剩餘紅利" , 1 , 0 , "C");

	$pdf->Cell(5, 4 , "+" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "本期新增紅利" , 1 , 0 , "C");

	$pdf->Cell(5, 4 , "=" , 0 , 0 , "C");
	$pdf->Cell(23, 4 , "本期累計紅利" , 1 , 0 , "C");

	$pdf->Cell(5, 4 , "" , 0 , 0 , "C");
	$pdf->Cell(25, 4 , $cardinfo['BHDSDT']."將失效紅利" , 1 , 1 , "C");

	$pdf->SetXY(5.0, 109.0);
	$pdf->Cell(30, 5 , "" , 0 , 0 , "C");
	$pdf->Cell(3, 5 , "" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHPRAM']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "-" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHPREX']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "=" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHPTBL']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "+" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHNWPT']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "=" , 0 , 0 , "C");
	$pdf->Cell(23, 5 , number_format($cardinfo['BHAMPT']) , 1 , 0 , "R");

	$pdf->Cell(5, 5 , "" , 0 , 0 , "C");
	$pdf->Cell(25, 5 , number_format($cardinfo['BHDSAP']) , 1 , 1 , "R");

	//=================中間各項費用說明========================
	$pdf->SetXY(5.0, 117.0);

	$pdf->SetFont('arialunicid0','',10);
	$pdf->Cell(50, 6 , "永旺信用卡公司各項費用說明" , 1 , 0 , "C");
	
	//畫框框
	$pdf->SetXY(5.0, 123.0);
	$pdf->MultiCell(98, 70, "", 1, 'L', 0, 0, '', '', true);
	$pdf->SetXY(5.0, 123.0);
	$pdf->SetFont('arialunicid0','',5.8);

	$titleStr2 = "●最低應繳金額：持卡人每期最低應繳金額為當期各卡新增消費帳務之10％再加其餘應付帳款之2％（如低於新台幣1,000元，以新台幣1,000元計），加計超過信用額度之消費金額、累計以前各其餘期未付之最低應繳款項總計，循環信用利息及年費、預借現金手續費、掛失補發手續費、逾期手續費、調閱簽帳單手續費等其他應繳費用。如當期消費總金額低於1,000元（未始用循環信用）則須全額繳清。繳款紀錄良好之客戶，超額部份亦可以循環方式繳款，不需一次付清。計算方式同上為當期各卡新增消費帳務之10％再加其餘應付帳款之2％（低於1,000元，以1,000元計），再加計循環信用利息等費用類項目\n";
	$titleStr2.= "●循環信用利息：係將每筆『得計入循環信用本金之帳款』，自各筆帳款入帳日起，就該帳款之餘額最高以年息百分之十九．七一（日息萬分之五點四）計算至該筆帳款結清之日止（元以下無條件捨去）。\n";
	$titleStr2.= "●掛失手續費：每卡每一次收費200元。\n";
	$titleStr2.= "●調閱簽帳單手續費：1.調閱國內消費簽帳單每筆50元。2.調閱國外消費簽帳單每筆100元。\n";
	$titleStr2.= "●預借現金手續費：（每筆預借現金金額×2.5％）+150元。\n";
	$titleStr2.= "●補發帳單手續費：補發三個月之前帳單，每月份帳單酌收100元列印服務費。\n";
	$titleStr2.= "●國外交易手續費：交易金額換算為新台幣後加收1.1％手續費。\n";
	$titleStr2.= "●溢付款退款手續費：每次100元。\n";
	$titleStr2.= "●清償證明手續費：每份200元。\n";
	$titleStr2.= "●單筆分期總手續費率：3期為2.00％、6期為3.00％、12期為6.00％。總費用年百分率：3期約為12.20％、6期約為10.53％、12期約為11.58％。本總費用年百分率之計算基準日為98年12月31日。以上揭露之年百分率系按主管機關備查之標準計算範例予以計算，實際條件，仍以本公司提供之產品為準，且每一客戶實際之年百分率仍視其個別產品及授信條件而有所不同。\n";
	
	$titleStr3 = "●逾期手續費：未能於繳款截止日內繳清金額或延誤繳款期限者，本公司除計收循環信用利息外，並依下列方式計收逾期違約金：1.逾期繳款一期（逾期在一個月內），持卡人應繳納逾期手續費300元。2.連續逾期繳款二期（逾期在二個月內），持卡人應繳納逾期手續費400元。3.連續逾期繳款三期（逾期在三個月內），持卡人應繳納逾期手續費500元。\n";
	$titleStr3.= "※若持卡人未於每個月繳款截止日前付清當期最低應繳金額或遲誤繳款期限連續三期（含）以上者，其逾期手續費以計收三期為上限。";

	$pdf->MultiCell(98, 70, $titleStr2, 0, 'L', 0, 0, '', '', true);

	$pdf->SetXY(5.0, 172.0);
	$pdf->MultiCell(70, 20, $titleStr3, 0, 'L', 0, 0, '', '', true);

	$pdf->Cell(27, 3 , "印花稅總繳"	, 1 , 1 , "C");

	$pdf->Cell(74, 3 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 3 , "台灣永旺信用卡股份有限公司"	, 1 , 1 , "C");

	$pdf->Cell(74, 3 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 3 , "本手續費及利息"	, 1 , 1 , "C");

	$pdf->Cell(74, 3 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 3 , "收入印花稅總繳"	, 1 , 1 , "C");

	$pdf->Cell(74, 3 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 3 , "台北市  負責人:神谷和秀", 1 , 1 , "C");

	$pdf->SetFont('arialunicid0','',4.5);
	$pdf->Cell(74, 3 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 3 , "本收據不作為繳款證明，如有爭執應以蓋"	, 0 , 1 , "C");

	$pdf->Cell(74, 3 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 3 , "有收訖章知繳款收執聯或扣繳正名為憑"	, 0 , 1 , "C");

	//下方分期還款注意事項
	$pdf->SetXY(5.0, 194.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->MultiCell(98, 5 , "信用卡分期還款注意事項", 1, 'L', 0, 1, '', '', true);

	$pdf->SetXY(5.0, 199.0);
	$pdf->SetFont('arialunicid0','',5.8);
	$pdf->MultiCell(98, 16, "1.本公司於商品買賣交易中僅涉及代墊款項之資金關係。2.本公司已將商品總金額一次墊付予商品出售人。3.本公司並未介入商品之交付或商品瑕疵等買賣實體關係，相關出退貨、服務及上述價差之退款，本公司卡友應該先洽商品出售人尋求解決。4.本公司卡友進行郵購買賣或訪問販賣交易，得依消費者保護法第十九條規定向商品出售人解除契約。5.本公司卡友與特約商店之爭議，如無法解決，始得要求向本公司就該筆交易以『帳單疑義之處理程序』辦理。6.納入每期最低應繳金額。" , 1, 'L', 0, 0, '', '', true);

	//=================中間右邊各項費用說明========================
	$pdf->SetXY(108.0, 117.0);
	$pdf->SetFont('arialunicid0','',10);
	$pdf->Cell(50, 6 , "永旺信用卡繳款方式說明" , 1 , 1 , "C");

	//畫框框
	$pdf->SetXY(108.0, 123.0);
	$pdf->SetFont('arialunicid0','',5.8);

	$titleStr4 = "●ATM轉帳繳款：插入金融卡→密碼→其他服務→跨行轉帳→輸入銀行代碼→輸入轉帳帳號（16碼銷帳編號\n或卡號）→輸入轉帳金額→確認\n※第一銀行代號007，高雄三信代號204（限高雄三信聯名卡）※如有2張以上永旺公司發行之信用卡，需依卡號各別輸入※若為跨行繳款需支付ATM轉帳17元手續費\n";
	$titleStr4.= "●臨櫃繳款：您可持帳單至第一銀行、板信商銀、台灣中小企銀、郵局、高雄市第三信用合作社、渣打銀行之各營業分行櫃檯辦理繳款。\n";
	$titleStr4.= "●郵局劃撥：劃撥帳號19723962，戶名：台灣永旺信用卡股份有限公司\n※請務必填寫您的信用卡卡號或銷帳編號，以方便作業處理\n";
	$titleStr4.= "●便利商店繳款：若您本期最低金額或應繳總金額在新台幣20,000元以下，可選擇於7-ELEVEN、全家、萊爾富或OK便利商店各門市繳款。\n※您於便利商店繳款，無須負擔任何手續費用。\n※於便利商店繳款需注意僅能繳交最低應繳金額或應繳總金額，無法繳交此固定數目以外之金額，並且於繳款後恕無法辦理退款。\n";
	$titleStr4.= "●自動扣款：每月帳單應繳總額或最低應繳金額，可以自動扣款方式繳納，可配合之金融機構請來電詢問。\n※結帳日為每月20日，繳款截止日為次月5日，自動繳款將於繳款截止日隔日進行扣款作業，如遇例假日則順延扣款\n";
	$titleStr4.= "●支票繳款：請開具抬頭為『台灣永旺信用卡股份有限公司』，之禁止背書轉讓支票，並於支票背面註明正卡人繳款帳號或卡號，再以掛號方式郵寄至台北市松江路87號5樓E室。\n※以支票繳款係以交換通過日為繳款入帳日（即支票兌現後始予入帳），為了能如期入帳，您需於繳款截止日期，將支票送（寄）達\n";
	$titleStr4.= "●網路銀行繳款：進入各往來銀行網頁，進入網路銀行轉帳交易，依畫面操作程序辦理。\n※第一銀行網路銀行網頁http://ibank.firstbank.com.tw，存戶編號請輸入16碼之銷帳編號或卡號※若為跨行轉款須支付17元手續費\n";
	$titleStr4.= "●使用電話語音銀行轉帳繳款：請按往來銀行語音操作程序辦理。\n※第一銀行電話語音銀行服務專線：4050-6111（手機請撥02-4050-6111），存戶編號請輸入16碼之銷帳編號或卡號。\n※若為跨行轉款須支付17元手續費\n";
	$titleStr4.= "●全國繳費網（e-Bill）繳款：請進入http://ebill.ba.org.tw網頁點選『信用卡費』→台灣永旺信用卡股份有限公司→銷帳編號→繳款金額→晶片金融卡置入讀卡機→動態圖像驗證碼→晶片金融卡密碼→確認付款\n※繳款方式僅為『使用晶片金融卡』繳款，請事先備好晶片讀卡機。\n※手續費說明：使用晶片金融卡繳款，手續費新台幣10元\n";
	$titleStr4.= "權益注意事項：\n";
	$titleStr4.= "(1)為維護您的權益，繳款後請務必保留收據一個月，以備核帳之用。\n(2)本公司帳單採平信方式郵寄，若於繳款截止日前7天，尚未收到『信用卡消費明細暨繳款通知書』，請來電本公司客服部(02)-2508-1680補寄或傳真帳單明細，以方便您於繳款期限內繳款。\n(3)您的帳款入帳時間約2～3個工作天。";

	$pdf->MultiCell(98, 90, $titleStr4, 1, 'L', 0, 0, '', '', true);

	//=================底下繳費條碼明細========================
	$pdf->SetXY(10.0, 219.0);
	$pdf->SetFont('arialunicid0','',8);

	//畫虛線

	//左邊
	$pdf->Cell(65, 6 , "便利商店使用(7-11/全家/萊爾富/OK便利)" , 0 , 0 , "L");
	$pdf->SetFont('arialunicid0','',14);
	$pdf->Cell(5, 6 , "□" , 0 , 0 , "L");
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(95, 6 , "繳交應付總帳款(請自行勾選任一繳款方式)" , 0 , 1 , "L");


	$pdf->SetXY(10.0, 224.0);
	$pdf->write1DBarcode('00000120C06', 'C39', '', '', 90, 5, 0.2, $style, 'N');
	$pdf->SetXY(82.0, 224.0);
	//$pdf->write1DBarcode('00000120C06', 'C39', '', '', 90, 5, 0.2, $style, 'N');

	$pdf->SetXY(10.0, 226.0);
	$pdf->Write(10,'00000120C06',"","0","L");
	$pdf->SetXY(82.0, 226.0);
	//$pdf->Write(10,'00000120C06',"","0","L");

	$pdf->SetXY(10.0, 233.0);
	$pdf->Cell(65, 6 , " " , 0 , 0 , "L");
	$pdf->SetFont('arialunicid0','',14);
	$pdf->Cell(5, 6 , "□" , 0 , 0 , "L");
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(95, 6 , "繳交最低應繳金額" , 0 , 1 , "L");

	$pdf->SetXY(10.0, 238.0);
	$pdf->write1DBarcode('1115700771212206', 'C39', '', '', 90, 5, 0.2, $style, 'N');
	$pdf->SetXY(82.0, 238.0);
	//$pdf->write1DBarcode('000120C06', 'C39', '', '', 90, 5, 0.2, $style, 'N');

	$pdf->SetXY(10.0, 240.0);
	$pdf->Write(10,'1115700771212206',"","0","L");
	$pdf->SetXY(82.0, 240.0);
	//$pdf->Write(10,'000120C06',"","0","L");
	

	//$pdf->SetXY(10.0, 248.0);
	//$pdf->Cell(70, 5 , "貴帳戶已辦理自動轉帳，請勿重複繳款" , 0 , 1 , "L");

	//==============================繳款表格==================================
	$pdf->SetXY(10.0, 248.0);
	$pdf->SetFont('arialunicid0','',10);
	$pdf->Cell(75, 5 , "戶名:台灣永旺信用卡股份有限公司" , 1 , 0 , "L");
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(75, 5 , "時間:民國100年01月31日   科目:活存" , 1 , 1 , "L");

	$pdf->SetXY(10.0, 253.0);
	$pdf->MultiCell(15, 15, "\n全行代理\n收款專戶", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(95, 10, "第一銀行 19301234567812345678", 1, 'L', 0, 0, '', '', true);
	$pdf->MultiCell(40, 20, "(收意戳記)", 1, 'C', 0, 0, '', '', true);
	
	
	$pdf->SetXY(25.0, 263.0);
	$pdf->MultiCell(17, 5, "金融卡轉帳", 1, 'L', 0, 0, '', '', true);
	$pdf->SetFont('arialunicid0','',7);
	$pdf->MultiCell(78, 5, "第一銀行007+1115700771212206 渣打商銀052+1115700771212206", 1, 'L', 0, 1, '', '', true);
	$pdf->SetFont('arialunicid0','',8);
	
	$pdf->SetXY(10.0, 268.0);
	$pdf->MultiCell(15, 5, "金額大寫", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(17, 5, "新台幣:", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(78, 5, "佰　　　拾　　　萬　　　仟　　　佰　　　拾　　　元整", 1, 'R', 0, 1, '', '', true);

	//認證欄
	$pdf->SetXY(10.0, 273.0);
	$pdf->MultiCell(15, 21, "\n\n\n認證欄", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(95, 21, "", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(5, 21, "\n收\n入\n現\n金", 1, 'C', 0, 0, '', '', true);
	$pdf->Cell(10,  7 , "現金" , 1 , 0 , "C");

	$pdf->MultiCell(25, 7, "", 1, 'C', 0, 1, '', '', true);
	$pdf->MultiCell(124, 7, "", 0, 'C', 0, 0, '', '', true);
	$pdf->Cell(10,  7 , "票據" , 1 , 0 , "C");

	$pdf->MultiCell(25, 7, "", 1, 'C', 0, 1, '', '', true);
	$pdf->MultiCell(124, 7, "", 0, 'C', 0, 0, '', '', true);
	$pdf->Cell(10,  7 , "合計" , 1 , 0 , "C");

	$pdf->MultiCell(25, 7, "", 1, 'C', 0, 1, '', '', true);

	/*
	$pdf->SetFont('arialunicid0','',10);
	$pdf->SetXY(23.0, 280.0);
	$pdf->Cell(40, 5 , "郵政劃撥帳號" , 0 , 1 , "L");
	$pdf->SetXY(48.0, 280.0);
	$pdf->write1DBarcode('19723962', 'C39', '', '', 80, 5, 0.2, $style, 'N');

	$pdf->SetXY(90.0, 280.0);
	$pdf->Cell(40, 5 , "銷帳編號" , 0 , 1 , "L");
	$pdf->SetXY(107.0, 280.0);
	$pdf->write1DBarcode('1115700771212206', 'C39', '', '', 80, 5, 0.2, $style, 'N');
	*/

	//==============中間===============
	$pdf->SetXY(160.0, 225.0);
	$pdf->Cell(10,  5 , "主管" , 0 , 0 , "C");

	$pdf->SetXY(160.0, 235.0);
	$pdf->Cell(10,  5 , "會計" , 0 , 0 , "C");

	$pdf->SetXY(160.0, 245.0);
	$pdf->Cell(10,  5 , "覆核" , 0 , 0 , "C");

	$pdf->SetXY(160.0, 255.0);
	$pdf->Cell(10,  5 , "記帳" , 0 , 0 , "C");

	$pdf->SetXY(160.0, 265.0);
	$pdf->Cell(10,  5 , "製票" , 0 , 0 , "C");

	$pdf->SetXY(172.0, 225.0);
	$pdf->SetFont('arialunicid0','',6);
	$pdf->MultiCell(5, 50, "便利商店繳款者，限繳交本期應付帳款或最低應繳金額", 0, 'C', 0, 1, '', '', true);

	//==========右邊攔==============
	$pdf->SetFont('arialunicid0','',9);
	$pdf->SetXY(178.0, 223.0);
	$pdf->Cell(30,  6 , "戶      名" , 1 , 1 , "C");

	$pdf->SetXY(178.0, 229.0);
	$pdf->SetFont('arialunicid0','',6);
	$pdf->Cell(30,  5 , "台灣永旺信用卡股份有限公司" , 1 , 1 , "C");

	$pdf->SetXY(178.0, 234.0);
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(4.2,  5 , "佰" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "拾" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "萬" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "仟" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "佰" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "拾" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "元" , 1 , 1 , "C");

	$pdf->SetXY(178.0, 239.0);
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(4.2, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 1 , "C");

	$pdf->SetXY(178.0, 245.0);
	$pdf->Cell(30,  6 , "銷 帳 編 號" , 1 , 1 , "C");

	$pdf->SetXY(178.0, 251.0);
	$pdf->SetFont('arialunicid0','',6.3);
	$pdf->Cell(30,  9 , $cardinfo['BHPYCD'] , 1 , 1 , "C");

	$pdf->SetXY(178.0, 260.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(7,  6 , "姓名" , 1 , 0 , "C");
	$pdf->SetFont('arialunicid0','',5);
	$pdf->Cell(23,  6 , "先生/小姐" , 1 , 1 , "R");

	$pdf->SetXY(178.0, 266.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(30,  6 , "本期應付帳款" , 1 , 1 , "C");

	$pdf->SetXY(178.0, 272.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(30,  10 , "-15" , 1 , 1 , "R");

	$pdf->SetXY(178.0, 282.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(30,  6 , "最低應繳金額" , 1 , 1 , "C");

	$pdf->SetXY(178.0, 288.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(30,  10 , "0" , 1 , 1 , "R");

	$pdf->lastPage();

	//==================================第二頁==================================
	$pdf->AddPage();
	//$pdf->Cell(寬, 高 , "內容" , 框線 , 是否換行 , 對齊位置);

	//$pdf->MultiCell(寬, 高 , 內容, 框線, 'L', 填滿背景色, 換行, '', '', true);

	$pdf->SetFillColor(204,204,204);
	$pdf->SetFont('msungstdlight', '', 10);

	//title
	$pdf->MultiCell(128, 8, "客戶服務專線：(02)2508-1680　　客戶專屬帳號：0021216395", 0, 'L', 1, 0, '', '', true);
	$pdf->MultiCell(60, 8, "帳單結帳日：99年8月20日", 0, 'R', 1, 0, '', '', true);
	$pdf->SetFont('msungstdlight', '',6);
	$pdf->MultiCell(20, 4, "00000122-2", 0, 'R', 1, 1, '', '', true);
	$pdf->MultiCell(188, 4, "", 0, 'R', 1, 0, '', '', true);
	$pdf->MultiCell(20, 4, "頁次 2/2", 0, 'R', 1, 1, '', '', true);

	$pdf->Ln(1);

	//=============合計表============
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(46, 4, "入帳日", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(64, 4, "繳款明細摘要", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(17, 4, "台幣金額", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(74, 4, "備註", 0, 'C', 1, 1, '', '', true);

	//合計表 - 填入資料
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(46, 4, "940428", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(64, 4, "上期款已收到", 0, 'L', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(17, 4, "1,400", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(74, 4, "", 0, 'L', 0, 1, '', '', true);

	$pdf->Line(3, 18, 205, 18);				//畫線

	//合計表 - 統計
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(46, 4, "合計", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(64, 4, "", 0, 'L', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(17, 4, "1,400", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(74, 4, "", 0, 'L', 0, 1, '', '', true);

	$pdf->Ln(1);

	//============消費明細============
	//title
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 4, "消費日", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(14, 4, "入帳日", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(18, 4, "卡號末四碼", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(64, 4, "消費明細摘要", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(17, 4, "台幣金額", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(11, 4, "幣別", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(18, 4, "外幣折算日", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(18, 4, "消費地金額", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(24, 4, "獲得紅利點數", 0, 'C', 1, 1, '', '', true);

	//明細  for迴圈
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 4, "1000101", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 4, "1000131", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(18, 4, "1234", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(64, 4, "臺灣菸酒股份有限公司高雄國際機場免商", 0, 'L', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(17, 4, "5000", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(11, 4, "jpn", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(18, 4, "1000110", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(18, 4, "5000", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(23, 4, "76 二倍", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 1, '', '', true);

	//FOR END

	//$pdf->Line(3, 37, 205, 37);				//畫線  因為是FOR迴圈 很難抓

	//統計
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(46, 4, "合計", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(64, 4, "", 0, 'L', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(17, 4, "15000", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(74, 4, "206　", 0, 'R', 0, 1, '', '', true);
	
	$pdf->Ln(2);

	//=============分期明細===============
	//title
	$pdf->SetFont('msungstdlight', '', 6);
	$pdf->MultiCell(3, 5, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 5, "消費日", 0, 'C', 1, 0, '', '', true);

	$pdf->SetFont('msungstdlight', '', 5);
	$pdf->MultiCell(14, 5, "第一期入帳日", 0, 'C', 1, 0, '', '', true);

	$pdf->SetFont('msungstdlight', '', 6);
	$pdf->MultiCell(18, 5, "本期/總期數", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 5, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(64, 5, "分期摘要（消費明細摘要）", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 5, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(19, 5, "本期本金", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 5, "", 0, 'C', 0, 0, '', '', true);

	$pdf->SetFont('msungstdlight', '', 5);
	$pdf->MultiCell(9, 5, "本期手續費等", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 5, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(18, 5, "未到期本金額", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 5, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(18, 5, "未到期手續費等", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 5, "", 0, 'C', 0, 0, '', '', true);

	$pdf->SetFont('msungstdlight', '', 6);
	$pdf->MultiCell(24, 5, "總費用年百分率", 0, 'C', 1, 1, '', '', true);

	//明細
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 4, "1000101", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 4, "1000131", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(18, 4, "2/12", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(64, 4, "環球購物", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(17, 4, "1500", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(11, 4, "200", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(18, 4, "15000", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(18, 4, "2000", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(23, 4, "12.34%", 0, 'R', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 1, '', '', true);

	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※上述資訊不包含爭議款項及結帳當日終止之分期交易。", 0, 'L', 0, 1, '', '', true);

	$pdf->Ln(2);

	//============紅利明細============
	//title
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 5, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 5, "消費日", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(14, 5, "入帳日", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(18, 5, "卡號末四碼", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 5, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(132, 5, "紅利明細摘要", 0, 'C', 1, 0, '', '', true);
	$pdf->MultiCell(1, 5, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(24, 5, "獲得紅利點數", 0, 'C', 1, 1, '', '', true);


	//明細  for迴圈
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 4, "1000101", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(14, 4, "1000131", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(18, 4, "1234", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(132, 4, "開卡首刷紅利點數", 0, 'L', 0, 0, '', '', true);
	$pdf->MultiCell(1, 4, "", 0, 'C', 0, 0, '', '', true);

	$pdf->MultiCell(24, 4, "76 二倍", 0, 'R', 0, 1, '', '', true);

	//EDN FOR

	$pdf->Ln(1);

	//============訊息============
	$pdf->SetFont('msungstdlight', '', 9);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "永      旺      金      卡      卡      友      專      訊", 0, 'C', 1, 1, '', '', true);
	
	$pdf->SetFont('msungstdlight', '', 8);
	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※【停車新服務】：98/4/1起於全省「台灣聯通」停車場，每次停車可用1,000點紅利折抵1小時之停車費(每次1,000點，不累加)，歡迎多加利用。", 0, 'L', 0, 1, '', '', true);

	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※【汽機車牌照稅】：98/4/1-98/4/30使用永旺信用卡繳納汽機車牌照稅，可獲300點紅利，詳情請見隨函DM。", 0, 'L', 0, 1, '', '', true);

	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※【電信費代繳】：98/4/1-98/4/30首次申辦本公司電信費代繳且設定成功者可獲100元刷卡回饋金，詳情請見隨函DM。", 0, 'L', 0, 1, '', '', true);

	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※【中獎通知】：恭禧您是本公司「亞洲自由行4選1」3月抽獎活動貳獎得主，獎項：「知本頂級飯店渡假行」。", 0, 'L', 0, 1, '', '', true);

	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※【生日祝福】：4月適逢您的生日，本公司衷心祝福您生日快樂。別忘了生日當月刷卡消費皆享2倍紅利，永旺祝您愈刷愈有利！", 0, 'L', 0, 1, '', '', true);

	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※【天天金喜】：即日起至98/12/31止，不限地點，不限時間，刷永旺金卡消費紅利點數天天2倍！", 0, 'L', 0, 1, '', '', true);

	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※【無比精采感謝日】：即日起至98/12/31止，每月5、15、25日，不限地點，刷卡消費紅利點數5倍！", 0, 'L', 0, 1, '', '', true);

	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※【信用卡循環信用年利率調整】配合主管機關檢視差異化利率政策，本公司將針對符合條件之卡友調降其信用卡一般刷卡消費循環信用年利。此次調降幅度為1.46%起，符合條件之卡友，其適用之新利率將於4月份帳單揭露。詳細條件說明請見本公司網站公告。", 0, 'L', 0, 1, '', '', true);

	$pdf->MultiCell(3, 4, "", 0, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(205, 4, "※  相關各活動內容請參照本月帳單上廣告或至本公司網站查詢http://www.aeoncard.com.tw   ", 0, 'L', 0, 1, '', '', true);


	//=================中間各項費用說明========================
	$pdf->SetXY(5.0, 135.0);

	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(50, 5 , "永旺信用卡公司各項費用說明" , 1 , 0 , "C");
	
	//畫框框
	$pdf->SetXY(5.0, 140.0);
	$pdf->MultiCell(98, 55, "", 1, 'L', 0, 0, '', '', true);
	$pdf->SetXY(5.0, 140.0);
	$pdf->SetFont('arialunicid0','',5);

	$titleStr2 = "●最低應繳金額：持卡人每期最低應繳金額為當期各卡新增消費帳務之10％再加其餘應付帳款之2％（如低於新台幣1,000元，以新台幣1,000元計），加計超過信用額度之消費金額、累計以前各其餘期未付之最低應繳款項總計，循環信用利息及年費、預借現金手續費、掛失補發手續費、逾期手續費、調閱簽帳單手續費等其他應繳費用。如當期消費總金額低於1,000元（未始用循環信用）則須全額繳清。繳款紀錄良好之客戶，超額部份亦可以循環方式繳款，不需一次付清。計算方式同上為當期各卡新增消費帳務之10％再加其餘應付帳款之2％（低於1,000元，以1,000元計），再加計循環信用利息等費用類項目\n";
	$titleStr2.= "●循環信用利息：係將每筆『得計入循環信用本金之帳款』，自各筆帳款入帳日起，就該帳款之餘額最高以年息百分之十九．七一（日息萬分之五點四）計算至該筆帳款結清之日止（元以下無條件捨去）。\n";
	$titleStr2.= "●掛失手續費：每卡每一次收費200元。\n";
	$titleStr2.= "●調閱簽帳單手續費：1.調閱國內消費簽帳單每筆50元。2.調閱國外消費簽帳單每筆100元。\n";
	$titleStr2.= "●預借現金手續費：（每筆預借現金金額×2.5％）+150元。\n";
	$titleStr2.= "●補發帳單手續費：補發三個月之前帳單，每月份帳單酌收100元列印服務費。\n";
	$titleStr2.= "●國外交易手續費：交易金額換算為新台幣後加收1.1％手續費。\n";
	$titleStr2.= "●溢付款退款手續費：每次100元。\n";
	$titleStr2.= "●清償證明手續費：每份200元。\n";
	$titleStr2.= "●單筆分期總手續費率：3期為2.00％、6期為3.00％、12期為6.00％。總費用年百分率：3期約為12.20％、6期約為10.53％、12期約為11.58％。本總費用年百分率之計算基準日為98年12月31日。以上揭露之年百分率系按主管機關備查之標準計算範例予以計算，實際條件，仍以本公司提供之產品為準，且每一客戶實際之年百分率仍視其個別產品及授信條件而有所不同\n";

	$pdf->MultiCell(98, 55, $titleStr2, 1, 'L', 0, 0, '', '', true);
	
	$titleStr3 = "●逾期手續費：未能於繳款截止日內繳清金額或延誤繳款期限者，本公司除計收循環信用利息外，並依下列方式計收逾期違約金：1.逾期繳款一期（逾期在一個月內），持卡人應繳納逾期手續費300元。2.連續逾期繳款二期（逾期在二個月內），持卡人應繳納逾期手續費400元。3.連續逾期繳款三期（逾期在三個月內），持卡人應繳納逾期手續費500元。\n";
	$titleStr3.= "※若持卡人未於每個月繳款截止日前付清當期最低應繳金額或遲誤繳款期限連續三期（含）以上者，其逾期手續費以計收三期為上限。";

	$pdf->SetXY(5.0, 178.0);
	$pdf->MultiCell(70, 15, $titleStr3, 0, 'L', 0, 0, '', '', true);

	$pdf->Cell(27, 2 , "印花稅總繳"	, 1 , 1 , "C");

	$pdf->Cell(74, 2 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 2 , "台灣永旺信用卡股份有限公司"	, 1 , 1 , "C");

	$pdf->Cell(74, 2 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 2 , "本手續費及利息"	, 1 , 1 , "C");

	$pdf->Cell(74, 2 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 2 , "收入印花稅總繳"	, 1 , 1 , "C");

	$pdf->Cell(74, 2 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 2 , "台北市  負責人:神谷和秀", 1 , 1 , "C");

	$pdf->SetFont('arialunicid0','',4);
	$pdf->Cell(74, 2 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 2 , "本收據不作為繳款證明，如有爭執應以蓋"	, 0 , 1 , "C");

	$pdf->Cell(74, 2 , "	 "	, 0 , 0 , "C");
	$pdf->Cell(27, 2 , "有收訖章知繳款收執聯或扣繳正名為憑"	, 0 , 1 , "C");

	//下方分期還款注意事項
	$pdf->SetXY(5.0, 196.0);
	$pdf->SetFont('arialunicid0','',8);
	$pdf->MultiCell(98, 4 , "信用卡分期還款注意事項", 1, 'L', 0, 1, '', '', true);

	$pdf->SetXY(5.0, 200.0);
	$pdf->SetFont('arialunicid0','',5);
	$pdf->MultiCell(98, 10, "1.本公司於商品買賣交易中僅涉及代墊款項之資金關係。2.本公司已將商品總金額一次墊付予商品出售人。3.本公司並未介入商品之交付或商品瑕疵等買賣實體關係，相關出退貨、服務及上述價差之退款，本公司卡友應該先洽商品出售人尋求解決。4.本公司卡友進行郵購買賣或訪問販賣交易，得依消費者保護法第十九條規定向商品出售人解除契約。5.本公司卡友與特約商店之爭議，如無法解決，始得要求向本公司就該筆交易以『帳單疑義之處理程序』辦理。6.納入每期最低應繳金額。" , 1, 'L', 0, 0, '', '', true);



	//=================中間右邊各項費用說明========================
	$pdf->SetXY(108.0, 135.0);
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(50, 5 , "永旺信用卡繳款方式說明" , 1 , 1 , "C");

	//畫框框
	$pdf->SetXY(108.0, 140.0);
	$pdf->SetFont('arialunicid0','',4.9);

	$titleStr4 = "●ATM轉帳繳款：插入金融卡→密碼→其他服務→跨行轉帳→輸入銀行代碼→輸入轉帳帳號（16碼銷帳編號\n或卡號）→輸入轉帳金額→確認\n※第一銀行代號007，高雄三信代號204（限高雄三信聯名卡）※如有2張以上永旺公司發行之信用卡，需依卡號各別輸入※若為跨行繳款需支付ATM轉帳17元手續費\n";
	$titleStr4.= "●臨櫃繳款：您可持帳單至第一銀行、板信商銀、台灣中小企銀、郵局、高雄市第三信用合作社、渣打銀行之各營業分行櫃檯辦理繳款。\n";
	$titleStr4.= "●郵局劃撥：劃撥帳號19723962，戶名：台灣永旺信用卡股份有限公司\n※請務必填寫您的信用卡卡號或銷帳編號，以方便作業處理\n";
	$titleStr4.= "●便利商店繳款：若您本期最低金額或應繳總金額在新台幣20,000元以下，可選擇於7-ELEVEN、全家、萊爾富或OK便利商店各門市繳款。\n※您於便利商店繳款，無須負擔任何手續費用。\n※於便利商店繳款需注意僅能繳交最低應繳金額或應繳總金額,無法繳交此固定數目以外之金額,並且於繳款後恕無法辦理退款\n";
	$titleStr4.= "●自動扣款：每月帳單應繳總額或最低應繳金額，可以自動扣款方式繳納，可配合之金融機構請來電詢問。\n※結帳日為每月20日，繳款截止日為次月5日，自動繳款將於繳款截止日隔日進行扣款作業，如遇例假日則順延扣款\n";
	$titleStr4.= "●支票繳款：請開具抬頭為『台灣永旺信用卡股份有限公司』，之禁止背書轉讓支票，並於支票背面註明正卡人繳款帳號或卡號，再以掛號方式郵寄至台北市松江路87號5樓E室。\n※以支票繳款係以交換通過日為繳款入帳日（即支票兌現後始予入帳），為了能如期入帳，您需於繳款截止日期，將支票送（寄）達\n";
	$titleStr4.= "●網路銀行繳款：進入各往來銀行網頁，進入網路銀行轉帳交易，依畫面操作程序辦理。\n※第一銀行網路銀行網頁http://ibank.firstbank.com.tw，存戶編號請輸入16碼之銷帳編號或卡號※若為跨行轉款須支付17元手續費\n";
	$titleStr4.= "●使用電話語音銀行轉帳繳款：請按往來銀行語音操作程序辦理。\n※第一銀行電話語音銀行服務專線：4050-6111（手機請撥02-4050-6111），存戶編號請輸入16碼之銷帳編號或卡號。\n※若為跨行轉款須支付17元手續費\n";
	$titleStr4.= "●全國繳費網（e-Bill）繳款：請進入http://ebill.ba.org.tw網頁點選『信用卡費』→台灣永旺信用卡股份有限公司→銷帳編號→繳款金額→晶片金融卡置入讀卡機→動態圖像驗證碼→晶片金融卡密碼→確認付款\n※繳款方式僅為『使用晶片金融卡』繳款，請事先備好晶片讀卡機。\n※手續費說明：使用晶片金融卡繳款，手續費新台幣10元\n";
	$titleStr4.= "權益注意事項：\n";
	$titleStr4.= "(1)為維護您的權益，繳款後請務必保留收據一個月，以備核帳之用。\n(2)本公司帳單採平信方式郵寄，若於繳款截止日前7天，尚未收到『信用卡消費明細暨繳款通知書』，請來電本公司客服部(02)-2508-1680補寄或傳真帳單明細，以方便您於繳款期限內繳款。\n(3)您的帳款入帳時間約2～3個工作天。";

	$pdf->MultiCell(100, 70, $titleStr4, 1, 'L', 0, 0, '', '', true);

	
	//=================底下繳費條碼明細========================
	//畫虛線
	$pdf->SetXY(6.0, 212.0);
	$pdf->SetFont('arialunicid0','',8);

	
	//左邊
	$pdf->Cell(65, 4 , "便利商店使用(7-11/全家/萊爾富/OK便利)" , 0 , 0 , "L");
	$pdf->SetFont('arialunicid0','',14);
	$pdf->Cell(5, 4 , "□" , 0 , 0 , "L");
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(95, 4 , "繳交應付總帳款(請自行勾選任一繳款方式)" , 0 , 1 , "L");


	$pdf->SetXY(5.0, 216.0);
	$pdf->write1DBarcode('00000120C06', 'C39', '', '', 90, 5, 0.2, $style, 'N');
	$pdf->SetXY(77.0, 216.0);
	$pdf->write1DBarcode('00000120C06', 'C39', '', '', 90, 5, 0.2, $style, 'N');

	$pdf->SetFont('arialunicid0','',6);
	$pdf->SetXY(7.0, 217.0);
	$pdf->Write(10,'00000120C11',"","0","L");
	$pdf->SetXY(77.0, 217.0);
	$pdf->Write(10,'00000120C22',"","0","L");

	$pdf->SetXY(5.0, 222.0);
	$pdf->Cell(65, 5 , " " , 0 , 0 , "L");
	$pdf->SetFont('arialunicid0','',14);
	$pdf->Cell(5, 5 , "□" , 0 , 0 , "L");
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(95, 5 , "繳交最低應繳金額" , 0 , 1 , "L");

	$pdf->SetXY(5.0, 226.0);
	$pdf->write1DBarcode('1115700771212206', 'C39', '', '', 90, 5, 0.2, $style, 'N');
	$pdf->SetXY(77.0, 226.0);
	$pdf->write1DBarcode('000120C06', 'C39', '', '', 90, 5, 0.2, $style, 'N');

	$pdf->SetFont('arialunicid0','',6);
	$pdf->SetXY(5.0, 227.0);
	$pdf->Write(10,'1115700771212206',"","0","L");
	$pdf->SetXY(77.0, 227.0);
	$pdf->Write(10,'000120C06',"","0","L");
	

	//$pdf->SetXY(10.0, 248.0);
	//$pdf->Cell(70, 5 , "貴帳戶已辦理自動轉帳，請勿重複繳款" , 0 , 1 , "L");

	//==============================繳款表格==================================
	$pdf->SetXY(5.0, 236.0);
	$pdf->SetFont('arialunicid0','',8);
	$pdf->MultiCell(5, 46, "第\n一\n聯\n\n全\n行\n代\n理\n收\n款\n傳\n票", 1, 'C', 0, 0, '', '', true);


	$pdf->SetXY(10.0, 236.0);
	$pdf->SetFont('arialunicid0','',10);
	$pdf->Cell(75, 5 , "戶名:台灣永旺信用卡股份有限公司" , 1 , 0 , "L");
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(75, 5 , "時間:民國100年01月31日   科目:活存" , 1 , 1 , "L");

	$pdf->SetXY(10.0, 241.0);
	$pdf->MultiCell(15, 15, "\n全行代理\n收款專戶", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(95, 10, "第一銀行 19301234567812345678", 1, 'L', 0, 0, '', '', true);
	$pdf->MultiCell(40, 20, "(收意戳記)", 1, 'C', 0, 0, '', '', true);
	
	
	$pdf->SetXY(25.0, 251.0);
	$pdf->MultiCell(17, 5, "金融卡轉帳", 1, 'L', 0, 0, '', '', true);
	$pdf->SetFont('arialunicid0','',7);
	$pdf->MultiCell(78, 5, "第一銀行007+1115700771212206 渣打商銀052+1115700771212206", 1, 'L', 0, 1, '', '', true);
	$pdf->SetFont('arialunicid0','',8);
	
	$pdf->SetXY(10.0, 256.0);
	$pdf->MultiCell(15, 5, "金額大寫", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(17, 5, "新台幣:", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(78, 5, "佰　　　拾　　　萬　　　仟　　　佰　　　拾　　　元整", 1, 'R', 0, 1, '', '', true);

	//認證欄
	$pdf->SetXY(10.0, 261.0);
	$pdf->MultiCell(15, 21, "\n\n\n認證欄", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(95, 21, "", 1, 'C', 0, 0, '', '', true);
	$pdf->MultiCell(5, 21, "\n收\n入\n現\n金", 1, 'C', 0, 0, '', '', true);
	$pdf->Cell(10,  7 , "現金" , 1 , 0 , "C");

	$pdf->MultiCell(25, 7, "", 1, 'C', 0, 1, '', '', true);
	$pdf->MultiCell(124, 7, "", 0, 'C', 0, 0, '', '', true);
	$pdf->Cell(10,  7 , "票據" , 1 , 0 , "C");

	$pdf->MultiCell(25, 7, "", 1, 'C', 0, 1, '', '', true);
	$pdf->MultiCell(124, 7, "", 0, 'C', 0, 0, '', '', true);
	$pdf->Cell(10,  7 , "合計" , 1 , 0 , "C");

	$pdf->MultiCell(25, 7, "", 1, 'C', 0, 1, '', '', true);

	/*
	$pdf->SetFont('arialunicid0','',10);
	$pdf->SetXY(23.0, 280.0);
	$pdf->Cell(40, 5 , "郵政劃撥帳號" , 0 , 1 , "L");
	$pdf->SetXY(48.0, 280.0);
	$pdf->write1DBarcode('19723962', 'C39', '', '', 80, 5, 0.2, $style, 'N');

	$pdf->SetXY(90.0, 280.0);
	$pdf->Cell(40, 5 , "銷帳編號" , 0 , 1 , "L");
	$pdf->SetXY(107.0, 280.0);
	$pdf->write1DBarcode('1115700771212206', 'C39', '', '', 80, 5, 0.2, $style, 'N');
	*/

	//==============中間===============
	$pdf->SetXY(159.0, 222.0);
	$pdf->Cell(10,  5 , "主管" , 0 , 0 , "C");

	$pdf->SetXY(159.0, 232.0);
	$pdf->Cell(10,  5 , "會計" , 0 , 0 , "C");

	$pdf->SetXY(159.0, 242.0);
	$pdf->Cell(10,  5 , "覆核" , 0 , 0 , "C");

	$pdf->SetXY(159.0, 252.0);
	$pdf->Cell(10,  5 , "記帳" , 0 , 0 , "C");

	$pdf->SetXY(159.0, 262.0);
	$pdf->Cell(10,  5 , "製票" , 0 , 0 , "C");

	$pdf->SetXY(170.0, 222.0);
	$pdf->SetFont('arialunicid0','',6);
	$pdf->MultiCell(5, 50, "便利商店繳款者，限繳交本期應付帳款或最低應繳金額", 0, 'C', 0, 1, '', '', true);

	//==========右邊攔==============
	$pdf->SetFont('arialunicid0','',9);
	$pdf->SetXY(175.0, 215.0);
	$pdf->Cell(30,  6 , "戶      名" , 1 , 1 , "C");

	$pdf->SetXY(175.0, 221.0);
	$pdf->SetFont('arialunicid0','',6);
	$pdf->Cell(30,  5 , "台灣永旺信用卡股份有限公司" , 1 , 1 , "C");

	$pdf->SetXY(175.0, 226.0);
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(4.2,  5 , "佰" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "拾" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "萬" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "仟" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "佰" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "拾" , 1 , 0 , "C");
	$pdf->Cell(4.3,  5 , "元" , 1 , 1 , "C");

	$pdf->SetXY(175.0, 231.0);
	$pdf->SetFont('arialunicid0','',8);
	$pdf->Cell(4.2, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 0 , "C");
	$pdf->Cell(4.3, 6 , " " , 1 , 1 , "C");

	$pdf->SetXY(175.0, 237.0);
	$pdf->Cell(30,  6 , "銷 帳 編 號" , 1 , 1 , "C");

	$pdf->SetXY(175.0, 243.0);
	$pdf->SetFont('arialunicid0','',6.3);
	$pdf->Cell(30,  7 , $cardinfo['BHPYCD'] , 1 , 1 , "C");

	$pdf->SetXY(175.0, 250.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(7,  6 , "姓名" , 1 , 0 , "C");
	$pdf->SetFont('arialunicid0','',5);
	$pdf->Cell(23,  6 , "先生/小姐" , 1 , 1 , "R");

	$pdf->SetXY(175.0, 256.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(30,  6 , "本期應付帳款" , 1 , 1 , "C");

	$pdf->SetXY(175.0, 262.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(30,  10 , "-15" , 1 , 1 , "R");

	$pdf->SetXY(175.0, 272.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(30,  6 , "最低應繳金額" , 1 , 1 , "C");

	$pdf->SetXY(175.0, 278.0);
	$pdf->SetFont('arialunicid0','',9);
	$pdf->Cell(30,  10 , "0" , 1 , 1 , "R");
	
	// $pdf->Output('example_038.pdf', 'I');   // 顯示於銀幕
	$filename = "AEONBILL".date("ymd").".pdf";
	$pdf->Output($filename, 'D');

?>