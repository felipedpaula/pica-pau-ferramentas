@extends('cms.layouts.cms-default')
@section('content')
    <!-- Formulário de criação de categoria -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nome">Nome da Categoria</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem (JPG apenas)</label>
            <input type="file" class="form-control-file" id="imagem" name="imagem" accept=".jpg" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Categoria</button>
    </form>

    <!-- Visualização da imagem -->
    <div id="image-preview" class="mt-3" style="display: none;">
        <h4>Imagem Selecionada:</h4>
        <img id="selected-image" src="" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
    </div>
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
@endsection
