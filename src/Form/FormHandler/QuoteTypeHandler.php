<?php


namespace App\Form\FormHandler;


use Symfony\Component\Form\FormInterface;

class QuoteTypeHandler
{
    public function handle(FormInterface $form) : bool
    {
        if ($form->isSubmitted() && $form->isValid())
        {
            return true;
        }

        return false;
    }

}