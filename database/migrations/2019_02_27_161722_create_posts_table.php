<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('文章标题');
            $table->longText('content')->comment('内容');
            $table->string('seo')->comment('SEO');
            $table->enum('arrticle_types', ['original', 'reprinted', 'translate'])->comment('文章类型 原创original 转载reprinted 翻译translate');
            $table->enum('publish_status', ['published', 'draft', 'covert'])->default('draft')->comment('发布状态 发布published 草稿draft 隐藏covert');
            $table->enum('top_status', ['top', 'normal'])->default('normal')->comment('置顶 置顶top 正常normal');
            $table->tinyInteger('cate_id')->unsigned()->comment('分类');
            $table->integer('page_view')->default(0)->unsigned()->comment('阅读数');
            $table->string('tags_id')->comment('标签');
            $table->string('intro')->nullable()->comment('Intro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
