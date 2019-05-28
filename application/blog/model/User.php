<?php

namespace app\blog\model;

class User extends BaseModel 
{
    protected $hidden = ['create_time','update_time','delete_time'];
}
