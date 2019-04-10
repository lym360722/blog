<?php
/**
 * Created by PhpStorm.
 * User: 刘玉敏
 * Date: 2019/3/9
 * Time: 14:05
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    // HTTP 状态码
    public $code        = 400;

    // 错误具体信息
    public $msg         = '参数错误';

    // 自定义错误码
    public $errorCode   = 10000;

}