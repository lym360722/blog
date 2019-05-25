<?php

namespace app\blog\model;

use think\Model;

class Banner extends BaseModel
{
    // 一对多关联 banner_item 表
	public function bannerItems()
	{
		$banner_items = $this->hasMany('BannerItem','id','banner_id');

		return $banner_items;
	}
}
