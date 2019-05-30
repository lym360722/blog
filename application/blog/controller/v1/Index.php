<?php
namespace app\blog\controller\v1;

use app\blog\controller\BaseController;
use app\blog\model\Banner as BannerModel;
use app\blog\model\Article as ArticleModel;
use app\blog\model\Announcement as AnnouncementModel;
use app\blog\model\MinImage as MinImageModel;
use app\blog\model\Links as LinksModel;
class Index extends BaseController
{
	
    public function index()
    {
        //首页轮播图
    	$banner_id = 1;
    	$banner = BannerModel::getBanner($banner_id);
    	$this->assign('banner',$banner->bannerItems);
          
        //首页文章
        $article = ArticleModel::getArticle();
        $this->assign('article',$article);
        
        // 站点公告
        $announcement = AnnouncementModel::getAnnouncement();
        $this->assign('announcement',$announcement);
        
        // 右下角小窗口图片
        $id = 1;
        $img = MinImageModel::getMinImage($id);
        $this->assign('minImage',$img);
        
        // 友情链接
        $links = LinksModel::getLink();
        $this->assign('links',$links);
        
        return $this->fetch();
    }
}