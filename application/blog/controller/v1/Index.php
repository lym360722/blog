<?php
namespace app\blog\controller\v1;

use app\blog\controller\BaseController;

class Index extends BaseController
{
	
    public function index()
    {
        return $this->fetch();
    }
}
