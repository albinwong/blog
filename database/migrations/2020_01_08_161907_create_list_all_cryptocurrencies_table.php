<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListAllCryptocurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_all_cryptocurrencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cid');
            $table->string('name');
            $table->string('symbol');
            $table->string('slug');
            $table->string('circulating_supply');
            $table->string('total_supply');
            $table->string('max_supply');
            $table->integer('num_market_pairs');
            $table->string('tags');
            $table->integer('cmc_rank');
            // $table->json('platform');
            $table->text('platform');
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
        Schema::dropIfExists('list_all_cryptocurrencies');
    }
}
