<?php

namespace app\blog\model;

use think\Model;

class ArticleComment extends BaseModel
{
    protected $hidden = ['create_time','update_time','delete_time'];
}
