<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

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
        $plano = Plano::all()->first();
        $plano1 = Plano::select('pl_plano1')->first();
        $plano2 = Plano::select('pl_plano2')->first();
        $plano3 = Plano::select('pl_plano3')->first();
        $plano4 = Plano::select('pl_plano4')->first();

        return view('menu.admin', [
            'plano' => $plano,
            'plano1' => $plano1,
            'plano2' => $plano2,
            'plano3' => $plano3,
            'plano4' => $plano4,
        ]);
    }
}
