<p><a href="{{ route('telefone.create', ['id' => $pessoa->id]) }}" class="label label-primary">Novo Telefone</a>
    <a href="{{ route('email.create', ['id' => $pessoa->id]) }}" class="label label-primary">Novo Email</a></p>
@if(count($telefones))
    Telefone
@endif
<table class="table table-hover">
    @foreach($telefones as $telefone)
        <tr>
            <td>{{ $telefone->descrição }}</td>
            <td>{{ $telefone->numero }}</td>
            <td>
                <a href="{{ route('telefone.delete', ['id' => $telefone->id]) }}" class="text-danger pull-right" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
            </td>
        </tr>
    @endforeach
</table>