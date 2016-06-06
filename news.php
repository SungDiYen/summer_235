<?php
include("config.php");

//分頁設定
$_PageShowNum   = 10;                               //每頁預設顯示數量
$_PageNoShowNum = 10;                               //每頁預設顯示項目數量

$PageNO = (isset($_GET['pageno']) && $_GET['pageno'] > 0) ? (int)$_GET['pageno'] : 0;
//查詢
$month = (isset($_GET['month']) && intval($_GET['month']) > 0) ? $_GET['month'] : date("Y-m");

$WhereStr = " and DATE_FORMAT(news_date,'%Y-%m')='".$month."' ";
//資料
$NowDate  = date("Y-m-d");
	
$OrderStr = "news_date desc,";

$sqlstr = "select * from ".Table_News." where DelFlag='' and show_status='Y'  and news_date <='".date("Y-m-d")."' ".$WhereStr;
$DataSum = $g_db->numRows($g_db->query($sqlstr));
$startuprow = $PageNO * $_PageShowNum;
$sqlstr .= " ORDER BY ".$OrderStr."`news_id` desc LIMIT ".$startuprow.",".$_PageShowNum;
$NewsList   = $g_db->getAll($sqlstr);
//分頁列表
$Pageshow = new PageShow($DataSum, $_PageShowNum, $PageNO, "news.php?month=".$month);

$Pageshow->TotalPage(5);
$PageStr = $Pageshow->PageList('MORE_WEB');

//資料
$nid = intval($_GET['nid']);
$sqlstr = "select * from ".Table_News." where  DelFlag='' and show_status='Y'  and news_date <='".date("Y-m-d")."' and news_id='".$nid."'";
$NData  = $g_db->getRow($sqlstr);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:title" content="content">
	<meta property="og:type" content="content">
	<meta property="og:url" content="content">
	<meta property="og:image" content="content">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>臺灣夏至235</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/news.css">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-77259548-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<header class="header container-fluid">
		<nav class="navbar">
			<div class="row">
				<div class="col-lg-2 col-md-2  col-sm-2  col-xs-2 navbar-header">
					<!-- what if they want RWD
					<button type="button" class="navbar-toggle collapsed" 
							data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
							aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					-->
					<a class="navbar-brand logo" href="http://www.taiwan235n.tw/">
						<img src="images/logo_top_left.png" alt="臺灣夏至235">
					</a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 list clearfix">
					<ul class="nav navbar-nav">
						<li>
							<a href="/pages/about.html">
								<span class="en">ABOUT</span>關於臺灣夏至235
							</a>
						</li>
						<li>
							<a href="news.php" >
								<span class="en">NEWS</span>焦點新聞
							</a>
						</li>
						<li>
							<a href="http://www.taiwan235n.tw/moving/rules.html">
								<span class="en">EVENT</span>活動專區
							</a>
						</li>
						<li>
							<a href="http://www.taiwan235n.tw/event.html">
								<span class="en">SPECIAL</span>夏至限定
							</a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal">
								<span class="en">VIDEO</span>影音專區
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 lang">
					<ul class="nav">
						<li class="lang-model active">中</li>
						<li class="lang-model en">En</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="header_below"></div>
	</header>
	<main class="container">
		<div class="row">
			<div class="page_title col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
				<h1>NEWS 最新消息</h1>
			</div>
		</div>
		<article class="row">
			<div class="monthly col-lg-1 col-md-1 col-sm-1 col-xs-1 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 ">
				<h6 class="title">月份</h6>
				<ul class="monthly_tabs">
                    <?
                    for($i = intval(date('m')) ; $i >=5 ; $i--){
						echo '<li class="tab '.($month==(date("Y").'-'.str_pad($i,2,0,STR_PAD_LEFT)) ? "active" : "").'" onclick="location.href=\'news.php?month='.(date("Y").'-'.str_pad($i,2,0,STR_PAD_LEFT)).'\'">'.$i.'月</li>';
					}
					?>
					
				</ul>
			</div>
			<div class="news-container col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<!--顯示最新10則-->
            	<?php
				foreach($NewsList as $key => $val){
					$NewsPic = (file_exists(Upload_Path."news/".$val['news_pic']) && $val['news_pic']!='') ? Upload_Url."news/".$val['news_pic'] : ""; 
					
					echo '<section class="news_box clearfix" data-nid="'.$val['news_id'].'">
							<div class="wrap">
								<time class="time">'.$val['news_date'].'</time>
								<h4 class="title">'.$val['news_title'].'</h4>
								<h6 class="capture">'.utf8_substr(strip_tags($val['news_content']),0,200).'</h6>
							</div>
							<figure class="thumbnail">
								'.(!empty($NewsPic) ? '<img src="'.$NewsPic.'" alt="">' : "").'
							</figure>
						</section>';
				}
				?>
				
				<nav>
					<?php echo $PageStr;?>
				</nav>
			</div>
		</article>
	</main>
	<footer class="footer">
		<div class="top container-fluid">
			<div class="row">
				<div class="logo col-lg-2 col-lg-offset-3 col-md-offset-3  col-md-2 col-sm-2 col-sm-offset-3 col-xs-2 col-xs-offset-3">
					<figure class="footer_bear">
						<img src="images/footer_bear.png" alt="臺灣夏至235">
					</figure>
				</div>
				<section class="time col-lg-6  col-md-6 col-sm-6 col-xs-6">
					<div class="title">距離丙申夏至還有⋯⋯</div>
					<div class="time_content" id="clockdiv">
						<div class="unit" role="dd">
							<div class="center">
								<h6 id="clock_days"></h6>
								<p>Days</p>
							</div>
						</div>
						<div class="unit" role="hh">
							<div class="center">
								<h6 id="clock_hours"></h6>
								<p>Hours</p>
							</div>
						</div>
						<div class="unit" role="mm">
							<div class="center">
								<h6 id="clock_minutes"></h6>
								<p>Minutes</p>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="row">
				<div class="col-lg-10 col-md-10 col-lg-offset-1  col-md-offset-1 col-sm-10 col-sm-offset-1">
					<div class="sponsor">
						<section class="upper">
							<div class="sponsor_unit">
								<div class="title">指導單位</div>
								<div class="content" role="交通部">
									<a href="http://www.motc.gov.tw/ch/index.jsp" target="_blank"><div class="sponsor-trifi"></div></a>
								</div>
							</div>
							<div class="sponsor_unit">
								<div class="title">主辦單位</div>
								<div class="content" role="交通部觀光局">
									<a href="http://www.taiwan.net.tw/w1.aspx" target="_blank"><div class="sponsor-MOTC"></div></a>
								</div>
							</div>
							<div class="sponsor_unit">
								<div class="title">執行單位</div>
								<div class="content" role="安益國際展覽">
									<a href="http://www.uniplan.com/index.php?id=246" target="_blank"><div class="sponsor-uni"></div></a>
								</div>
							</div>
							<div class="counter">
								<div class="title">總瀏覽人次</div>
								<!--<div class="content" id="pvs">000000</div>-->
							</div>
						</section>
						<section class="lower">
							<div class="sponsor_unit">
								<div class="title">贊助單位</div>
								<div class="content">
									<a href="http://www.family.com.tw/marketing/" target="_blank" role="全家超商"><div class="sponsor-familyM"></div></a>
									<a href="http://csr.sony.com.tw/section/sonycreativescienceaward" target="_blank" role="sony"><div class="sponsor-sony"></div></a>
									<a href="http://www.kingyo.com.tw/myshop/kingtea168/index.aspx" target="_blank" role="清玉"><div class="sponsor-kingyo"></div></a>
									<a href="http://www.bestradio.com.tw" target="_blank" role="好事聯播網"><div class="sponsor-bestRadio"></div></a>
									<a href="http://www.gomaji.com/Taipei" target="_blank" role="夠麻吉"><div class="sponsor-gomaji"></div></a>
									<a href="http://www.kuos.com" target="_blank" role="郭元益"><div class="sponsor-kuos"></div></a>
									<a href="http://offers.amexnetwork.com/ilp?campaignID=Cam-0000537" target="_blank" role="美國運通"><div class="sponsor-AE"></div></a>
									<a href="https://www.facebook.com/Foduaiyu2012" target="_blank" role="佛都愛玉"><div class="sponsor-bu"></div></a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom container-fluid">
			<div class="row">
				<div class="copy col-lg-10 col-md-10  col-lg-offset-1  col-md-offset-1 col-sm-10 col-sm-offset-1">
					<p>中華民國交通部觀光局　版權所有　　|　　Copyright © 2016 Tourism Bureau, Rep. of China(Taiwan). All Rights Reserved.</p>
					<p>地址：106臺北市忠孝東路四段290號9樓　　|　　電話：(02)2349-1500　　|　　24小時免付費旅遊諮詢熱線：0800-01176　　|　　聯絡我們：service@taiwan235n.tw</p>
				</div>
			</div>
		</div>
	</footer>
	<div class="news_popup">
		<div class="popup_escape"></div>
		<div class="popup-box">
		<!--AJAX帶入資訊-->
			<h4 class="popup_title"><?=$NData['news_title']?></h4>
			<div class="popup_para"><?=$NData['news_content']?></div>
			<div class="close-btn"></div>
		</div>
	</div>
</body>
<script src="node_modules/slick/slick/slick.js"></script>
<script src="js/layout.js"></script>
<script src="js/news.js"></script>
<script>
$(document).ready(function(e) {
<?
if($nid > 0){
	echo "$('body').addClass('body-lock');
	$('.news_popup').addClass('active');";
}
?>
});
</script>
</html>