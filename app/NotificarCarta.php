<?php

namespace App;

class NotificarCarta implements NotificacaoInterface
{
    public function notificar(){
        echo "Enviando Carta...";
    }
}