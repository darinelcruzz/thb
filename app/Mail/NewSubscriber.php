<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Subscriber;

class NewSubscriber extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriber;

    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function build()
    {
        $mail = $this->from($this->subscriber->email)
            ->subject('Nuevo registro: Seminario HG')
            ->markdown('emails.new_subscriber')
            ->attachFromStorage($this->subscriber->receipt, 'comprobante_pago');

        if ($this->subscriber->document) {
            $mail->attachFromStorage($this->subscriber->document, 'constancia_o_certificado');
        }

        return $mail;
    }
}