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
    /*private $formHandler;
    private $formFactory;

    public function __construct(QuoteTypeHandler $handler, QuoteType $formFactory)
    {
        $this->formHandler = $handler;
        $this->formFactory = $formFactory;
    }

    public function __invoke(Request $request): Response
    {
        $form = $this->createForm(QuoteType::class);
        $form->handleRequest($request);

        if ($this->formHandler->handle($form)){
            return $this->redirectToRoute('catalog');
        }

        return $this->render('catalog.html.twig', array('form' => $form->createView()));
    }*/
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index(){
        return $this->render('catalog.html.twig');
    }
}
