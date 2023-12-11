@extends('cms.layouts.cms-default')
@section('content')
<form action="{{ url('/') }}/admin/produtos/{{ $produto->id }}/update" method="POST" enctype="multipart/form-data">
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
        <label for="img_destaque">Imagem do Produto:</label>
        <input type="file" class="form-control-file" id="img_destaque" name="img_destaque" accept="image/*">
        <img src="{{ asset($produto->image_url) }}" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
        <!-- Visualização da imagem -->
        <div id="image-preview" class="mt-3" style="display: none;">
            <h4>Imagem Selecionada:</h4>
            <img id="selected-image" src="{{ $produto->image_url }}" alt="Imagem selecionada" style="max-width: 200px; max-height: 200px;">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Produto</button>

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
