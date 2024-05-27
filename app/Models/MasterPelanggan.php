<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPelanggan extends Model
{
    use HasFactory;

    protected $table = 'master_pelanggan';
    protected $fillable = ['nama', 'email', 'no_telp', 'registered_by', 'registered_at'];

    public function orders(){
        return $this->hasMany(CustomerBill::class, 'pelanggan_id', 'id');
    }
}
