<?php
/**
 * Created by PhpStorm.
 * User: 刘玉敏
 * Date: 2019/3/9
 * Time: 14:03
 */

namespace app\lib\exception;


use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    public function render(\Exception $e)
    {
        // 如果是自定义异常
        if($e instanceof BaseException){
            $this->code      = $e->code;
            $this->msg       = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
            if(config('app_debug')){ // config开启debug返回tp5默认的render
                return parent::render($e);
            }else{
                $this->code      = 500;
                $this->msg       = '服务器内部错误！';
                $this->errorCode = 999;
                $this->recordErrorLog($e); // 写入自定义日志
            }
        }
        $request = Request::instance();
        $result = [
          'msg'         => $this->msg,
          'request_url' => $request->url(),
          'errorCode'   => $this->errorCode
        ];
        return json($result,$e->code);
    }
    private function recordErrorLog(\Exception $e)
    {
        Log::init([
            'type' => 'file',
            'path' => LOG_PATH,
            'level'=> ['error']
        ]);
        //file_put_contents('testerror.txt',$e->getMessage().'----------error');
        Log::record($e->getMessage(),'error');
    }
}