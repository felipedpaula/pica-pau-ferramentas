@extends('cms.layouts.cms-default')

@section('content')
{{-- {{dd($categoria)}} --}}
    <div class="row mb-4">
        <div class="col-md-8">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
            </a>
        </div>
        <div class="col-md-4 text-right">
            <button class="btn btn-danger delete_button">
                Excluir Categoria <i class="fa fa-trash" aria-hidden="true"></i>
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

    <!-- Formulário de criação de categoria -->
    <form action="{{route('admin.categoria.update', ['id' => $categoria->id])}}" method="POST" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @csrf
        <div class="form-group">
            <label for="parent_category_id">Categoria pai:</label>
            <select class="form-control" id="parent_category_id" name="parent_category_id">
                <option value="">Nenhuma</option>
                @foreach ($allCategorias as $item)
                @if ($item->id != $categoria->id)
                <option value="{{$item->id}}" {{ $item->id === $categoria->parent_category_id ? 'selected="selected"' : '' }}>{{$item->name}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Título:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$categoria->name}}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$categoria->description}}" required>
        </div>
        <div class="form-group">
            <label for="body">Texto:</label>
            <input type="text" class="form-control" id="body" name="body" value="{{$categoria->body}}" required>
        </div>
        <div class="form-group">
            <label for="img_destaque">Imagem destaque:</label><br>
            <!-- Visualização da imagem -->
            <img width="300px" src="{{$categoria->img_destaque}}" alt="{{$categoria->name}}">
            <div id="image-preview" class="mt-3" style="display: none;">
                <strong>Imagem Selecionada:</strong>
                <img id="selected-image" src="" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
            </div>
            <input type="file" class="form-control-file" id="img_destaque" name="img_destaque">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status">
                <option value="1" {{isset($categoria->status) === true && $categoria->status === 1 ? 'selected="selected"' : ''}}>Ativado</option>
                <option value="0" {{isset($categoria->status) === true && $categoria->status === 0 ? 'selected="selected"' : ''}}>Bloqueado</option>
            </select>
        </div>

        <div class="row">
            <label for="imagens">Imagens da Categoria:</label>
            <div class="col-12 px-0">
                <div class="d-flex flex-wrap">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#imagemModal" style="width:100px;height:100px;font-size:50px">+</button>
                    @foreach ($imagens as $imagem)
                    <div class="img-galeria">
                        <img width="100px" height="100px" src="{{$imagem->image_url}}" alt="{{$imagem->description}}">
                        <a href="{{ route('admin.categoria.remove', ['id' => $categoria->id, 'id_foto' => $imagem->id]) }}" class="lixeira-layer" onclick="return confirm('Tem certeza que deseja excluir esta imagem?')">
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
                <form id="publicidadeExcluirForm" method="POST" action="{{route('admin.categoria.delete', ['id' => $categoria->id])}}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Excluir Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        Você tem <b>certeza</b> que deseja excluir a Categoria <b>"<span>{{$categoria->name}}</span>"</b>?
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
                <form action="{{ route('admin.categoria.add', ['id' => $categoria->id]) }}" method="post" enctype="multipart/form-data">
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
        const imageInput = document.getElementById('img_destaque');
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
    </script>
@endsection
