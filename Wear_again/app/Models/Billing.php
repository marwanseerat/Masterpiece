<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $table ='billings';
    protected $fillable =[
        'user_id',
        'subtotal',
        'payment_method',
        'phone_number',
        
    ];
}
