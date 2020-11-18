<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$f = Material::paginate(2); var_dump($f);
        return View('material.index')->with('materiais',Material::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                return View('material.create');

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
        $this->validate($request,
        [
            'descricao' => 'required|max:255',
            'quantidade' => 'required|max:255',
            'minimo' => 'required|max:255'
        ],
        [
            'descricao.*' => 'Descrição do Material é obrigatório de tamanho máximo de 255 caracteres',
            'quantidade.*' => 'Quantidade do Material é obrigatório de tamanho máximo de 255 caracteres',
            'minimo.*' => 'Quantidade miníma do Material  é obrigatório de tamanho máximo de 255 caracteres'
        ]
    );
        Material::create($request->all());
        return redirect('/material');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
                return View('material.show')->with('material',$material);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        //
         return View('material.edit')->with('material',$material);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        //
         $this->validate($request,
        [
            'descricao' => 'required|max:255',
            'quantidade' => 'required|max:255',
            'minimo' => 'required|max:255'
        ],
        [
            'descricao.*' => 'Descrição do Material é obrigatório de tamanho máximo de 255 caracteres',
            'quantidade.*' => 'Quantidade do Material é obrigatório de tamanho máximo de 255 caracteres',
            'minimo.*' => 'Quantidade miníma do Material  é obrigatório de tamanho máximo de 255 caracteres'
        ]
    );
        $material->update($request->all());
        return redirect('/material');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        Material::destroy($id);
        return redirect('/material');
    }
}
