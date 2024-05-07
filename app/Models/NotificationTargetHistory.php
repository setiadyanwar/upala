<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationTargetHistory extends Model
{
    use HasFactory;

    protected $table = 'notification_target_histories';
    protected $fillable = ['notification_id', 'cust_id', 'is_success'];
}
