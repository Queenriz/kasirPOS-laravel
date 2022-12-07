<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Product extends Model
{
    use HasFactory; use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'kode_product' => [
                'format' => 'BRG/2022/?',
                'length' => 3
            ]
        ];
    }


    protected $table = 'products';
    protected $guarded = [];
}
