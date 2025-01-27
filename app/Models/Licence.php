<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;

    protected $primaryKey = 'licence_id';

    protected $fillable = [
        'product_id',
        'licence_key',
        'expiration_date',
        'supplier_id',
        'cost',
        'status'
    ];

    protected $casts = [
        'expiration_date' => 'date'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function assets()
    {
        return $this->hasMany(Asset::class, 'licence_id');
    }

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class, 'licence_supplier', 'supplier_id', 'id');
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturers::class, 'manufacturer_id', 'id');
    }
}
