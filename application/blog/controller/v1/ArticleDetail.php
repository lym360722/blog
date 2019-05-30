<?php
namespace app\blog\controller\v1;

use app\blog\controller\BaseController;
use app\blog\model\Announcement as AnnouncementModel;
use app\blog\model\MinImage as MinImageModel;
use app\blog\model\Links as LinksModel;

class ArticleDetail extends BaseController
{
    public function index()
    {
        
        
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
        
        return $this->fetch('articledetail');
    }
}