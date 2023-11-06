@extends('cms.layouts.cms-default')
@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nome">Nome do Produto:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <div class="form-group">
        <label for="categoria">Categoria:</label>
        <select class="form-control" id="categoria" name="categoria" required>
            <option value="categoria1">Categoria 1</option>
            <option value="categoria2">Categoria 2</option>
            <!-- Adicione mais opções para categorias aqui -->
        </select>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição do Produto:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="imagem">Imagem do Produto:</label>
        <input type="file" class="form-control-file" id="imagem" name="imagem" accept="image/*" required>
        <!-- Visualização da imagem -->
        <div id="image-preview" class="mt-3" style="display: none;">
            <h4>Imagem Selecionada:</h4>
            <img id="selected-image" src="" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Criar Produto</button>

    <script defer>
        const imageInput = document.getElementById('imagem');
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
</form>
@endsection
