<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @Route("/index", name="index")
     */
    public function accueil(): Response
    {
        return $this->render('my/index.html.twig', [
            'onValue' => 'ON',
        ]);
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function curriculum(): Response
    {
        return $this->render('my/cv.html.twig');
    }

    /**
     * @Route("/aboutme", name="about")
     */
    public function about(): Response
    {
        return $this->render('my/about.html.twig');
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, ContactNotification $notification): Response
    {
        $contact = new Contact;
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $notification->notify($contact);

            $this->addFlash('success', "Votre message a bien été envoyé ! ");
            return $this->redirectToRoute('index');
        }

        return $this->render('my/contact.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
