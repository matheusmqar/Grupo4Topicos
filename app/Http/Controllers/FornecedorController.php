<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $f = Fornecedor::paginate(2); var_dump($f);
       return View('fornecedor.index')->with('fornecedores',Fornecedor::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('fornecedor.create');
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
            'cnpj' => 'required|max:14',
            'razao' => 'required|max:255',
            'telefone' => 'required|max:255',
            'email' => 'required|max:255'
        ],
        [
            'cnpj.*' => 'CNPJ é obrigatório de tamanho máximo de 14 caracteres',
            'razao.*' => 'Razão é obrigatório de tamanho máximo de 255 caracteres',
            'telefone.*' => 'Telefone é obrigatório de tamanho máximo de 255 caracteres',
            'email.*' => 'Email é obrigatório de tamanho máximo de 255 caracteres'
        ]
    );
        Fornecedor::create($request->all());
        return redirect('/fornecedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedor $fornecedor)
    {
        //
        return View('fornecedor.show')->with('fornecedor',$fornecedor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedor $fornecedor)
    {
        //
        return View('fornecedor.edit')->with('fornecedor',$fornecedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        //
                $this->validate($request,
        [
            'cnpj' => 'required|max:14',
            'razao' => 'required|max:255',
            'telefone' => 'required|max:255',
            'email' => 'required|max:255'
        ],
        [
            'cnpj.*' => 'CNPJ é obrigatório de tamanho máximo de 14 caracteres',
            'razao.*' => 'Razão é obrigatório de tamanho máximo de 255 caracteres',
            'telefone.*' => 'Telefone é obrigatório de tamanho máximo de 255 caracteres',
            'email.*' => 'Email é obrigatório de tamanho máximo de 255 caracteres'
        ]
    );
        $fornecedor->update($request->all());
        return redirect('/fornecedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Fornecedor::destroy($id);
        return redirect('/fornecedor');
    }

    /*
    public function search (Request $request){
       
       $search = $request->get('search');

       $fornecedores = Fornecedor::where('id', '=', $search);

        return View('fornecedor.index' , compact('fornecedores','search'));

    }
    */
}
