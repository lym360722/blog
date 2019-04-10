<?php
/**
 * Created by PhpStorm.
 * User: bella
 * Date: 2019/3/11 0011
 * Time: 16:48
 */

namespace app\blog\controller\v1;

use app\blog\controller\BaseController;

class Register extends BaseController
{
    public function index()
    {
       return $this->fetch('register');
    }
}