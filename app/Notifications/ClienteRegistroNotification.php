<?php

namespace App\Notifications;

use App\Models\Clientes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Estados;
use App\Models\Departamentos;


class ClienteRegistroNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Clientes $obj)
    {
        $this->obj = $obj;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail'];
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            
            'depart' => $this->obj->RELDEPARTAMENTO->nom_dep,
            'id_estado' => $this->obj->RELESTADO->name,
            'id_admin'=> $this->obj->RELEMPLEADO->name,
            'icon'=> 'check',
            'title'=> 'Cliente',
            // 'message' =>'Asesor de Campo Registro Nuevo cliente',
            
        ];
    }
}
