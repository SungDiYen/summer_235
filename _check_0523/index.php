<?php
include("config.php");

//資料
$NowDate  = date("Y-m-d");
	
$OrderStr = "news_date desc,";

$sqlstr = "select * from ".Table_News." where DelFlag='' and show_status='Y'  and news_date <='".date("Y-m-d")."' ".$WhereStr;
$sqlstr .= " ORDER BY ".$OrderStr."`news_id` desc LIMIT 0,1";  //取1筆，如果增減改1那個數字
$NewsList   = $g_db->getAll($sqlstr);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:site_name" content="臺灣夏至235">
	<meta property="og:title" content="臺灣夏至235">
	<meta property="og:description" content="創作無上限 你就是導演<_backup_0513，今年夏天用你的風格，玩出你的「臺灣夏至235」！只要拍攝上傳10-15秒的創意短片，眾多Sony好禮等你來拿！">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.taiwan235n.tw/">
	<meta property="og:image" content="http://taiwan235n.tw/images/_IMG_8099.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>臺灣夏至235</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/index.css">
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
							<a href="http://www.taiwan235n.tw/pages/about.html">
								<span class="en">ABOUT</span>關於臺灣夏至235
							</a>
						</li>
						<li>
							<a href="news.php">
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
								<span class="en">VEDIO</span>影音專區
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
	</header>
	<main class="">
		<article class="container-fluid">
			<section class="row upper">
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 box">
					<div class="box_img slider">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" width="560" height="315" frameborder="0" allowfullscreen
									src="https://www.youtube.com/embed/NRaIKd9OXN0?
									autoplay=1&
									playlist=NRaIKd9OXN0&
									loop=1" ></iframe>
						</div>
						<!--
						<img src="images/hero_1120 x 630-01.jpg" alt="">
						<img src="images/hero_1120 x 630-02.jpg" alt="">
						<img src="images/hero_1120 x 630-03.jpg" alt="">
						-->
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 box normal">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<figure class="box_img dot_patten">
							<img src="images/IMG_7468.JPG" alt="大口吃遍臺灣夏至235">
						</figure>
						<div class="box_word">
							<div class="upper">
								<p>請你跟我這樣做</p>
							</div>
							<div class="title">
								<h3>大口吃遍臺灣夏至235</h3>
							</div>
						</div>
					</a>
					<div class="logo center">
						<img src="images/logo_center.png" alt="臺灣夏至235">
					</div>
				</div>
			</section>
			<section class="row lower">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 box normal">
					<!--05/16 連結開放-->
					<a href="http://www.eventaiwan.tw/ice235/" target="_blank">
						<figure class="box_img dot_patten slider_village">
							<img src="images/banner960X920.jpg" alt="拯救夏至村">
							<img src="images/banner960X920-2.jpg" alt="拯救夏至村">
							<img src="images/banner960X920-3.jpg" alt="拯救夏至村">
						</figure>
						<div class="box_word">
							<div class="upper">
								<p>出冰吧！</p>
							</div>
							<div class="title">
								<h3>拯救夏至村</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 box normal">
					<a href="http://www.taiwan235n.tw/moving/rules.html">
						<figure class="box_img dot_patten dark">
							<img src="images/IMG_8099.jpg" class=""alt="嘿！會動的夏至！">
						</figure>
						<div class="box_word">
							<div class="upper">
								<p>夏至主題活動</p>
							</div>
							<div class="title">
								<h3>嘿！會動的夏至！</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 box normal">
					<a href="http://www.taiwan235n.tw/event.html">
						<figure class="box_img dot_patten">
							<img src="images/5_box.jpg" alt="主題活動">
						</figure>
						<div class="box_word">
							<div class="upper">
								<p>夏至限定</p>
							</div>
							<div class="title">
								<h3>主題活動</h3>
							</div>
						</div>
					</a>
				</div>
				<!--<div class="col-lg-3 box goodies">
					<a href="#">
						<i class="icon"><img src="images/ticket_icon.png" alt=""></i>
						<div class="cfa">夏至限定好康等你拿</div>
					</a>
				</div>
				<div class="col-lg-3 box news">
					<div class="title">
						<h3>
							<span class="en">NEWS</span>
							焦點新聞
						</h3>
					</div>
					<div class="content">
						<ul class="list-group">
                            <?php
							foreach($NewsList as $key => $val){
								
								echo '<li class="list-group-item">
										  <a href="news.php?nid='.$val['news_id'].'">
											  <span class="date">'.date('m.d',strtotime($val['news_date'])).'</span>
											  '.$val['news_title'].'
										  </a>
									  </li>';
							}
							?>
							
						</ul>
					</div>
					<a href="news.php" class="btn more">more</a>
				</div>-->
				<div class="col-lg-3  col-md-3 col-sm-3 box fourth">
					<div class="goodies">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-ticket icon" aria-hidden="true"></i>
							<div class="cfa">夏至限定好康等你拿</div>
						</a>
					</div>
					<div class="news">
						<div class="title">
							<h3>
								<span class="en">NEWS</span>
								焦點新聞
							</h3>
						</div>
						<div class="content">
							<ul class="list-group">
                            	<?php
								foreach($NewsList as $key => $val){
									
									echo '<li class="list-group-item">
											  <a href="news.php?nid='.$val['news_id'].'">
												  <span class="date">'.date('m.d',strtotime($val['news_date'])).'</span>
												  '.$val['news_title'].'
											  </a>
										  </li>';
								}
								?>
								
							</ul>
						</div>
						<a href="news.php" class="btn more" >more</a>
					</div>
				</div>
			</section>
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
								<script type="text/javascript" src="http://counter1.freecounter.ovh/private/counter.js?c=7bdd3022e16e38831ee11a0d08ed8b07"></script>
							</div>
						</section>
						<section class="lower">
							<div class="sponsor_unit">
								<div class="title">贊助單位</div>
								<div class="content">
									<a href="http://www.family.com.tw/marketing/" target="_blank" role="全家超商"><div class="sponsor-familyM"></div></a>
									<a href="http://www.sony.com.tw/zh" target="_blank" role="sony"><div class="sponsor-sony"></div></a>
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
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">活動尚未開跑  敬請期待</h4>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
		      </div>
		    </div>
		  </div>
	</div>
</body>
<script src="node_modules/slick/slick/slick.js"></script>
<script src="js/layout.js"></script>
<script src="js/index.js"></script>
</html>