<?php
/**
 * Created by PhpStorm.
 * User: bella
 * Date: 2019/3/8 0008
 * Time: 16:58
 */

namespace app\blog\controller\v1;


use app\blog\controller\BaseController;

class Fun extends BaseController
{
    public function index()
    {
        return $this->fetch('fun');
    }
}