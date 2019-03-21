<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostTagRelation extends Model
{
    protected $table = 'post_tag_relation';
    protected $fillable=['pid', 'tid'];
}
