<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:62:"D:\webs\lymloook.com/application/blog\view\v1\index\index.html";i:1559205447;s:62:"D:\webs\lymloook.com\application\blog\view\v1\public\base.html";i:1559203491;s:62:"D:\webs\lymloook.com\application\blog\view\v1\public\head.html";i:1558692737;s:64:"D:\webs\lymloook.com\application\blog\view\v1\public\header.html";i:1558752893;s:70:"D:\webs\lymloook.com\application\blog\view\v1\public\rightsidebar.html";i:1559204832;s:64:"D:\webs\lymloook.com\application\blog\view\v1\public\footer.html";i:1552276671;}*/ ?>
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
        <div class="col-lg-9 col-md-9 w_main_left">
            <!--滚动图开始-->
            <div class="panel panel-default">
                <div id="w_carousel" class="carousel slide w_carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): if( count($banner)==0 ) : echo "" ;else: foreach($banner as $key=>$vo): if($vo['id'] == '1'): ?>
                            <li data-target="#w_carousel" data-slide-to="<?php echo $vo['id']; ?>" class="active"></li>
                            <?php else: ?>
                            <li data-target="#w_carousel" data-slide-to="<?php echo $vo['id']; ?>"></li>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>	
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): if( count($banner)==0 ) : echo "" ;else: foreach($banner as $key=>$vo): if($vo['id'] == '1'): ?>
                            <div class="item active">
                                <img src="<?php echo $vo['images']['base64_img']; ?>" alt="..." >
                                <div class="carousel-caption">
                                    <h4 style="color: rgba(153,255,82,0.97)"><?php echo $vo['watermark']; ?></h4>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="item">
                                <img src="<?php echo $vo['images']['base64_img']; ?>" alt="..." >
                                <div class="carousel-caption">
                                    <h4><?php echo $vo['watermark']; ?></h4>
                                </div>
                            </div>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <!-- Controls 按钮控制翻页-->
                    <a class="left carousel-control" href="#w_carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#w_carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">最新发布</h3>
                </div>

                <div class="panel-body">

                    <!--文章列表开始-->
                    <div class="contentList">
                        <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h4><a class="title" href="articledetail"><?php echo $vo['title']; ?></a></h4>
                                    <p>
                                        <?php if(is_array($vo['lable_id']) || $vo['lable_id'] instanceof \think\Collection || $vo['lable_id'] instanceof \think\Paginator): if( count($vo['lable_id'])==0 ) : echo "" ;else: foreach($vo['lable_id'] as $key=>$v): ?>
                                            <a class="label label-default"><?php echo $v['name']; ?></a>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </p>
                                    <p class="overView"><?php echo $vo['content']; ?></p>
                                    <p>
                                        <span class="count"><i class="glyphicon glyphicon-user"></i><a href="#"><?php echo $vo['author_name']; ?></a></span>
                                        <span class="count"><i class="glyphicon glyphicon-eye-open"></i>阅读:<?php echo $vo['read_num']; ?></span>
                                        <span class="count"><i class="glyphicon glyphicon-comment"></i>评论:</span>
                                        <span class="count"><i class="glyphicon glyphicon-time"></i><?php echo $vo['create_time']; ?></span>
                                    </p>
                                    <a title="<?php echo $vo['title']; ?>" href="articledetail" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
                                </div>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="contentleft">
                                        <h4><a class="title" href="articledetail"><?php echo $vo['title']; ?></a></h4>
                                        <p>
                                            <?php if(is_array($vo['lable_id']) || $vo['lable_id'] instanceof \think\Collection || $vo['lable_id'] instanceof \think\Paginator): if( count($vo['lable_id'])==0 ) : echo "" ;else: foreach($vo['lable_id'] as $key=>$v): ?>
                                                <a class="label label-default"><?php echo $v['name']; ?></a>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </p>
                                        <p class="overView"><?php echo $vo['content']; ?></p>
                                        <p>
                                            <span class="count"><i class="glyphicon glyphicon-user"></i><a href="#"><?php echo $vo['author_name']; ?></a></span> 
                                            <span class="count"><i class="glyphicon glyphicon-eye-open"></i>阅读:<?php echo $vo['read_num']; ?></span>
                                            <span class="count"><i class="glyphicon glyphicon-comment"></i>评论:</span>
                                            <span class="count"><i class="glyphicon glyphicon-time"></i><?php echo $vo['create_time']; ?></span>
                                        </p>
                                        <a title="<?php echo $vo['title']; ?>" href="articledetail" target="_blank" class="readmore1">阅读全文&gt;&gt;</a>
                                    </div>
                                    <div class="contentImage">
                                        <div class="row">
                                            <a href="#" class="thumbnail w_thumbnail">
                                                <img src="<?php echo $vo['image']['base64_img']; ?>" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                       
                        
                    </div>
                    <!--文章列表结束-->
                </div>
            </div>
        </div>
        <!--右侧开始-->
        <!--右侧开始-->
<div class="col-lg-3 col-md-3 w_main_right">

    <div class="panel panel-default sitetip">
        <a href="#">
            <strong>站点公告</strong>
            <h3 class="title"><?php echo $announcement->title; ?></h3>
            <p class="overView"><?php echo $announcement->content; ?></p>
        </a>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">热搜美文</h3>
        </div>
        <div class="panel-body">
            <div class="labelList">
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/xiaoyuanwenzhang/aiqing/20070811/666.html">青春</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/aiqingwenzhang/ganwu/20070813/703.html">流年似水</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/aiqingwenzhang/ganwu/20070824/812.html">诗和远方</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/lizhiwenzhang/20140607/293554.html">梦想与激情</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/lizhiwenzhang/20070928/1039.html">努力</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/qinqingwenzhang/20070811/683.html">爱</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/aiqingwenzhang/ganwu/20070827/833.html">花开花落</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/lizhiwenzhang/gushi/20070907/972.html">流浪</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/qinqingwenzhang/20070811/683.html">父爱</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/qinqingwenzhang/20070713/202.html">君生我未生 </a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/qinqingwenzhang/20070713/202.html">我生君已老</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/renshengzheli/shengming/20070925/1032.html">最好的年龄</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/renshengzheli/ganwu/20070928/1034.html">知足常乐</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/renshengzheli/shengming/20070830/875.html">最美时光</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/shenghuoganwu/20070726/389.html">宽容</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/xiaoyuanwenzhang/aiqing/20070811/666.html">回忆</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/aiqingwenzhang/ganwu/20070813/703.html">流年似水</a>
                <a class="label label-default" href="http://www.duwenzhang.com/wenzhang/aiqingwenzhang/ganwu/20070824/812.html">诗和远方</a>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">最新发布</h3>
        </div>
        <div class="panel-body">
            <ul class="list-unstyled sidebar">
                <li>
                    <a href="http://www.duwenzhang.com/wenzhang/renshengzheli/ganwu/20180416/387617.html">在风雨兼程的人生路上，每个人都在叩击幸福之门，都在寻找那份属于自己的幸福。</a>
                </li>
                <li>
                    <a href="http://www.duwenzhang.com/wenzhang/qinqingwenzhang/20070713/202.html">君生我未生，我生君已老。恨不生同时，日日与君好</a>
                </li>
                <li>
                    <a href="http://www.duwenzhang.com/wenzhang/aiqingwenzhang/ganwu/20070824/812.html">我静静的站在角落里，看着这个世界，看着来来往往的人群。
                        每个人都步履匆匆的从我的身边走过，渐行渐远。
                        似乎所有的人都处于已经离开我，或者将要离开，以及正在离开……</a>
                </li>
                <li>
                    <a href="http://www.duwenzhang.com/wenzhang/renshengzheli/20070822/794.html">　跟随自己，为自己奔跑，抵制物欲的袭击，使心不为形役。即使自己不能成为圣人，只要心中有了圣人的目标，在别人眼里，你也将成为一位圣者。</a>
                </li>
                <li>
                    <a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/20070805/582.html">喜欢自己一个人的时候听着淡淡的歌或者眯着眼睛想一些往事，总感觉那是很惬意的事情。我才发现，这回忆就像是毒药，而我中毒很深。</a>
                </li>
                <li>
                    <a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/shenghuoganwu/20070726/389.html">有句老话：有容乃大。恰如大海，正因为它极谦逊地接纳了所有的江河，才有了天下最壮观的辽阔与豪迈！</a>
                </li>
                <li>
                    <a href="http://www.duwenzhang.com/wenzhang/youqingwenzhang/20180213/385395.html">如果我死了·若是有来生——笔砚先生，如有来生，我一定不会这样选择！</a>
                </li>
                <li>
                    <a href="/post/05203355">生活和电影不一样，我为我的爱寻找方向，该靠在你的身旁，还是一个人去流浪......</a>
                </li>
                <li>
                    <a href="http://www.duwenzhang.com/wenzhang/renshengzheli/ganwu/20070826/827.html">美好的生活应该是时时拥有一颗轻松自在的心，不管外界如何变化，自己都能有一片清静的天地。</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">友情链接</h3>
        </div>
        <div class="panel-body">
            <div class="newContent">
                <ul class="list-unstyled sidebar shiplink">
                    <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): if( count($links)==0 ) : echo "" ;else: foreach($links as $key=>$vo): ?>
                    <li>
                        <a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['linkname']; ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">小窗风景如画</h3>
        </div>
        <div class="panel-body">
            <img src="<?php echo $minImage->base64_img; ?>" style="height: 250.5px;width: 230.5px;" />
        </div>
    </div>

</div>
    </div>
</div>

<!--toTop-->
<script type="text/javascript">
    var $backToTopEle = $('<a href="javascript:void(0)" class="Hui-iconfont toTop" title="返回顶部" alt="返回顶部" style="display:none">^</a>').appendTo($("body")).click(function () {
        $("html, body").animate({scrollTop: 0}, 120);
    });
    var backToTopFun = function () {
        var st = $(document).scrollTop(),
                winh = $(window).height();
        (st > 0) ? $backToTopEle.show() : $backToTopEle.hide();
        if (!window.XMLHttpRequest) {
            $backToTopEle.css("top", st + winh - 166);
        }
    };

    $(function () {
        $(window).on("scroll", backToTopFun);
        backToTopFun();
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