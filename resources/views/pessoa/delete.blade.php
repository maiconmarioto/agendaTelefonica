@extends('layout')
@section('content')
    <div class="col-md-6">
        <h3>Deseja realmente apagar este contato?</h3>
        <form action="{{ route('pessoa.destroy',['id' => $pessoa->id]) }}" method="post" >
            <input type="hidden" name="_method" value="DELETE"/>
            <button type="submit" class="btn btn-danger">Apagar</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-primary">Voltar</a>
            <p>
        </form>
    </div>
    <div class="col-md-6">
        @include('partials.contato')
    </div>
    </p>
@endsection


