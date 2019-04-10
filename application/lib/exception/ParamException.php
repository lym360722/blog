<?php
/**
 * Created by PhpStorm.
 * User: 刘玉敏
 * Date: 2019/3/9
 * Time: 15:59
 */

namespace app\lib\exception;


class ParamException extends BaseException
{
    public $code      = 400;
    public $msg       = '参数错误';
    public $errorCode = 40000;
}