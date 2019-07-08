<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:58:"D:\webs\lymloook.com/application/blog\view\v1\fun\fun.html";i:1558753300;s:62:"D:\webs\lymloook.com\application\blog\view\v1\public\base.html";i:1559203491;s:62:"D:\webs\lymloook.com\application\blog\view\v1\public\head.html";i:1558692737;s:64:"D:\webs\lymloook.com\application\blog\view\v1\public\header.html";i:1558752893;s:64:"D:\webs\lymloook.com\application\blog\view\v1\public\footer.html";i:1552276671;}*/ ?>
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
            
<style type="text/css">
   html,body{
     width: 100%;
     height:100%;
     background-image: url("../public/static/img/bg.jpg");
   }
   .fun {
    max-width: 1000px;
    margin:100px auto;
    position: relative;
  }
  .fun img{
    width: 280px;
    padding: 10px;
    border: 1px solid #ccc;
    box-shadow:2px 2px 3px rgba(50,50,50,.4);
    position: absolute;
    z-index: 1;
    background: #fff; }
  .fun img:nth-child(1){
    left: 0px;
    top:0px;
    -webkit-transform:rotate(-5deg);
    -ms-transform:rotate(-5deg);
    transform:rotate(-5deg);
  }
  .fun img:nth-child(2){
    left: 300px;
    top: 0px;
    -webkit-transform:rotate(4deg);
    -ms-transform:rotate(4deg);
    transform:rotate(4deg);
  }
  .fun img:nth-child(3){
    left:600px;
    top:0;
    -webkit-transform:rotate(-6deg);
    -ms-transform:rotate(-6deg);
    transform:rotate(-6deg);
  }
  .fun img:nth-child(4){
    left:0px;
    top: 200px;
    -webkit-transform:rotate(3deg);
    -ms-transform:rotate(3deg);
    transform:rotate(3deg);
  }
  .fun img:nth-child(5){
    left: 310px;
    top: 200px;
    -webkit-transform:rotate(-20deg);
    -ms-transform:rotate(-20deg);
    transform:rotate(-20deg);
  }
  .fun img:nth-child(6){
    left: 600px;
    top:200px;
    -webkit-transform:rotate(3deg);
    -ms-transform:rotate(3deg);
    transform:rotate(3deg);
  }
  .fun img:hover{
    -webkit-transform:rotate(0deg) scale(1.5);
    -ms-transform:rotate(0deg) scale(1.5);
    transform:rotate(0deg) scale(1.5);
    -webkit-transition:all 0.5s ease-in;
    transition:all 0.5s ease-in;
    z-index: 2;
  }
</style>
<div class="w_container">
  <div class="container">
    <div class="row w_main_row">
        <ol class="breadcrumb w_breadcrumb" style="margin-top: -50px;">
            <li><a href="#">首页</a></li>
            <li class="active">美景</li>
            <span class="w_navbar_tip">前言—一个人至少为了自己要不顾一切去远方流浪！</span>
        </ol>
        <div class="fun">
            <img src="../public/static/img/sight1.jpg"/>
            <img src="../public/static/img/sight2.jpg"/>
            <img src="../public/static/img/sight3.jpg"/>
            <img src="../public/static/img/sight4.jpg"/>
            <img src="../public/static/img/sight5.jpg"/>
            <img src="../public/static/img/sight6.jpg"/>
        </div>
    </div>
  </div>
</div>

        </div>

        <!-- FOOTER -->
        <div class="w_foot">
            <div class="w_foot_copyright">
    @遇见 个人所有,翻版必究
</div>

        </div>

    </body>
</html>