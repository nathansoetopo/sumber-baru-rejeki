<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function plat()
    // {
    //     return $this->belongsTo('App\Regions', 'nomor_polisi');
    // }
}
