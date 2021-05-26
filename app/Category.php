<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//this class is a model that connect between two models like post and it's category
class Category extends Model
{
    //
    protected $uniqueCode = ["id"];
}
