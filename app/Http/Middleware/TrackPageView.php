<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageView;
use App\Models\Device;
use Jenssegers\Agent\Agent;

class TrackPageView
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // URLs a serem ignoradas
        $ignorePaths = ['/login', '/admin'];

        // Verifica se a URL atual deve ser ignorada
        $currentPath = $request->path();
        $shouldIgnore = false;
        foreach ($ignorePaths as $path) {
            if ($currentPath === trim($path, '/') || str_starts_with($currentPath, trim($path, '/'))) {
                $shouldIgnore = true;
                break;
            }
        }

        if ($response->getStatusCode() === 200 && !$shouldIgnore) {
            $agent = new Agent();
            $deviceType = $agent->isMobile() ? 'mobile' :
                          ($agent->isTablet() ? 'tablet' : 'desktop');

            $userAgent = $request->userAgent();
            $device = Device::firstOrCreate([
                'user_agent' => $userAgent,
                'device_type' => $deviceType
            ]);

            PageView::create([
                'page_url' => $request->path(),
                'visit_time' => now(),
                'user_agent' => $userAgent,
                'ip_address' => $request->ip(),
                'session_id' => $request->session()->getId(),
                'device_id' => $device->id
            ]);
        }

        return $response;
    }
}
