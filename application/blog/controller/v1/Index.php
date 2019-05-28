<?php
namespace app\blog\controller\v1;

use app\blog\controller\BaseController;
use app\blog\model\Banner as BannerModel;
use app\blog\model\Article as ArticleModel;

class Index extends BaseController
{
	
    public function index()
    {
    	$banner_id = 1;

    	$banner = BannerModel::getBanner($banner_id);
        //return json($banner->bannerItems[0]);
        //var_dump($banner->bannerItems[0]->images->base64_img);
    
    	$this->assign('banner',$banner->bannerItems);
          
        $article = ArticleModel::getArticle();
        //var_dump($article);
        
        $this->assign('article',$article);
        
        
        return $this->fetch();
    }
}