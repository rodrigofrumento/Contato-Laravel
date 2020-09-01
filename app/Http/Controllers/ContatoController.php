<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoEnviarRequest;
use App\Http\Controllers\Controller;
use App\Contato;
use App\NotificacaoInterface;

class ContatoController extends Controller
{
    //Exibição do Formulário
    public function index()
    {
        return view('welcome');
    }

    //Envia mensagem
    public function enviar(ContatoEnviarRequest $request, Contato $contato, NotificacaoInterface $notificar)
    {
        
        $contato->nome = $request->get('nome');
        $contato->email = $request->get('email');
        $contato->mensagem = $request->get('mensagem');
        $contato->categoria_id = $request->get('categoria_id');
        $contato->save();

        $notificar->notificar();

        echo "Sua mensagem foi enviada com sucesso! Código: " . $contato->id;
    }

    public function lista()
    {
        return view('lista', array('contatos'=>Contato::all()));
    }

}
