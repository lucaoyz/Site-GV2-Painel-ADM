<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plano = Plano::all()->first();
        $plano1 = Plano::select('pl_plano1')->first();
        $plano2 = Plano::select('pl_plano2')->first();
        $plano3 = Plano::select('pl_plano3')->first();
        $plano4 = Plano::select('pl_plano4')->first();

        return view('index', [
            'plano' => $plano,
            'plano1' => $plano1,
            'plano2' => $plano2,
            'plano3' => $plano3,
            'plano4' => $plano4,
        ]);
    }

    public function indexEUA()
    {
        $plano = Plano::all()->first();
        $plano1 = Plano::select('pl_plano1')->first();
        $plano2 = Plano::select('pl_plano2')->first();
        $plano3 = Plano::select('pl_plano3')->first();
        $plano4 = Plano::select('pl_plano4')->first();

        return view('indexEUA', [
            'plano' => $plano,
            'plano1' => $plano1,
            'plano2' => $plano2,
            'plano3' => $plano3,
            'plano4' => $plano4,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}