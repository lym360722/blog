<?php

namespace app\blog\model;

use think\Model;

class BannerItem extends BaseModel
{

	protected $hidden = ['create_time','update_time','delete_time'];

    // 一对一关联 images表  
    public function images()
    {
    	$image = $this->belongsTo('Images','img_id','id');

    	return $image;
    }
}
