<?php
include("../config.php");

//分頁設定
$_PageShowNum   = 10;                               //每頁預設顯示數量
$_PageNoShowNum = 9;                               //每頁預設顯示項目數量

$PageNO = (isset($_GET['pageno']) && $_GET['pageno'] > 0) ? (int)$_GET['pageno'] : 0;
//資料
$NowDate  = date("Y-m-d");
	
$OrderStr = "sortnum asc,";

$sqlstr = "select * from ".Table_Movie." where DelFlag='' and show_status='Y'  and involve_youtube!='' ".$WhereStr;
$DataSum = $g_db->numRows($g_db->query($sqlstr));
$startuprow = $PageNO * $_PageShowNum;
$sqlstr .= " ORDER BY ".$OrderStr."`movie_list_id` desc LIMIT ".$startuprow.",".$_PageShowNum;
$MovieList   = $g_db->getAll($sqlstr);
//分頁列表
$Pageshow = new PageShow($DataSum, $_PageShowNum, $PageNO, "voting.php");

$Pageshow->TotalPage(5);
$PageStr = $Pageshow->PageList('MORE_WEB');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:site_name" content="臺灣夏至235">
	<meta property="og:title" content="臺灣夏至235-人氣票選">
	<meta property="og:type" content="vedio.movie">
	<meta property="og:url" content="http://www.taiwan235n.tw/">
	<meta property="og:image" content="http://taiwan235n.tw/images/_IMG_8099.jpg">
	<meta property="og:app_id" content="638724836280634">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>臺灣夏至235</title>
	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/moving.css">
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
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '638724836280634',
		  		xfbml      : true,
		  		status     : true,
		  		cookie     : true,
				version    : 'v2.6'
				});
			};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		function postToFeed(title, desc, url, image) {
		    var obj = {
		    	method: 'feed',
		    	link: url,
		    	picture: image,
		    	name: title,
		    	description: desc
		    };
		    function callback(response) {}
		    FB.ui(obj, callback);
		}
	</script>
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
						<img src="../images/logo_top_left.png" alt="臺灣夏至235">
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
							<a href="../news.php" >
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
		<div class="header_below"></div>
	</header>
	<main class="container">
		<article>
			<div class="upper">
				<ul class="nav inline-gutter">
					<li>
						<a class="btn" href="rules.html">活動辦法</a>
					</li>
					<li class="active">
						<a class="btn" href="voting.php">人氣票選</a>
					</li>
					<li>
						<a class="btn" href="involve.html">我要參加</a>
					</li>
				</ul>
				<div class="intro">
					<h1 class="title">嘿！會『動』的夏至！ - 創意極短片人氣招募中！</h1>
 					<h3 class="title_exp">
 						看了那麼多充滿創意的參賽影片後，心中有沒有感動萬分呢？<br>
 						自 2016.06.01 開始至 07.10，投票給你最喜歡的影片，<br>
 						就有機會得到我們的喔熊組長周邊商品，投越多機會越多，快來一起幫你喜歡的影片衝人氣吧！
 					</h3>
				</div>
			</div>
			<div class="lower rules-voting">
				<div class="row">
					<?php
                    foreach($MovieList as $mkey => $mval){
					?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
						<div class="vedio-wrap">
							<div class="embed-responsive embed-responsive-4by3">
								<?=$mval['involve_youtube']?>
							</div>
							<div class="details">
								<div class="left">
									<div class="order_num">
										<?=intval($mval['movie_list_no'])?>
									</div>
									<h4 class="title"><?=$mval['involve_movie']?></h4>
									<h6 class="name"><?=$mval['involve_name']?></h6>
								</div>
								<div class="right">
									<div class="btn-group">
										<div class="btn" data-toggle="modal" data-target="#myModal">投票</div>
										<a class="btn fb btnShare" data-image="none.jpg" 
											data-title="<?=$mval['involve_movie']?>" data-desc="<?=$mval['involve_intro']?>" href="https://www.youtube.com/embed/_XsAVcpEU64">分享</a>
									</div>
									<div class="like">
										<span class="glyphicon glyphicon-heart"></span>
										<span class="num"><?=str_pad($mval['votes'],3,0,STR_PAD_LEFT)?><span class="unit">票</span></span>
									</div>
								</div>
							</div>
							<div class="intro">
								<?=$mval['involve_intro']?>
							</div>
						</div>
					</div>
                    <?php
					}
					?>
					
			</div>
			<ul class="pagination">
				<li>
					<a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				    </a>
			    </li>
				<li><a href="#" class="active">1</a></li>
				<li><a href="#">2</a></li>
				<li>
					<a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				    </a>
			    </li>
			</ul>
		</article>
	</main>

	<footer class="footer">
		<div class="top container-fluid">
			<div class="row">
				<div class="logo col-lg-2 col-lg-offset-3 col-md-offset-3  col-md-2 col-sm-2 col-sm-offset-3 col-xs-2 col-xs-offset-3">
					<figure class="footer_bear">
						<img src="../images/footer_bear.png" alt="臺灣夏至235">
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
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">活動尚未開跑  敬請期待</h4>
		      </div>
		      <!--<div class="modal-body">
		        敬請期待
		      </div>-->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
		      </div>
		    </div>
		  </div>
	</div>
</body>
<script src="../node_modules/slick/slick/slick.js"></script>
<script src="../js/layout.js"></script>
<script>
	$('.btnShare').click(function(){
		elem = $(this);
		postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

		return false;
	});
</script>
</html>