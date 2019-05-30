<?php
namespace app\blog\model;

class Announcement extends BaseModel
{
    protected $hidden = ['create_time','update_time','delete_time'];
    
    public static function getAnnouncement()
    {
        $announcement = self::get(1,'',true);
        if($announcement){
            return $announcement;
        }
    }
}
