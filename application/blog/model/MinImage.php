<?php
namespace app\blog\model;


class MinImage extends BaseModel
{
    protected $hidden = ['create_time','update_time','delete_time'];
    
    public static function getMinImage($id)
    {
        $img = self::get($id, '', true);
        if($img){
            return $img;
        }
    }
}
