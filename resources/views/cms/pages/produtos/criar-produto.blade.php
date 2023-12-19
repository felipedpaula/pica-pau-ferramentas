@extends('cms.layouts.cms-default')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<form action="{{ url('/') }}/admin/produtos/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nome do Produto:</label>
        <input type="text" class="form-control" id="nome" name="name" required>
    </div>

    <div class="form-group">
        <label for="parent_category_id">Categoria:</label>
        <select class="form-control" id="categoria" name="parent_category_id" required>
            <option value="0" selected>--</option>
            @foreach ($categorias as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
            <!-- Adicione mais opções para categorias aqui -->
        </select>
    </div>

    <div class="form-group">
        <label for="description">Descrição do Produto:</label>
        <textarea class="form-control" id="descricao" name="description" rows="4" required></textarea>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="price">Preço do Produto:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" class="form-control" id="price" name="price" step="0.01" placeholder="0.00" oninput="formatarMoeda(this)" required>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="1">Ativo</option>
                    <option value="0">Bloqueado</option>
                </select>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="image_url">Imagem do Produto:</label>
        <input type="file" class="form-control-file" id="image_url" name="image_url">
        <!-- Visualização da imagem -->
        <div id="image-preview" class="mt-3" style="display: none;">
            <h4>Imagem Selecionada:</h4>
            <img id="selected-image" src="" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Criar Produto</button>

    <script defer>
        const imageInput = document.getElementById('image_url');
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
</form>
@endsection
