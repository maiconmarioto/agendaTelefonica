@extends('layout')

@section('content')
    <div class="col-md-6">
        <h3>
            Deseja realmente apagar este email? <br />
            <small>{{ $email->descricao }}: {{ $email->email }}</small>
        </h3>
        <form action="{{ route('email.destroy', ['id' => $email->id]) }}" method="post">
            <input type="hidden" name="_method" value="DELETE" />
            <button type="submit" class="btn btn-danger">Apagar</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-primary">Voltar</a>
        </form>
    </div>

    <div class="col-md-6">
        @include('partials.contato')
    </div>
@endsection