@extends('layout')
@section('title') Pessoas @endsection
@section('content')
    @includeIf('nav')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $pessoa)
                    <tr>
                        <th scope="row">{{ $pessoa['codigo'] }}</th>
                        <td>{{ $pessoa['nome'] }}</td>
                        <td>{{ $pessoa['e-mail'] }}</td>
                        <td>{{ $pessoa['categoria'] }}</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editPessoa"><i
                                    class="far fa-edit"></i></button>
                            <a href="{{ url('/delete/' . $pessoa['codigo']) }}" id="delete" type="submit"
                                class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <nav class="d-flex justify-content-center">
            <ul class="pagination">
                @foreach ($links as $paginate)
                    <li class="page-item">
                        @if (str_contains($paginate['label'], 'Previous'))
                            <a class="page-link" href="{{ $paginate['url'] }}">Previous</a>
                        @elseif(str_contains( $paginate['label'],'Next'))
                            <a class="page-link" href="{{ $paginate['url'] }}">Next</a>
                        @else
                            <a class="page-link" href="{{ $paginate['url'] }}">{{ $paginate['label'] }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
@endsection
@section('selectEditPessoa')
<select name="categoria" class="form-control">
    <option value="1">Admin</option>
    <option value="2">Gerente</option>
    <option value="3">Normal</option>
</select>
@endsection
@section('script')
    <script>
        const action=$('#editPessoa form').attr('action');
        $('tr button').click(function() {
            let data = []
            let values = $(this).closest('tr').children()
            values.each(function(elem) {
                if (elem < 4) {
                    data.push($(this).text());
                }

            });
            $('#editPessoa form input[name="nome"]').val(data[1])
            $('#editPessoa form input[name="email"]').val(data[2])
            $('#editPessoa form select[name="categoria"]').val(data[3])
            $('#editPessoa form').attr('action',action+'/'+data[0]);

        });
    </script>

@endsection
