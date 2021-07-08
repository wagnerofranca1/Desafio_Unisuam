@extends('layout')

@section('cabecalho')
    Alterar Candidato
@endsection

@section('conteudo')

 @include('erros', ['errors' => $errors])

<form method="post" action={{route('update',$indicacao['id'])}}>
    @csrf
    <div class="row">
      <div class="col-2">
         <label for="nome" class="">Nome</label>
         <input type="text" value="{{$indicacao['nome']}}" class="form-control" name="nome" id="nome" required>
      </div>
        <div class="col-2">
           <label for="cpf" class="">CPF</label>
           <input type="text" value="{{$indicacao['cpf']}}" class="form-control" name="cpf" id="cpf" required pattern="^(\d{3}\.\d{3}\.\d{3}-\d{2})|(\d{11})$"
           placeholder="888.888.888-88" title="Digite o cpf corretamente">
        </div>
        <div class="col-2">
           <label for="telefone" class="">Telefone</label>
           <input type="text" value="{{$indicacao['telefone']}}" class="form-control" name="telefone" id="telefone">
        </div>
        <div class="col-2">
           <label for="email" class="">e-mail</label>
           <input type="text" value="{{$indicacao['email']}}" class="form-control" name="email" id="email">
        </div>
        <div class="col-2">
            <label for="status_id" class="">Status</label>
            <select  id='status_id' name='status_id' value="{{$indicacao['status_id']}}" class="form-control">

              @foreach($status_indicacao as $v)
              
                   <option <?php if($v->id == $indicacao['status_id']) echo 'selected'; ?> value="{{ $v->id }}">{{ $v->descricao }}</option>

              @endforeach
            </select>  
         </div>   
         
    </div>
    <div class="row">
        <div class="col-2">
            <button class="btn btn-primary mt-2">Alterar</button>
        </div>  
   
    </div>
</form>
@endsection