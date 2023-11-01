@extends('cms.layouts.cms-default')

@section('content')
    <form>
        <div class="row">
            <!-- Primeira Coluna -->
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="tipoUsuario">Tipo de Usuário</label>
                    <select class="form-control" id="tipoUsuario">
                        <option value="0">--</option>
                        <option value="1">Root</option>
                        <option value="2">Administrador</option>
                        <option value="3">Assistente de Conteúdo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="statusUsuario">
                        <option value="0">Ativado</option>
                        <option value="1">Bloqueado</option>
                    </select>
                </div>
            </div>

            <!-- Segunda Coluna -->
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf">
                </div>
                <div class="form-group">
                    <label for="birth">Data de Nascimento</label>
                    <input type="date" class="form-control" id="birth">
                </div>
                <div class="form-group">
                    <label for="tel">Telefone</label>
                    <input type="tel" class="form-control" id="telefone">
                </div>
            </div>
        </div>

        <!-- Botão de Submissão -->
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
@endsection
