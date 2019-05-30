<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:61:"D:\webs\tp5blog/application/blog\view\v1\comment\comment.html";i:1558751874;s:57:"D:\webs\tp5blog\application\blog\view\v1\public\base.html";i:1559203491;s:57:"D:\webs\tp5blog\application\blog\view\v1\public\head.html";i:1558692737;s:59:"D:\webs\tp5blog\application\blog\view\v1\public\header.html";i:1558752893;s:59:"D:\webs\tp5blog\application\blog\view\v1\public\footer.html";i:1552276671;}*/ ?>
<!DOCTYPE html>
<html lang="en">

        <!--HEAD-->
        <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>不见个人博客</title>
    <link rel="stylesheet" href="../public/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/static/css/about.css">
    <link rel="stylesheet" href="../public/static/blog/jquery.page.css">
    <link rel="stylesheet" href="../public/static/css/article_detail.css">
    <link rel="stylesheet" href="../public/static/css/article.css">
    <link rel="stylesheet" href="../public/static/css/moodList.css">
    <link rel="stylesheet" href="../public/static/blog/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/static/css/common.css">

    <script type="text/javascript" src="../public/static/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../public/static/blog/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../public/static/js/common.js"></script>
    <script type="text/javascript" src="../public/static/blog/jquery.page.js"></script>
</head>

    <body>

        <!--HEADER-->
        <div class="w_header">
            <!--header 头部-->
    <div class="container">
        <div class="w_header_top">
            <a href="#" class="w_logo"></a>
            <span class="w_header_nav">
				<ul>
					<li><a href="blog" class="active">首页</a></li>
					<li><a href="about">关于</a></li>
					<li><a href="article">文章</a></li>
					<li><a href="#">学习</a></li>
					<li><a href="fun">美景</a></li>
					<li><a href="moodList">说说</a></li>
					<li><a href="comment">留言</a></li>
				</ul>
			</span>
            <div class="login">
                <span><a href="login">Hi,请先登录</a></span>
            </div>
            <div class="w_search">
                <div class="w_searchbox">
                    <input type="text" placeholder="search" />
                    <button>搜索</button>
                </div>
            </div>
        </div>
    </div>

        </div>

        <!-- COLUMNS -->
        <div class="w_container">
            
	<div class="container">
		<div class="row w_main_row">
			<ol class="breadcrumb w_breadcrumb">
				<li><a href="#">首页</a></li>
				<li class="active">留言</li>
				<span class="w_navbar_tip">你，生命中最重要的过客，之所以是过客，因为你未曾为我停留。</span>
			</ol>

			<div id="qq">
				<p>有什么新鲜事想告诉大家?</p>
				<div class="message" contentEditable='true'></div>

				<div class="But">
					<img src="../public/static/images/bba_thumb.gif" class='bq'/>
					<span class='submit'>发表</span>
					<!--face begin-->
					<div class="face">
						<ul>
							<li><img src="../public/static/images/zz2_thumb.gif" title="[织]" ></li>
							<li><img src="../public/static/images/horse2_thumb.gif" title="神马]"></li>
							<li><img src="../public/static/images/fuyun_thumb.gif" title="[浮云]"></li>
							<li><img src="../public/static/images/geili_thumb.gif" title="[给力]"></li>
							<li><img src="../public/static/images/wg_thumb.gif" title="[围观]"></li>
							<li><img src="../public/static/images/vw_thumb.gif" title="[威武]"></li>
							<li><img src="../public/static/images/panda_thumb.gif" title="[熊猫]"></li>
							<li><img src="../public/static/images/rabbit_thumb.gif" title="兔子]"></li>
							<li><img src="../public/static/images/otm_thumb.gif" title="[奥特曼]"></li>
							<li><img src="../public/static/images/j_thumb.gif" title="[囧]"></li>
							<li><img src="../public/static/images/hufen_thumb.gif" title="[互粉]"></li>
							<li><img src="../public/static/images/liwu_thumb.gif" title="[礼物]"></li>
							<li><img src="../public/static/images/smilea_thumb.gif" title="呵呵]"></li>
							<li><img src="../public/static/images/tootha_thumb.gif" title="嘻嘻]"></li>
							<li><img src="../public/static/images/laugh.gif" title="[哈哈]"></li>
							<li><img src="../public/static/images/tza_thumb.gif" title="[可爱]"></li>
							<li><img src="../public/static/images/kl_thumb.gif" title="[可怜]"></li>
							<li><img src="../public/static/images/kbsa_thumb.gif" title="[挖鼻屎]"></li>
							<li><img src="../public/static/images/cj_thumb.gif" title="[吃惊]"></li>
							<li><img src="../public/static/images/shamea_thumb.gif" title="[害羞]"></li>
							<li><img src="../public/static/images/zy_thumb.gif" title="[挤眼]"></li>
							<li><img src="../public/static/images/bz_thumb.gif" title="[闭嘴]"></li>
							<li><img src="../public/static/images/bs2_thumb.gif" title="[鄙视]"></li>
							<li><img src="../public/static/images/lovea_thumb.gif" title="[爱你]"></li>
							<li><img src="../public/static/images/sada_thumb.gif" title="[泪]"></li>
							<li><img src="../public/static/images/heia_thumb.gif" title="[偷笑]"></li>
							<li><img src="../public/static/images/qq_thumb.gif" title="[亲亲]"></li>
							<li><img src="../public/static/images/sb_thumb.gif" title="[生病]"></li>
							<li><img src="../public/static/images/mb_thumb.gif" title="[太开心]"></li>
							<li><img src="../public/static/images/ldln_thumb.gif" title="[懒得理你]"></li>
							<li><img src="../public/static/images/yhh_thumb.gif" title="[右哼哼]"></li>
							<li><img src="../public/static/images/zhh_thumb.gif" title="[左哼哼]"></li>
							<li><img src="../public/static/images/x_thumb.gif" title="[嘘]"></li>
							<li><img src="../public/static/images/cry.gif" title="[衰]"></li>
							<li><img src="../public/static/images/wq_thumb.gif" title="[委屈]"></li>
							<li><img src="../public/static/images/t_thumb.gif" title="[吐]"></li>
							<li><img src="../public/static/images/k_thumb.gif" title="[打哈气]"></li>
							<li><img src="../public/static/images/bba_thumb.gif" title="[抱抱]"></li>
							<li><img src="../public/static/images/angrya_thumb.gif" title="[怒]"></li>
							<li><img src="../public/static/images/yw_thumb.gif" title="[疑问]"></li>
							<li><img src="../public/static/images/cza_thumb.gif" title="[馋嘴]"></li>
							<li><img src="../public/static/images/88_thumb.gif" title="[拜拜]"></li>
							<li><img src="../public/static/images/sk_thumb.gif" title="[思考]"></li>
							<li><img src="../public/static/images/sweata_thumb.gif" title="[汗]"></li>
							<li><img src="../public/static/images/sleepya_thumb.gif" title="[困]"></li>
							<li><img src="../public/static/images/sleepa_thumb.gif" title="[睡觉]"></li>
							<li><img src="../public/static/images/money_thumb.gif" title="[钱]"></li>
							<li><img src="../public/static/images/sw_thumb.gif" title="[失望]"></li>
							<li><img src="../public/static/images/cool_thumb.gif" title="[酷]"></li>
							<li><img src="../public/static/images/hsa_thumb.gif" title="[花心]"></li>
							<li><img src="../public/static/images/hatea_thumb.gif" title="[哼]"></li>
							<li><img src="../public/static/images/gza_thumb.gif" title="[鼓掌]"></li>
							<li><img src="../public/static/images/dizzya_thumb.gif" title="[晕]"></li>
							<li><img src="../public/static/images/bs_thumb.gif" title="[悲伤]"></li>
							<li><img src="../public/static/images/crazya_thumb.gif" title="[抓狂]"></li>
							<li><img src="../public/static/images/h_thumb.gif" title="[黑线]"></li>
							<li><img src="../public/static/images/yx_thumb.gif" title="[阴险]"></li>
							<li><img src="../public/static/images/nm_thumb.gif" title="[怒骂]"></li>
							<li><img src="../public/static/images/hearta_thumb.gif" title="[心]"></li>
							<li><img src="../public/static/images/unheart.gif" title="[伤心]"></li>
							<li><img src="../public/static/images/pig.gif" title="[猪头]"></li>
							<li><img src="../public/static/images/ok_thumb.gif" title="[ok]"></li>
							<li><img src="../public/static/images/ye_thumb.gif" title="[耶]"></li>
							<li><img src="../public/static/images/good_thumb.gif" title="[good]"></li>
							<li><img src="../public/static/images/no_thumb.gif" title="[不要]"></li>
							<li><img src="../public/static/images/z2_thumb.gif" title="[赞]"></li>
							<li><img src="../public/static/images/come_thumb.gif" title="[来]"></li>
							<li><img src="../public/static/images/sad_thumb.gif" title="[弱]"></li>
							<li><img src="../public/static/images/lazu_thumb.gif" title="[蜡烛]"></li>
							<li><img src="../public/static/images/clock_thumb.gif" title="[钟]"></li>
							<li><img src="../public/static/images/cake.gif" title="[蛋糕]"></li>
							<li><img src="../public/static/images/m_thumb.gif" title="[话筒]"></li>
							<li><img src="../public/static/images/weijin_thumb.gif" title="[围脖]"></li>
							<li><img src="../public/static/images/lxhzhuanfa_thumb.gif" title="[转发]"></li>
							<li><img src="../public/static/images/lxhluguo_thumb.gif" title="[路过这儿]"></li>
							<li><img src="../public/static/images/bofubianlian_thumb.gif" title="[bofu变脸]"></li>
							<li><img src="../public/static/images/gbzkun_thumb.gif" title="[gbz困]"></li>
							<li><img src="../public/static/images/boboshengmenqi_thumb.gif" title="[生闷气]"></li>
							<li><img src="../public/static/images/chn_buyaoya_thumb.gif" title="[不要啊]"></li>
							<li><img src="../public/static/images/daxiongleibenxiong_thumb.gif" title="[dx泪奔]"></li>
							<li><img src="../public/static/images/cat_yunqizhong_thumb.gif" title="[运气中]"></li>
							<li><img src="../public/static/images/youqian_thumb.gif" title="[有钱]"></li>
							<li><img src="../public/static/images/cf_thumb.gif" title="[冲锋]"></li>
							<li><img src="../public/static/images/camera_thumb.gif" title="[照相机]"></li>
						</ul>
					</div>
					<!--face end-->
				</div>
			</div>
			<!--qq end-->
			<div id="time1"></div>
			<!--msgCon begin-->
			<div class="msgCon">
			</div>

		</div>
	</div>
	<!--toTop-->
	<div id="shape">
		<div class="shapeColor">
			<div class="shapeFly">
			</div>
		</div>
	</div>

	<script type="text/javascript">

	  //点击小图片，显示表情
	  $(".bq").click(function(e){
		$(".face").slideDown();//慢慢向下展开
		e.stopPropagation();   //阻止冒泡事件
	  });

	  //在桌面任意地方点击它是关闭
	  $(document).click(function(){
		$(".face").slideUp();//慢慢向上收
	  });

	  //点击小图标时，添加功能
	  $(".face ul li").click(function(){
		var simg=$(this).find("img").clone();
		$(".message").append(simg);
	  });

	  //点击发表按扭，发表内容
	  $("span.submit").click(function(){

		var txt=$(".message").html();
		if(txt==""){
		  $('.message').focus();//自动获取焦点
		  return;
		}

		$(".msgCon").prepend("<div class='msgBox'><dl><dt><img src='img/sight1.jpg' width='50' height='50'/></dt><dd>遇见</dd></dl><div class='msgTxt'>"+txt+"</div></div>");
	  });
	</script>

        </div>

        <!-- FOOTER -->
        <div class="w_foot">
            <div class="w_foot_copyright">
    @遇见 个人所有,翻版必究
</div>

        </div>

    </body>
</html>