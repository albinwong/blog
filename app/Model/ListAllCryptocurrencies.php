<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ListAllCryptocurrencies extends Model
{
    //
    protected $table = 'list_all_cryptocurrencies';
    protected $fillable = [
		'cid',
		'name',
		'symbol',
		'slug',
		'circulating_supply',
		'total_supply',
		'max_supply',
		'date_added',
		'num_market_pairs',
		'tags',
		'cmc_rank',
		'platform',
		'created_at',
		'updated_at'
    ];
}
