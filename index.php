<?php
include("config.php");

//資料
$NowDate  = date("Y-m-d");
	
$OrderStr = "news_date desc,";

$sqlstr = "select * from ".Table_News." where DelFlag='' and show_status='Y'  and news_date <='".date("Y-m-d")."' ".$WhereStr;
$sqlstr .= " ORDER BY ".$OrderStr."`news_id` desc LIMIT 0,3";  //取1筆，如果增減改1那個數字
$NewsList   = $g_db->getAll($sqlstr);
?>
<?php
$counter = intval(file_get_contents("counter.dat"));
 
if (!isset($_COOKIE['visitor'])) {
    $counter++;
    $fp = fopen("counter.dat", "w");
    flock($fp, LOCK_EX);   // do an exclusive lock
    fwrite($fp, $counter);
    flock($fp, LOCK_UN);   // release the lock
    fclose($fp);
    setcookie("visitor", 1, time()+3600);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:site_name" content="臺灣夏至235">
	<meta property="og:title" content="臺灣夏至235">
	<meta property="og:description" content="距離丙申夏至還有⋯⋯">
	<meta property="og:url" content="http://www.taiwan235n.tw/">
	<meta property="og:image" content="https://dl.dropboxusercontent.com/u/38967251/_IMG_8099.jpg">
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

		ga(function(tracker) {
		  var pageview = tracker.get('pageview');

		  var namedTracker = ga.getByName(pageview);
		

		  console.log(namedTracker);
		});
	</script>
</head>
<body>
	<header class="header container-fluid">
		<nav class="navbar">
			<div class="row">
				<div class="col-lg-2 col-md-2  col-sm-2  col-xs-2 navbar-header">
					<a class="navbar-brand logo" href="http://www.taiwan235n.tw/">
						<img src="http://www.taiwan235n.tw/images/logo_top_left.png" alt="臺灣夏至235">
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
							<a href="http://www.taiwan235n.tw/news.php">
								<span class="en">NEWS</span>焦點新聞
							</a>
						</li>
						<li>
							<div class="dropdown">
								<button id="nav-activities" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<span class="en">EVENT</span>活動專區
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="nav-activities">
									<li><a href="http://www.taiwan235n.tw/eating/rules.html">掂掂吃夏至235</a></li>
									<li><a href="http://www.taiwan235n.tw/moving/rules.html">嘿！會動的夏至</a></li>
									<li><a href="http://www.eventaiwan.tw/ice235/">拯救夏至村</a></li>
								</ul>
							</div>
							<!--<a href="http://www.taiwan235n.tw/moving/rules.html">
								<span class="en">EVENT</span>活動專區
							</a>-->
						</li>
						<li>
							<div class="dropdown">
								<button id="nav-activities" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<span class="en">SPECIAL</span>夏至限定
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="nav-activities">
									<li><a href="http://www.taiwan235n.tw/hotel.html">好康優惠等你拿</a></li>
								    <li><a href="http://www.taiwan235n.tw/event.html">主軸系列活動</a></li>
								    <li><a class="pdf-popup">夏至235學術研討會</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal">
								<span class="en">HIGHLIGHT</span>精彩時刻
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 lang">
					<ul class="nav">
						<li class="lang-model active"><a href="http://taiwan235n.tw/">中</a></li>
						<li class="lang-model en"><a href="http://taiwan235n.tw/index_en.php">En</a></li>
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
						<div class="gif-wrap">
							<figure class="gif">
								<img src="images/gif/03.gif" alt="">
							</figure>
							<div class="btn vidio popup" data-order="youtube_3"></div>
							<div class="video-wrap embed-responsive embed-responsive-16by9"></div>
						</div>
						<div class="gif-wrap">
							<figure class="gif">
								<img src="images/gif/01.gif" alt="">
							</figure>
							<div class="btn vidio popup" data-order="youtube_1"></div>
							<div class="video-wrap embed-responsive embed-responsive-16by9"></div>
						</div>
						<div class="gif-wrap">
							<figure class="gif">
								<img src="images/gif/02.gif" alt="">
							</figure>
							<div class="btn vidio popup" data-order="youtube_2"></div>
							<div class="video-wrap embed-responsive embed-responsive-16by9"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 box column">
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
					<div class="sponsor-banner">
						<figure>
							<img src="images/temp.jpg" alt="">
						</figure>
					</div>
					<div class="logo center">
						<img src="images/logo_center.png" alt="臺灣夏至235">
					</div>
				</div>
			</section>
			<section class="row lower">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 box normal">
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
					<a href="http://www.taiwan235n.tw/eating/rules.html">
						<figure class="box_img dot_patten">
							<img src="images/_IMG_7468.jpg" alt="主題活動">
						</figure>
						<div class="box_word">
							<div class="upper">
								<p>請你跟我這樣做</p>
							</div>
							<div class="title">
								<h3>掂掂吃夏至235</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3  col-md-3 col-sm-3 box multi">
					<div class="multi-section title">
						<div class="headline">夏至專區</div>
					</div>
					<div class="multi-section goodies">
						<a href="http://www.taiwan235n.tw/hotel.html">
							<i class="fa fa-gift icon" aria-hidden="true"></i>
							<div class="cfa">好康優惠等你拿</div>
						</a>
					</div>
					<div class="multi-section activity">
						<a href="http://www.taiwan235n.tw/event.html">
							<i class="fa fa-sun-o icon" aria-hidden="true"></i>
							<div class="cfa">主軸系列活動</div>
						</a>
					</div>
					<div class="multi-section seminar">
						<a href="#" id="pdf-popup">
							<i class="fa fa-graduation-cap icon" aria-hidden="true"></i>
							<div class="cfa">夏至235學術研討會</div>
						</a>
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
								<div class="content" id="pvs">
									<?php echo  $counter+6000;?>
								</div>
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
	<div class="pdf-wrap">
		<div class="pdf-bg pdf-close"></div>
		<div class="close-btn pdf-close"></div>
		<embed src="speaker.pdf" height="780" width="840">
	</div>
</body>

<script src="node_modules/slick/slick/slick.js"></script>
<script src="js/layout.js"></script>
<script src="js/index.js"></script>
<script>
	$(".popup").click(function () {
		$('.gif-wrap').addClass('active');
		var order = $(this).data('order');
		//console.log(order);
		if (order == 'youtube_1') {

			youtube_code = "bwRzv8LU66s";
			video = '<iframe class="embed-responsive-item" width="560" height="315" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/'+youtube_code+'?autoplay=1&playlist='+youtube_code+'&loop=1" ></iframe>';
		}else if (order == 'youtube_2') {

			youtube_code = "NRaIKd9OXN0";
			video = '<iframe class="embed-responsive-item" width="560" height="315" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/'+youtube_code+'?autoplay=1&playlist='+youtube_code+'&loop=1" ></iframe>';
		}else if (order == 'youtube_3'){

			youtube_code = "AjRMhCE44eM";
			video = '<iframe class="embed-responsive-item" width="560" height="315" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/'+youtube_code+'?autoplay=1&playlist='+youtube_code+'&loop=1" ></iframe>';
		}else {
			video = '';
		}

		$(this).siblings('.video-wrap').append(video);
	});
	
</script>
<script>
	$('.pdf-popup').click(function(e) {
		$('.pdf-wrap').addClass('active');
		console.log('pdf')
	});
	$('.pdf-close').click(function(e) {
		$('.pdf-wrap').removeClass('active');
	});
</script>
</html>