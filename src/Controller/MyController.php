<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @Route("/index", name="index")
     */
    public function accueil(): Response
    {
        return $this->render('my/index.html.twig');
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
    public function contact(): Response
    {
        return $this->render('my/contact.html.twig');
    }
}
