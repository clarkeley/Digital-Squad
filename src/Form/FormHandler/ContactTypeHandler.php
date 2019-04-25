<?php


namespace App\Form\FormHandler;


use App\Services\SwiftMailer;
use Symfony\Component\Form\FormInterface;

class ContactTypeHandler
{
    /**
     * @var SwiftMailer
     */
    private $swiftMailer;

    public function __construct(SwiftMailer $swiftMailer)
    {
        $this->swiftMailer = $swiftMailer;
    }

    public function handle(FormInterface $form) : bool
    {
        if ($form->isSubmitted() && $form->isValid())
        {
            $this->swiftMailer->doContact($form);

            return true;
        }

        return false;
    }

}