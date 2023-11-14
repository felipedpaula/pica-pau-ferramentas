@extends('cms.layouts.cms-default')

@section('content')
    <div class="row mb-4">
        <div class="col-md-8">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
            </a>
        </div>
        <div class="col-md-4"></div>
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
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="parent_category_id">Categoria pai:</label>
            <select class="form-control" id="parent_category_id" name="parent_category_id">
                <option value="0">--</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Título:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="body">Texto:</label>
            <input type="text" class="form-control" id="body" name="body" required>
        </div>
        <div class="form-group">
            <label for="img_destaque">Imagem destaque:</label>
            <input type="file" class="form-control-file" id="img_destaque" name="img_destaque" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="1">Ativo</option>
                <option value="0">Bloqueado</option>
            </select>
        </div>
        <!-- Botão de Submissão -->
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

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
