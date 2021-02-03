<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use HasFactory;
    use SoftDeletes;

     //untuk mengambil data dari database
     protected $fillable = [
        'products_id', 'photo', 'is_default'
    ];
    

    // untuk menyembunyikan data
    protected $hidden = [
        
    ];

       //relasi ke model product

       public function product(){

        // id ini relasi dari database product
        return $this->belongsTo(Product::class, 'products_id','id');

    }

    // assecor untuk foto, get,attribute,$value itu bawaan dari laravel
    // jgn lupa jalankan = php artisan storage:link , biar bisa diakses si folder storage nya
    public function getPhotoAttribute($value){
        return url('storage/'.$value);
    }
}
