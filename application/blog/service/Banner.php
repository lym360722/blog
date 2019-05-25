<?php
namespace app\blog\service;

use app\blog\model\Banner as BannerModel;

class Banner
{
	
	public static function getBanner($banner_id)
	{
		$banner = BannerModel::with('bannerItems,bannerItems.image')->where(['id' => $banner_id])->find();
		
		return $banner;
	}
}