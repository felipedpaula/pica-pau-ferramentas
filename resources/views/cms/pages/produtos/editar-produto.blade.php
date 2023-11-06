@extends('cms.layouts.cms-default')
@section('content')
<form action="" method="post">
    <div class="form-group">
        <label for="nome">Parafusim</label>
        <input type="text" class="form-control" id="nome" name="nome" value="Parafusim" required>
    </div>
    <div class="form-group">
        <label for="imagem">Imagem (JPG apenas)</label>
        <input type="file" class="form-control-file" id="imagem" name="imagem" accept=".jpg">
        <img src="https://a-static.mlcdn.com.br/450x450/kit-parafuso-madeira-philips-com-organizador-250-parafusos-para-mdf-moveis-10-16-30-35-40-mm-maleta-jomarca/zileiferragens/15977177172/bebf3dd0f423e56ed641582f48a6ad19.jpeg" alt="Imagem Atual" style="max-width: 200px; max-height: 200px;">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status">
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar Produto</button>
</form>
@endsection
