<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Obtener estadísticas básicas
        $totalReservations = Reservation::count();
        $activeReservations = Reservation::where('status', 'active')->count();
        $inactiveReservations = Reservation::where('status', 'inactive')->count();
        $recentReservations = Reservation::latest()->take(5)->get();

        return view('home', compact('totalReservations', 'activeReservations', 'inactiveReservations', 'recentReservations'));
    }
}
