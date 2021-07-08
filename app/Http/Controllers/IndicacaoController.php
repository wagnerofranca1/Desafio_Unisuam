<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarIndicacao;
use App\Indicacao;
use App\Status_indicacao;
use Illuminate\Http\Request;



class IndicacaoController extends Controller
{

    public function index(Request $request) {
        
        $indicacoes = Indicacao::query()->orderBy('nome')->get();
       
        $mensagem = $request->session()->get('mensagem');
        
        return view('indicacao.listagem_indicacao', compact('indicacoes', 'mensagem'));
    }
    public function adicionar(){
        $status_indicacao = Status_indicacao::all(['id','descricao']) ->where('id', '=', 1); 
        return view('indicacao.adicionar',compact('status_indicacao'));
    }

    public function salvar(ValidarIndicacao $request){
        
        $indicacao = Indicacao::create($request->all());
        $request->session()
          ->flash(
            'mensagem',
            "Inidicacao de {$indicacao->nome} criada com sucesso!"
          );
          return redirect()->route('listar');
     
    }

    public function excluir(Request $request){
        Indicacao::destroy($request->id);
        $request->session()
          ->flash(
            'mensagem',
            "Inidicacao deletada com sucesso!"
          );
      return redirect()->route('listar');
    }

    public function edit($id){
      $indicacao = Indicacao::find($id);
      if($indicacao->status_id == 1){
        $cond = '<=';
        $v_stt = 2;
      }else{
        $cond = '>=';
        $v_stt = $indicacao->status_id;
      }
      $status_indicacao = Status_indicacao::all(['id','descricao']) ->where('id', "$cond", $v_stt); 
      return view('indicacao.editar', compact('indicacao','status_indicacao'));
    }
    
    public function update(ValidarIndicacao $request){
       // print_r($request->id);exit;
      $indicacao = Indicacao::find($request->id);
      $indicacao->nome = $request->nome;
      $indicacao->cpf = $request->cpf;
      $indicacao->telefone = $request->telefone;
      $indicacao->email = $request->email;
      $indicacao->status_id = $request->status_id;
      $indicacao->save();

      $request->session()
        ->flash(
          'mensagem',
          "Inidicacao de {$indicacao->nome} atualizada com sucesso!"
        );
        return redirect()->route('listar');
   
  }

}
