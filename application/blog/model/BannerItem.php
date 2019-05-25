<?php

namespace app\blog\model;

use think\Model;

class BannerItem extends BaseModel
{
    // 一对一关联 images表  外键在BannerItem表中用 belongTo('关联模型名','外键名','关联表主键名',['模型别名定义'],'join类型')
    public function image()
    {
    	$image = $this->belongsTo('Images','img_id','id');

    	return $image;
    }
}
