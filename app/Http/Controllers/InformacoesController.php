<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use App\Models\Membro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformacoesController extends Controller
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

        $membros = Membro::latest()->paginate(4);

        return view('menu.admin', [
            'membros' => $membros,
            'plano' => $plano,
            'plano1' => $plano1,
            'plano2' => $plano2,
            'plano3' => $plano3,
            'plano4' => $plano4,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePlanos(Request $request)
    {
        $request->validate([
            'pl_plano1' => 'nullable',
            'pl_plano2' => 'nullable',
            'pl_plano3' => 'nullable',
            'pl_plano4' => 'nullable',
        ]);

        Plano::create($request->all());

        //dd($plano);
            return redirect()->route('home')
                        ->with('success', 'Planos atualizados com sucesso!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePlanos(Request $request, Plano $plano)
    {
        $request->validate([
            'pl_plano1' => 'nullable',
            'pl_plano2' => 'nullable',
            'pl_plano3' => 'nullable',
            'pl_plano4' => 'nullable',
        ]);

        $plano = Plano::all()->first();
        $plano->id = $plano->id;
        $plano->pl_plano1 = $request->pl_plano1;
        $plano->pl_plano2 = $request->pl_plano2;
        $plano->pl_plano3 = $request->pl_plano3;
        $plano->pl_plano4 = $request->pl_plano4;
        $plano->update($request->all());

        //dd($plano);
            return redirect()->route('home')
                        ->with('success', 'Planos atualizados com sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMembros(Request $request)
    {
        $request->validate([
            'mem_nome' => 'required',
            'mem_cargo' => 'required',
            'mem_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $input = $request->all();
        // Upload de imagem
        if ($image = $request->file('mem_foto')) {
            $destinationPath = public_path('images/membros');
            $membroFotoNome = date('dmY') . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $membroFotoNome);
            $input['mem_foto'] = "$membroFotoNome";
        }

        Membro::create($input);

        return redirect()->route('home')
                        ->with('success','Membro criado com sucesso!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membro  $membro
     * @return \Illuminate\Http\Response
     */
    public function updateMembros(Request $request, Membro $membro)
    {
                $request->validate([
                    'mem_nome' => 'required',
                    'mem_cargo' => 'required',
                    'mem_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
                ]);

                // Atualização de imagem
                $imageName = '';
                if($request->hasFile('mem_foto')){
                    $imageName = date('dmY') . "-" . $request->mem_foto->getClientOriginalName();
                    $destinationPath = public_path('images/membros');
                    $request->mem_foto->move($destinationPath, $imageName);
                    if($membro->mem_foto){
                        Storage::delete('public/images/membros' . $membro->exe_foto);
                    }
                } else {
                    $imageName = $membro->mem_foto;
                }

                $membro->id = $request->id;
                $membro->mem_nome = $request->mem_nome;
                $membro->mem_cargo = $request->mem_cargo;
                $membro->mem_foto = $imageName;
                $membro->update();

                    return redirect()->route('home')
                                ->with('success', 'Profissional atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membro  $membro
     * @return \Illuminate\Http\Response
     */
    public function destroyMembros(Membro $membro)
    {
        Storage::delete('public/images/membros' . $membro->mem_foto);
        $membro->delete();

        return redirect()->route('home')
                        ->with('success','Profissional excluido com sucesso!');
    }


}

