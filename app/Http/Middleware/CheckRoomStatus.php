<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoomStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $room = Room::find($request->room_id);

        if ($room && $room->status == 'inactive') {
            return redirect()->back()->withErrors('La habitación seleccionada no está disponible.');
        }

        return $next($request);
    }
}
