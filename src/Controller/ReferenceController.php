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

    /**
     * @Route("/references/Webyoga", name="reference.webyoga")
     */
      public function showReferenceTwo()
      {
          return $this->render('references/webyoga.html.twig');
      }


      /**
       * @Route("/references/Multilingua", name="reference.multilingua")
       */
        public function showReferenceThree()
        {
            return $this->render('references/multilingua.html.twig');
        }

}
