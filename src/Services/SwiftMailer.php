<?php


namespace App\Services;


use Symfony\Component\Form\FormInterface;
use Twig\Environment;

class SwiftMailer
{
    /** @var \Swift_Mailer [description] */
    private $mailer;

    /**
     * @var Environment
     */
    private $twig;


    public function __construct(\Swift_Mailer $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    public function doContact(FormInterface $form)
    {
        $builder = $form->getData();

        $message = (new \Swift_Message('ContactMail'))
            ->setSubject('Contact Form '.$builder['Nom'].$builder['Prenom'].$builder['Societe'].$builder['Telephone'])
            ->setFrom($builder['Email'])
            ->setTo('aemmanuel.project@gmail.com')
            ->setBody($builder['Message'])
        ;

        return $this->mailer->send($message);


    }

}