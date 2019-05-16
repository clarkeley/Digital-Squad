<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReferenceController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/references", name="reference.index")
     */
    public function Index()
    {
        return $this->render('references/reference.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/references/Louvre", name="reference.louvre")
     */
    public function showReferenceOne()
    {
        return $this->render('references/Louvre.html.twig');
    }

}
