<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render("pages/home.html.twig");
    }

    /**
     * @Route("/curriculum", name="cv")
     */
    public function curriculum()
    {
        return $this->render("pages/cv.html.twig");
    }

    /**
     * @Route("/qualites", name="qualites")
     */
    public function qualites()
    {
        return $this->render("pages/qualites.html.twig");
    }
}
