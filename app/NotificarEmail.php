<?php

namespace App;

class NotificarEmail implements NotificacaoInterface
{
    public function notificar()
    {
        //Notificar contato por email 
        echo "Notificando por email...";
    }
}