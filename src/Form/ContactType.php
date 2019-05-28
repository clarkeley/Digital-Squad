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
            ->add('Nom', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => "Nom",
                    'class' => 'form-border'
                ]
            ])
            ->add('Societe', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => "Société",
                    'class' => 'form-border'
                ],
                'required' => false
            ])
            ->add('Objet', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => "Objet",
                    'class' => 'form-border'
                ]
            ])
            ->add('Telephone', NumberType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => "Téléphone",
                    'class' => 'form-border'
                ],
                'required' => false
            ])
            ->add('Email', EmailType::class, [
                'label' => false,
                'constraints' => [
                    new Email()
                ],
                'attr' => [
                    'placeholder' => "Email",
                    'class' => 'form-border'
                ]
            ])
            ->add('Message', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => "Ecrivez votre message...",
                    'class' => 'form-border'
                ]
            ])
            ->add('RGPD', CheckboxType::class, [
                'label' => "En soumettant ce formulaire, j'accèpte que les informations saisies soient utilisées dans le cadre de ma demande d'informations. ",
                'required' => true
            ]);
    }

}