<?php

namespace App\Http\Controllers\CmsControllers;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    private $dadosPagina;
    private $categoria;
    private $categorias;

    public function __construct()
    {
        $this->categoria = new Categoria();
    }

    public function index() {
        $this->dadosPagina['tituloPagina'] = 'Todas as categorias de produtos';
        $this->dadosPagina['allCategorias'] = $this->categoria->getCategorias();
        return view('cms.pages.categorias.index', $this->dadosPagina);
    }

    public function create() {
        $this->dadosPagina['tituloPagina'] = 'Cadastro de nova categoria de produtos';
        $this->dadosPagina['allCategorias'] = $this->categoria->getCategorias();
        return view('cms.pages.categorias.criar-categoria', $this->dadosPagina);
    }

    public function store(Request $request) {
        $data = $request->only([
            'name',
            'description',
            'body',
            'img_destaque',
            'parent_category_id',
            'status'
        ]);

        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'body' => 'required|string',
            'img_destaque' => 'nullable|image',
            'parent_category_id' => 'nullable|exists:categories,id',
            'status' => ['required', 'in:0,1'],
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('admin.categoria.create')
            ->withErrors($validator)
            ->withInput();
        }

        $data['slug'] = Str::slug($data['name'], '-');

        try {
            $this->categoria->name = $data['name'];
            $this->categoria->slug = $data['slug'];
            $this->categoria->description = $data['description'];
            $this->categoria->body = $data['body'];
            $this->categoria->parent_category_id = $data['parent_category_id'];
            $this->categoria->status = $data['status'];
            $this->categoria->save();
            return redirect()->route('admin.categorias.index')->with('success', 'Categoria criada com sucesso!');

        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('admin.categoria.create')->with('error', 'Ocorreu um erro ao criar a categoria. Por favor, tente novamente.');
        }
    }

    public function editCategoria(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Editar categoria';
        return view('cms.pages.categorias.editar-categoria', $this->dadosPagina);
    }

    public function indexProdutoPorCategoria(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Produtos da categoria - X';
        return view('cms.pages.categorias.produtos-por-categoria', $this->dadosPagina);
    }
}
