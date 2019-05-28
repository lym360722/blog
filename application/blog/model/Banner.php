<?php

namespace app\blog\model;

use think\Model;

class Banner extends BaseModel
{

    // 一对多关联 banner_item 表 hasMany('关联模型名','外键名','主键名',['模型别名定义']);
	public function bannerItems()
	{
		$banner_items = $this->hasMany('BannerItem','banner_id','id');

		return $banner_items;
	}
	public static function getBanner($banner_id)
    {
        $banner = self::with(['bannerItems','bannerItems.images'])->find($banner_id);

        return $banner;
    }
}
