<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'galleta_id',
        'cantidad',
        'total',
        'cliente',
        'forma_pago'
    ];

    public function galleta()
    {
        return $this->belongsTo(Galleta::class);
    }
}