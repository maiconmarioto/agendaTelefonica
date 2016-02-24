@if(count($emails))
    Email
@endif
<table class="table table-hover">
    @foreach($emails as $email)
        <tr>
            <td>{{ $email->descricao }}</td>
            <td>{{ $email->email }}</td>
            <td>
                <a href="{{ route('email.delete', ['id' => $email->id]) }}" class="text-danger pull-right" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
            </td>
        </tr>
    @endforeach
</table>