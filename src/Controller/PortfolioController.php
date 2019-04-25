<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function index()
    {
        return $this->render('portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
