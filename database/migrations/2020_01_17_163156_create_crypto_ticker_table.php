<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCryptoTickerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_ticker', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Coin Name');
            $table->string('symbol')->comment('Coin Nick Name');
            $table->string('slug')->comment('Coin Slug');
            $table->integer('rank')->comment('Coin Rank');
            $table->string('circulating_supply')->comment('Circulating Supply');
            $table->string('total_supply')->comment('Total Supply');
            $table->string('max_supply')->comment('Max Supply');
            $table->string('price')->comment('Price USD');
            $table->string('volume_daily')->comment('Volume Daily');
            $table->string('market_cap')->comment('Market Cap');
            $table->decimal('change_rate_hourly', 5, 2)->comment('Change Rate Hourly');
            $table->decimal('change_rate_daily', 5, 2)->comment('Change Rate Daily');
            $table->decimal('change_rate_weekly', 5, 2)->comment('Change Rate Weekly');
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
        Schema::dropIfExists('crypto_ticker');
    }
}
