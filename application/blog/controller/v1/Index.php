<?php
namespace app\blog\controller\v1;

use app\blog\controller\BaseController;
use app\blog\service\Banner as BannerService;


class Index extends BaseController
{
	
    public function index()
    {
    	$banner_id = 1;

    	$banner = BannerService::getBanner($banner_id);

    	var_dump($banner);

        return $this->fetch();
    }
}