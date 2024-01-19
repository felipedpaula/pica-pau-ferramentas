<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Device extends Model
{
    protected $fillable = ['user_agent', 'device_type'];

    public function getDeviceData()
    {
        return $this->select('device_type', DB::raw('COUNT(*) as count'))
                    ->groupBy('device_type')
                    ->get();
    }
}
