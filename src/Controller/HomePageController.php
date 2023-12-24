<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/",name="homepage")
     */
    public function homePage()
    {
        return $this->render("index.html.twig");
    }
}