<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return[
            0=> [
                'id'=>1,
                'name'=>'T-Shirt',
                'price'=>'2500',
                'description'=>'description',
                'image'=> asset(path:'/img/1.jpg'),
            ],
            1=> [
                'id'=>2,
                'name'=>'Sari',
                'price'=>'2000',
                'description'=>'description',
                'image'=> asset(path:'/img/4.jpg'),
            ],
            2=> [
                'id'=>3,
                'name'=>'Watch',
                'price'=>'1500',
                'description'=>'description',
                'image'=> asset(path:'/img/3.jpg'),
            ],
        ];
    } 
}
