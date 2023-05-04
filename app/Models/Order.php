<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['products', 'user_id', 'status', 'price'];
    public $timestamps = false;
    protected $casts = [
        'products' => 'array',
    ];
    // is stringo gabala sucastina imasyva, array bus automatiskai paverstas i jason stringa kuris tiks DB

    const STATUS = [
        1 => 'Proccesing',
        2 => 'Confirmed'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}