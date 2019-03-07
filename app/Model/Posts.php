<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $fillable = ['title', 'content', 'content_html_code', 'seo', 'arrticle_types', 'publish_status', 'top_status', 'cate_id', 'page_view', 'tags_id', 'intro', 'content_type'];
}
