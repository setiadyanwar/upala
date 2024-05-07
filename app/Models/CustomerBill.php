<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBill extends Model
{
    use HasFactory;

    protected $table = 'customer_bills';
    protected $fillable = ['pelanggan_id', 'employee_id'];
}
