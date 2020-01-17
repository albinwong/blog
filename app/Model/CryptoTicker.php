<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CryptoTicker extends Model
{
    //
    protected $table = 'crypto_ticker';
    protected $fillable = [
		'id',
        'name',
        'symbol',
        'slug',
        'rank',
        'circulating_supply',
        'total_supply',
        'max_supply',
        'price',
        'volume_daily',
        'market_cap',
        'change_rate_hourly',
        'change_rate_daily',
        'change_rate_weekly',
        'updated_at',
    ];

}
