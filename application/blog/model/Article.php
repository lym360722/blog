<?php

namespace app\blog\model;

use think\Model;
use app\blog\model\Lable as LableModel;

class Article extends BaseModel
{
    // 关联图片表
    public function image()
    {
        $image = $this->hasOne('Images','id','img_id');
        
        return $image;
    }
    
    // 关联用户表
    public function user()
    {
        $user = $this->hasOne('User','id','author_id');
        
        return $user;
    }
    
    // 关联评论表
    public function comment()
    {
        $comment = $this->hasMany('ArticleComment','article_id','id');
        
        return $comment;
    }
    
    // 获取文章
    public static function getArticle()
    {
        $article = self::with(['image','user','comment'])->order('id','desc')->select();
        foreach ($article as $vo){
           $vo['lable_id'] = self::getLable(explode(',',$vo['lable_id']));
           
        }
        return $article;
    }
    
    // 获取label
    public static function getLable($lable_id){
        //return LableModel::all($lable_id);
        if($lable_id != null){
            $lable = LableModel::all($lable_id);
            if($lable != null){
                return $lable;
            }
        }
    }
}
