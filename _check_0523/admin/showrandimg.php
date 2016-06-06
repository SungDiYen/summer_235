<?php
   /*   网站验证码程序
    *   运行环境： PHP5.0.18 下调试通过
    *   需要 gd2 图形库支持（PHP.INI中 php_gd2.dll开启）
    *   文件名: showimg.php
    *   作者：  17php.com
    *   Date:   2007.03
    *   技术支持： www.17php.com
    */
   //随机生成一个 $num_max 位数的数字验证码
    $num="";
	$num_max = 6;
	$img_height = 25;
	$img_width = 80;
	$mass = 200;
    for($i=0;$i<$num_max;$i++){
    $num .= rand(0,9);
    }
	///
   //$num_max  位验证码也可以用rand(1000,9999)直接生成
   //将生成的验证码写入session，备验证页面使用
    session_start();
	
	//session name
	$RandType = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : "sole";
	$RandSession = ($RandType=="sole") ? "Checknum" : "Checknum_".($_GET['tag']);
	
    $_SESSION[$RandSession] = $num;
   //创建图片，定义颜色值
    Header("Content-type: image/PNG");
    srand((double)microtime()*1000000);
    $im = imagecreate($img_width,$img_height);
    $black = ImageColorAllocate($im, 0,0,0);
    $gray = ImageColorAllocate($im, 200,200,200);
    ImageColorTransparent($im,$gray);
    imagefill($im,0,0,$gray);

    //随机绘制两条虚线，起干扰作用
/*
    $style = array($black, $black, $black, $black, $black, $gray, $gray, $gray, $gray, $gray);
    imagesetstyle($im, $style);
    $y1=rand(0,$img_height);
    $y2=rand(0,$img_height);
    $y3=rand(0,$img_height);
    $y4=rand(0,$img_height);
    imageline($im, 0, $y1, $img_width, $y3, IMG_COLOR_STYLED);
    imageline($im, 0, $y2, $img_width, $y4, IMG_COLOR_STYLED);
*/
    //在画布上随机生成大量黑点，起干扰作用;
/*
    for($i=0;$i<$mass;$i++)
    {
   imagesetpixel($im, rand(0,$img_width), rand(0,$img_height), $black);
    }
*/
    //将四个数字随机显示在画布上,字符的水平间距和位置都按一定波动范围随机生成
    $strx=rand(3,8);
    for($i=0;$i<$num_max;$i++){
    $strpos=rand(1,8);
    imagestring($im,5,$strx,$strpos, substr($num,$i,1), $black);
    $strx+=rand(8,14);
    }
    ImagePNG($im);
    ImageDestroy($im);
   ?>