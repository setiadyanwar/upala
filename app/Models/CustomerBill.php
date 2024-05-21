<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBill extends Model
{
    use HasFactory;

    protected $table = 'customer_bills';
    protected $fillable = ['pelanggan_id', 'employee_id'];

    public function pelanggan()
    {
        return $this->belongsTo(MasterPelanggan::class, 'pelanggan_id');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

    public function order()
    {
        return $this->hasMany(CustomerOrder::class, 'bill_id');
    }
}
