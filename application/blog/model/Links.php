<?php

namespace app\blog\model;

class Links extends BaseModel
{
    protected $hidden = ['create_time','update_time','delete_time'];
    
    
    public static function getLink()
    {
        $link = self::all([1,2,3,4,5,6],'',true);
        if($link){
            return $link;
        }
    }
}
