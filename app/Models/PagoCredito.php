<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagoCredito extends Model
{

protected $fillable = [
'venta_id',
'monto'
];

public function venta()
{
return $this->belongsTo(Venta::class);
}

}
