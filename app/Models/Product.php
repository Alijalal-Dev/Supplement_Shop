<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory; use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'type',
        'category',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
