<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use \think\Route;

Route::get('blog','blog/v1.index/index');//首页页面

Route::get('login','blog/v1.login/index');//登录页面

Route::get('about','blog/v1.about/index');//关于页面

Route::get('article','blog/v1.article/index'); //博文页面

Route::get('fun','blog/v1.fun/index');//娱乐页面

Route::get('moodlist','blog/v1.moodList/index');//说说页面

Route::get('comment','blog/v1.comment/index');//留言页面

Route::get('articledetail','blog/v1.articleDetail/index');//博文详情页面

Route::get('register','blog/v1.register/index'); //注册页面
