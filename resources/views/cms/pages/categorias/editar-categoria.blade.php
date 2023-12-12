@extends('cms.layouts.cms-default')

@section('content')
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
            <label for="img_destaque">Imagem destaque:</label>
            <img src="{{$categoria->img_destaque}}" alt="{{$categoria->name}}">
            <input type="file" class="form-control-file" id="img_destaque" name="img_destaque">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status">
                <option value="1" {{isset($categoria->status) === true && $categoria->status === 1 ? 'selected="selected"' : ''}}>Ativado</option>
                <option value="0" {{isset($categoria->status) === true && $categoria->status === 0 ? 'selected="selected"' : ''}}>Bloqueado</option>
            </select>
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


    <!-- Visualização da imagem -->
    <div id="image-preview" class="mt-3" style="display: none;">
        <h4>Imagem Selecionada:</h4>
        <img id="selected-image" src="" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
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
