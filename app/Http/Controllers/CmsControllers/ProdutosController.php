<?php

namespace App\Http\Controllers\CmsControllers;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\ProdutoImagem;
use App\Models\Produto;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $dadosPagina;
    private $user;
    private $produto;
    private $categoria;
    private $imagens;

    public function __construct()
    {
        $this->produto = new Produto();
        $this->categoria = new Categoria();
        $this->imagens = new ProdutoImagem();
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
        $idProduto = $request->id;
        $this->dadosPagina['tituloPagina'] = 'Editar produto';

        $this->dadosPagina['produto'] = Produto::findOrFail($idProduto);
        $this->dadosPagina['categorias'] = $this->categoria->getCategorias();
        $this->dadosPagina['imagens'] = $this->imagens->getImagensByProdutoId($idProduto);

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
            'price' => 'required|numeric'
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
            'price' => 'required|numeric'
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

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        try {
            $produto->delete();
            return redirect()->route('admin.produtos.index')->with('success', 'Produto excluído com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('admin.produtos.index')->with('error', 'Erro ao tentar excluir o produto.');
        }

    }

    public function add(Request $request) {

        $idProduto = $request->id;

        $data = $request->only([
            'imagem',
            'description'
        ]);

        $rules = [
            'description' => ['required', 'string', 'max:255'],
            'imagem' => ['nullable','file', 'mimes:jpg,png,webp'],
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect()->route('admin.produto.edit', ['id' => $idProduto])
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $this->imagens->product_id = $idProduto;
            $this->imagens->description = $data['description'];
            if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
                $img_default = $request->file('imagem')->store('public');
                $url = asset(Storage::url($img_default));
                $this->imagens->image_url = $url;
            }
            $this->imagens->save();
            return redirect()->route('admin.produto.edit', ['id' => $idProduto])->with('success', 'Produto atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('admin.produto.edit', ['id' => $idProduto])
                ->with('error', 'Ocorreu um erro ao atualizar a galeria. Por favor, tente novamente.');
        }
    }

    public function remove(Request $request) {
        $idImagem = $request->id_foto;
        $idProduto = $request->id;
        $imagem = ProdutoImagem::find($idImagem);
        if (!$imagem) {
            return redirect()->route('admin.produto.edit', ['id' => $idProduto])->with('error', 'Imagem não encontrada.');
        }
        try {
            $imagem->delete();
            return redirect()->route('admin.produto.edit', ['id' => $idProduto])->with('success', 'Imagem excluída com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('admin.produto.edit', ['id' => $idProduto])->with('error', 'Erro ao tentar excluir a imagem.');
        }
    }

}
