@extends('layout')

@section('content')
    <div class="col-md-7">
        <form action="{{ route('email.store', ['id' => $pessoa->id]) }}" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="descricao" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-8">
                    <input type="text" name="descricao" class="form-control" id="descricao" value="{{ old('descricao') }}" placeholder="Descrição">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">E-mail</label>
                <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="E-mail">
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
    </div>
@endsection