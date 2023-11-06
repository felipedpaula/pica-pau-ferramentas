@extends('cms.layouts.cms-default')
@section('content')
    <form action="" method="post">
        <div class="form-group">
            <label for="nome">Nome da Categoria</label>
            <input type="text" class="form-control" id="nome" name="nome" value="Nome da Categoria a ser Editada" required>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem (JPG apenas)</label>
            <input type="file" class="form-control-file" id="imagem" name="imagem" accept=".jpg">
            <img src="https://jcamadeireira.com.br/2341-large_default/parafusos-mdf-60x70-c-100-unidades-jomarca.jpg" alt="Imagem Atual" style="max-width: 200px; max-height: 200px;">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Categoria</button>
    </form>
@endsection
