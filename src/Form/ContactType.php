<?php


namespace App\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Societe', TextType::class)
            ->add('Objet', ChoiceType::class, [
                'choices' => [
                    'Devis' => 01,
                    'Contact' => 02,
                    'Autre' => 03
                ]
            ])
            ->add('Telephone', NumberType::class)
            ->add('Email', EmailType::class, [
                'constraints' => [
                    new Email()
                ]
            ])
            ->add('Message', TextareaType::class)
            ->add('RGPD', CheckboxType::class, [
                'label' => "En soumettant ce formulaire, j'accèpte que mes données puissent être utilisées à des fins commerciales.",
                'required' => true
            ]);
    }

}