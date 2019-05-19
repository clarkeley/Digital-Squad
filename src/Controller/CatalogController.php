<?php

namespace App\Controller;

use App\Form\FormHandler\ContactTypeHandler;
use App\Form\FormHandler\QuoteTypeHandler;
use App\Form\QuoteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index(){
        return $this->render('catalog.html.twig');
    }
}
