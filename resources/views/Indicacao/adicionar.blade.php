@extends('layout')

@section('cabecalho')
    Adicionar Candidato
@endsection

@section('conteudo')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post">
    @csrf
    <div class="row">
      <div class="col-2">
         <label for="nome" class="">Nome</label>
         <input type="text" class="form-control" name="nome" id="nome" required>
      </div>
        <div class="col-2">
           <label for="cpf" class="">CPF</label>
           <input type="text" class="form-control" name="cpf" id="cpf" required pattern="^(\d{3}\.\d{3}\.\d{3}-\d{2})|(\d{14})$"
           placeholder="888.888.888-88" maxlength="14"  title="Digite o cpf corretamente">
        </div>
        <div class="col-2">
           <label for="telefone" class="">Telefone</label>
           <input type="text" class="form-control" name="telefone" id="telefone">
        </div>
        <div class="col-2">
           <label for="email" class="">e-mail</label>
           <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="col-2">
            <label for="status_id" class="">Status</label>
            <select  id='status_id' name='status_id' class="form-control">

              @foreach($status_indicacao as $v)
                   <option value="{{ $v->id }}">{{ $v->descricao }}</option>

              @endforeach
            </select>  
         </div>   
         
    </div>
    <div class="row">
        <div class="col-2">
            <button class="btn btn-primary mt-2">Salvar</button>
        </div>  
        <div class="col-2">
            <button type='reset' class="btn btn-danger mt-2">Cancelar</button>
        </div>   
     
    </div>
</form>
@endsection