<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PageView extends Model
{
    protected $fillable = ['page_url', 'visit_time', 'user_agent', 'ip_address', 'session_id', 'device_id'];

    public function getPageAccessData()
    {
        return $this->select('page_url', DB::raw('COUNT(*) as count'))
                    ->groupBy('page_url')
                    ->orderBy('count', 'desc')
                    ->take(5)
                    ->get();
    }
}
