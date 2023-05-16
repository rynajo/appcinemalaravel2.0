<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
use Illuminate\Support\Facades\Redirect; 


class filmeController extends Controller
{
    public function buscaCadastroFilme(){

        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request) {
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme'=> 'string|required',
            'dtlancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'file|required',
        ]);
        //  dd($dadosFilme); 

        $file = $dadosFilme['capafilme'];
        $path = $file -> store('capa', 'public'); 
        $dadosFilme['capafilme'] = $path; 

        Filme::create($dadosFilme); 

       return Redirect::route('cadastro-filme');

        

    }

    public function buscarFilme(){
        return view('gerenciadorFilme',['dadosfilme']);
    }   

  

    public function MostrarGerenciadorFilme(Request $request){
        //$dadosfuncionarios = Funcionario::all();

        //dd($dadosfuncionarios);

       $dadosfilme = Filme::query();
       $dadosfilme->when($request->nomefilme,function($query,$nomefilme ){
           $query->where('nomefilme','like','%'.$nomefilme.'%');
       }); 
       $dadosfilme = $dadosfilme->get();

        return view('gerenciadorFilme',['dadosfilme'=>$dadosfilme]);
        
    }

  
        
    public function MostrarRegistroFilme(Request $request){
        $dadosfilme = Filme::all(); 
        dd($dadosfilme);

        $dadosfilme = Filme::query(); 
        $dadosfilme->when($request->nomefilme,function($query,$nomefilme){
            $query->where('nomefilme','like','%'.$nomefilme.'%');
    });                 
    }

    public function ApagarFilme(Filme $registroFilme){



        $registroFilme->delete();

        return Redirect::route('gerenciar-filme');
    }

    public function AlterarBancoFilme(Filme $registroFilme, Request $request){
        $dadosfilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme'=> 'string|required',
            'dtlancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'file|required',
        ]);        
        
        $registroFilme->fill($dadosfilme); 
        $registroFilme->save();
        return Redirect::route('gerenciar-filme');    

        }

}