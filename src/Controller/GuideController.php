<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GuideController extends AbstractController
{
    /**
     * @Route("/guide",name="guide" )
     */
    public function guide()
    {
        return $this->render("guide.html.twig");
    }
}