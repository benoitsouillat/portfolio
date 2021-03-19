<?php

namespace App\Notification;

use Twig\Environment;
use App\Entity\Contact;
use Swift_Mailer;

class ContactNotification {


    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    public function notify(Contact $contact) {

        $message = (new \Swift_Message("Message depuis le portfolio : "))
                    ->setFrom($contact->getEmail())
                    ->setTo('benoit.souillat@gmail.com')
                    ->setReplyTo($contact->getEmail())
                    ->setBody($this->renderer->render('emails/contact.html.twig', [
                        'contact' => $contact
                    ]), 'text/html');
        $this->mailer->send($message);

        
    }

}

?>