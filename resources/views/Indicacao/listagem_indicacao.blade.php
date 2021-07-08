@extends('layout')

@section('cabecalho')
Listagem Candidatos
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

@auth
<a href="{{ route('adicionar') }}" class="btn btn-success mb-2">Adicionar</a>
@endauth

<table class="table table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Acao</th>
        </tr>
    </thead>
    <tbody>
        @foreach($indicacoes as $indicacao)
        <tr>
            <td>{{ $indicacao->nome }}</td>
            <td>{{ $indicacao->cpf }}</td>
            <td>{{ $indicacao->email }}</td>
            <td>
                @auth
                <a class="btn btn-sm btn-primary" href="editar_indicacao/{{$indicacao->id}}"><i class="fas fa-marker"></i></a>&nbsp;
               @endauth    &nbsp;        
               @auth
                <form method="post" action="/listar_indicacao/{{ $indicacao->id }}" 
                    onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($indicacao->nome) }}?')">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm">
                      <i class="far fa-trash-alt"></i>
                  </button>
                 </form>&nbsp;
                 @endauth

            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection