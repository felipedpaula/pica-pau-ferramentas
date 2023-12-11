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
    private $categoria;

    public function __construct()
    {
        $this->produto = new Produto();
        $this->categoria = new Categoria();
    }

    public function index(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Todas os produtos';
        $this->dadosPagina['allProdutos'] = $this->produto->getProdutos();
        return view('cms.pages.produtos.index', $this->dadosPagina);
    }

    public function create(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Cadastro de novo produto';
        $this->dadosPagina['categorias'] = $this->categoria->getCategorias();
        return view('cms.pages.produtos.criar-produto', $this->dadosPagina);
    }

    public function edit(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Editar produto';

        $slug = preg_replace('/\/admin\/produtos\/([^\/]+)\/edit$/', '$1', $request->getRequestUri());

        $this->dadosPagina['produto'] = $this->produto->getSingleProduto($slug);
        $this->dadosPagina['categorias'] = $this->categoria->getCategorias();

        return view('cms.pages.produtos.editar-produto', $this->dadosPagina);
    }

    public function store(Request $request) {
        $data = $request->only([
            'name',
            'parent_category_id',
            'description',
            'img_destaque',
            'status',
            'price'
        ]);

        $data['price'] = floatval($data['price']);

        $rules = [
            'name' => 'required|string|max:255',
            'parent_category_id' => 'required|numeric|max:255',
            'description' => 'required|string|max:255',
            'img_destaque' => 'nullable|image',
            'status' => ['required', 'in:0,1'],
            'price' => 'required|numeric|max:255'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('admin.produto.create')
            ->withErrors($validator)
            ->withInput();
        }

        $data['slug'] = Str::slug($data['name'], '-');
        try {
            $this->produto->name = $data['name'];
            $this->produto->category_id = $data['parent_category_id'];
            $this->produto->slug = $data['slug'];
            $this->produto->description = $data['description'];
            $this->produto->price = $data['price'];
            $this->produto->status = $data['status'];
            if ($request->hasFile('img_destaque')) {
                // Atualizar método para armazenar imagens localmente e registrar o caminho da imagem aqui
                $imagemPath = $request->file('img_destaque')->store('storage/app/public/imagens-internas', 'public');
                $this->produto->image_url = $imagemPath;
            } elseif (!$this->produto->image_url) {
                // Define um valor padrão se nenhum novo arquivo de imagem for enviado e o produto não tiver uma imagem existente
                $this->produto->image_url = 'storage/app/public/imagens-internas/default.jpg';
            }

            // criar metodo para armazenar imagens localmente e registrar o caminho da imagem aqui
            $this->produto->image_url = $data['img_destaque'];

            $this->produto->save();
            return redirect()->route('admin.produtos.index')->with('success', 'Produto criado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('admin.produto.create')->with('error', 'Ocorreu um erro ao criar produto. Por favor, tente novamente.');
        }
    }

    public function update(Request $request, $id) {
        $data = $request->only([
            'name',
            'parent_category_id',
            'description',
            'img_destaque',
            'status',
            'price'
        ]);

        $data['price'] = floatval($data['price']);

        $rules = [
            'name' => 'required|string|max:255',
            'parent_category_id' => 'required|numeric|max:255',
            'description' => 'required|string|max:255',
            'img_destaque' => 'nullable|image',
            'status' => ['required', 'in:0,1'],
            'price' => 'required|numeric|max:255'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('admin.produto.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $data['slug'] = Str::slug($data['name'], '-');
        try {
            $produto = $this->produto->findOrFail($id);
            $produto->name = $data['name'];
            $produto->category_id = $data['parent_category_id'];
            $produto->slug = $data['slug'];
            $produto->description = $data['description'];
            $produto->price = $data['price'];
            $produto->status = $data['status'];

            // Atualizar método para armazenar imagens localmente e registrar o caminho da imagem aqui
            // Verifica se foi enviado um novo arquivo de imagem
            if ($request->hasFile('img_destaque')) {
                // Atualizar método para armazenar imagens localmente e registrar o caminho da imagem aqui
                $imagemPath = $request->file('img_destaque')->store('storage/app/public/imagens-internas', 'public');
                $produto->image_url = $imagemPath;
            } elseif (!$produto->image_url) {
                // Define um valor padrão se nenhum novo arquivo de imagem for enviado e o produto não tiver uma imagem existente
                $produto->image_url = 'storage/app/public/imagens-internas/default.jpg';
            }

            $produto->save();
            return redirect()->route('admin.produtos.index')->with('success', 'Produto atualizado com sucesso!');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('admin.produto.edit', $id)->with('error', 'Ocorreu um erro ao atualizar o produto. Por favor, tente novamente.');
        }
    }


}
