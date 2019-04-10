<?php
/**
 * Created by PhpStorm.
 * User: bella
 * Date: 2019/3/8 0008
 * Time: 16:55
 */

namespace app\blog\controller\v1;


use app\blog\controller\BaseController;

class ArticleDetail extends BaseController
{
    public function index()
    {
        return $this->fetch('articledetail');
    }
}