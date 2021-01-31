<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    // untuk menghapus data, tp tidak menghilangkan data di database
    use SoftDeletes;

    //untuk mengambil data dari database
    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
        'slug',
        'quantity'
    ];
    

    // untuk menyembunyikan data
    protected $hidden = [
        
    ];


    //relasi

    public function galleries(){

        return $this->hasMany(ProductGallery::class, 'products_id');

    }


}
