<?php

namespace App\Http\Controllers\CmsControllers;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $dadosPagina;
    private $user;
    private $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function index(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Todas os produtos';
        return view('cms.pages.produtos.index', $this->dadosPagina);
    }

    public function create(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Cadastro de novo produto';
        return view('cms.pages.produtos.criar-produto', $this->dadosPagina);
    }

    public function edit(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Editar produto';
        return view('cms.pages.produtos.editar-produto', $this->dadosPagina);
    }

    public function store(Request $request) {
        $data = $request->only([
            'name',
            'parent_category_id',
            'description',
            'img_destaque',
            'status'
        ]);

        $rules = [
            'name' => 'required|string|max:255',
            'parent_category_id' => 'nullable|exists:categorias,id',
            'description' => 'required|string|max:255',
            'img_destaque' => 'nullable|image',
            'status' => ['required', 'in:0,1'],
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('admin.produto.create')
            ->withErrors($validator)
            ->withInput();
        }

        $data['slug'] = Str::slug($data['name'], '-');

        try {
            $this->produto->title = $data['name'];
            $this->produto->parent_category_id = $data['parent_category_id'];
            $this->produto->slug = $data['slug'];
            $this->produto->description = $data['description'];
            $this->produto->status = $data['status'];
            $this->produto->save();
            return redirect()->route('admin.categorias.index')->with('success', 'Categoria criada com sucesso!');

        } catch (\Exception $e) {
            return redirect()->route('admin.categoria.create')->with('error', 'Ocorreu um erro ao criar a categoria. Por favor, tente novamente.');
        }
    }

}
