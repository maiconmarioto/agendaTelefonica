@extends('layout')

@section('content')
    <div class="col-md-7">
        <form action="{{ route('telefone.store', ['id' => $pessoa->id]) }}" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="descricao" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-8">
                    <input type="text" name="descricao" class="form-control" id="descricao" value="{{ old('descricao') }}" placeholder="Descrição">
                </div>
            </div>
            <div class="form-group">
                <label for="codpais" class="col-sm-3 control-label">Código do País</label>
                <div class="col-sm-3">
                    <input type="text" name="codpais" class="form-control" id="codpais" maxlength="8" value="{{ old('codpais') }}" placeholder="Cód do País">
                </div>
            </div>
            <div class="form-group">
                <label for="ddd" class="col-sm-3 control-label">Telefone</label>
                <div class="col-sm-2">
                    <input type="text" name="ddd" class="form-control" id="ddd" maxlength="4" value="{{ old('ddd') }}" placeholder="DDD">
                </div>
                <div class="col-sm-3">
                    <input type="text" name="prefixo" class="form-control" id="prefixo" maxlength="4" value="{{ old('prefixo') }}" placeholder="Prefixo">
                </div>
                <div class="col-sm-3">
                    <input type="text" name="sufixo" class="form-control" id="sufixo" maxlength="5" value="{{ old('sufixo') }}" placeholder="Sufixo">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-5">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('partials.contato',['pessoa' => $pessoa])
    </div>
@endsection