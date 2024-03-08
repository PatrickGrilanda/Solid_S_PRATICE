<?php

declare(strict_types=1);

namespace App;

class Mail
{
    public function __construct(
        private string $to,
        private string $subject,
        private string $message
    ){}

    public function send(): void 
    {
        echo "Email enviado para {$this->to} com o assunto {$this->subject} e a mensagem {$this->message}";
    }
}
