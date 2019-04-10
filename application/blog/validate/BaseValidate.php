<?php
/**
 * Created by PhpStorm.
 * User: 刘玉敏
 * Date: 2019/3/9
 * Time: 14:13
 */

namespace app\blog\validate;



use app\lib\exception\ParamException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    /**
     * 统一在此验证HTTP传入的参数
     * @return bool
     * @throws ParamException
     */
    public function goCheck()
    {
        $request = Request::instance();
        $param   = $request->param();
        $result  = $this->batch()->check($param);
        if(!$result){
            $err = new ParamException();
            $err->msg = $this->error;
            throw $err;
        }else{
            return true;
        }
    }
}