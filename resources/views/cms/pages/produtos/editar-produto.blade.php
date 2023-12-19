@extends('cms.layouts.cms-default')
@section('content')

    <div class="row mb-4">
        <div class="col-md-8 pl-0">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
            </a>
        </div>
        <div class="col-md-4 text-right">
            <button class="btn btn-danger delete_button">
                Excluir Produto <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <!-- ALERTAS -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erro!</strong> Algo não deu certo:
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erro!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- FIM ALERTAS -->

    <form action="{{route('admin.produto.update', ['id' => $produto->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome do Produto:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $produto->name }}" required>
        </div>

        <div class="form-group">
            <label for="parent_category_id">Categoria:</label>
            <select class="form-control" id="categoria" name="parent_category_id" required>
                <option value="0" selected>--</option>
                @foreach ($categorias as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $produto->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
                <!-- Adicione mais opções para categorias aqui -->
            </select>
        </div>

        <div class="form-group">
            <label for="description">Descrição do Produto:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $produto->description }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="price">Preço do Produto:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="text" class="form-control" id="price" name="price" step="0.01" placeholder="0.00" value="{{ $produto->price }}" oninput="formatarMoeda(this)" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1" {{ $produto->status == 1 ? 'selected' : '' }}>Ativo</option>
                        <option value="0" {{ $produto->status == 0 ? 'selected' : '' }}>Bloqueado</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="image_url">Imagem do Produto:</label>
            <input type="file" class="form-control-file" id="image_url" name="image_url" accept="image/*">
            <img src="{{ asset($produto->image_url) }}" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
            <!-- Visualização da imagem -->
            <div id="image-preview" class="mt-3" style="display: none;">
                <h4>Imagem Selecionada:</h4>
                <img id="selected-image" src="{{ $produto->image_url }}" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
            </div>
        </div>

        <div class="row">
            <label for="imagens">Imagens do produto:</label>
            <div class="col-12 px-0">
                <div class="d-flex flex-wrap">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#imagemModal" style="width:100px;height:100px;font-size:50px">+</button>
                    @foreach ($imagens as $imagem)
                    <div class="img-galeria">
                        <img width="100px" height="100px" src="{{$imagem->image_url}}" alt="{{$imagem->description}}">
                        <a href="{{ route('admin.produto.remove', ['id' => $produto->id, 'id_foto' => $imagem->id]) }}" class="lixeira-layer" onclick="return confirm('Tem certeza que deseja excluir esta imagem?')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Botão de Submissão -->
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="publicidadeExcluirForm" method="POST" action="{{route('admin.produto.delete', ['id' => $produto->id])}}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Excluir Produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        Você tem <b>certeza</b> que deseja excluir o Produto <b>"<span>{{$produto->name}}</span>"</b>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Adiciona Imagem -->
    <div class="modal fade" id="imagemModal" tabindex="-1" role="dialog" aria-labelledby="imagemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imagemModalLabel">Adicionar Imagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.produto.add', ['id' => $produto->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Descrição da imagem">
                        </div>
                        <div class="form-group">
                            <label for="imagemFile">Escolher imagem</label>
                            <input type="file" class="form-control-file" id="imagemFile" name="imagem">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar Imagem</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script defer>
        const imageInput = document.getElementById('img_url');
        const imagePreview = document.getElementById('image-preview');
        const selectedImage = document.getElementById('selected-image');

        imageInput.addEventListener('change', function () {
            if (imageInput.files.length > 0) {
                const file = imageInput.files[0];
                const imageUrl = URL.createObjectURL(file);
                selectedImage.src = imageUrl;
                imagePreview.style.display = 'block';
            } else {
                imagePreview.style.display = 'none';
            }
        });

        function formatarMoeda(input) {
            let valor = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
            if (valor.length === 1) {
                valor = '00' + valor; // Adiciona zeros à esquerda se houver apenas um dígito
            }
            valor = parseFloat(valor) / 100; // Converte para número e divide por 100
            input.value = valor.toFixed(2);
        }
    </script>
@endsection
